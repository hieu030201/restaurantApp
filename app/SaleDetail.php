<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    protected $fillable = [
        'id',
        'sale_id',
        'menu_id',
        'menu_name',
        'menu_price',
        'quantity',
        'status'
     
    ];

    public function sale(){
        return $this->belongsTo(Sale::class);
    }
}
