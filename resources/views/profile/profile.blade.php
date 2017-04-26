@extends('layouts.master')
@section('content')

<div class="container" style="margin-top:10%;">

        <nav class="navbar navbar-inverse visible-xs">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img class="img-responsive img-rounded" src="images/users/slide1.jpg" class="img-rounded" alt="Cinque Terre" width="75" height="50">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-3 sidenav hidden-xs">
                    <br>
                        <img class="img-responsive img-rounded" src="images/users/slide1.jpg" class="img-rounded" alt="Cinque Terre" width="345" height="246">
                    <br>

                    <ul class="nav nav-pills nav-stacked">


                        <li class="active"><a href="#section1"><center>User info</center></a></li>
                        <li><a href="#section2">Name:<span style="float:right;">Mc Gonagal</span></a></li>
                        <li><a href="#section3">Surname:<span style="float:right;">Jordan</span></a></li>
                        <li><a href="#section4">Age:<span style="float:right;">36</span></a></li>
                        <li><a href="#section5">Gender:<span style="float:right;">Male</span></a></li>
                        <li><a href="#section6">Location:<span style="float:right;">Egypt</span></a></li>
                        <li><a href="#section7">Occupation:<span style="float:right;">Mechanic</span></a></li>
                        <li><a href="#section8">Religion:<span style="float:right;">Catholic</span></a></li>


                    </ul><br>
                </div>
                <br>

                <div class="col-sm-9">
                    <div class="col-sm-8 text-left">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/campaigns/3/3.jpg" alt="Global Warming" style="width: 100%; height: 15em;  !important;">
                                    <div class="carousel-caption">
                                        <h3>Global warming</h3>
                                        <p>The climate changes is one of the result of global warming.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="images/campaigns/1/1.jpg" alt="bees" style="width: 100%; height: 15em;  !important;">
                                    <div class="carousel-caption">
                                        <h3>Save bees</h3>
                                        <p>With the dissapearance of th bees, polination is impossible.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="images/campaigns/2/2.jpg" alt="pollution" style="width: 100%; height: 15em;  !important;">
                                    <div class="carousel-caption">
                                        <h3>Stop pollution</h3>
                                        <p>Pollution is one of the elements that destroy the environment.</p>
                                    </div>
                                </div>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <br>
                        <br>
                    </div>

                    <div class="col-sm-4 sidenav">
                       <a href="/home"><button type="button" class="btn btn-primary btn-danger btn-block">Log out</button></a>
                        <a href="/profile/edit"><button type="button" class="btn btn-primary btn-block" >Edit contact</button></a>
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><center>Recommendation</center></h3>
                            </div>
                            <div class="panel-body">
                                <li><a href="#">Stop water poisoning</a></li>
                                <li><a href="#">Stop toxic waste disposal</a></li>
                                <li><a href="#">Aid to bio-products</a></li>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="well well-lg">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><center>User activity</center></div>
                                    <div class="panel-body">
                                        <p>
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
                        </div>
                        <div class="col-sm-4">
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
            </div>
        </div>



</div>

@endsection