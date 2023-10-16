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
        return <<<BUTTON
            <button 
                class='m-4 cursor-pointer bg-emerald-400 p-2 pr-16 pl-16 text-amber-50' 
                type='{$this->type}'>
                {$this->content}
            </button>
        BUTTON;

    }
}