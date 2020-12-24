<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>OCA Trainees</title>
    <link rel="stylesheet" href="css/trainees.css">
    <script src="js/cards.js"></script>
</head>
<body>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
