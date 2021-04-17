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
                        {!! Form::label('label-image', 'Imagen que se mostrara en el post') !!}
                        <input type="file" name="image" id="file" class="form-control-file">
                    </div>
                    <p> Esta imagen debe conetner las siguientes caracteristicas</p>
                    @error('image')
                    <span class="text-danger">
                                {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-edit"></i>
                        Create new post
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="content-es" data-toggle="pill" href="#content-es-tab"
                               role="tab" aria-controls="content-es-tab" aria-selected="true">Spanish</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="content-en" data-toggle="pill" href="#content-en-tab" role="tab"
                               aria-controls="content-en-tab" aria-selected="false">English</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="content-ch" data-toggle="pill" href="#content-ch-tab" role="tab"
                               aria-controls="content-ch-tab" aria-selected="false">Chinese</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                        <div class="tab-pane fade show active" id="content-es-tab" role="tabpanel"
                             aria-labelledby="content-es-tab">
                            <div class="form-group px-4 pt-4">
                                {!! Form::label('name_es', 'Nombre') !!}
                                {!! Form::text('name_es', null, ['class' => 'form-control', 'placeholder' => 'insert name']) !!}
                                @error('name_es')
                                <span class="text-danger">
                                {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group px-4 pt-4">
                                {!! Form::label('extract_es', 'Extract') !!}
                                {!! Form::textarea('extract_es', null, ['class' => 'form-control', 'placeholder' => 'inserte extracto']) !!}
                                @error('extract_es')
                                <span class="text-danger">
                                {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group px-4 pt-4">
                                {!! Form::label('body_es', 'Cuerpo del Artículo') !!}
                                {!! Form::textarea('body_es', null, ['class' => 'form-control', 'placeholder' => 'inserte cuerpo del artículo']) !!}
                                @error('body_es')
                                <span class="text-danger">
                                 {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="tab-pane fade" id="content-en-tab" role="tabpanel" aria-labelledby="content-en-tab">
                            <div class="form-group px-4 pt-4">
                                {!! Form::label('name_en', 'Name') !!}
                                {!! Form::text('name_en', null, ['class' => 'form-control', 'placeholder' => 'insert name']) !!}
                            </div>
                            <div class="form-group px-4 pt-4">
                                {!! Form::label('extract_en', 'Resumen') !!}
                                {!! Form::textarea('extract_en', null, ['class' => 'form-control', 'placeholder' => 'insert extract']) !!}
                            </div>
                            <div class="form-group px-4 pt-4">
                                {!! Form::label('body_en', 'Body') !!}
                                {!! Form::textarea('body_en', null, ['class' => 'form-control', 'placeholder' => 'insert body']) !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="content-ch-tab" role="tabpanel" aria-labelledby="content-ch-tab">
                            <div class="form-group px-4 pt-4">
                                {!! Form::label('name_ch', '姓名') !!}
                                {!! Form::text('name_ch', null, ['class' => 'form-control', 'placeholder' => 'insert name']) !!}
                            </div>
                            <div class="form-group px-4 pt-4">
                                {!! Form::label('extract_ch', '插入提取物') !!}
                                {!! Form::textarea('extract_ch', null, ['class' => 'form-control', 'placeholder' => '插入摘錄']) !!}
                            </div>
                            <div class="form-group px-4 pt-4">
                                {!! Form::label('body_ch', '身體') !!}
                                {!! Form::textarea('body_ch', null, ['class' => 'form-control', 'placeholder' => '插入主體']) !!}
                            </div>
                        </div>
                        <div class="tab-custom-content px-4 pt-4">
                            {!! Form::label('slug', 'Slug') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Post slug', 'readonly']) !!}
                            @error('slug')
                            <span class="text-danger">
                             {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group px-4 pt-4">
                        {!! Form::label('label-categories', 'Categories') !!}
                        {!! Form::select('category_id', $categories, 'name', ['placeholder' => 'Pick a category...', 'class' => 'form-control']); !!}
                        @error('category_id')
                        <span class="text-danger">
                     {{ $message }}
                 </span>
                        @enderror
                    </div>
                    <div class="form-group px-4 pt-4">
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
                    <div class="form-group px-4 pt-4">
                        <p class="font-weight-bold"> Status</p>
                        <label>
                            {!! Form::radio('status', 2) !!}
                            Approved
                        </label>
                        <label>
                            {!! Form::radio('status', 1, true) !!}
                            Eraser
                        </label>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group px-4 pt-4 float-right">
                        {{ Form::hidden('user_id', Auth::user()->id) }}
                        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                        {!! link_to_route('admin.post.index', $title = 'cancel', $parameters = [], $attributes = ['class'=>'btn btn-default pull-right']); !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        @stop

        @section('css')
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
                    $('#name_es').stringToSlug({
                        setEvents: 'keyup keydown blur',
                        getPut: '#slug',
                        space: '-',
                    })
                })

                ClassicEditor
                    .create(document.querySelector('#extract_es'))
                    .catch(error => {
                        console.error(error);
                    });
                ClassicEditor
                    .create(document.querySelector('#extract_en'))
                    .catch(error => {
                        console.error(error);
                    });
                ClassicEditor
                    .create(document.querySelector('#extract_ch'))
                    .catch(error => {
                        console.error(error);
                    });
                ClassicEditor
                    .create(document.querySelector('#body_es'))
                    .catch(error => {
                        console.error(error);
                    });
                ClassicEditor
                    .create(document.querySelector('#body_en'))
                    .catch(error => {
                        console.error(error);
                    });
                ClassicEditor
                    .create(document.querySelector('#body_ch'))
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
