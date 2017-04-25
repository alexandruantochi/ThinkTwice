@extends('layouts.master')
@section('content')



    <section id="search_jumbotron">

        <article class="container-fluid">

            <div class="jumbotron text-center" >

                <br>
                <br>



                <h1>Campaigns</h1>

                <form action="campaigns.campaignCreate">

                    <button type="button" value="submit" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Campaign!
                    </button>

                </form>

                <br>
                <br>

                <form class="form-inline" method="get" action="/campaigns/search">
                    <div class="input-group">
                        <input type="text" class="form-control" size="70" aria-label="...">

                        <nav class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type<span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">Campaign Name</a></li>
                                <li><a href="#">Campaign Description</a></li>
                                <li><a href="#">Supporting Company</a></li>
                                <li><a href="#">Opposing Company</a></li>
                            </ul>
                        </nav>

                        <div class="input-group-btn">
                            <button type="button" class=" btn btn-danger">Search</button>
                        </div>
                    </div>
                </form>
            </div>

        </article>

        <main class="container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">

                                    <div class="col-sm-12 col-md-4">
                                        <a href="/campaigns/popularity" class="thumbnail">
                                            <img src=" {{ asset('images/campaigns/popularity.jpg') }}" alt="Popularity" style="width: 100%; height: 350px;  !important;" >
                                            <div class="carousel-caption">
                                                <h2>Popularity</h2>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-sm-12 col-md-4">
                                        <a href="/campaigns/trending" class="thumbnail">
                                            <img src=" {{ asset('images/campaigns/trending.jpg') }} " alt="Trending" style="width: 100%; height: 350px;  !important;" >
                                            <div class="carousel-caption">
                                                <h2>Trending</h2>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-sm-12 col-md-4">
                                        <a href="/campaigns/byDate" class="thumbnail">
                                            <img src=" {{ asset('images/campaigns/calendar.jpg') }} " alt="ByDate" style="width: 100%; height: 350px;  !important;" >
                                            <div class="carousel-caption">
                                                <h2>By Date</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <br>
        <br>
        <br>
        <br>

        <nav class="container-fluid">

            <div class="container" align="center" style="padding-bottom: 5em">

                <div class="row">

                    @foreach($default_campaigns as $campaign)

                        <div class="col-sm-12 col-md-4">
                            <div class="well">

                                <div class="card">
                                    <a href="/campaign/{{$campaign['id']}}">
                                        <img class="card-img-top" src="/images/campaigns/{{$campaign['id']}}/{{$campaign['id']}}.jpg" alt="Card image cap" style="width: 100%; height: 350px;  !important;">
                                        <div class="card-block">
                                            <h2 class="card-title">{{$campaign['name']}}</h2>
                                            <p class="card-text">{{$campaign['description']}}</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                    @endforeach

                </div>

            </div>



            <div align="center">
                <a href="/campaigns">

                    <button type="button" class="btn btn-success">
                        Give me other random results!
                    </button>

                </a>
            </div>

        </nav>

        <br>
        <br>
        <br>
        <br>

    </section>
@endsection