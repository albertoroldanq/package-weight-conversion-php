<?php
declare(strict_types=1);

namespace Albertoroldanq\WeightConversions;

class WeightConversions
{
    public static function kilogramsToPounds(float $kilograms): float
    {
        return $kilograms * 2.2046;
    }

    public static function poundsToKilograms(float $pounds): float
    {
        return $pounds / 2.2046;
    }

    public static function kilogramsToStones(float $kilograms): float
    {
        return $kilograms * 0.15747;
    }

    public static function stonesToKilograms(float $stones): float
    {
        return $stones / 0.15747;
    }

    public static function stonesToPounds(float $stones): float
    {
        return $stones * 14;
    }

    public static function poundsToStones(float $pounds): float
    {
        return $pounds / 14;
    }

}
