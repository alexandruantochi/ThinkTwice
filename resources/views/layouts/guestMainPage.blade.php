<!DOCTYPE html>
<html lang="en">
<head>
    <title>Think Twice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js')}}"></script>
    <script src="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/navbarFooter.css') }}">

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">Think Twice</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home">Home</a> </li>
                <li><a href="campaigns">Log In</a> </li>
                <li><a href="products">Sign Up</a> </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="social pull-left">
            <p class="text-muted">Follow us:</p>
        </div>
        <div class="social pull-right">
            <a href="#"> <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
        </div>
        <div class="social pull-right">
            <a href="#"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
        </div>
        <div class="social pull-right">
            <a href="#"><i class="fa fa-twitter-square fa-3x"  aria-hidden="true"></i></a>
        </div>
    </div>
</footer>
</body>
</html>