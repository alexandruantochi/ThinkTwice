@php ($counter = 0)

@foreach($entity as $value)

    @if ($counter % 3 == 0)
        <div class="row">
            @endif

            <div class="col-sm-12 col-md-4">
                <div class="well">
                    <div class="card" style="width: 20rem;">
                        <a href="/{{$typeProfile}}/{{ $value['id'] }}" class="thumbnail">
                            <img class="card-img-top" src=" {{ asset('images/' . $type . '/' . $value['id'] . '/' . $value['id'] . '.jpg') }} " alt="{{ $value['id'] }}" style="width: 100%; height: 15em;  !important;" >
                        </a>
                        <div class="card-block" style="height:8em">
                            <h4 class="card-title"> {{$value['name']}} </h4>
                            <p class="card-text">{{$value['description']}}</p>
                        </div>
                    </div>
                </div>
            </div>

            @if (($counter + 1) % 3 == 0)
        </div>
    @endif

    @php ($counter = $counter + 1)

@endforeach