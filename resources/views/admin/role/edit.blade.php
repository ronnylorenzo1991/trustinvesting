@extends('adminlte::page')
@section('title', 'Edit Role')

@section('content_header')
    <h1>Edit Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.role.update', $role], 'method' => 'put']) !!}
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
                <div class="form-group">
                    @foreach ($permissions as $permission)
                        {{ $titles = [], $aux = explode('.', $permission), array_push($titles, $aux[1]) }}
                    @endforeach
                    @foreach ($titles as $title)
                        <div class="row">
                            <div class="col">
                                <h1>$title</h1>
                                @foreach ($permissions as $permission)
                                    {{ $aux1 = explode('.', $permission) }}
                                    @if ($aux1[1] === $title)
                                        <div class="form-check">
                                            <label>
                                                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {!! Form::submit('Save', ['class'=>'btn btn-primary pull-right']) !!}
            {!! link_to_route('admin.role.index', $title = 'cancel', $parameters = [], $attributes = ['class'=>'btn btn-default pull-right']); !!}
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
        $(document).ready(function () {
            $('#name').stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-',
            })
        })
    </script>
@stop
