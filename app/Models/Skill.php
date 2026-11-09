<?php

namespace App\Models;

use App\Enums\SkillLevels;
use App\Enums\SkillTypes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Skill extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'url_icon',
        'type',
        'level',
        'description'
    ];

    protected function casts()
    {
        return [
            'type' => SkillTypes::class,
            'level' => SkillLevels::class,
        ];
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
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
