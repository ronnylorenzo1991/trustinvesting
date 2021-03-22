@extends('adminlte::page')
@section('title', 'Create Post')

@section('content_header')
    <h1> Create Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.post.store', 'enctype' => 'multipart/form-data']) !!}
            <div class="row mb-3">
                <div class="col">
                    <div class="image-wrapper">
                        <img id="picture" src="{{ asset('images/img_empty.png') }}">
                    </div>
                </div>
                <div class="col">
                    <div>
                        {!! Form::label('label-image', 'Imagen que se mostrara en el pos') !!}
                        <input type="file" name="image" id="file" class="form-control-file">
                    </div>
                    <p> Esta imagen debe conetner las siguientes caracteristicas</p>
                    @error('imagid="picture" e')
                    <span class="text-danger">
                                {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'insert name']) !!}
                @error('name')
                <span class="text-danger text-small">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'insert post slug', 'readonly']) !!}
                @error('slug')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('label-categories', 'Categories') !!}
                {!! Form::select('category_id', $categories, 'name', ['placeholder' => 'Pick a category...', 'class' => 'form-control']); !!}
                @error('category_id')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                @foreach($tags as $tag)
                    <label>
                        {!! Form::checkbox('tags[]', $tag->id, null) !!}
                        {{ $tag->name }}
                    </label>
                @endforeach
                @error('tags')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('extract', 'Extract') !!}
                {!! Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'insert extract']) !!}
                @error('extract')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Body') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'insert body']) !!}
                @error('body')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            {{ Form::hidden('user_id', Auth::user()->id) }}
            {!! Form::submit('Save', ['class'=>'btn btn-primary pull-right']) !!}
            {!! link_to_route('admin.post.index', $title = 'cancel', $parameters = [], $attributes = ['class'=>'btn btn-default pull-right']); !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 50%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $('#name').stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-',
            })
        })

        ClassicEditor
            .create(document.querySelector('#extract'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });
        document.getElementById("file").addEventListener('change', changeImg);

        function changeImg(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@stop
