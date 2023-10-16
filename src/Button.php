<?php

namespace App;

class Button
{
    private string $type;
    private string $content;

    public function __construct(string $type, string $content)
    {
        $this->type = $type;
        $this->content = $content;
    }

    public function __invoke():string
    {
        return "<button type='{$this->type}'>{$this->content}</button>";
    }
}