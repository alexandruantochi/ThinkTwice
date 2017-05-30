@extends('layouts.master')
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/products" role="button"><< Go Back</a>
            </div>

                @foreach($product as $value)
                        <div class="col text-center"style="margin: 3px" >
                            <div class="card">
                                <a  href="/products/profile/{{$value->id}}">
                                    <img class="card-img-top" src="{{asset('images/products/id/'.$value->id.'.jpg')}}" alt="{{$value->name}}"  width="230" height="200">
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
        <br>
        <br>
    </div>





@endsection
