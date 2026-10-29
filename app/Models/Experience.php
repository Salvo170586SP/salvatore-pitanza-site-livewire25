<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['user_id', 'title', 'start_date', 'end_date', 'description'];

    protected function casts()
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
        ];
    }
  
    public function user()
    {
        return $this->hasOne(User::class);
    }

   public function getDate(CarbonInterface|string|null $date)
{
    if (blank($date)) {
        return;
    }

    return mb_convert_case(
        Carbon::parse($date)
            ->locale('it')
            ->translatedFormat('d F Y'),
        MB_CASE_TITLE,
        'UTF-8'
    );
}
}
