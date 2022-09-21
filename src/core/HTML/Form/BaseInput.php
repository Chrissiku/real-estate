<?php
namespace App\Core\HTML\Form;

abstract class BaseInput extends HTMLElement
{

    protected string $name;

    protected string $value;

    protected string $label;

    public function __construct(string $name, string $value = "", string $label = "")
    {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
    }

    public function render(): string
    {
        return sprintf(
            '
                <div>
                    <label>%s</label><br>
                    %s
                </div>
            ',
            $this->label,
            $this->renderField()
        );
    }

    abstract function renderField(): string;
}
