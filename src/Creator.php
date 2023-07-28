<?php

namespace Febryars33\ColorCraft;

class Creator
{
    /**
     * String variable.
     *
     * @var string
     */
    protected $string;

    /**
     * Constructor
     *
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * Make the html output.
     *
     * @return string
     */
    public function toHtml(): string
    {
        $coloring = new Coloring($this->string);
        return $coloring->makeHtml($coloring->toArray($coloring->toArray()));
    }

    /**
     * Make the array output.
     *
     * @return array
     */
    public function toArray(): array
    {
        return (new Coloring($this->string))->toArray();
    }
}
