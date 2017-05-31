@extends('layouts.master')

@section('content')


    <div class="container" style="margin-top: 1%">
        <p>Welcome, {{$user->name}}, here you can submit a new company for our database.</p>

        <form name="suggestCompanyForm" method="post" enctype="multipart/form-data">

            {{csrf_field()}}

            <div class="form-group">
                <label for="companyName">Company Name</label>
                <input name="name" type="text" class="form-control" id="companyName" aria-describedby="companyNameHelp"
                       placeholder="Enter company name" required>
                <small id="companyNameHelp" class="form-text text-muted">Enter the company's name you would like to
                    suggest
                </small>
            </div>

            <div class="form-group">
                <label for="companyEmail">Email address</label>
                <input name="email" type="email" class="form-control" id="companyEmail" aria-describedby="emailHelp"
                       placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">Enter the company contact email.</small>
            </div>

            <div class="form-group">
                <label for="selectCategory">Select main category</label>
                <select name="category" class="form-control" id="selectCategory">
                    <option>Food&Drink</option>
                    <option>Cosmetics</option>
                    <option>Electronics</option>
                    <option>Consumer Goods</option>
                    <option>Services</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Company description.</label>
                <textarea name="description" class="form-control" id="description" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="logo">File input</label>
                <input name="logo" type="file" class="form-control-file" id="logo" aria-describedby="logoHelp">
                <small id="fileHelp" class="form-text text-muted">Add company logo.</small>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input name="checkBox" type="checkbox" id="check" class="form-check-input"
                           onchange="document.getElementById('submitCompany').disabled = !this.checked;" required>
                    I agree that my submission follows the website rules.
                </label>
            </div>

            <button id="submitCompany" type="submit" class="btn btn-primary" disabled>Submit</button>

            @include('layouts.addSpaces')



        </form>
    </div>


@endsection