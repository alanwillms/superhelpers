<?php
namespace superhandlers;

class BoolHandler implements Castable, Nullable
{
    public static function isNull($self) : bool
    {
        return false;
    }

    public static function toBool($self) : bool
    {
        return $self;
    }

    public static function toFloat($self) : float
    {
        return $self ? 1.0 : 0.0;
    }

    public static function toInt($self, int $base = 10) : int
    {
        return $self ? 1 : 0;
    }

    public static function toArray($self) : array
    {
        return [];
    }

    public static function toString($self) : string
    {
        return $self ? 'true' : 'false';
    }
}
