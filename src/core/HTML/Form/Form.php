<?php

namespace App\Core\HTML\Form;

class Form extends HTMLElement
{
    private string $action;

    private string $method;

    private array $elements = [];

    public function __construct(string $action = '', string $method = '')
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function addElement(HTMLElement $element)
    {
        $this->elements[] = $element;
    }

    public function render(): string
    {
        $content =  implode(PHP_EOL, array_map(fn ($element) => $element->render(), $this->elements));
        return sprintf(
            '<div>
                <form action="%s" method="%s">
                    %s
                </form>
            </div>',
            $this->action,
            $this->method,
            $content
        );
    }
}
