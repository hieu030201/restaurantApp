@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 bg-light text-dark" style="height: 50px;">Main Functions / Report</div>
    <div class="col-md-8 ">Choose Date For Report</div>
    <div class="col-md-8 ">
        <div class="row text-center col-sm-4">
            <form action="/report/result" method="GET" class="form-inline" role="form">
                <div class="form-group">
                    <div class="sr-only" for="">label</div>
                    <input type="date" name="date_from" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group col-sm-4">
                    <input type="date" name="date_to" class="form-control" id="" placeholder="Input field">
                </div>
                <button type="submit"  class="btn btn-primary m-4">Show Report</button>
            </form>
        </div>
    </div>
</div>
@endsection