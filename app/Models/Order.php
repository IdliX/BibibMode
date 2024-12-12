<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'tracking_number',
        'order_date',
        'pickup_schedule',
        'total_price',
        'status'
    ];

    protected $dates = [
        'order_date',
        'pickup_schedule',
        'created_at',
        'updated_at'
    ];

    // Relasi ke CustomerDetail
    public function customerDetails()
    {
        return $this->hasMany(Customer_Detail::class, 'order_id', 'order_id');
    }

    public function orderStatuses()
    {
        return $this->hasMany(OrderStatus::class, 'order_id', 'order_id');
    }

}