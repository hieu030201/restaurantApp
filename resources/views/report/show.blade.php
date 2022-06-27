@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-8 bg-light text-dark" style="height: 50px;">Main Functions / Report / Result</div>
    <div class="col-md-8">
         @if(Session()->has('status'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" aria-label="close" data-dismiss="alert">X</button>
                {{Session()->get('status')}}
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Receipt ID</th>
                <th scope="col">Date Time</th>
                <th scope="col">Table</th>
                <th scope="col">Staff</th>
                <th scope="col">Total Amount</th>
                </tr>
            </thead>
            @foreach($sales as $sale)
            <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">{{$loop->index +1 }}</th>
                            <th scope="col">{{$sale->created_at}}</th>
                            <th scope="col">{{$sale->table_id}}</th>
                            <th scope="col">{{$sale->user_name}}</th>
                            <th scope="col">${{number_format($sale->total_price)}}</th>
                        </tr>
                        <thead>
                            <tr>
                            <th scope="row"></th>
                            <th scope="col">Menu ID</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>  
                                        
                            @foreach($saleDetails as $saleDetail)     
                            @if($saleDetail->sale_id === $sale->id)    
                                    <tr> 
                                    <th scope="row"></th>
                                    <td>{{$saleDetail->menu_id}}</td>
                                    <td>{{$saleDetail->menu_name}}</td>
                                    <td>{{$saleDetail->quantity}}</td>
                                    <td>{{$saleDetail->menu_price}}</td>
                                    <td>${{number_format($saleDetail->menu_price*$saleDetail->quantity)}}</td>
                                    </tr>   
                            @endif           
                            @endforeach
                        </tbody>   
            </thead>
            @endforeach
        </table>
        <a href="/report/export">
            <button class="btn btn-warning">Export to Excel</button>
        </a>
    </div>
</div>
@endsection