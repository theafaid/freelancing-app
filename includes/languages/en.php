<?php

function trans($phrase)
{
    static $lang = [
        'hello' => 'Hello',
    ];

    return $lang[$phrase];
}