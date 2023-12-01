<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $fillable = [
        'order_code',
        'user_id',
        'total_price',
        'status',
        'address',
        'status_order',
        'staff_id'
    ];

    public function order_detail() {
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
}
