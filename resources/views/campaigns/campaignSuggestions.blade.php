@extends('layouts.master')
@section('content')

    <br>
    <br>

    <div class="panel-heading text-center">
        <h1 class="panel-title display-3">My Suggestions</h1>
    </div>

    <br>
    <br>

    <div class="container" align="center">
        @foreach(array_chunk($suggested_campaigns, 3) as $entitiesChunk)
            <div class="row" style="margin-top:3%">
                @foreach($entitiesChunk as $entity)
                    <div class="col-md-4">
                        <div class="card" style="width: 20em;">
                            <a href="/campaigns/{{$entity->id}}">

                                <img class="card-img-top" src="{{asset('images/campaigns/'.$entity->id.'/logo.jpg')}}"
                                     alt="{{asset('images/errors/error.jpg')}}" style="width:100%; height:13em">

                            </a>

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

    @include('layouts.addSpaces');

@endsection