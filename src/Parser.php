<?php


namespace Febryars33\Colorcraft;

/**
 * ColorCraft class
 *
 * @version 1.0.1
 * @license MIT
 */
class Parser
{
    /**
     * Parsering color
     *
     * @param string $string
     * @return string
     */
    public static function parser(string $string): string
    {
        preg_match_all("/[^§&]*[^§&]|[§&][0-9a-z][^§&]*/", $string, $broken_up_strings);
        $parsed_string = "";
        foreach ($broken_up_strings as $results) {
            $ending = '';
            foreach ($results as $individual) {
                $code = preg_split("/[&§][0-9a-z]/", $individual);
                preg_match("/[&§][0-9a-z]/", $individual, $prefix);
                if (isset($prefix[0])) {
                    $actualcode = substr($prefix[0], 1);
                    switch ($actualcode) {
                        case '0':
                            $parsed_string = $parsed_string . '<span class="mc-color mc-0">';
                            $ending = $ending . "</span>";
                            break;

                        case "1":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-1">';
                            $ending = $ending . "</span>";
                            break;

                        case "2":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-2">';
                            $ending = $ending . "</span>";
                            break;

                        case "3":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-3">';
                            $ending = $ending . "</span>";
                            break;

                        case "4":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-4">';
                            $ending = $ending . "</span>";
                            break;

                        case "5":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-5">';
                            $ending = $ending . "</span>";
                            break;

                        case "6":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-6">';
                            $ending = $ending . "</span>";
                            break;

                        case "7":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-7">';
                            $ending = $ending . "</span>";
                            break;

                        case "8":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-8">';
                            $ending = $ending . "</span>";
                            break;

                        case "9":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-9">';
                            $ending = $ending . "</span>";
                            break;

                        case "a":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-a">';
                            $ending = $ending . "</span>";
                            break;

                        case "b":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-b">';
                            $ending = $ending . "</span>";
                            break;

                        case "c":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-c">';
                            $ending = $ending . "</span>";
                            break;

                        case "d":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-d">';
                            $ending = $ending . "</span>";
                            break;
                        case "e":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-e">';
                            $ending = $ending . "</span>";
                            break;

                        case "f":
                            $parsed_string = $parsed_string . '<span class="mc-color mc-f">';
                            $ending = $ending . "</span>";
                            break;

                        case "l":
                            $parsed_string = $parsed_string . '<span class="mc-l">';
                            $ending = "</span>" . $ending;
                            break;

                        case "m":
                            $parsed_string = $parsed_string . '<span class="mc-m">';
                            $ending = "</span>" . $ending;
                            break;

                        case "n":
                            $parsed_string = $parsed_string . '<span class="mc-n">';
                            $ending = "</span>" . $ending;
                            break;

                        case "o":
                            $parsed_string = $parsed_string . '<span class="mc-o">';
                            $ending = "</span>" . $ending;
                            break;

                        case "r":
                            $parsed_string = $parsed_string . '<span class="mc-r">';
                            $ending = '</span>';
                            break;

                        case 'k':
                            $parsed_string = $parsed_string . '<span class="mc-k">';
                            $ending = '</span>';
                            break;
                    }
                    if (isset($code[1])) {
                        $parsed_string = $parsed_string . $code[1];
                        if (isset($ending) && strlen($individual) > 2) {
                            $parsed_string = $parsed_string . $ending;
                            $ending = '';
                        }
                    }
                } else {
                    $parsed_string = $parsed_string . $individual;
                }
            }
        }

        return $parsed_string;
    }
}
