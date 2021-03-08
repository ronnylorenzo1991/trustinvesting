@extends('adminlte::page')
@section('title', 'Edit Tag')

@section('content_header')
    <h1>Edit Tag</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route' => ['admin.tag.update', $tag], 'method' => 'put']) !!}
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
                {!! Form::label('color', 'Color') !!}
                {!! Form::select('color', ['cyan' => 'Cyan', 'red' => 'Red', 'indigo' => 'Indigo', 'yellow' => 'Yellow', 'grey' => 'Grey'], null, ['placeholder' => 'Pick a color...', 'class' => 'form-control']); !!}
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
    <link rel="stylesheet" href="/css/admin_custom.css">
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
        });
    </script>
@stop
