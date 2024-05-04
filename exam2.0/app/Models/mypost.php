<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mypost extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getUser()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
