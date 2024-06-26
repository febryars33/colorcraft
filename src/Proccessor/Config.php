<?php

namespace Febryars33\ColorCraft\Proccessor;

/**
 * This class defines mappings of Minecraft color and format codes to corresponding HTML classes.
 */
final class Config
{
    /**
     * Mapping of Minecraft color codes to HTML classes.
     *
     * This array maps Minecraft color codes (0-9, a-f) to their corresponding CSS classes.
     *
     * @var array
     */
    public static $colors = [
        '0' => 'mc-black',
        '1' => 'mc-dark-blue',
        '2' => 'mc-dark-green',
        '3' => 'mc-dark-aqua',
        '4' => 'mc-dark-red',
        '5' => 'mc-dark-purple',
        '6' => 'mc-gold',
        '7' => 'mc-gray',
        '8' => 'mc-dark-gray',
        '9' => 'mc-blue',
        'a' => 'mc-green',
        'b' => 'mc-aqua',
        'c' => 'mc-red',
        'd' => 'mc-light-purple',
        'e' => 'mc-yellow',
        'f' => 'mc-white'
    ];

    /**
     * Mapping of Minecraft format codes to HTML classes.
     *
     * This array maps Minecraft format codes (k, l, m, n, o, r) to their corresponding CSS classes.
     * - k: Magic
     * - l: Bold
     * - m: Strikethrough
     * - n: Underline
     * - o: Italic
     * - r: Reset (resets formatting)
     *
     * @var array
     */
    public static $formats = [
        'k' => 'mc-magic',
        'l' => 'mc-bold',
        'm' => 'mc-strikethrough',
        'n' => 'mc-underline',
        'o' => 'mc-italic',
        'r' => 'mc-reset',
    ];
}
