@extends('adminlte::page')
@section('title', 'Create Post')

@section('content_header')
    <h1> Edit Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($post, ['route' => ['admin.post.update', $post], 'enctype' => 'multipart/form-data', 'method' => 'put']) !!}
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
                {!! Form::select('category_id', $categories, $post->category->id , ['placeholder' => 'Pick a category...', 'class' => 'form-control']); !!}
                @error('category_id')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('label-tags', 'Tags') !!}
                <select multiple="multiple" name="tags[]" class="form-control" id="sports">
                    @foreach($tags as $tag)
                        {{ $checked = '' }}
                        @foreach($post->tags as $postag)
                            @if ($tag->id === $postag->id)
                                {{ $checked = 'selected' }}
                            @endif
                        @endforeach
                            <option value="{{ $tag->id }}" {{ $checked }}>{{ $tag->name }}</option>
                    @endforeach
                </select>
                @error('tags')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('extract', 'Extract') !!}
                {!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'insert extract']) !!}
                @error('extract')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Body') !!}
                {!! Form::text('body', null, ['class' => 'form-control', 'placeholder' => 'insert body']) !!}
                @error('body')
                <span class="text-danger">
                     {{ $message }}
                 </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control">
                @error('image')
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
