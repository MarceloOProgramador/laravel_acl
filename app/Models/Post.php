<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    
    public function getUser(){
        return $this->belongsTo(User::class, "user_id");
    }
}
