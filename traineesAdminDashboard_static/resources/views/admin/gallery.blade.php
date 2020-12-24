@extends('layouts.app')
@section('cssBootstrap')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
@section('title')
Dashboard
@endsection

@section('head')
{{-- <link rel="stylesheet" href="css/gallery.css"> --}}
<link rel="stylesheet" href="{{asset('css/gallery.css')}}">
@endsection
@section('main')
<h1>Coding Academy Gallery</h1><br>
<div class="container">
    <div id="carousel">
        <figure><img src="{{asset('img/1.png')}}" width="300" height="200"></figure>
        <figure><img src="{{asset('img/2.png')}}" width="300" height="200"></figure>
        <figure><img src="{{asset('img/3.png')}}" width="300" height="200"></figure>
        <figure><img src="{{asset('img/4.png')}}" width="300" height="200"></figure>
        <figure><img src="{{asset('img/5.png')}}" width="300" height="200"></figure>
        <figure><img src="{{asset('img/6.png')}}" width="300" height="200"></figure>
        <figure><img src="{{asset('img/7.png')}}" width="300" height="200"></figure>
        <figure><img src="{{asset('img/8.png')}}" width="300" height="200"></figure>
        <figure><img src="{{asset('img/9.png')}}" width="300" height="200"></figure>
    </div>
</div>
@endsection
