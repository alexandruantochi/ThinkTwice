@extends('layouts.master')
@section('content')
    <br>
        <div class="row">
            <div class="col" style="height:100vh; margin-left: 1em; ">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        Product Categories
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Food</a> </a>
                    <a href="#" class="list-group-item list-group-item-action">Personal Care</a>
                    <a href="#" class="list-group-item list-group-item-action">Electronics</a>
                    <a href="#" class="list-group-item list-group-item-action">Entertainment</a>
                    <a href="#" class="list-group-item list-group-item-action">Beauty</a>
                    <a href="#" class="list-group-item list-group-item-action">Clothing</a>
                </div>
            </div>

            @foreach($products_assosiative_array as $key=>$value)
                <div class="col text-center">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{asset('images/products/'.$key.'/'.$key.'.jpg')}}" alt="{{$key}}" style="width: 98%;">
                        </a>
                        <div class="card-block">
                            <h2 class="card-text">
                                {{$value.' Category'}}
                            </h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
