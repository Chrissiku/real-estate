<?php
namespace App\Core\HTML\Form;

class TextInput extends BaseInput
{

    public function renderField(): string
    {
        return sprintf(
            '<input type="text" name="%s" value="%s" />',
            $this->name,
            $this->value
        );
    }

}