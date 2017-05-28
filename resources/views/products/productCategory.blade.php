@extends('layouts.master')
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/products" role="button"><< Go Back</a>
            </div>

                @foreach($product as $value)
                        <div class="col text-center"style="margin: 3px" >
                            <div class="card">
                                    <img class="card-img-top" src="{{asset('images/products/id/'.$value->id.'.jpg')}}" alt="{{$value->name}}"  width="230" height="200">
                                <div class="card-block">
                                    <p class="card-text">
                                        <strong>{{$value->name}}</strong>
                                    </p>
                                    <br>
                                    <p>
                                        <a class="btn btn-secondary" href="/products/profile/{{$value->id}}" role="button">View details >></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                @endforeach
        </div>

    </div>





@endsection
