<?php

namespace Febryars33\ColorCraft;

use Exception;

class Coloring
{
    const PATTERN_TO_STRING = '/[^§&]*[^§&]|[§&][0-9a-z][^§&]*/';

    const PATTERN_FOR_SPLIT = '/[&§][0-9a-z]/';

    /**
     * The Minecraft standards colors allowed.
     *
     * @var array
     */
    protected $allowed_colors = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        'a',
        'b',
        'c',
        'd',
        'e',
        'f'
    ];

    /**
     * The Minecraft standard formats allowed.
     *
     * @var array
     */
    protected $allowed_formats = [
        'l',
        'm',
        'n',
        'o'
    ];

    /**
     * The Minecraft standard magic formats allowed.
     *
     * @var array
     */
    protected $allowed_magics = [
        'r',
        'k'
    ];

    /**
     * String input.
     *
     * @var string
     */
    protected $string;

    /**
     * Start of HTML span tag.
     *
     * @var string
     */
    protected $start_html;

    /**
     * End of HTML span tag.
     *
     * @var string
     */
    protected $end_html;

    /**
     * Constructor.
     *
     * @param string  $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * Parse string to array by color codes.
     *
     * @return array
     */
    public function toArray(): array
    {
        if (preg_match_all(Coloring::PATTERN_TO_STRING, $this->string, $search_subject)) {
            foreach (array_shift($search_subject) as $key => $value) {
                $shifted_array[$key] = $value;
            }
            return (new Encoding)->encodingConverter($shifted_array);
        } else {
            throw new Exception('Alt code parsing is failed.');
        }
    }

    /**
     * Make the HTML span tag.
     *
     * @param string  $actual_code
     * @return void
     */
    public function makeSpanTag(string $actual_code)
    {
        foreach ($this->allowed_colors as $key => $value) {
            if ($actual_code === $value) {
                $this->textColoring($actual_code);
            }
        }
        foreach ($this->allowed_formats as $key => $value) {
            if ($actual_code === $value) {
                $this->textFormatting($actual_code);
            }
        }
        foreach ($this->allowed_magics as $key => $value) {
            if ($actual_code === $value) {
                $this->textMagic($actual_code);
            }
        }
    }

    /**
     * Processing the color text.
     *
     * @param string  $code
     * @return void
     */
    public function textColoring(string $code)
    {
        $this->start_html = $this->start_html . '<span class="mc-color mc-' . $code . '">';
        $this->end_html = $this->end_html . '</span>';
    }

    /**
     * Processing the format text.
     *
     * @param string  $code
     * @return void
     */
    public function textFormatting(string $code)
    {
        $this->start_html = $this->start_html . '<span class="mc-' . $code . '">';
        $this->end_html = '</span>' . $this->end_html;
    }

    /**
     * Processing the magic text.
     *
     * @param string  $code
     * @return void
     */
    public function textMagic(string $code)
    {
        $this->start_html = $this->start_html . '<span class="mc-' . $code . '">';
        $this->end_html = '</span>';
    }

    /**
     * Making for html output.
     *
     * @param array $parsed_array
     * @return string
     */
    public function makeHtml(array $parsed_array): string
    {
        foreach ($parsed_array as $key => $value) {
            $splited = preg_split(Coloring::PATTERN_FOR_SPLIT, $value);
            if (preg_match(Coloring::PATTERN_FOR_SPLIT, $value, $prefix)) {
                if (isset($prefix[0])) {
                    $this->makeSpanTag(substr($prefix[0], 1));
                    if (isset($splited[1])) {
                        $this->start_html = $this->start_html . $splited[1];
                        if (isset($this->end_html) && strlen($value) > 2) {
                            $this->start_html = $this->start_html . $this->end_html;
                            $this->end_html = '';
                        }
                    }
                } else {
                    $this->start_html = $this->start_html . $value;
                }
            } else {
                throw new Exception('Perform a regular expression match is failed.');
            }
        }
        return $this->start_html;
    }
}
