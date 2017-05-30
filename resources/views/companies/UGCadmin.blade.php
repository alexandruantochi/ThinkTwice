@extends('layouts.master')


@section('content')



    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created_at</th>
                <th>Suggester</th>
                <th>Delete</th>
                <th>Logo</th>
                <th>Approve</th>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
                <tr>
                    <th scope="row">{{$company->id}}</th>
                    <td>{{$company->name}}</td>
                    <td>{{$company->description}}</td>
                    <td>{{$company->created_at}}</td>
                    <td>{{$company->suggester}}</td>
                    <td>{{$company->user_id}}</td>
                    <td><img src="{{asset('storage/images/ugc_companies/'.$company->id.'/logo.png')}}"/></td>
                    <td><a href="ugc_delete/{{$company->id}}">
                            <button class="button btn-danger">DELETE</button>
                        </a></td>
                    <td><a href="ugc_approve/{{$company->id}}">
                            <button class="button btn-warning">Approve</button>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>


        </table>


    </div>



@endsection