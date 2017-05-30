@extends('layouts.master')
@section('content')

    <div class="panel-heading text-center">
        <h1 class="panel-title display-3">{{$title}} {{$count->number}}</h1>
        <p><strong>{{$sub_title}}</strong></p>
    </div>
    @if($count->number>0)
        <div class="container" align="center">
            <div class="row">
                @foreach($results as $value)
                    <div class="col text-center"style="margin: 3px" >
                        <div class="card">
                            <a href="{{$route}}{{$value->id}}">
                                <img class="card-img-top" src="{{asset($image.$value->id.'.jpg')}}" alt="{{$image.$value->id.'.jpg'}}"  width="140" height="140">
                            </a>
                            <div class="card-block">
                                <p class="card-title" title="{{$value->name}}" style="white-space:nowrap; text-overflow:ellipsis; overflow: hidden">
                                    <strong>{{$value->name}}</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
        </div>
        @else
        <h1 class="text-center">We did not found any results :(</h1>
    @endif




@endsection