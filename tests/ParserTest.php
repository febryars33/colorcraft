<?php

use Febryars33\Colorcraft\Parser;
use PHPUnit\Framework\TestCase;

require_once "./src/Parser.php";

class ParserTest extends TestCase
{
    public function testColorParsed(): void
    {
        $colorcraft = new Parser;

        $string_test = '&aHello World';
        $string_colored = $colorcraft->parser($string_test);

        $this->assertEquals('<span class="mc-color mc-a">Hello World</span>', $string_colored);
    }
}
