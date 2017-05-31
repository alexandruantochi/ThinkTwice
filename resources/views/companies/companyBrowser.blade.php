@extends('layouts.master')


@section('content')

    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>{{ $companies->links() }}</p>
            </div>
        </div>
        <div class="row">
            <div class="list-group col-2">
                <p>Order Companies by:</p>
                <a href="?type=highestRating" class="list-group-item-action">Highest Rating</a>
                <a href="?type=lowestRating" class="list-group-item-action">Lowest Rating</a>
                <a href="?type=mostFaved" class="list-group-item-action">Most Favorite</a>
                <a href="?type=leastFaved" class="list-group-item-action">Least Favorite</a>
                <a href="?type=newest" class="list-group-item-action">Newest</a>
                <a href="?type=oldest" class="list-group-item-action">Oldest</a>
                <a href="?type=nameAZ" class="list-group-item-action">Alphabetical Ascending</a>
                <a href="?type=nameZA" class="list-group-item-action">Alphabetical Descending</a>
                <a href="?type=supported" class="list-group-item-action">Most supported</a>
                <a href="?type=against" class="list-group-item-action">Most against</a>

                <a href="suggest" style="margin-top: 5%">
                    <button class="btn btn-default">     Suggest a company    </button>
                </a>
            </div>


            <br>
            <br>

            <div class="col-10">
                @foreach ($companies as $company)
                    <div class="row">
                        <div class="media" style="margin-bottom: 5px">
                            <div class="media-left" style="margin-right: 3em">
                                <a href="/companies/profile/{{$company->id}}">
                                    <img class="media-object"
                                         src="{{asset('images/companies/'.$company->id.'/logo.png')}}" alt="..."
                                         style="width:10em; height:10em">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="/companies/profile/{{$company->id}}"
                                   style="color:#000000;text-decoration:none;font-size:2em; text-decoration-color: #2F3133">{{$company->name}}</a>

                                <details style="...">
                                    <summary>Description</summary>

                                    <p class="card-text">{{$company->description}}</p>
                                </details>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>



        </div>
    </div>


    @include('layouts.addSpaces');



@endsection