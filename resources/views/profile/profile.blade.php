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
                    <img class="rounded" src="images/users/slide1.jpg" alt="image_placeholder" style="width: 100%;">
                </a>

                <dl class="row"style="padding-top: 1em;">
                    <dt class="col-sm-3">Name:</dt>
                    <dd class="col-sm-9 "><p class="text-right">{{$name}}</p></dd>

                    <dt class="col-sm-3">Birth date:</dt>
                    <dd class="col-sm-9"><p class="text-right">{{$age}}</p></dd>

                    <dt class="col-sm-3">Gender:</dt>
                    <dd class="col-sm-9"><p class="text-right">{{$gender}}</p></dd>

                    <dt class="col-sm-3">Location:</dt>
                    <dd class="col-sm-9"><p class="text-right">{{$location}}</p></dd>

                    <dt class="col-sm-3">Occupation:</dt>
                    <dd class="col-sm-9"><p class="text-right">{{$occupation}}</p></dd>

                </dl>
            </div>
        </div>


        <div class="col-md-7"style="padding-top: 1em;">

<div>
    <h4><ins>User activity</ins></h4>
</div>
            @foreach($entities as $entity)
                <div class="container">
                    <div class="row">

                        <div class="media">
                            <div class="media-left" style="margin-right: 3em">

                                @if($entity_type == "campaigns")
                                    <a href="/campaigns/{{$entity->id}}">
                                        <img class="media-object" src="{{asset('images/campaigns/'.$entity->id.'/logo.jpg')}}" alt="..." style="width:10em; height:10em">
                                    </a>
                                @elseif($entity_type == "companies")
                                    <a href="/companies/profile/{{$entity->id}}">
                                        <img class="media-object" src="{{asset('images/companies/'.$entity->id.'/logo.png')}}" alt="..." style="width:10em; height:10em">
                                    </a>
                                @elseif($entity_type == "pending")
                                    <img class="media-object" src="{{asset('images/campaigns/pending'.$entity->id.'/logo.jpg')}}" alt="..." style="width:10em; height:10em">
                                @endif

                            </div>
                            <div class="media-body">
                                <h3 class="media-heading display-4" style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden">{{$entity->name}}</h3>

                                @if($type_of_count != "")

                                    <h4 class="media-heading" style="color:green">{{ $type_of_count . $entity->count}}</h4>

                                @endif

                                <details style="...">
                                    <summary>Description</summary>

                                    <p class="card-text">{{$entity->description}}</p>
                                </details>
                            </div>
                        </div>

                    </div>
                </div>

                <br>
            @endforeach

            {{$entities->links()}}

            <br>
            <br>




        </div>


        <div class="col-sm-2"style="padding-top: 1em;background-color: #d4d4d4  ">
            <div >
                <a href="/home"><button type="button" class="btn btn-primary btn-danger btn-block">Home page</button></a>
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