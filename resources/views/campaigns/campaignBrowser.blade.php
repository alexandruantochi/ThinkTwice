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

    @include('layouts.addSpaces');

@endsection