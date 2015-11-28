<?php
namespace superhandlers;

interface Castable
{
    public static function toBool($self);

    public static function toFloat($self);

    public static function toInt($self, int $base);

    public static function toArray($self);

    public static function toString($self);
}