@extends('layouts.master')
@section('content')

    <section id="search_jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="jumbotron text-center">
                    <h1>Think Twice</h1>
                    <p>Spend Your Money Wisely</p>
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" size="50" placeholder="Product Name" required>
                            <div class="input-group-btn">
                                <button type="button" class=" btn btn-danger">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center">
            <ul class="list-group">
                <li class="list-group-item text-center" ><h2><strong>Popular Campaigns</strong></h2></li>
            </ul>
                <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <div class="img-wrapper">
                                <a href="#"><img src="images/campaigns/stop_pollution.jpg" alt="Pollution"></a>
                            </div>
                            <h1><strong>Stop Pollution</strong></h1>
                            <p>A Clean Air Is Fair.</p>
                            <button class="btn">Join our campaign</button>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <div class="img-wrapper">
                                <a href="#"><img src="images/campaigns/save_bee.jpg" alt="SaveBees"></a>
                            </div>
                            <h1><strong>Save Bees</strong></h1>
                            <p>Bees are the batteries of orchards, gardens, guard them.</p>
                            <button class="btn">Join our campaign</button>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <div class="img-wrapper">
                                <a href="#"><img src="images/campaigns/global_warming.jpg" alt="GlobalWarming"></a>
                            </div>
                            <h1><strong>Global Warming</strong></h1>
                            <p>How much damage will have been done before we act?</p>
                            <button class="btn">Join our campaign</button>
                        </div>
                    </div>
                </div>
            <ul class="list-group">
                <li class="list-group-item text-center" ><h2><strong>Top Worst Companies</strong></h2></li>
            </ul>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <div class="img-wrapper">
                        <a href="#"><img src="images/companies/monsato.jpg" alt="Monsato Herbicides"></a>
                    </div>
                    <h1><strong>Monsato Herbicides</strong></h1>
                    <p>Details about the companie.</p>
                    <button class="btn">More details</button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <div class="img-wrapper">
                        <a href="#"><img src="images/companies/loreal.jpg" alt="L'Oréal Animal Testing"></a>
                    </div>
                    <h1><strong>L'Oréal Animal Testing</strong></h1>
                    <p>Details about the companie.</p>
                    <button class="btn">More details</button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <div class="img-wrapper">
                        <a href="#"><img src="images/companies/peabody.jpg" alt="Peabody Over Mining"></a>
                    </div>
                    <h1><strong>Peabody Over Mining</strong></h1>
                    <p>Details about the companie.</p>
                    <button class="btn">More details</button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <div class="img-wrapper">
                        <a href="#"><img src="images/companies/ussteel.jpg" alt="US Steel Pollution"></a>
                    </div>
                    <h1><strong>US Steel Pollution</strong></h1>
                    <p>Details about the companie.</p>
                    <button class="btn">More details</button>
                </div>
            </div>

        </div>
    </section>

@endsection