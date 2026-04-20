<?php

if (! function_exists('t')) {
    function t(string $key): string
    {
        $lang = session('lang', 'pt');
        $value = config("{$lang}.{$key}");

        if ($value === null) {
            $value = config("pt.{$key}", $key);
        }

        return (string) $value;
    }
}

if (! function_exists('current_lang')) {
    function current_lang(): string
    {
        return session('lang', 'pt');
    }
}
