<!-- this is a basic profile scaffold -->


<div class="container" style="font-size: 1.5em; color: white">
    <div class="row" style="margin-top: 15%">

        <aside class="col-md-3">
            <img src="{{ asset('images/'.$entityType.'/'.$entity->id.'/logo.jpg') }}"
                 alt="{{ asset('images/errors/notfound.jpg') }}" style="width: 100%"/>
            <a href="/addFav?type={{$entityType}}&id={{$entity->id}}">
                <button class="btn btn-success" style="margin-top: 1em; width:100%"><span
                            class="glyphicon glyphicon-heart"/>
                    Favorite
                </button>
            </a>
            <a href="/blacklist?type={{$entityType}}&id={{$entity->id}}">
                <button class="btn btn-danger" style="margin-top: 1em; width:100%"><span
                            class="glyphicon glyphicon-ban-circle"/> Blacklist
                </button>
            </a>

        </aside>
        <div class="col-md-9">
            <div class="row">
                <details>
                    <summary>{{$entity->name}} description</summary>
                    <p>{{$entity->description}}</p>
                </details>
            </div>


            @if($entityType == 'companies')
                <div class="row" style="background: slategrey; border-style: solid; border-radius: 25px; padding: 1%">
                    <p>Category: {{$entity->category}}</p>
                    <p>Mother Company: {{$entity->mother}}</p>
                    <p>Rating: {{$entity->rating}}</p>
                    <p>Contact: {{$entity->contact}}</p>
                </div>
                <div class="row form-inline" style="margin-top: 1%;" >
                    <form action="/product" method="GET">

                    <select name="productID" class="form-control " style="color:black; width: 50%">
                        <option disabled selected value>Go to product</option>
                    @foreach ($entity->productList as $product)
                        <option value="{{$product}}"><!-- product id -->
                            {{ $product }}
                        </option>
                    @endforeach

                    </select>
                     <button type="submit" class="btn btn-info">Go</button>
                   </form>
                </div>

            @endif

            @if($entityType == 'campaigns')


            @endif
        </div>

    </div>


</div>
