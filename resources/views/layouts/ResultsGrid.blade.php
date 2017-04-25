@php ($counter = 0)

@foreach($defaultResults as $key => $value)

    @if ($counter % 3 == 0)
        <div class="row">
            @endif

            <div class="col-sm-12 col-md-4">
                <div class="well">
                    <div class="card" style="width: 20rem;">
                        <a href="/{{$entityProfile}}/{{ $key }}" class="thumbnail">
                            <img class="card-img-top" src=" {{ asset('images/' . $entity . '/' . $key . '/' . $key . '.jpg') }} " alt="{{ $key }}" style="width: 100%; height: 15em;  !important;" >
                        </a>
                        <div class="card-block" style="height:8em">
                            <h4 class="card-title"> {{$value[0]}} </h4>
                            <p class="card-text">{{$value[1]}}</p>
                        </div>
                    </div>
                </div>
            </div>

            @if (($counter + 1) % 3 == 0)
        </div>
    @endif

    @php ($counter = $counter + 1)

@endforeach