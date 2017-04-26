@extends('layouts.master')
@section('content')

    <section id="search_jumbotron">
        <form class="form" style="margin-top: 10%; color:white;" >
            <div class="col-sm-3" >


                <div class ="form-group">
                    <label><b>Email</b></label>
                    <input type="text" placeholder="Enter your email" style="color:black " name="email" required>
                </div>
                <div class ="form-group">
                    <label><b>Confirm Email</b></label>
                    <input type="text" placeholder="Enter your email again" style="color:black" name="emailconfirm" required>
                </div>

                <div class ="form-group">
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" style="color:black" name="psw" required>
                </div>
                <div class ="form-group">
                    <label><b>Confirm password</b></label>
                    <input type="password" placeholder="Confirm Password" style="color:black" name="psw2" required>
                </div>
                <label for="age">Age
                </label><input id="age" style="color:black" type="number" value="0"/>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>

        </form>
    </section>
@endsection