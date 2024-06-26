<?php

namespace Febryars33\ColorCraft\Proccessor;

use Febryars33\ColorCraft\Interface\ConverterInterface;

/**
 * Converts Minecraft color and format codes to HTML spans with CSS classes.
 */
class Converter implements ConverterInterface
{
    /**
     * The original string to be converted.
     *
     * @var string
     */
    protected string $string;

    /**
     * The plain text representation of formatted text.
     *
     * @var string
     */
    protected string $plain_text = '';

    /**
     * Opening HTML span tag for formatted text.
     *
     * @var string
     */
    protected string $span_open = '';

    /**
     * Stack to keep track of open HTML span tags.
     *
     * @var array
     */
    protected array $span_close = [];

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * Check if given code is a Minecraft color code.
     *
     * @param string $code
     * @return bool
     */
    protected function isColorCode(string $code): bool
    {
        return isset(Config::$colors[$code]);
    }

    /**
     * Check if given code is a Minecraft format code.
     *
     * @param string $code
     * @return bool
     */
    protected function isFormatCode(string $code): bool
    {
        return isset(Config::$formats[$code]);
    }

    /**
     * Opens and closes HTML span tags based on the stack of closing tags.
     *
     * @return void
     */
    protected function openCloseSpan(): void
    {
        while (!empty($this->span_close)) {
            $this->span_open .= array_pop($this->span_close);
        }
    }

    /**
     * Apply color code to the HTML output.
     *
     * @param string $code
     * @param Converter $converter
     * @return void
     */
    protected function applyColor(string $code): void
    {
        $this->openCloseSpan();
        $this->span_open .= '<span class="colorcraft ' . Config::$colors[$code] . '">';
        $this->span_close[] = '</span>';
    }

    /**
     * Apply format code to the HTML output.
     *
     * @param string $code
     * @param Converter $converter
     * @return void
     */
    protected function applyFormat(string $code): void
    {
        $this->span_open .= '<span class="' . Config::$formats[$code] . '">';
        $this->span_close[] = '</span>';
    }

    /**
     * Explodes a string into an array using the Minecraft section sign (§) as the delimiter.
     *
     * @param string $text
     * @return array
     */
    protected function explode(string $text): array
    {
        return explode('§', $text);
    }

    /**
     * Extracts the Minecraft code from a segment of text.
     *
     * @param string $segment
     * @return string
     */
    protected function getCode(string $segment): string
    {
        return strtolower(substr($segment, 0, 1));
    }

    /**
     * Retrieves the content following the Minecraft code in a segment of text.
     *
     * @param string $segment
     * @return string
     */
    protected function getContent(string $segment): string
    {
        return substr($segment, 1);
    }

    /**
     * Convert Minecraft formatted text to HTML with CSS classes.
     *
     * @return string
     */
    public function toHtml(): string
    {
        foreach ($this->explode($this->string) as $segment) {

            if ($segment === '') continue;

            $code = $this->getCode($segment);

            $content = $this->getContent($segment);

            if ($this->isColorCode($code)) {
                $this->applyColor($code);
            } elseif ($this->isFormatCode($code)) {
                $this->applyFormat($code);
            }

            $this->span_open .= htmlspecialchars($content);
        }

        $this->openCloseSpan();

        return $this->span_open;
    }

    /**
     * Apply Minecraft codes and convert formatted text to plain text.
     *
     * @return string
     */
    public function toPlainText(): string
    {
        foreach ($this->explode($this->string) as $segment) {

            $content = $this->getContent($segment);

            $this->plain_text .= $content;
        }

        return $this->plain_text;
    }
}
