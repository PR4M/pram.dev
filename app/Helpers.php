<?php

if (! function_exists('display_price')) {
    function display_price($value) {
        return get_lang() == 'en' ? "${$value}" : "Rp. $value";
    }
}

if (! function_exists('get_lang')) {
    function get_lang() {
        $s = strtok(request()->server('HTTP_HOST'), '.');
        return strlen($s) == 2 ? $s : 'en';
    }
}
