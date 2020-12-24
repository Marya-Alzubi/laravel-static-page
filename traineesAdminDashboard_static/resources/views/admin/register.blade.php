{{-- @extends('layouts.app')
@section('cssBootstrap')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@endsection
@section('title')
Register
@endsection

@section('head')
<style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }

    body {
        background-color: #eee;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to top, #fff 10%, rgba(93, 42, 141, 0.4) 90%) no-repeat
    }

    .wrapper {
        max-width: 550px;
        border-radius: 10px;
        margin: 50px auto;
        padding: 20px;
        box-shadow: 20px 20px 80px rgb(206, 206, 206)
    }

    .h2 {
        font-family: 'Kaushan Script', cursive;
        font-size: 3.0rem;
        font-weight: bold;
        color: #7b2ee8;
        text-shadow: 0 0 2px #a069ee;
        font-style: italic
    }

    .h5 {
        color: #555;
        margin: 0
    }

    .form-control {
        border: 1.5px solid #7b2ee8
    }

    .form-control:focus {
        box-shadow: none
    }

    .mandatory::after {
        content: "*";
        color: #ff0000
    }

    .button-section .btn {
        background-color: #fff;
        border-radius: 20px;
        border: 1.5px solid #7b2ee8;
        padding: 5px 15px
    }

    .button-section .btn.btn-primary {
        background-color: #7b2ee8;
        color: #eee
    }

    .button-section .btn:hover {
        background-color: #7b2ee8;
        color: #eee
    }

    .remember {
        border: 1px solid #7b2ee8
    }

    .gender-l {
        margin: 0
    }

    #male {
        display: none
    }

    input[type="radio"] {
        visibility: hidden
    }

    input[type='radio']:checked {
        background-color: #7b2ee8
    }

    .btn.btn-primary {
        background-color: #fff;
        color: #555;
        border: 1px solid #7b2ee8;
        width: 115px
    }

    .btn.btn-primary:hover {
        background-color: #a069ee;
        color: #fff
    }

    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active {
        background-color: #7b2ee8
    }

    @media(max-width: 575px) {
        .btn-group {
            width: 100%
        }

        .btn-group>.btn {
            flex: 50%
        }

        .wrapper {
            margin: 10px
        }

        .h5 {
            padding-top: 10px
        }
    }
</style>
@endsection
@section('main')
<div class="wrapper bg-white">
    <div class="h2 text-center">Creativity</div>
    <div class="h2 text-center">Contest</div>
    <div class="h5 font-weight-bold">Registration</div>
    <div class="text-muted">Enter your registration details</div>
    <form action="/input_form" method="post">
        @csrf
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group"> <label class="text-muted mandatory">Name</label> <input type="text" required class="form-control" name="name" > </div>
            <div class="form-group"> <label class="text-muted mandatory">Email Address</label> <input type="email" name="email" required class="form-control"> </div>
        </div>
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group">
                <div> <label class="text-muted mandatory">Gender</label> </div>
                <div class="btn-group" data-toggle="buttons"> <label class="btn btn-primary form-check-label active"> <input class="form-check-input" type="radio" checked> Male </label> <label class="btn btn-primary form-check-label"> <input class="form-check-input" type="radio"> Female </label> </div>
            </div>
            <div class="form-group"> <label class="text-muted">Date of Birth</label> <input type="text" class="form-control"> </div>
        </div>
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group"> <label class="text-muted mandatory">Phone Number</label> <input type="tel" required class="form-control"> </div>
            <div class="form-group"> <label class="text-muted">City</label> <input type="text" class="form-control"> </div>
        </div>
        <div class="form-group"> <label class="text-muted mandatory">Password</label> <input type="password" required class="form-control"> </div>
        <div class="d-flex align-items-center justify-content-sm-end button-section"> <button class="btn btn-primary mx-4" type="submit">Submit</button> <button class="btn">Cancel</button> </div>
    </form>
</div>
@endsection --}}
