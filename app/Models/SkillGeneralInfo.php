<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillGeneralInfo extends Model
{
    protected $table = 'skill_general_info';
    protected $fillable = ['user_id', 'general_description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
