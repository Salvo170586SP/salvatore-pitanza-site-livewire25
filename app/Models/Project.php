<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'img_url', 'url_git', 'url_web', 'is_available'];

    protected $casts = [
        'is_available' => 'boolean',
    ];

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
