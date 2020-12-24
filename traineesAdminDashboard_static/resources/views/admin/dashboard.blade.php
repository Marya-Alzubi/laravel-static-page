@extends('layouts.app')
@section('cssBootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
@endsection
@section('title')
Gallery
@endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
@section('main')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-xl-6">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20 text-center">Total number of Students</h6>
                    <h2 class="text-center">
                        {{-- <i class="fa fa-cart-plus f-left"></i> --}}
                        <span class="m-b-20">{{count($trainees)}}</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-6">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20 text-center">Total number of Projects</h6>
                    <h2 class="text-center">
                        {{-- <i class="fa fa-cart-plus f-left"></i> --}}
                        <span class="m-b-20">{{count($trainees["1"]["projects"])}}</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 ">
    <div class="col-6 "></div>
    <table class="table table-bordered col-8 ">
        <thead>
          <tr>
            <th scope="col" style='background-color:rgb(240, 118, 118);'>Trainees names</th>
          </tr>
        </thead>
        <tbody>

          @foreach($trainees as $key => $value)
  <tr>
    <td>{{$value['name']}}</td>
  </tr>
  @endforeach

        </tbody>
      </table>
      <div class="col-2 "></div>
    </div>
</div>
@endsection
