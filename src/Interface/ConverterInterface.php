<?php

namespace Febryars33\ColorCraft\Interface;

interface ConverterInterface
{
    /**
     * Convert Minecraft formatted text to HTML with CSS classes.
     *
     * @return string
     */
    public function toHtml(): string;

    /**
     * Apply Minecraft codes and convert formatted text to plain text.
     *
     * @return string
     */
    public function toPlainText(): string;
}
