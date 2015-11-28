<?php
namespace superhandlers;

class StringHandler
{
    public static function capitalize(string $self) : string
    {
        $self = mb_strtolower($self);
        return mb_strtoupper(mb_substr($self, 0, 1)) . mb_substr($self, 1);
    }

    public static function downcase(string $self) : string
    {
        return mb_strtolower($self);
    }

    public static function upcase(string $self) : string
    {
        return mb_strtoupper($self);
    }

    public function chars(string $self) : array
    {
        if ($self === '') {
            return [];
        }
        return preg_split('//u', $self, -1, PREG_SPLIT_NO_EMPTY);
    }

    public static function isEmpty(string $self) : bool
    {
        return $self === '';
    }

    public static function startsWith(string $self, ...$others) : bool
    {
        if (count($others) == 1) {
            $others = (array) $others[0];
        }

        foreach ($others as $other) {
            if ($other === '' || 0 === mb_strpos($self, $other)) {
                return true;
            }
        }
        return false;
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

    public static function regexReplace(string $self, string $pattern, string $replacement) : string
    {
        return preg_replace($pattern, $replacement, $self);
    }

    public static function includes(string $self, string $other) : bool
    {
        return false !== mb_strpos($self, $other);
    }

    public static function index(string $self, string $substring, int $offset = 0)
    {
        return mb_strpos($self, $substring, $offset);
    }

    public static function length(string $self) : int
    {
        return mb_strlen($self);
    }

    public function lines(string $self) : array
    {
        if ($self === '') {
            return [];
        }
        return explode("\n", $self);
    }

    public static function center(string $self, int $length, string $padding = ' ') : string
    {
        return self::pad($self, $length, $padding, STR_PAD_BOTH);
    }

    public static function padLeft(string $self, int $length, string $padding = ' ') : string
    {
        return self::pad($self, $length, $padding, STR_PAD_LEFT);
    }

    public static function padRight(string $self, int $length, string $padding = ' ') : string
    {
        return self::pad($self, $length, $padding, STR_PAD_RIGHT);
    }

    public static function trim(string $self) : string
    {
        return trim($self);
    }

    public static function trimLeft(string $self) : string
    {
        return ltrim($self);
    }

    public static function trimRight(string $self) : string
    {
        return rtrim($self);
    }

    public static function matches(string $self, string $regex) : bool
    {
        return 1 === preg_match($regex, $self);
    }

    public static function reverse(string $self) : string
    {
        return implode(array_reverse($self->chars()));
    }

    public static function split(string $self, string $separator = ' ') : array
    {
        return array_values(array_filter(explode($separator, $self)));
    }

    public static function isNull(string $self) : bool
    {
        return false;
    }

    public static function toBool(string $self) : bool
    {
        return boolval($self);
    }

    public static function toFloat(string $self) : float
    {
        return floatval($self);
    }

    public static function toInt(string $self, int $base = 10) : int
    {
        return intval($self, $base);
    }

    public static function toArray(string $self) : array
    {
        return $self->chars();
    }

    public static function toString(string $self) : string
    {
        return $self;
    }

    /**
     * @see http://stackoverflow.com/questions/14773072/php-str-pad-unicode-issue
     */
    private static function pad($string, $length, $padding = ' ', $direction = STR_PAD_RIGHT)
    {
        $padBefore = $direction === STR_PAD_BOTH || $direction === STR_PAD_LEFT;
        $padAfter = $direction === STR_PAD_BOTH || $direction === STR_PAD_RIGHT;
        $length -= mb_strlen($string);
        $targetLen = $padBefore && $padAfter ? $length / 2 : $length;
        $stringToRepeatLength = mb_strlen($padding);
        $repeatTimes = ceil($targetLen / $stringToRepeatLength);
        $repeatedString = str_repeat($padding, max(0, $repeatTimes));
        $before = $padBefore ? mb_substr($repeatedString, 0, floor($targetLen)) : '';
        $after = $padAfter ? mb_substr($repeatedString, 0, ceil($targetLen)) : '';
        return $before . $string . $after;
    }
}
