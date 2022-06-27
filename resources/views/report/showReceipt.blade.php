<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant App - Receipt - SaleID : {{$sales->id}}</title>
</head>
<body>
    <div id="wrapper">
        <div id="receipt-header">
            <h3 id="restaurant-name">Restaurant App Devtamin</h3>
            <p>Address: 341 N Vakanda Ave</p>
            <p>Analpolist, MD 1234</p>
            <p>Tel: 473-XXXX-XXXX</p>
            <p>Reference Receipt: <strong>{{$sales->id}}</strong></p>
        </div>
        <div id="receipt-body">
            <table class="tb-sale-detail">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Menu</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
            <table class="tb-sale-total">
                <tbody>
                    @foreach($sales as $sale)
                    <tr>
                        <td>Total Quantity</td>
                        <td>{{$saleDetails->count()}}</td>
                        <td>Total</td>
                        <td>${{number_format($sale->total_price,2)}}</td>
                    </tr>
                    <tr>
                        <td colspan="2">Payment Type</td>
                        <td colspan="2">{{$sale->payment_type}}</td>
                    </tr>
                    <tr>
                        <td colspan="2">Paid Amount</td>
                        <td colspan="2">${{number_format($sale->total_recieved, 2)}}</td>
                    </tr>
                    <tr>
                        <td colspan="2">Change</td>
                        <td colspan="2">${{number_format($sale->change, 2)}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div id="receipt-footer">
            <p>Thank You!!!</p>
        </div>
    </div>
    
</body>
</html>