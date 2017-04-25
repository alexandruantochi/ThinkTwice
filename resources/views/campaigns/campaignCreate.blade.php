@extends('layouts.master')
@section('content')

    <section id="search_jumbotron">

        <article class="container-fluid">

            <form>
                <div class="form-group">
                    <label for="name">Name of your campaign</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Name">
                    <small id="nameHelp" class="form-text text-muted">Write something eye-catching</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </article>

    </section>

@endsection