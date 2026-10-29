<?php

namespace App\Enums;

enum SkillLevels: string
{
    case Base = 'base';
    case Medium = 'medio';
    case Advanced = 'avanzato';

    public function rank(): int
    {
        return match ($this) {
            self::Base => 1,
            self::Medium => 2,
            self::Advanced => 3,
        };
    }
}
