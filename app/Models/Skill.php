<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['user_id', 'name', 'url_icon'];

    public function user()
    {
        return $this->hasOne(User::class);
    }


    public function getDate()
    {
        return mb_convert_case(
            Carbon::parse($this->updated_at)
                ->locale('it')
                ->translatedFormat('d F Y'),
            MB_CASE_TITLE,
            'UTF-8'
        );
    }
}
