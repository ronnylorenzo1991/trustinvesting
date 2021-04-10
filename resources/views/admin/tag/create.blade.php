@extends('adminlte::page')
@section('title', 'Create Tag')

@section('content_header')
    <h1> Create Tag</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tag.store']) !!}
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
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'insert tag slug', 'readonly']) !!}
                @error('slug')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Color</label>
                <div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="2">
                    <input type="text" id="colorpicker" name="color" class="form-control" data-original-title="" title="">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-square" id="colorpicker-addon"></i></span>
                    </div>
                </div>
                @error('color')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            {!! Form::submit('Save', ['class'=>'btn btn-primary pull-right']) !!}
            {!! link_to_route('admin.tag.index', $title = 'cancel', $parameters = [], $attributes = ['class'=>'btn btn-default pull-right']); !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.js')}}"></script>
    <script>
        $(document).ready( function() {
            $('#name').stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-',
            });
            $('#colorpicker').colorpicker();
            $('#colorpicker').on('colorpickerChange', function(event) {
                $('#colorpicker-addon').css('color', event.color.toString());
            });
        });

    </script>
@stop
