@extends('adminlte::page')
@section('title', 'Posts')

@section('content_header')
    @can('admin.posts.create')
            <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.post.create') }}"> + Add New Post</a>
    @endcan
    <h1>List of Posts</h1>
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
                <th>NAME</th>
                <th>STATUS</th>
                <th colspan="2"></th>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>
                            <img width="80px"
                                 src="{{ asset($post->image->url  ?? '' ) }}">
                        </td>
                        <td>{{ $post->getNameByLang('es') }}</td>
                        <td>
                            <span @if ($post->status === '2') class="badge badge-success"
                                  @else class="badge badge-danger" @endif>
                                @if ($post->status === '2')
                                    approve
                                @else
                                    not approve
                                @endif
                            </span>
                        </td>
                        <td width="10px">
                            @can('admin.posts.edit')
                                <a class="btn btn-primary btn-sm text-white"
                                   href="{{ route('admin.post.edit', $post) }}"><i class="fa fa-pencil-alt"></i></a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.posts.delete')
                                <form action="{{ route('admin.post.destroy', $post) }}" method="POST">
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
                        {{ $posts->links('vendor.pagination.arrows') }}
                    </div>
                    <div class="col-4">
                        {{ $posts->links('vendor.pagination.pagenums') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script> console.log('posts!') </script>
@stop
