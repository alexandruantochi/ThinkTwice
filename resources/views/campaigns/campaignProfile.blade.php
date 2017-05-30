@extends('layouts.master')
@section('content')


    <div class="container" style="font-size: 1.5em">
        <div class="row" style="margin-top: 15%">



            <div class="well">

                <aside class="col-md-3">
                    <img src="{{ asset('images/campaigns/' . $entity->id . '/logo.jpg') }}"
                         alt="{{ asset('images/errors/notfound.jpg') }}" style="width: 100%"/>
                </aside>

                <div class="col-md-9">
                    <div class="row">
                        <h1 class="display-3">

                            {{$entity->name}}

                        </h1>
                        <p>

                            {{$entity->description}}

                        </p>
                    </div>

                    <a href="/campaigns/filter?name={{$entity->category}}&option=byCategory">
                        <p>Category: {{$entity->category}}</p>
                    </a>


                    <p>Organizer: {{$organizer->name}}</p>



                </div>

            </div>



        </div>


    </div>

    @include('layouts.addSpaces');

@endsection
