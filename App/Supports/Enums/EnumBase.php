<?php


namespace App\Supports\Enums;


class EnumBase
{
    CONST options = [];

    /**
     * Faz get em uma das opções do Enum usando o value como parâmetro
     * Retorna a opção
     * @param $value
     * @return mixed
     */
    public static function getOption($value)
    {
        return collect(static::options)->where('value', $value)->first();
    }

    /**
     * Realiza o get nos values da opções
     * Retornando uma array de values
     * @return array
     */
    public static function getValues()
    {
        return collect(static::options)->pluck('value')->values()->toArray();
    }

    /**
     * Realiza o get nos labels das opções
     * Retornando uma array de labels
     * @return array
     */
    public static function getLabels()
    {
        return collect(static::options)->pluck('labels')->values()->toArray();
    }

    /**
     * Faz get do label de uma opção, usando como parâmetro o value
     * Retorna uma string com o valor do label
     * @param $value
     * @return string
     */
    public static function getLabel($value)
    {
        return collect(static::options)->where('value', $value)->first()['label'];
    }

    /**
     * Faz get do value de uma opção, usando como parâmetro o label
     * Retorna uma string com o valor do value
     * @param $label
     * @return string
     */
    public static function getValue($label)
    {
        return collect(static::options)->where('label', $label)->first()['label'];
    }

    /**
     * Ordena as opções, por padrão orderna de forma 'ASC' com base no label
     * Podendo receber como parametro outra opção de ordenação e outra coluna para ser base
     * @param string $direction
     * @param string $column
     * @return array
     */
    public static function sort($direction = 'ASC', $column = 'label')
    {
        ($direction == 'ASC') ?
            $ordered = collect(static::options)->sortBy($column)
            :
            $ordered = collect(static::options)->sortByDesc($column)
        ;
        return $ordered->values()->toArray();
    }
}