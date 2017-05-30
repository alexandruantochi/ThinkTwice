@extends('layouts.master')
@section('content')

    <br>
    <br>

    <div class="panel-heading text-center">
        <h1 class="panel-title display-3">{{$title}}</h1>

        <br>

        {{$sub_title}}
    </div>

    <br>
    <br>

    @foreach($campaigns as $campaign)
        <div class="container">
            <div class="row">

                <div class="media">
                    <div class="media-left" style="margin-right: 3em">
                        <a href="/campaigns/{{$campaign->id}}">
                            <img class="media-object" src="{{asset('images/campaigns/'.$campaign->id.'/logo.jpg')}}" alt="..." style="width:10em; height:10em">
                        </a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading display-4" style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden">{{$campaign->name}}</h3>

                        @if($type_of_count != "")

                            <h4 class="media-heading" style="color:green">{{ $type_of_count . $campaign->count}}</h4>

                        @endif

                        <details style="...">
                            <summary>Description</summary>

                            <p class="card-text">{{$campaign->description}}</p>
                        </details>
                    </div>
                </div>

            </div>
        </div>

        <br>
    @endforeach

    {{$campaigns->links()}}

    @include('layouts.addSpaces');

@endsection