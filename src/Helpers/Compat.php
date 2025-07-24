<?php

namespace Saleh7\Zatca\Helpers;

class Compat
{
    public static function strContains(string $haystack, string $needle): bool
    {
        if (function_exists('str_contains')) {
            return str_contains($haystack, $needle);
        }

        return mb_strpos($haystack, $needle) !== false;
    }

    public static function strStartsWith(string $haystack, string $needle): bool
    {
        if (function_exists('str_starts_with')) {
            return str_starts_with($haystack, $needle);
        }

        return strncmp($haystack, $needle, strlen($needle)) === 0;
    }
}
