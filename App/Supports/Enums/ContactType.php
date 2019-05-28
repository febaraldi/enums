<?php


namespace App\Supports\Enums;


class ContactType extends EnumBase
{
    CONST options = [
        [
            'value' => 'telefone',
            'label' => 'Telefone'
        ],
        [
            'value' => 'celular',
            'label' => 'Celular'
        ],
        [
            'value' => 'email',
            'label' => 'E-mail'
        ]
    ];
}