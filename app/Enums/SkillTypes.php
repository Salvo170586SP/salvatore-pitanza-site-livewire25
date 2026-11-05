<?php

namespace App\Enums;

enum SkillTypes: string
{
    case Code = 'code';
    case Db = 'db';
    case Tool = 'tool';
    case SoftSkill = 'soft_skil';

    public function rank(): int
    {
        return match ($this) {
            self::Code => 1,
            self::Db => 2,
            self::Tool => 3,
            self::SoftSkill => 4,
        };
    }
}
