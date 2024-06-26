<?php

namespace Febryars33\ColorCraft;

use Febryars33\ColorCraft\Interface\ConverterInterface;
use Febryars33\ColorCraft\Proccessor\Converter;

class ColorCraft
{
    /**
     * Converting Minecraft formatted text to HTML with CSS classes.
     *
     * @param string $string
     * @return ConverterInterface
     */
    public static function convert(string $string): ConverterInterface
    {
        return new Converter($string);
    }
}
