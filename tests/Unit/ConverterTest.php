<?php

namespace Febryars33\ColorCraft\Tests\Unit;

use Febryars33\ColorCraft\ColorCraft;
use Febryars33\ColorCraft\Tests\TestCase;

class ConverterTest extends TestCase
{
    protected function setUp(): void
    {
        //
    }

    /**
     * Single color test.
     *
     * @return void
     */
    public function test_single_color(): void
    {
        $html = ColorCraft::convert('§cHello World')->toHtml();

        $this->assertEquals('<span class="colorcraft mc-red">Hello World</span>', $html);
    }

    /**
     * Multiple color test.
     *
     * @return void
     */
    public function test_multiple_color(): void
    {
        $html = ColorCraft::convert('§cHello §4World')->toHtml();

        $this->assertEquals('<span class="colorcraft mc-red">Hello </span><span class="colorcraft mc-dark-red">World</span>', $html);
    }

    /**
     * Combined color and format test.
     *
     * @return mixed
     */
    public function test_colors_with_formats(): void
    {
        $html = ColorCraft::convert('§c§k@@ §7§lAdministrator §c§k@@')->toHtml();

        $this->assertEquals('<span class="colorcraft mc-red"><span class="mc-magic">@@ </span></span><span class="colorcraft mc-gray"><span class="mc-bold">Administrator </span></span><span class="colorcraft mc-red"><span class="mc-magic">@@</span></span>', $html);
    }

    /**
     * Converting text to plain text
     *
     * @return void
     */
    public function test_plain_text()
    {
        $html = ColorCraft::convert('§cHello World')->toPlainText();

        $this->assertEquals('Hello World', $html);
    }
}
