@extends('layouts.master')
@section('content')

    <section id="search_jumbotron">

        <article class="container-fluid">

            @include('layouts.profile', array('entityType' => 'campaigns'));

        </article>

    </section>

@endsection