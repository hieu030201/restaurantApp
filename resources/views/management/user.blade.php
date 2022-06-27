@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           @include('management.inc.sidebar')
            <div class="col-md-8">
            <i class="fas fa-users"></i> User
                <a href="/management/users/create" style="float: right;" class="btn btn-success btn-sm float-right"><i class="fas fa-users"></i> Create User</a>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Email</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$loop->index +1 }}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->role_id}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="/management/users/{{$user->id}}/edit" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <form action="/management/users/{{$user->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                      
                    </tbody>
        
                </table>
                
            </div>
        </div>
    </div>

@endsection