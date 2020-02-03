@extends('layouts.admin')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card card-gray-dark">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>All Users</h2>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('users.create')}}" class="btn btn-success btn-lg float-right">+ Add New
                                User</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Current Role</th>
                            <th scope="col">Editing</th>
                            <th scope="col">Deleting</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role->rolename}}</td>
                                <td>
                                    <a href="{{  route('users.edit', ['user'=>$user->id] )  }}"
                                       class="btn btn-info btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{  route('users.destroy', ['user'=>$user->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
