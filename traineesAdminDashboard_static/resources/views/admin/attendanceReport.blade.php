
@extends('layouts.app')
@section('cssBootstrap')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
@section('title')
attendance Report
@endsection
@section('head')
<style>
    body {
    background : url("https://images.unsplash.com/photo-1579546929662-711aa81148cf?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8Y29sb3JmdWwlMjB3YWxscGFwZXJ8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80");
    background-repeat: no-repeat ;
    background-size: cover ;


}
</style>
@endsection


@section('main')
<div class="container">

    <div class="page-content p-5 page-container" id="page-content">
        <div class="padding p-5">
            <div class="row pt-5 d-flex justify-content-center  ">
                {{-- container d-flex justify-content-center --}}
                <div class="col-lg-12">
                    <!-- Draggable default card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">Attendence Report</h5>
                        </div>

 <table class="table">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">Day 1 Check_in</th>
        <th scope="col">Day 1 Check_out</th>
        <th scope="col">Day 1 hours</th>
        <th scope="col">Day 2 Check_in</th>
        <th scope="col">Day 2 Check_out</th>
        <th scope="col">Day 2 hours</th>
      </tr>
    </thead>
    <tbody>

      @foreach($trainees as $key => $value)
 <tr>
 <td>{{$value['name']}}</td>




 @foreach ($value['attendance'] as $key1 => $value1)
 <td>{{$value1['check_in']}}</td>
 <td>{{$value1['check_ out']}}</td>




 @if($value1['check_ out'] - $value1['check_in'] >= 8)

    <td style='background-color:rgb(118, 240, 128)'> {{$value1['check_ out'] - $value1['check_in']}} </td>

 @else
    <td style='background-color:rgb(240, 118, 134)'> {{$value1['check_ out'] - $value1['check_in']}} </td>

 @endif



 @endforeach
 </tr>



 @endforeach

    </tbody>
  </table>
 </div>
 </div>
                    </div>
                </div>
            </div>
        </div>

@endsection










