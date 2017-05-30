@extends('layouts.master')
@section('content')
    <br>
    <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="">
                        <img src="{{asset('images/products/id/'.$product->id.'.jpg')}}" class="img-responsive" alt="{{$product->name}}" width="304" height="304">
                    </a>
                </div>
                <div class="col">
                    <br>
                    <p><strong>Name: </strong>{{$product->name}} </p>
                    <p><strong>Price: </strong>{{$product->price}}$</p>
                    <p><strong>Company: </strong>{{$company_name->c_name}}</p>
                    <p><strong>UPC:  </strong>{{$product->UPC}} </p>
                </div>
            </div>
        <br>

        <div class="row">
            <div class="col">
                <div class="list-group">
                    <p class="list-group-item active">
                        Product Ingredients
                    </p>
                    @foreach($substances as $value)
                        <p class="list-group-item">{{$value->name}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col">
                <a class="btn-lg btn-primary" href="/products/profile/{{$product->id-1}}" role="button"> Previous Product </a>
            </div>
            <div class="col">
                <a class="btn-lg btn-primary" href="/products/profile/{{$product->id+1}}" role="button"> Next Product>> </a>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col">
                <div class="list-group">
                    <p class="list-group-item active">
                        Product reviews
                    </p>
                    @foreach($productReviews as $value)
                        <p class="list-group-item">{{$value->review}}</p>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    </br>
    </br>
    </br>
    </br>

@endsection