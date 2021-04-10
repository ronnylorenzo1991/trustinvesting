@extends('adminlte::page')
@section('title', 'Tags')

@section('content_header')
    @can('admin.tags.create')
        <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.tag.create') }}"> + Add New Tag </a>
    @endcan
    <h1>List of Tags</h1>
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
                <th>COLOR</th>
                <th colspan="2"></th>
                </thead>
                <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td><span><i class="fa fa-square" style="color: {{ $tag->color }}"></i></span></td>
                        <td width="10px">
                            @can('admin.tags.edit')
                                <a class="btn btn-primary btn-sm text-white"
                                   href="{{ route('admin.tag.edit', $tag) }}"><i class="fa fa-pencil-alt"></i></a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.posts.delete')
                                <form action="{{ route('admin.tag.destroy', $tag) }}" method="POST">
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
                        {{ $tags->links('vendor.pagination.arrows') }}
                    </div>
                    <div class="col-4">
                        {{ $tags->links('vendor.pagination.pagenums') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script> console.log('Tags!') </script>
@stop
