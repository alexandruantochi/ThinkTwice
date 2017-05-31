@extends('layouts.master')


@section('content')


    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-3">

                <img style="width: 100%" src="{{ asset('images/companies/' . $company->id . '/logo.png') }}"
                     alt="{{ asset('images/errors/notfound.jpg') }}"/>

            </div>
            <div class="col-9">
                <p>Rating: {{ $company->rating }}, rated by: {{$company->raters}}</p>
                <p>Faved: {{ $company->faved }}</p>
                <p>Contact: {{ $company->contact }}</p>
            </div>
        </div>

        <div class="row">
            <h1 class="display-3">

                {{$company->name}}

            </h1>
            <p>
                {{$company->description}}
            </p>
        </div>

        @if($isFaved==0)
            <div class="row">
                <a href="{{$company->id}}/fav">
                    <button type="submit" class="btn btn-default" style="margin-right: 5px">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Fav this company
                    </button>
                    </form>
                </a>


        @else
            <div class="row">
                <a href="{{$company->id}}/fav">
                    <button type="submit" class="btn btn-default" style="margin-right: 5px">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> UnFav this company
                    </button>
                </a>


        @endif

                <a href="../browse/{{$company->id}}" ><button class="btn btn-default">View Products</button></a>
            </div>

    </div>








    @include('layouts.addSpaces');

@endsection







