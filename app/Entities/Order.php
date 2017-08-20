<?php

namespace OFS\Entities;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['customer_id', 'courier_id', 'meal_id', 'qty', 'tariff', 'notes', 'delivery_status'];

    // Relationship to Customer Entities = Many to One
    public function customer()
    {
        return $this->belongsTo(UserCustomer::class);
    }

    // Relationship to Courier Entities = Many to One
    public function courier()
    {
        return $this->belongsTo(UserCourier::class);
    }

    // Relationship to Cancellation Entities = One to One
    public function cancellation()
    {
        return $this->hasOne(Cancellation::class);
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
