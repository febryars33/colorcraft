<?php

namespace Febryars33\ColorCraft;

class Parser
{
    /**
     * Make Parser Initializer.
     *
     * @param string $string
     * @return \Febryars33\ColorCraft\Creator
     */
    public static function make(string $string = '')
    {
        return new Creator($string);
    }
}
