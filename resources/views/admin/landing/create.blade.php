@extends('adminlte::page')
@section('title', 'Create Tag')

@section('content_header')
    <h1> Create Landing Page</h1>
@stop

@section('content')
    <livewire:admin.landing-create/>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
    @livewireScripts
@stop
