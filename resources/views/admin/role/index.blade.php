@extends('adminlte::page')
@section('title', 'Roles')

@section('content_header')
    @can('admin.roles.create')
        <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.role.create') }}"> + Add New Role </a>
    @endcan
    <h1>List of Roles</h1>
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
                <th colspan="2"></th>
                </thead>
                <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td width="10px">
                            @can('admin.tags.edit')
                                <a class="btn btn-primary btn-sm text-white"
                                   href="{{ route('admin.role.edit', $role) }}"><i class="fa fa-pencil-alt"></i></a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.posts.delete')
                                <form action="{{ route('admin.role.destroy', $role) }}" method="POST">
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
                        {{ $roles->links('vendor.pagination.arrows') }}
                    </div>
                    <div class="col-4">
                        {{ $roles->links('vendor.pagination.pagenums') }}
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
