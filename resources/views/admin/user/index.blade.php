@extends('adminlte::page')
@section('title', 'Users')

@section('content_header')
    <h1>List of Users</h1>
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
                <th>NAME</th>
                <th>Email</th>
                <th colspan="2"></th>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td width="10px">
                            @can('admin.tags.edit')
                                <a class="btn btn-primary btn-sm text-white"
                                   href="{{ route('admin.user.edit', $user) }}"><i class="fa fa-pencil-alt"></i></a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.posts.delete')
                                <form action="{{ route('admin.user.destroy', $user) }}" method="POST">
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
                        {{ $users->links('vendor.pagination.arrows') }}
                    </div>
                    <div class="col-4">
                        {{ $users->links('vendor.pagination.pagenums') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Tags!') </script>
@stop
