<div class="container">
    @foreach ($companies as $company)
        {{ $company->name }}
    @endforeach
</div>

{{ $companies->links() }}