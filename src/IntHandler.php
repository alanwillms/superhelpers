<?php
namespace superhandlers;

class IntHandler extends NumericHandler implements Castable, Nullable
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

    public static function char(int $self) : string
    {
        return chr($self);
    }

    public static function denominator(int $self) : int
    {
        return 1;
    }

    public static function downTo(int $self, int $to = 0)
    {
        for ($i = $self; $i >= $to; $i--) {
            yield $i;
        }
    }

    public static function upTo(int $self, int $to = 0)
    {
        for ($i = $self; $i <= $to; $i++) {
            yield $i;
        }
    }

    public static function isEven(int $self) : bool
    {
        return $self % 2 == 0;
    }

    public static function isOdd(int $self) : bool
    {
        return $self % 2 != 0;
    }

    public static function previous(int $self) : int
    {
        return $self - 1;
    }

    public static function next(int $self) : int
    {
        return $self + 1;
    }

    public static function round(int $self, int $precision = 0) : float
    {
        return round($self, $precision);
    }

    public static function times(int $self, \Closure $callback)
    {
        for ($i = 0; $i < abs($self); $i++) {
            $callback($i);
        }
    }
}
