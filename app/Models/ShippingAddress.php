<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $fillable = ["user_id", "fullname","phone","address","city", "default"];

        public function user(){

            return $this->belongsTo(User::class); // User co nhieu dia chi thi dia chi se thuoc ve user
        }
}
