@extends('layouts.master')
@section('content')

    <div class="jumbotron  jumbotron-fluid text-center">
        <h1>Campaigns</h1>
        <p>Trust in yourself and your beliefs</p>



            <form class="form-inline" method="get" action="/campaigns/filter">

                <div class="input-group" style="margin-left: 35%; width: 35%">
                <input name="name" type="text" class="form-control" aria-describedby="basic-addon2">
                <select name="option" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                    <option selected>Option</option>
                    <option value="byName">By Name</option>
                    <option value="byCategory">By Category</option>
                    <option value="byOrganizer">By Organizer</option>
                </select>


                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>


    </div>

@endsection