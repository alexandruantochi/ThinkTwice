@extends('layouts.master')
@section('content')


        {{--<nav class="navbar navbar-inverse visible-xs">--}}
            {{--<div class="container-fluid">--}}
                {{--<div class="navbar-header">--}}
                    {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}
                    {{--<a class="navbar-brand" href="#">--}}
                        {{--<img class="img-responsive img-rounded" src="images/users/slide1.jpg" class="img-rounded" alt="Cinque Terre" width="75" height="50">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="collapse navbar-collapse" id="myNavbar">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" style="background-color: #d4d4d4;">
            <div class="well"style="padding-top: 1em;">
                <a class="thumbnail " >
                    <img class="rounded" src="images/users/slide1.jpg" alt="Cinque Terre" style="width: 100%;">
                </a>

                <dl class="row"style="padding-top: 1em;">
                    <dt class="col-sm-3">Name:</dt>
                    <dd class="col-sm-9 "><p class="text-right">Mc Gonagal</p></dd>

                    <dt class="col-sm-3">Surname:</dt>
                    <dd class="col-sm-9"><p class="text-right">Jordan</p></dd>

                    <dt class="col-sm-3">Age:</dt>
                    <dd class="col-sm-9"><p class="text-right">36{{--will be calculated by date of birth--}}</p></dd>

                    <dt class="col-sm-3">Gender:</dt>
                    <dd class="col-sm-9"><p class="text-right">Male</p></dd>

                    <dt class="col-sm-3">Location:</dt>
                    <dd class="col-sm-9"><p class="text-right">Egypt</p></dd>

                    <dt class="col-sm-3">Occupation:</dt>
                    <dd class="col-sm-9"><p class="text-right">Mechanic</p></dd>

                    <dt class="col-sm-3">Religion:</dt>
                    <dd class="col-sm-9"><p class="text-right">Catholic</p></dd>
                </dl>
            </div>
        </div>


        <div class="col-md-7"style="padding-top: 1em;">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="images/campaigns/3/3.jpg" alt="First campaign" style="width: 100%; height: 20em;  !important;">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Global warming</h3>
                            <p>The climate changes is one of the result of global warming.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="images/campaigns/1/1.jpg" alt="Second campaign" style="width: 100%; height: 20em;  !important;">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Save bees</h3>
                            <p>With the dissapearance of the bees, polination is impossible.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="images/campaigns/2/2.jpg" alt="Third campaign" style="width: 100%; height: 20em;  !important;">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Stop pollution</h3>
                            <p>Pollution is one of the elements that destroy the environment.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="card text-center">
                <div class="card-header">
                    User activity
                </div>
                <div class="card-block">
                    <p class="card-text">
                    <h2>Resigned from <a href="#" class="alert-link">Stop animal testing</a>.</h2>
                    <h2>Rated 5 stars the product <a href="#" class="alert-link">Flimsy Umbrella</a>.</h2>
                    <h2>Participated in <a href="#" class="alert-link">Global warming</a>.</h2>
                    <h2>Participated in <a href="#" class="alert-link">Stop animal testing</a>.</h2>
                    <h2>Participated in <a href="#" class="alert-link">Stop pollution</a>.</h2>
                    <h2>Participated in <a href="#" class="alert-link">Save the bees</a>.</h2>
                    <h2>Joined <a href="#" class="alert-link">Think Twice</a> on 25/04/2017.</h2>
                    </p>
                </div>
            </div>

        </div>


        <div class="col-sm-2"style="padding-top: 1em;background-color: #d4d4d4  "">
            <div >
                <a href="/home"><button type="button" class="btn btn-primary btn-danger btn-block">Log out</button></a>
                <a href="/profile/edit"><button type="button" class="btn btn-primary btn-block" >Edit contact</button></a>
                <br>
            </div>
            <div class="panel panel-info" style="background-color: #d7ebf6">
                <div class="panel-heading">
                    <h3 class="panel-title"><center>Recommendation</center></h3>
                </div>
                <div class="list-unstyled">
                    <li><a href="#">Stop water poisoning</a></li>
                    <li><a href="#">Stop toxic waste disposal</a></li>
                    <li><a href="#">Aid to bio-products</a></li>
                </div>
            </div>
            <div class="well">
                    <p>
                        <img src="images/users/ads.jpg" alt="ads" style="width: 100%; height: 15em;  !important;">
                        <img src="images/users/ads.jpg" alt="ads" style="width: 100%; height: 15em;  !important;">
                        <img src="images/users/ads.jpg" alt="ads" style="width: 100%; height: 15em;  !important;">
                    </p>
            </div>

        </div>
    </div>
</div>

@endsection