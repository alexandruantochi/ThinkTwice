<div class="container" style="margin-top:10%;" align="center">
    <ul class="nav justify-content-center">
        <li class="nav-item" style="display: inline-block">
            <a class="nav-link active" href="/{{$entityType.'/mostPopular'}}">Most Popular</a>
        </li>
        <li class="nav-item" style="display: inline-block">
            <a class="nav-link" href="/{{$entityType.'/trending'}}">Trending</a>
        </li>
        <li class="nav-item" style="display: inline-block">
            <a class="nav-link" href="/{{$entityType.'/newest'}}">Newest</a>
        </li>
        <li class="nav-item" style="display: inline-block">
            <a class="nav-link disabled" href="/{{$entityType.'/random'}}">Random</a>
        </li>
    </ul>
</div>


<div class="container" align="center">
    @foreach(array_chunk($entities,3,true) as $entitiesChunk)
        <div class="row" style="margin-top:3%">
            @foreach($entitiesChunk as $entity)
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="{{asset('images/'.$entityType.'/'.$entity->id.'/logo.jpg')}}"
                             alt="{{asset('images/errors/error.jpg')}}" style="width:100%;">
                        <div class="card-block">
                            <h4 class="card-title" style="color:red;">{{ $entity->name }}</h4>
                            <details style="color:white;">
                                <summary>Description</summary>
                            <p class="card-text">{{$entity->description}}</p>
                            </details>
                            @if($entityType=='companies')
                                <a href="/company/{{$entity->id}}" class="btn btn-primary">Go to</a>
                            @else
                                <a href="/campaign/{{$entity->id}}" class="btn btn-primary">Go to</a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach


</div>