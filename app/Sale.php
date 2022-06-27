<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'id',
        'table_id',
        'table_name',
        'user_id',
        'user_name',
        'total_price',
        'total_recieved',
        'change',
        'payment_type',
        'sale_status'
    ];

    public function saleDetails(){
        return $this->hasMany(SaleDetail::class);
    }
}
