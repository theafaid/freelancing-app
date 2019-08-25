<?php

function trans($phrase)
{
    static $lang = [
        'hello' => 'اهلا',
    ];

    return $lang[$phrase];
}