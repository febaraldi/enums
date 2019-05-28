<?php


namespace App\Supports\Enums;


class Boolean extends EnumBase
{
    CONST options = [
        [
            'value' => true,
            'label' => 'Sim'
        ],
        [
            'value' => false,
            'label' => 'Não'
        ]
    ];
}