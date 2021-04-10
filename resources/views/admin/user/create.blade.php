@extends('adminlte::page')
@section('title', 'Create User')

@section('content_header')
    <h1> Create User</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.user.store']) !!}
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
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'insert Email']) !!}
                @error('name')
                <span class="text-danger text-small">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'insert password']) !!}
                @error('password')
                <span class="text-danger text-small">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                @foreach($roles as $rol)
                    <label>
                        {!! Form::checkbox('roles[]', $rol->id, null) !!}
                        {{ $rol->name }}
                    </label>
                @endforeach
                @error('tags')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>

            {!! Form::submit('Save', ['class'=>'btn btn-primary pull-right']) !!}
            {!! link_to_route('admin.user.index', $title = 'cancel', $parameters = [], $attributes = ['class'=>'btn btn-default pull-right']); !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#name').stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-',
            });
        });
    </script>
@stop
