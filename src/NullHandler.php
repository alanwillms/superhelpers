<?php
namespace superhandlers;

class NullHandler
{
    public static function isNull($self) : bool
    {
        return true;
    }

    public static function toBool($self) : bool
    {
        return false;
    }

    public static function toFloat($self) : float
    {
        return 0.0;
    }

    public static function toInt($self, int $base = 10) : int
    {
        return 0;
    }

    public static function toArray($self) : array
    {
        return [];
    }

    public static function toString($self) : string
    {
        return '';
    }
}
