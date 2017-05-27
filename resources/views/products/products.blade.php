@extends('layouts.master')
@section('content')
    <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Product Categories
                        </a>
                        @foreach($categories as $value)
                        <a href="#" class="list-group-item list-group-item-action">{{$value}}</a>
                        @endforeach
                    </div>
                </div>

            @foreach($products as $key=>$value)
                    <div class="col text-center"style="margin: 3px" >
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top" src="{{asset('images/products/id/'.$value.'.jpg')}}" alt="{{$value}}"  width="140" height="140">
                            </a>
                            <div class="card-block">
                                <p class="card-text">
                                    <strong>{{$key}}</strong>
                                </p>
                                <p>
                                    <a class="btn btn-secondary" href="#" role="button">View details >></a>
                                </p>
                            </div>
                        </div>
                    </div>
            @endforeach
          </div>
        </div>
@endsection
