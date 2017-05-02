@extends('layouts.master')
@section('content')

<div class="jumbotron  jumbotron-fluid text-center">
    <h1>Think Twice</h1>
    <p>Spend Your Money Wisely</p>
        <div class="input-group" style="margin-left: 35%; width: 35%">
            <input type="text" class="form-control" placeholder="Product Name" aria-describedby="basic-addon2">
            <div class="input-group-btn" style="">
                <button type="button" class=" btn btn-outline-danger">Search</button>
            </div>
        </div>
</div>

<div class="panel panel-default">
<div class="panel-heading text-center">
    <h3 class="panel-title">Popular Campaigns</h3>
</div>
    <div class="panel-body" style="background-color: #d6dbdc; margin: 1em; padding-top: 1em;padding-bottom: 1em;">
        <div class="col-md-12">
            <div class="row text-center">
                <div class="col-md-4 text-center">
                    <div class="well">
                        <a href="#" class="thumbnail">
                            <img src="{{asset('images/campaigns/3/3.jpg')}}" alt="global_warming" style="width: 100%; height: 20em;  !important;">
                        </a>
                        <div class="caption">
                            <h1><strong>Global Warming</strong></h1>
                            <p>How much damage will have been done before we act?</p>
                            <button class="btn btn-danger">Join our campaign</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="well">
                        <a href="#" class="thumbnail">
                            <img src="{{asset('images/campaigns/1/1.jpg')}}" alt="save_bee" style="width: 100%; height: 20em;  !important;">
                        </a>
                        <div class="caption">
                            <h1><strong>Save Bees</strong></h1>
                            <p>Bees are the batteries of orchards, gardens, guard them.</p>
                            <button class="btn btn-danger">Join our campaign</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="well">
                        <a href="#" class="thumbnail">
                            <img src="{{asset('images/campaigns/2/2.jpg')}}" alt="stop_pollution" style="width: 100%; height: 20em;  !important;">
                        </a>
                        <div class="caption">
                            <h1><strong>Stop Pollution</strong></h1>
                            <p>A Clean Air Is Fair.</p>
                            <button class="btn btn-danger">Join our campaign</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <br>
    <br>
<div class="panel-heading text-center">
    <h3 class="panel-title">Top Worst Companies</h3>
</div>
<div class="panel-body" style="background-color: #d6dbdc; margin: 1em; padding-top: 1em;padding-bottom: 1em;">

    <div class="col-md-12">
        <div class="row text-center">
            <div class="col-md-3 text-center">
                <div class="well">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('images/companies/monsato.jpg')}}" alt="monsato" style="width: 100%; height: 20em;  !important;">
                    </a>
                    <div class="caption">
                        <h1><strong>Monsato Herbicides</strong></h1>
                        <p>Details about the companie.</p>
                        <button class="btn btn-danger">More details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="well">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('images/companies/peabody.jpg')}}" alt="peabody" style="width: 100%; height: 20em;  !important;">
                    </a>
                    <div class="caption">
                        <h1><strong>Stop Pollution</strong></h1>
                        <p>A Clean Air Is Fair.</p>
                        <button class="btn btn-danger">Join our campaign</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="well">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('images/companies/loreal.jpg')}}" alt="loreal" style="width: 100%; height: 20em;  !important;">
                    </a>
                    <div class="caption">
                        <h1><strong>L'Oréal Animal Testing</strong></h1>
                        <p>Details about the companie.</p>
                        <button class="btn btn-danger">More details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="well">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('images/companies/ussteel.jpg')}}" alt="ussteel" style="width: 100%; height: 20em;  !important;">
                    </a>
                    <div class="caption">
                        <h1><strong>US Steel Pollution</strong></h1>
                        <p>Details about the companie.</p>
                        <button class="btn btn-danger">More details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection