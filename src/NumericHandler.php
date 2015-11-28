<?php
namespace superhandlers;

class NumericHandler
{
    public static function round($self, int $precision = 0) : float
    {
        return round($self, $precision);
    }

    public static function absolute($self)
    {
        return abs($self);
    }
}
