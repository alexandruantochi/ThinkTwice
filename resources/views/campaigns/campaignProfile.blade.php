@extends('layouts.master')
@section('content')


    <div class="container" style="font-size: 1.5em">
        <div class="row" style="margin-top: 15%">



            <div class="well">

                <aside class="col-md-3">
                    <img src="{{ asset('images/campaigns/' . $entity->id . '/logo.jpg') }}"
                         alt="{{ asset('images/errors/notfound.jpg') }}" style="width: 110%"/>
                </aside>

                <div class="col-md-9" style="margin-left: 1%">
                    <div class="row">
                        <h1 class="display-3">

                            {{$entity->name}}

                        </h1>
                        <p>

                            {{$entity->description}}

                        </p>
                    </div>

                    <p>Category:
                        <a href="/campaigns/filter?name={{$entity->category}}&option=byCategory">
                            {{$entity->category}}
                        </a>
                    </p>


                    <p>Organizer:
                        <a href="/campaigns/filter?name={{$organizer->name}}&option=byOrganizer">
                            {{$organizer->name}}
                        </a>
                    </p>



                </div>

            </div>



        </div>


    </div>

    @include('layouts.addSpaces');

@endsection
