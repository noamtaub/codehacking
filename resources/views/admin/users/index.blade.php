@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
        </thead>
        <tbody>
        @if($users)

            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="50" src="{{$user->photo? $user->photo->path : "https://via.placeholder.com/150"}}" alt=""> </td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a> </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_activ == 1 ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>

@endsection