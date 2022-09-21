<?php
namespace App\Core\HTML\Form;

class PasswordInput extends BaseInput
{

    public function renderField(): string
    {
        return sprintf(
            '<input type="password" name="%s" value="%s" />',
            $this->name,
            $this->value
        );
    }

}