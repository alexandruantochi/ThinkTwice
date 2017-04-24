@extends('layouts.master')
@section('content')

    <section id="search_jumbotron">

        <div class="container-fluid">

            <div class="jumbotron text-center" >

                <br>
                <br>

                <h1>Campaigns</h1>

                <br>
                <br>

                <form class="form-inline" method="get" action="/campaigns/search">
                    <div class="input-group">
                        <input type="text" class="form-control" size="70" aria-label="...">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type<span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">Campaign Name</a></li>
                                <li><a href="#">Campaign Description</a></li>
                                <li><a href="#">Supporting Company</a></li>
                                <li><a href="#">Opposing Company</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <div class="input-group-btn">
                            <button type="button" class=" btn btn-danger">Search</button>
                        </div>
                    </div><!-- /input-group -->
                </form>
            </div>

        </div>

        <div class="container-fluid">

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

        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container-fluid">

            <div class="container" align="center">

                <div class="row">

                    @foreach($default_campaigns as $key => $value)

                        <div class="col-sm-12 col-md-4">

                            <div class="well">

                                <a href="/campaign/{{ $key }}" class="thumbnail">
                                    <img src=" {{ asset('images/campaigns/' . $key . '/' . $key . '.jpg') }} " alt="{{ $key }}" style="width: 100%; height: 10em;  !important;" >
                                </a>

                                <div class = "caption">
                                    <h3>
                                        {{ $value }}
                                    </h3>
                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

            <!--
            <nav aria-label="Page navigation" align="center">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            -->

        </div>

        <br>
        <br>
        <br>
        <br>

    </section>
@endsection