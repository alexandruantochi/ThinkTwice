@extends('layouts.master')
@section('content')
    <br>
    <div class="container">
            <div class="row">
                <div class="col text-center">
                    <img src="{{asset('images/products/id/'.$product->id.'.jpg')}}" class="img-responsive" alt="{{$product->name}}" width="304" height="304">
                </div>
                <div class="col">
                    <br>
                    <p><strong>Name: </strong>{{$product->name}} </p>
                    <p><strong>Price: </strong>{{$product->price}}$</p>
                    <p><strong>Company: </strong>{{$product->company_id}}</p>
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
                <a class="btn-lg btn-primary" href="products/profile/{{$product->id-1}}" role="button"> Previus Product </a>
            </div>
            <div class="col">
                <a class="btn-lg btn-primary" href="products/profile/{{$product->id+1}}" role="button"> Next Product>> </a>
            </div>
        </div>

        <br>
        <div class="row text-center">
            <div class="col">
                <p>Product Reviews Comming Soon</p>
            </div>
        </div>
    </div>

@endsection