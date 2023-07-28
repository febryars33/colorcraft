<?php

namespace Febryars33\ColorCraft;

use PHPUnit\Framework\TestCase;

final class HtmlTest extends TestCase
{
    public function testToHtmlOutput()
    {
        $this->assertSame(
            '<span class="mc-color mc-b">Hello </span><span class="mc-color mc-a">World </span><span class="mc-color mc-4">✪✪✪✪</span>',
            Parser::make('§bHello &aWorld &4✪✪✪✪')->toHtml()
        );
    }
}
