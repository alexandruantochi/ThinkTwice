<!DOCTYPE html>
<html lang="en">
<head>
    <title>Think Twice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('js/temp/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-4/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/google_chart/loader.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap-4/bootstrap.min.css')}}"/>
</head>
<body>
<nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse">
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
            @if(Auth::check())
                <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/profile" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/campaigns/subscriptions">My Campaigns</a>
                            <a class="dropdown-item" href="/campaigns/suggestions">My Suggestions</a>
                            <a class="dropdown-item" href="/campaigns/create">Create Campaign </a>
                            <a class="dropdown-item" href="/logout">Log out</a>
                        </div>
                    </li>
                </li>
            @endif
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get" action="/search/filter">
            <input class="form-control mr-sm-2" name="name" type="text" placeholder="Search">
            <select name="option" class="custom-select" type="submit">
                <option selected value="upc" >UPC</option>
                <option value="p_name" >Product name</option>
                <option value="cg_name" >Campaign name</option>
                <option value="cp_name" >Company name</option>
            </select>
            <button type="submit" class="btn btn-outline-danger my-2 my-sm-0" aria-haspopup="true" aria-expanded="false" >
                Search
            </button>
        </form>
    </div>
</nav>
@yield('content')
<nav class="navbar fixed-bottom navbar-light bg-faded text-center" style="background-color:#333136;">
    <p style="color: white">
        <strong>Follow us:</strong>
        <button type="button" class="btn btn-secondary "><span class="glyphicon glyphicon-user" style="color: #000"></span> Facebook</button>
        <button type="button" class="btn btn-secondary "><span class="glyphicon glyphicon-user" style="color: #000"></span> Instagram</button>
        <button type="button" class="btn btn-secondary "><span class="glyphicon glyphicon-user" style="color: #000"></span> Twiter</button>
    </p>
</nav>
</body>
</html>