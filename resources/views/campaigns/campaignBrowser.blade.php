@extends('layouts.master')
@section('content')

    <section id="search_jumbotron">

        <article class="container-fluid">

            <div class="container" style="margin-top:10%;" align="center">
                <ul class="nav justify-content-center">
                    <li class="nav-item" style="display: inline-block">
                        <a class="nav-link active" href="/campaigns/popularity">Most Popular</a>
                    </li>
                    <li class="nav-item" style="display: inline-block">
                        <a class="nav-link" href="/campaigns/trending">Trending</a>
                    </li>
                    <li class="nav-item" style="display: inline-block">
                        <a class="nav-link" href="/campaigns/byDate">Newest</a>
                    </li>
                    <li class="nav-item" style="display: inline-block">
                        <a class="nav-link disabled" href="/campaigns/random">Random</a>
                    </li>
                </ul>
            </div>


            <div class="container" align="center">
                @foreach(array_chunk($entities,3,true) as $entitiesChunk)
                    <div class="row" style="margin-top:3%">
                        @foreach($entitiesChunk as $entity)
                            <div class="col-md-4">
                                <div class="card" style="width: 20rem;">
                                    <img class="card-img-top" src="{{asset('images/campaigns/'. $entity['id'].'/' . $entity['id'] .'.jpg')}}" style="width: 100%; height: 200px;  !important;">
                                    <div class="card-block">
                                        <h4 class="card-title" style="color:red;">{{ $entity['name'] }}</h4>
                                        <details style="color:white;">
                                            <summary>Description</summary>
                                            <p class="card-text">{{$entity['description']}}</p>
                                        </details>

                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                @endforeach


            </div>

        </article>

    </section>

@endsection