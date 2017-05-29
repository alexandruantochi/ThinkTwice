@extends('layouts.master')
@section('content')

    <div class="jumbotron  jumbotron-fluid text-center">
        <h1>Campaigns</h1>
        <p>Trust in yourself and your beliefs</p>



            <form class="form-inline" method="get" action="/campaigns/filter">

                <div class="input-group" style="margin-left: 35%; width: 35%">
                <input name="name" type="text" class="form-control" aria-describedby="basic-addon2">
                <select name="option" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                    <option selected>Search Option</option>
                    <option value="byName">By Name</option>
                    <option value="byCategory">By Category</option>
                    <option value="byOrganizer">By Organizer</option>
                </select>


                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>


    </div>

    <br/>

    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h3 class="panel-title display-3">See The Tops</h3>
        </div>

        <div class="panel-body" style="background-color: #d6dbdc; margin: 4em; padding-top: 2em;padding-bottom: 2em;">
            <div class="col-md-12">
                <div class="row text-center">
                    <div class="col-md-4 text-center">
                        <div class="well">
                            <a href="/campaigns/popularity" class="thumbnail">
                                <img src="{{asset('images/campaigns/popularity.jpg')}}" alt="popularity" style="width: 100%; height: 20em;  !important;">
                            </a>
                            <div class="caption">
                                <h1><strong>Popularity</strong></h1>
                                <p>See the most popular campaigns.</p>
                                <a href="/campaigns/popularity">
                                    <button class="btn btn-outline-danger">Go</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="well">
                            <a href="/campaigns/trending" class="thumbnail">
                                <img src="{{asset('images/campaigns/trending.jpg')}}" alt="trending" style="width: 100%; height: 20em;  !important;">
                            </a>
                            <div class="caption">
                                <h1><strong>Trending</strong></h1>
                                <p>See which campaigns are trending lately.</p>
                                <a href="/campaigns/trending">
                                    <button class="btn btn-outline-danger">Go</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="well">
                            <a href="/campaigns/byDate" class="thumbnail">
                                <img src="{{asset('images/campaigns/calendar.jpg')}}" alt="calendar" style="width: 100%; height: 20em;  !important;">
                            </a>
                            <div class="caption">
                                <h1><strong>By Date</strong></h1>
                                <p>See the most recent additions.</p>
                                <a href="/campaigns/byDate">
                                    <button class="btn btn-outline-danger">Go</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-heading text-center">
            <h1 class="panel-title display-3">Campaigns you may like</h1>
        </div>

        <br/>

        <div class="container" align="center">
            @foreach($default_campaigns->chunk(3) as $entitiesChunk)
                <div class="row" style="margin-top:3%">
                    @foreach($entitiesChunk as $entity)
                        <div class="col-md-4">
                            <div class="card" style="width: 20em;">
                                <img class="card-img-top" src="{{asset('images/campaigns/'.$entity->id.'/logo.jpg')}}"
                                     alt="{{asset('images/errors/error.jpg')}}" style="width:100%; height:13em">
                                <div class="card-block">
                                    <p class="card-title" title="{{ $entity->name }}" style="color:red; white-space: nowrap; text-overflow: ellipsis; overflow: hidden">{{ $entity->name }}</p>
                                    <div class="card-block">
                                        <details style="...">
                                            <summary>Description</summary>

                                            <p class="card-text">{{$entity->description}}</p>
                                        </details>
                                    </div>

                                    <a href="/campaigns/{{$entity->id}}" class="btn btn-outline-danger">Go</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>

    </div>

@endsection