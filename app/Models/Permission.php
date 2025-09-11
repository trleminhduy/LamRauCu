<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
       protected $fillable = ["name"]; //filable la cot co the gan gia tri hang loat

        public function roles(){{
        return $this->belongsToMany(Role::class,"role_permissions");
        
    }}

}
