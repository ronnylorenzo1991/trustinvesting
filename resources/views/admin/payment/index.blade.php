@extends('adminlte::page')
@section('title', 'Payments')

@section('content_header')
    @can('admin.payment.create')
        <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.payment.create') }}"> + Add New Payment</a>
    @endcan
    <h1>List of Payments</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <th>ID</th>
                <th>IMAGE</th>
                <th>DATE</th>
                <th>PERCENT</th>
                <th colspan="2"></th>
                </thead>
                <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>
                            <img width="80px"
                                 src="{{ asset($payment->image->url ?? '' ) }}">
                        </td>
                        <td>{{ $payment->date }}</td>
                        <td>{{ $payment->qty }}</td>
                        <td width="10px">
                            @can('admin.payment.edit')
                                <a class="btn btn-primary btn-sm text-white"
                                   href="{{ route('admin.payment.edit', $payment) }}"><i
                                        class="fa fa-pencil-alt"></i></a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.payment.delete')
                                <form action="{{ route('admin.payment.destroy', $payment) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm text-white"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="container">
                <div class="row  justify-content-between">
                    <div class="col-4">
                        {{ $payments->links('vendor.pagination.arrows') }}
                    </div>
                    <div class="col-4">
                        {{ $payments->links('vendor.pagination.pagenums') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script> console.log('payments!') </script>
@stop
