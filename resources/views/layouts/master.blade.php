<!DOCTYPE html>
<html lang="en">
<head>
    <title>Think Twice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('js/temp/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-4/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap-4/bootstrap.min.css')}}"/>
</head>
<body>
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse  bg-inverse">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <a class="navbar-brand" href="/home">ThinkTwice</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/campaigns">Campaigns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/companies">Companies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Search
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">UPC</a>
                <a class="dropdown-item" href="#">Product name</a>
                <a class="dropdown-item" href="#">Campaign name</a>
                <a class="dropdown-item" href="#">Companie name</a>
            </div>
        </form>
    </div>
</nav>
<br>
<br>

@yield('content')


<br>
<br>
<br>
<br>


<nav class="navbar navbar-light bg-faded text-center" style="background-color:#333136;">
    <br>
    <h3 style="color: white">
        Follow us:  <button type="button" class="btn btn-secondary btn-lg"><span class="glyphicon glyphicon-user" style="color: #000"></span> Facebook</button>
        <button type="button" class="btn btn-secondary btn-lg"><span class="glyphicon glyphicon-user" style="color: #000"></span> Instagram</button>
        <button type="button" class="btn btn-secondary btn-lg"><span class="glyphicon glyphicon-user" style="color: #000"></span> Twiter</button>
    </h3>
</nav>

</body>
</html>