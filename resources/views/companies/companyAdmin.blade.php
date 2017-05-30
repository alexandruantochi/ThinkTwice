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
                <th>Updated_at</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
                <tr>
                    <th scope="row">{{$company->id}}</th>
                    <td><a href="profile/{{$company->id}}}">{{$company->name}}</a></td>
                    <td>{{$company->description}}</td>
                    <td>{{$company->created_at}}</td>
                    <td>{{$company->updated_at}}</td>
                    <td><a href="delete/{{$company->id}}">
                            <button class="button btn-danger">DELETE</button>
                        </a></td>
                    <td><a href="edit/{{$company->id}}">
                            <button class="button btn-warning">EDIT</button>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>


        </table>


    </div>



@endsection