@extends('adminlte::page')
@section('title', 'Create Payment')

@section('content_header')
    <h1> Create Payment</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.payment.store', 'enctype' => 'multipart/form-data']) !!}
            <div class="row mb-3">
                <div class="col">
                    <div class="image-wrapper">
                        <img id="picture" src="{{ asset('images/img_empty.png') }}">
                    </div>
                </div>
                <div class="col">
                    <div>
                        {!! Form::label('label-image', 'Imagen que se mostrara en la sección payment') !!}
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
                        Add new daily payment
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group px-4 pt-4">
                        {!! Form::label('label-date', 'Date') !!}
                        {!! Form::text('date', null, ['class' => 'form-control datepicker', 'placeholder' => 'MM/DD/YYY']) !!}
                        @error('date')
                        <span class="text-danger">
                          {{ $message }}
                         </span>
                        @enderror
                    </div>
                    <div class="form-group px-4 pt-4">
                        {!! Form::label('label-date', 'Percent') !!}
                        {!! Form::text('qty', null, ['class' => 'form-control', 'placeholder' => 'Insert Percent']) !!}
                        @error('date')
                        <span class="text-danger">
                          {{ $message }}
                         </span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group px-4 pt-4 float-right">
                        {{ Form::hidden('user_id', Auth::user()->id) }}
                        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                        {!! link_to_route('admin.payment.index', $title = 'cancel', $parameters = [], $attributes = ['class'=>'btn btn-default pull-right']); !!}
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
            <script>
                document.getElementById("file").addEventListener('change', changeImg);

                function changeImg(event) {
                    var file = event.target.files[0];

                    var reader = new FileReader();
                    reader.onload = (event) => {
                        document.getElementById("picture").setAttribute('src', event.target.result);
                    };
                    reader.readAsDataURL(file);
                }

                $(".datepicker").datepicker({
                    format: "yyyy-mm-dd",
                    todayHighlight: true,
                    todayBtn: 'linked',
                    keyboardNavigation:true,
                    autoclose: true,
                });
            </script>
@stop
