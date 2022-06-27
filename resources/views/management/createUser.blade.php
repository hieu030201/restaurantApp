@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        @include('management.inc.sidebar')
            <div class="col-md-8">
                <i class="fas fa-chair"></i> Create a User
                <hr>
                <form action="/management/users" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name...">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email...">
                    </div>

                    <div class="form-group">
                        <label for="password">User Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password...">
                    </div>
                    <label for="role">Role</label>
                    <select class="form-control" name="role_id" id="role_id" >
                        
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->display_name}}</option>
                        @endforeach
                    </select>

                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

@endsection