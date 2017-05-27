<div class="container">
    @foreach ($companies as $company)
        {{ $company->name }}
    @endforeach
</div>



1
{{$companies->previousPageUrl()}}
2
{{$companies->nextPageUrl()}}
3
<a href="{{ $companies->currentPage() }}" rel="next">&raquo;</a>