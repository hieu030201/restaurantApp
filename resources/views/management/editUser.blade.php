@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        @include('management.inc.sidebar')
            <div class="col-md-8">
            <i class="fas fa-users"></i> Edit a User
                <hr>
                <form action="/management/users/{{$user->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name...">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="Email...">
                    </div>

                    <label>Role</label>
                    <select class="form-control" name="role_id" id="role_id">
                        @foreach($roles as $role)
                            <option value="{{$role->id}}" {{$role->id == $user->role_id?"selected":""}}>{{$role->display_name}}</option>
                        @endforeach
                    </select>

                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

@endsection