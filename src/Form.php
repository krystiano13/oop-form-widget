<?php

namespace App;

class Form
{
    private string $action;
    private string $method = "GET";
    private string $content;

    /**
     * Elements array
     * @var array<string>
     */
    private array $elements = [];

    public function __construct(string $action, string $method)
    {
        $this->action = $action;
        $this->method = $method;
        $this->elements = [];
        $this->content = "";
    }

    public function insert(string $element):void {
        array_push($this->elements, $element);
    }

    public function render() {
        foreach ($this->elements as $item) {
            $this->content .= $item;
        }

        return <<<FORM
            <form>
            {$this->content}
            </form>
        FORM;

    }
}