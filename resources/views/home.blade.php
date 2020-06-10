@extends('layouts.app')

@section('content')
<div class="create" style="display:flex;flex-direction:column;">
    <a href="/create/company">Create New Company</a>
    <a href="/create/employee">Create New Employee</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Position</th>
        <th scope="col">Company</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employee as $e)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$e->name}}</td>
        <td>{{$e->age}}</td>
        <td>{{$e->position}}</td>
        <td>{{$e->company->name}}</td>
        <td>
            <div class="actions" style="display:flex;flex-direction:row;align-items:center;">
                <a href="/edit/{{$e->id}}">Edit</a>
                <form action="/delete/{{$e->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" style="background-color:azure;border:0;color:red;">Delete</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
