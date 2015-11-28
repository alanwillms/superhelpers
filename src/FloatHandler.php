<?php
namespace superhandlers;

class FloatHandler extends NumericHandler implements Castable, Nullable
{
    public static function isNull($self) : bool
    {
        return false;
    }

    public static function toBool($self) : bool
    {
        return $self !== 0.0;
    }

    public static function toFloat($self) : float
    {
        return $self;
    }

    public static function toInt($self, int $base = 10) : int
    {
        return intval($self);
    }

    public static function toArray($self) : array
    {
        return [];
    }

    public static function toString($self) : string
    {
        return strval($self);
    }

    public static function ceil(float $self) : int
    {
        return ceil($self);
    }

    public static function floor(float $self) : int
    {
        return floor($self);
    }
}
