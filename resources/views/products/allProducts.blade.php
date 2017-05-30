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
                        <a  href="/products/profile/{{$value->id}}">
                            <img class="card-img-top" src="{{asset('images/products/'.$value->id.'/logo.jpg')}}" alt="{{$value->name}}"  width="140" height="140">
                        </a>
                        <div class="card-block">
                            <p class="card-title" title="{{$value->name}}" style="white-space:nowrap; text-overflow:ellipsis; overflow: hidden">
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
    </br>
    </br>
@endsection