<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ["user_id","total_price","status","shipping_address_id"];

    
     public function orderItems(){
        return $this->hasMany(OrderItem::class); //Mot order se co nhieu Items
    }

    public function user(){
        return $this->belongsTo(User::class); //Mot user co the co nhieu order nen order se thuoc ve 1 user
    }

    public function shippingAddresses(){
        return $this->belongsTo(ShippingAddress::class); //Thuoc ve mot dia chi
    }

    public function payment(){
        return $this->hasOne(Payment::class);
    }

        public function orderStatusHistory(){
        return $this->hasMany(OrderStatusHistory::class);
    }
}
