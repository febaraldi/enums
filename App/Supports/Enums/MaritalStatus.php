<?php


namespace App\Supports\Enums;


class MaritalStatus extends EnumBase
{
    CONST options = [
        [
            'value' => 'solteiro',
            'label' => 'Solteiro(a)'
        ],
        [
            'value' => 'casado',
            'label' => 'Casado(a)'
        ],
        [
            'value' => 'divorciado',
            'label' => 'Divorciado(a)'
        ],
        [
            'value' => 'viuvo',
            'label' => 'Viúvo(a)'
        ],
        [
            'value' => 'separado',
            'label' => 'Separado(a)'
        ]
    ];
}