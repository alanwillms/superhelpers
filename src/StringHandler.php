<?php
namespace superhandlers;

class StringHandler
{
    public static function capitalize(string $self) : string
    {
        $self = mb_strtolower($self);
        return mb_strtoupper(mb_substr($self, 0, 1)) . mb_substr($self, 1);
    }

    public function chars(string $self) : array
    {
        if ($self === '') {
            return [];
        }
        return str_split($self);
    }

    public static function downcase(string $self) : string
    {
        return mb_strtolower($self);
    }

    public static function isEmpty(string $self) : bool
    {
        return $self === '';
    }

    public static function endsWith(string $self, ...$others) : bool
    {
        if (count($others) == 1) {
            $others = (array) $others[0];
        }

        foreach ($others as $other) {
            if ($other === '') {
                return true;
            }

            $offset = mb_strlen($self) - mb_strlen($other);
            if ($offset >= 0 && false !== mb_strpos($self, $other, $offset)) {
                return true;
            }
        }
        return false;
    }

    public static function replace(string $self, $from, $to) : string
    {
        return str_replace($from, $to, $self);
    }

    public static function regexReplace(string $self, string $pattern, string $replacement, string $modifiers = 'msr') : string
    {
        return mb_ereg_replace($pattern, $replacement, $self, $modifiers);
    }

    public static function includes(string $self, string $other) : bool
    {
        return false !== mb_strpos($self, $other);
    }
}
