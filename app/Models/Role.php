<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ["name"]; //filable la cot co the gan gia tri hang loat

    public function permission(){{
        return $this->belongsToMany(Permission::class,"role_permissions");
        
    }}
}
