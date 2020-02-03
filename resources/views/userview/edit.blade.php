@extends('layouts.admin')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card card-gray-dark">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Edit New User Form</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{  route('users.update', ['user'=>$user->id] )  }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" value="{{$user->name}}" id="name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input name="email" type="text" class="form-control" value="{{$user->email}}" id="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="rolename">Role</label>
                            <input name="rolename" type="rolename" class="form-control" value="{{$user->role->rolename}}"id="rolename" placeholder="superadmin , admin , user">
                        </div>
                        <button type="submit" class="btn btn-primary" id="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
