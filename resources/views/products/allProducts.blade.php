@extends('layouts.master')
@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/products" role="button"><< Go Back</a>
            </div>

            @foreach($products as $value)
                <div class="col text-center"style="margin: 3px" >
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{asset('images/products/id/'.$value->id.'.jpg')}}" alt="{{$value->name}}"  width="140" height="140">
                        </a>
                        <div class="card-block">
                            <p class="card-text">
                                <strong>{{$value->name}}</strong>
                            </p>
                            <br>
                            <p>
                                <a class="btn btn-secondary" href="#" role="button">View details >></a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>