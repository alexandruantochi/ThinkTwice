@extends('layouts.master')
@section('content')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});  //latest official release of google charts
        google.charts.setOnLoadCallback(drawChart); // once the packages have benn loaded after this draw chart function has been called
        function drawChart()
        {
            var data = google.visualization.arrayToDataTable([
                ['Category', 'Number'],

                @php
                    foreach ($categories_pie as $value)
                    {
                    echo "['".$value->category."', ".$value->number."],";
                    }
                @endphp
            ]);

            var reviews = google.visualization.arrayToDataTable([
                ['Category', 'Number'],

                @php
                    foreach ($product_rating as $var)
                    {
                    echo "['".$var->product_rating."', ".$var->number."],";
                    }
                @endphp
            ]);

            var op_categ = {
                title: 'Percentage of products categories',
                //is3D:true,
                pieHole: 0.5
            };
            var op_rating = {
                title: 'Percentage of product rating',
                //is3D:true,
                pieHole: 0.5
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            var review= new google.visualization.PieChart(document.getElementById('ratingReviewChart'));
            chart.draw(data, op_categ);
            review.draw(reviews, op_rating);
        }
    </script>
    <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="list-group">
                        <p class="list-group-item active">
                            Product Categories
                        </p>

                        @foreach($categories as $value)
                            <strong><a href="/category/{{$value}}"  class="list-group-item list-group-item-action">{{$value}}</a></strong>
                        @endforeach
                        <strong><a href="/products/all"  class="list-group-item list-group-item-action">all products</a></strong>
                    </div>
                </div>

                <div class="col-5" id="piechart" style="width: 400px; height: 400px"></div>
                <div class="col-5" id="ratingReviewChart" style="width: 400px; height: 400px"></div>
          </div>
            <div class="row">

            </div>
        </div>
    <br>
@endsection
