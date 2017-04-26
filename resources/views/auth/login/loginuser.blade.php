@extends('layouts.master')
@section('content')

    <section id="search_jumbotron">
        <form class="form" style="margin-top: 10%; color:white;" >
            <div class="col-sm-2" >


                <div class ="form-group">
                    <label><b>Email</b></label>
                    <input type="text" placeholder="Enter your email" style="color:black" name="email" required>
                </div>

                <div class ="form-group">
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" style="color:black" name="psw" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <input type="checkbox" checked="checked"> Remember me


                <div class="container" >
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </div>

        </form>
    </section>
@endsection