@extends('layouts.master')

@section('content')


<div class="container" style="margin-top: 10%; color:white;">
    <form method="POST" action="contact">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="description" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleSelect1">Reason for contacting us</label>
            <select class="form-control" name="reason">
                <option disabled selected>Pick a reason</option>
                <option value="illegal">Report an illegal activity</option>
                <option value="suggestion">Give a suggestion</option>
                <option value="marketing">Marketing opportunity</option>
                <option value="other">Other</option>
            </select>
        <div class="form-group" style="margin-top:1%;">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="file">Attach a file</label>
            <input type="file" class="form-control-file" id="file" aria-describedby="fileHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection