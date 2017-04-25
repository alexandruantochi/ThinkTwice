@include('layouts.master')

@section('content')

    @extends('layouts.profile')

@section('profilePicture')
    {{ asset('images/companies/'.$company->id.'/logo.jpg') }}
@endsection

@section('name')
    {{$company->name}}
@endsection

@section('description')
    {{$company->description}}
@endsection

@endsection
