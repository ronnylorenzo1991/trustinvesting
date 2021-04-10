@extends('adminlte::page')
@section('title', 'Tags')

@section('content_header')
    <h1>Gallery</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    @can('admin.tags.create')
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.image.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <input type="file" name="image" class="form-control-file">
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endcan
    <div class="container">
        <div class="row">
            @foreach ($images as $image)
                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($image->url) }}" class="card-img-top" alt="">
                        <div class="card-footer">
                            <div class="float-right">
                                @can('admin.posts.delete')
                                    <form action="{{ route('admin.image.destroy', $image) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm text-white"><i
                                                class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row  justify-content-between">
            <div class="col-4">
                {{ $images->links('vendor.pagination.arrows') }}
            </div>
            <div class="col-4">
                {{ $images->links('vendor.pagination.pagenums') }}
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
