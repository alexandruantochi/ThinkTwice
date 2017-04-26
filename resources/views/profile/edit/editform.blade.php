@extends('layouts.master')
@section('content')
<div class="container">
    <section id="search_jumbotron">

        <form method="POST" action="contact">
            <div class="col-sm-6" style="margin-top: 10%;">
                <input type="hidden" name="_token" value="UKrzBcHhXyiIal3BtPMhydW4uNSc9MhydEewNyLN">
                <div class="form-group">
                    <label for="name">New name</label>
                    <input type="name" class="form-control" id="name" aria-describedby="description" placeholder="Enter a new name">
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
                    <label for="file">Change profile picture</label>
                    <input type="file" class="form-control-file" id="file" aria-describedby="fileHelp">
                </div>
                <div class="form-group">
                    <label for="location">New location</label>
                    <input type="location" class="form-control" id="location" aria-describedby="description" placeholder="Enter a new location">
                </div>
                <div class="form-group">
                    <label for="ocupation">New ocupation</label>
                    <input type="ocupation" class="form-control" id="ocupation" aria-describedby="description" placeholder="Enter a new ocupation">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger">Cancel</button>
            </div>

            <div class="col-sm-6" style="margin-top: 10%;">
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="surname" class="form-control" id="surname" aria-describedby="description" placeholder="Enter a new surname">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="reason">
                        <option disabled selected>Pick a gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="unspeciffied">Unspeciffied</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Repeat new password</label>
                    <input type="password" class="form-control" id="newpassword" aria-describedby="description" placeholder="Repeat your new password">
                </div>
                <label for="age">Change your age
                </label> <br> <input id="age" style="color:black" type="number" value="0"/>
                <br>
                <br>
                <div class="form-group">
                    <label for="location">New religion</label>
                    <input type="religion" class="form-control" id="religion" aria-describedby="description" placeholder="Enter a new religion">
                </div>
            </div>
        </form>

    </section>

</div>
@endsection