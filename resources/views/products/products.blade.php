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
            var options = {
                title: 'Percentage of products categories',
                //is3D:true,
                pieHole: 0.5
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
    <br>
        <div class="container">
            <div class="row">
                <div class="col-3">
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

                <div class="col-6" id="piechart" style="width: 400px; height: 400px"></div>
          </div>
            <div class="row">

            </div>
        </div>
    <br>
@endsection
