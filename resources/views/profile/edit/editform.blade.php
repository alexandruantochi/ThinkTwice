<?php
$encrypter = app('Illuminate\Encryption\Encrypter');
$encrypted_token = $encrypter->encrypt(csrf_token());
?>
@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <section id="search_jumbotron">
        <input id="token" type="hidden" value="{{$encrypted_token}}">
        <form method="POST" action="/profile/save">
            <div class="row">
            <div class="col-md-6" style="margin-top: 10%;">

                <div class="form-group">
                    <label for="name">New name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="description" placeholder="Enter a new name">
                </div>
                <div class="form-group">
                    <label for="email">New email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="description" placeholder="Enter a new email">
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Change password</label>
                    <input type="password" class="form-control" id="password" aria-describedby="description" placeholder="Enter a new password">
                </div>
                <div class="form-group">
                    <label for="password">Repeat new password</label>
                    <input type="password" class="form-control" id="newpassword" aria-describedby="description" placeholder="Repeat your new password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            <div class="col-md-6" style="margin-top: 10%;">
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="reason">
                        <option disabled selected>Pick a gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="unspeciffied">Unspeciffied</option>
                    </select>
                </div>

                <label for="date_of_birth">Change your date of birth
                </label> <br> <input id="date_of_birth" style="color:black" type="date" placeholder="YYYY-MM-DD"/>
                <br>
                <br>
                <div class="form-group">
                    <label for="file">Change profile picture</label>
                    <input type="file" class="form-control-file" id="file" aria-describedby="fileHelp">
                </div>
                <div class="form-group">
                    <label for="location">New location</label>
                    <input type="text" class="form-control" id="location" aria-describedby="description" placeholder="Enter a new location">
                </div>
                <div class="form-group">
                    <label for="ocupation">New ocupation</label>
                    <input type="text" class="form-control" id="occupation" aria-describedby="description" placeholder="Enter a new ocupation">
                </div>


            </div>
            </div>
        </form>

    </section>

</div>
@endsection