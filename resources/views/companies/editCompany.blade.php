@extends('layouts.master')

@section('content')


    <div class="container" style="margin-top: 5%">

        <form name="editCompanyForm" method="post">

            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$company->id}}">
            <div class="form-group">
                <label for="companyName">Company Name</label>
                <input name="name" type="text" value="{{$company->name}}" class="form-control" id="companyName"
                       aria-describedby="companyNameHelp" placeholder="Enter company name" required>
            </div>

            <div class="form-group">
                <label for="companyEmail">Email address</label>
                <input name="contact" type="text" value="{{$company->contact}}" class="form-control" id="companyEmail"
                       aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>


            <div class="form-group">
                <label for="description">Company description.</label>
                <textarea name="description" class="form-control" id="description" required
                          rows="5">{{$company->description}}</textarea>
            </div>

            <button id="submitCompany" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection