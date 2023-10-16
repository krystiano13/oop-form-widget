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
        return <<<INPUT
            <input 
                class='placeholder-amber-50 bg-blue-950 text-amber-50 m-4 p-1.5 outline-0' 
                type='{$this->type}' 
                placeholder='{$this->placeholder}' 
                name='{$this->name}' 
            />
        INPUT;

    }
}