@extends('adminlte::page')
@section('title', 'Edit Role')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($user, ['route' => ['admin.user.update', $user], 'method' => 'put']) !!}
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
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'insert email']) !!}
                @error('name')
                <span class="text-danger text-small">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                @foreach ($roles as $role)
                    <div class="form-check form-check-inline">
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach
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

@stop
