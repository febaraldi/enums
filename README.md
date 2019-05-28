## Enums

Exemplo de execução

```php
\App\Supports\Enums\ContactType::options;
```
O retorno esperado é:
```php
[
     [
       "value" => "telefone",
       "label" => "Telefone",
     ],
     [
       "value" => "celular",
       "label" => "Celular",
     ],
     [
       "value" => "email",
       "label" => "E-mail",
     ],
]
```

Outros possíveis métodos existentes no base são:
```php 
ContactType::getOption($value);
ContactType::getValues();
ContactType::getLabels();
ContactType::getLabel($value);
ContactType::getValue($label);
ContactType::sort($direction = 'ASC', $column = 'label');
```
