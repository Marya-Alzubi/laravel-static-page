@extends('layouts.app')
@section('cssBootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
@endsection
@section('title')
{{$trainees[$id]['name']}}
@endsection

@section('head')
   {{-- href="css/single.css" --}}
<link rel="stylesheet" href="{{asset('css/single.css')}}" >
@endsection
@section('main')
<body style="background-color:black;">
    <div class="row py-5 px-4">
      <div class="col-md-7 mx-auto">
          <!-- Profile widget -->
          <div class="bg-white shadow rounded overflow-hidden">
              <div class="px-4 pt-0 pb-4 cover text-center">
                  <div class="media align-items-end profile-head">
                      <div class="profile mr-3 text-center"><img src="{{$trainees[$id]['image']}}" width='200' height='200'></div>
                      <br>
                      <div class="media-body mb-5 text-dark">
                          <h4 class="mt-0 mb-0 text-center" style='color:white;' > {{$trainees[$id]['name']}}</h4>
                          <p class="small mb-4 text-center" style='color:white;'> <i class="fas fa-map-marker-alt mr-2"></i>{{$trainees[$id]['birthday']}}</p>

                      </div>
                      <button class="btn btn-dark">Edit Profile</button>
                  </div>
              </div>
              <div class="bg-light p-4 d-flex justify-content-end text-center">

                  <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                          <h5 class="font-weight-bold mb-0 d-block">{{ count($trainees[$id]['projects'])}}</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Projects</small>
                      </li>
                      <li class="list-inline-item">
                          <h5 class="font-weight-bold mb-0 d-block">{{ count($trainees[$id]['attendance'])}}</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Attended Days</small>
                      </li>
                      {{-- <li class="list-inline-item">
                          <h5 class="font-weight-bold mb-0 d-block">{{$trainees[$id]['age']}}</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Age</small>
                      </li> --}}
                  </ul>
              </div>
              <div class="px-4 py-3">
                  {{-- <h5 class="mb-0">Hobbies</h5> --}}
                  {{-- <div class="p-4 rounded shadow-sm bg-light">

                      <p class="font-italic mb-0">{{$trainees[$id]['hobbies'][0]}}</p>
                      <p class="font-italic mb-0">{{$trainees[$id]['hobbies'][1]}}</p>
                      <p class="font-italic mb-0">{{$trainees[$id]['hobbies'][2]}}</p>
                  </div> --}}
              </div>
              <div class="py-4 px-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                  </div>
                  <div class="row">
                      <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                      <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                      <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                      <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
