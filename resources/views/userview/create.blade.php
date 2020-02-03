@extends('layouts.admin')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card card-gray-dark">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Create New User Form</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input name="email" type="text" class="form-control" id="email"
                                   placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password"
                                   placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="role_id">Select a Role:</label>
                            <select name="role_id" class="form-control" id="role_id">
                                <option value="1">superadmin</option>
                                <option value="2">admin</option>
                                <option value="3">user</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
