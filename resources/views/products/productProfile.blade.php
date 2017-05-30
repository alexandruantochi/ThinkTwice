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
                    <p><strong>Average rating :  </strong>{{$averageRating->p_rate}} </p>
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
                <header><h3>What do you have to say about this product?</h3></header>
                <form action="{{route('post.products/profile/{id}')}}" method="post">
                    <div class="form-group">
                        <textarea class="form-control" name="new_post" id="new_post" rows="5"></textarea>
                    </div>
                    @if(Auth::check())
                        <button type="submit" class="btn btn-primary">Create Review</button>
                        <input type="hidden" value="{{Session::token() }}" name="_token">
                    @endif
                </form>
                @if(!Auth::check())
                    <p style="color:  red"><strong>In order to post a review you need to log in with your user account:</strong> <a href="/login"><button class="btn btn-primary">Log in</button></a></p>
                @endif
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
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col">
                                    <p>Review by <strong>{{$value->u_name}}</strong>, rating: {{$value->p_rate}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">

                                </div>
                                <div class="col-10">
                                    <p>
                                        {{$value->review}}
                                    </p>
                                </div>

                            </div>
                        </div>
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