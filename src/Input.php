<?php

namespace App;

class Input
{
    private string $type;
    private string $placeholder;
    private string $name;

    public function __construct(string $type, string $placeholder, string $name)
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->name = $name;
    }

    public function __invoke():string
    {
        return "<input class='m-4' type='{$this->type}' placeholder='{$this->placeholder}' name='{$this->name}' />";
    }
}