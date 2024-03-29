@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <section id="search_jumbotron">

        <form method="POST" action="/profile/save">
            <div class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-md-6" style="margin-top: 10%;">

                <div class="form-group">
                    <label for="name">New name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="description" placeholder="Enter a new name">
                </div>
                <div class="form-group">
                    <label for="email">New email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="description" placeholder="Enter a new email">
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Change password</label>
                    <input type="password" class="form-control" name="password" aria-describedby="description" placeholder="Enter a new password">
                </div>
                <div class="form-group">
                    <label for="password">Repeat new password</label>
                    <input type="password" class="form-control" name="newpassword" aria-describedby="description" placeholder="Repeat your new password">
                </div>


            </div>

            <div class="col-md-6" style="margin-top: 10%; background-color: #d4d4d4;;">
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender">
                        <option disabled selected>Pick a gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="unspeciffied">Unspeciffied</option>
                    </select>
                </div>

                <label for="date_of_birth">Change your date of birth
                </label>
                <br>
                <input  type="text" name="date_of_birth" style="color:black" placeholder="YYYY-MM-DD"/>
                <br>
                <br>
                <div class="form-group">
                    <label for="file">Change profile picture</label>
                    <input type="file" class="form-control-file" name="file" aria-describedby="fileHelp">
                </div>
                <div class="form-group">
                    <label for="location">New location</label>
                    <input type="text" class="form-control" name="location" aria-describedby="description" placeholder="Enter a new location">
                </div>
                <div class="form-group">
                    <label for="ocupation">New ocupation</label>
                    <input type="text" class="form-control" name="occupation" aria-describedby="description" placeholder="Enter a new ocupation">
                </div>
                <p class="text-danger">Fields left empty in this area will clear data on the profile!</p>


            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </section>

</div>
@endsection