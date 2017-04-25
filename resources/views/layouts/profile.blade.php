<!-- this is a basic profile scaffold -->


<div class="container">
    <div class="row" style="margin-top: 15%">

        <aside class="col-md-3" >
            <img src="@yield('profilePicture')"
                 alt="{{ asset('images/errors/notfound.jpg') }}" style="width: 100%"/>
            <button class="btn btn-success" style="margin-top: 1em; width:100%"><span class="glyphicon glyphicon-heart"/> Favorite</button>
            <button class="btn btn-warning" style="margin-top: 1em; width:100%"><span class="glyphicon glyphicon-ban-circle"/> BlackList</button>
        </aside>
        <details class="col-md-9">
            <summary>@yield('name')</summary>
            <p>@yield('desription')</p>
        </details>


    </div>


</div>