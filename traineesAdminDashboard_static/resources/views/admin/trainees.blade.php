@extends('layouts.app')
@section('cssBootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
@endsection
@section('title')
OCA Trainees
@endsection

@section('head')
{{-- <link rel="stylesheet" href="css/trainees.css"> --}}
<link rel="stylesheet" href="{{asset('css/trainees.css')}}">
@endsection
@section('main')
<div class="container">
    {{-- <h1> OCA Trainees </h1> --}}


    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row d-flex justify-content-center  ">
                {{-- container d-flex justify-content-center --}}
                <div class="col-lg-12">
                    <!-- Draggable default card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">OCA Trainees</h5>
                        </div>

                        <div class="card-block">
                            <div class="row" id="sortable">
                                @foreach($trainees as $key => $value)
                                <div class="col-lg-12 col-xl-3"  style="">
                                    <div class="card-sub"> <img class="card-img-top img-fluid" src="{{$value["image"]}}" alt="Card image cap">
                                        <div class="card-block">

                                            {{-- shatnawi way
                                                <a href="/singleTrainee?id={{$key}} "> <h4 class="card-title">{{$value["name"]}}</h4></a> --}}

                                            <a href="/singleTrainee/{{$key}} "> <h4 class="card-title">{{$value["name"]}}</h4></a>
                                            {{-- <p class="card-text">{{$value["linkedin"]}}</p> --}}
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div> <!-- Draggable default card start -->

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
