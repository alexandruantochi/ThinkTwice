@extends('layouts.master')
@section('content')
    <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="list-group">
                        <p class="list-group-item active">
                            Product Categories
                        </p>

                        @foreach($categories as $value)
                            <strong><a href="/category/{{$value}}"  class="list-group-item list-group-item-action">{{$value}}</a></strong>
                        @endforeach

                        <strong><a href="/products/all"  class="list-group-item list-group-item-action">all products</a></strong>
                    </div>
                </div>
                <div class="col-10">
                    <h1>Aici vor fi afisate niste statistici</h1>
                </div>
          </div>
        </div>
@endsection
