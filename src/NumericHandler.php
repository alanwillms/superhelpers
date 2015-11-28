<?php
namespace superhandlers;

class NumericHandler
{
    public static function round(int $self, int $precision = 0) : float
    {
        return round($self, $precision);
    }
}
