<!DOCTYPE html>
<html lang="en">
<head>
    <title>Think Twice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('js/temp/jquery.min.js')}}"></script>
    <script src="{{asset('js/temp/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/temp/bootstrap.css')}}"/>


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
                <li><a href="/home">Home</a></li>
                <li><a href="/campaigns">Campaigns</a></li>
                <li><a href="/companies">Companies</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/profile">Profile</a></li>
                <li>
                    <form style="margin-top: 13px;">
                        <input type="text" name="search" placeholder="Search..">
                    </form>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn  btn btn-danger" type="button" id="dropdownsearchMenu" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true" style="margin-top: 10px;">
                            Options
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownsearchMenu">
                            <li><a href="#">UPC</a></li>
                            <li><a href="#">Product name</a></li>
                            <li><a href="#">Campaign name</a></li>
                            <li><a href="#">Companie name</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<footer class="footer">
    <div class="container">
        <h3>
            Follow us: <span class="glyphicon glyphicon-user" style="color: #000"> <a href="#">Facebook </a></span>
        </h3>
    </div>
</footer>
</body>
</html>