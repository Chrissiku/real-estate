<?php
namespace App\Core\HTML\Form;

abstract class HTMLElement
{
    abstract function render(): string;
}