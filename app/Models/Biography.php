<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    protected $fillable = ['user_id', 'description', 'img_url'];

    public function user() 
    {
        return $this->hasOne(User::class);
    }
}
