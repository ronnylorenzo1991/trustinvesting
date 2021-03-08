@extends('adminlte::page')
@section('title', 'Landings')

@section('content_header')
    @can('admin.landings.create')
        <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.landing.create') }}"> + Add New Landing </a>
    @endcan
    <h1>List of Landing</h1>
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
                <th>Description</th>
                <th colspan="2"></th>
                </thead>
                <tbody>
                @foreach ($landings as $landing)
                    <tr>
                        <td>{{ $landing->id }}</td>
                        <td>{{ $landing->name }}</td>
                        <td width="10px">
                            @can('admin.landings.edit')
                                <a class="btn btn-primary btn-sm text-white"
                                   href="{{ route('admin.landing.edit', $landing) }}"><i class="fa fa-pencil-alt"></i></a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.posts.delete')
                                <form action="{{ route('admin.landing.destroy', $landing) }}" method="POST">
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
                        {{ $landings->links('vendor.pagination.arrows') }}
                    </div>
                    <div class="col-4">
                        {{ $landings->links('vendor.pagination.pagenums') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
