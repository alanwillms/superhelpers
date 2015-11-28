<?php
namespace superhandlers;

class IntHandler implements Castable, Nullable
{
    public static function isNull($self) : bool
    {
        return false;
    }

    public static function toBool($self) : bool
    {
        return $self !== 0;
    }

    public static function toFloat($self) : float
    {
        return floatval($self);
    }

    public static function toInt($self, int $base = 10) : int
    {
        return $self;
    }

    public static function toArray($self) : array
    {
        return [];
    }

    public static function toString($self) : string
    {
        return strval($self);
    }
}
