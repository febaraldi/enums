<?php


namespace App\Supports\Enums;


class Gender extends EnumBase
{
    CONST options = [
        [
            'value' => 'masculino',
            'label' => 'Masculino'
        ],
        [
            'value' => 'feminino',
            'label' => 'Feminino'
        ]
    ];
}