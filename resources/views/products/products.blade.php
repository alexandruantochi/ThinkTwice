@extends('layouts.master')
@section('content')
    <br>
    <br>
    <br>
    <div class="col-xs-12">
        <div class="row">
            <div class="col-md-2" style="height:100vh">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        Product Categories
                    </a>
                    <a href="#" class="list-group-item">Food</a> </a>
                    <a href="#" class="list-group-item">Personal Care</a>
                    <a href="#" class="list-group-item">Electronics</a>
                    <a href="#" class="list-group-item">Entertainment</a>
                    <a href="#" class="list-group-item">Beauty</a>
                    <a href="#" class="list-group-item">Clothing</a>
                </div>
            </div>
            @foreach($products_assosiative_array as $key=>$value)
                <div class="col-md-3 text-center">
                    <div class="well">
                        <a href="#" class="thumbnail">
                            <img src="{{asset('images/products/'.$key.'/'.$key.'.jpg')}}" alt="{{$key}}" style="width: 100%; height: 20em;  !important;">
                        </a>
                        <div class="caption">
                            <h3>
                                {{$value.' Category'}}
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
