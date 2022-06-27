@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           @include('management.inc.sidebar')
            <div class="col-md-8">
                <h2>you do not have access</h2>
            </div>
        </div>
    </div>

@endsection