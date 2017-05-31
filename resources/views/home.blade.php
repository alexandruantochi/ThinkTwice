@extends('layouts.master')


@section('content')

<div class="jumbotron  jumbotron-fluid text-center">
    <h1>Think Twice</h1>
    <p>Spend Your Money Wisely</p>

    <div class="container">
        <div class="row">
            <div class="col" style="margin-left: 33%">
                <form class="form-inline input-lg center-block" method="get" action="/search/filter">
                    <input class="form-control mr-sm-2" name="name" type="text" placeholder="Product Name">
                    <button type="submit" name="option"  value="p_name" class="btn btn-outline-danger my-2 my-sm-0" aria-haspopup="true" aria-expanded="false" >
                        Search
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>

<div class="panel panel-default">
<div class="panel-heading text-center">
    <h3 class="panel-title">Popular Campaigns</h3>
</div>
    <div class="panel-body" style="background-color: #d6dbdc; margin: 4em; padding-top: 2em;padding-bottom: 2em;">
        <div class="col-md-12">
            <div class="row text-center">
                @foreach($popular_campaigns as $value)
                <div class="col-md-4 text-center">
                    <div class="well">
                        <a href="/campaigns/{{$value->id}}" class="thumbnail">
                            <img src="{{asset('images/campaigns/'.$value->id.'/logo.jpg')}}" alt="{{$value->id}}" style="width: 100%; height: 20em;  !important;">
                        </a>
                        <div class="caption">
                            <h1 style="white-space:nowrap; text-overflow:ellipsis; overflow: hidden"><strong>{{$value->name}}</strong></h1>
                            <a href="/campaigns/{{$value->id}}"><button class="btn btn-danger" >See details</button></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
</div>

<div class="panel panel-default">
    <br>
    <br>
<div class="panel-heading text-center">
    <h3 class="panel-title">Top Newest Companies Added</h3>
</div>
<div class="panel-body" style="background-color: #d6dbdc; margin: 3em; padding-top: 2em;padding-bottom: 2em;">
    <div class="col-md-12">
        <div class="row text-center">
            @foreach($newest_companies as $value)
            <div class="col text-center">
                <div class="well">
                    <a href="/companies/{{$value->id}}" class="thumbnail">
                        <img src="{{asset('images/companies/'.$value->id.'/logo.png')}}" alt="{{$value->name}}" style="width: 100%; height: 20em;  !important;">
                    </a>
                    <div class="caption">
                        <h1 style="white-space:nowrap; text-overflow:ellipsis; overflow: hidden"><strong>{{$value->name}}</strong></h1>

                        <a href="/companies/profile/{{$value->id}}"><button class="btn btn-danger">More details</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</div>

@endsection