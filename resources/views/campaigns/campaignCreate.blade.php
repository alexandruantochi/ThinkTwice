@extends('layouts.master')

@section('content')

    <br>
    <br>
    <br>


    <div class="panel-heading text-center">
        <h3 class="panel-title display-3">Create Campaign</h3>
    </div>


    <div class="container" style="color:white;">
        <form method="POST" action="/campaigns/create">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Campaign Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="campaignNameHelp" placeholder="Campaign name" required>
            </div>

            <div class="form-group">
                <label for="selectCategory">Pick a category</label>
                <select class="form-control" name="category" id="selectCategory">
                    <option disabled selected>Pick a category</option>
                    <option value="environmental">environmental</option>
                    <option value="health">health</option>
                    <option value="civic rights">civic rights</option>
                    <option value="social responsibility">social responsibility</option>
                    <option value="economic justice">economic justice</option>
                    <option value="animals">animals</option>
                    <option value="humanitarian">humanitarian</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Campaign description.</label>
                <textarea name="description" class="form-control" id="description" rows="5"required></textarea>
            </div>

            <div class="form-group">
                <label for="file">Attach a file</label>
                <input type="file" class="form-control-file" id="file" aria-describedby="fileHelp">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

@endsection