<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mypost extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getUser(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
