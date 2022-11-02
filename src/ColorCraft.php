<?php


namespace ColorCraft\Parser;

/**
 * ColorCraft class
 * 
 * @version 1.0.1
 * @license MIT
 */
class ColorCraft
{

    /**
     * String
     *
     * @var string
     */
    protected string $string = '';

    /**
     * Parsering color
     *
     * @param string $string
     * @return string
     */
    public function parser(string $string): string
    {
        preg_match_all("/[^§&]*[^§&]|[§&][0-9a-z][^§&]*/", $string, $broken_up_strings);
        $this->string = "";
        foreach ($broken_up_strings as $results) {
            $ending = '';
            foreach ($results as $individual) {
                $code = preg_split("/[&§][0-9a-z]/", $individual);
                preg_match("/[&§][0-9a-z]/", $individual, $prefix);
                if (isset($prefix[0])) {
                    $actualcode = substr($prefix[0], 1);
                    switch ($actualcode) {
                        case '0':
                            $this->string = $this->string . '<span class="mc-color mc-0">';
                            $ending = $ending . "</span>";
                            break;

                        case "1":
                            $this->string = $this->string . '<span class="mc-color mc-1">';
                            $ending = $ending . "</span>";
                            break;

                        case "2":
                            $this->string = $this->string . '<span class="mc-color mc-2">';
                            $ending = $ending . "</span>";
                            break;

                        case "3":
                            $this->string = $this->string . '<span class="mc-color mc-3">';
                            $ending = $ending . "</span>";
                            break;

                        case "4":
                            $this->string = $this->string . '<span class="mc-color mc-4">';
                            $ending = $ending . "</span>";
                            break;

                        case "5":
                            $this->string = $this->string . '<span class="mc-color mc-5">';
                            $ending = $ending . "</span>";
                            break;

                        case "6":
                            $this->string = $this->string . '<span class="mc-color mc-6">';
                            $ending = $ending . "</span>";
                            break;

                        case "7":
                            $this->string = $this->string . '<span class="mc-color mc-7">';
                            $ending = $ending . "</span>";
                            break;

                        case "8":
                            $this->string = $this->string . '<span class="mc-color mc-8">';
                            $ending = $ending . "</span>";
                            break;

                        case "9":
                            $this->string = $this->string . '<span class="mc-color mc-9">';
                            $ending = $ending . "</span>";
                            break;

                        case "a":
                            $this->string = $this->string . '<span class="mc-color mc-a">';
                            $ending = $ending . "</span>";
                            break;

                        case "b":
                            $this->string = $this->string . '<span class="mc-color mc-b">';
                            $ending = $ending . "</span>";
                            break;

                        case "c":
                            $this->string = $this->string . '<span class="mc-color mc-c">';
                            $ending = $ending . "</span>";
                            break;

                        case "d":
                            $this->string = $this->string . '<span class="mc-color mc-d">';
                            $ending = $ending . "</span>";
                            break;
                        case "e":
                            $this->string = $this->string . '<span class="mc-color mc-e">';
                            $ending = $ending . "</span>";
                            break;

                        case "f":
                            $this->string = $this->string . '<span class="mc-color mc-f">';
                            $ending = $ending . "</span>";
                            break;

                        case "l":
                            $this->string = $this->string . '<span class="mc-l">';
                            $ending = "</span>" . $ending;
                            break;

                        case "m":
                            $this->string = $this->string . '<span class="mc-m">';
                            $ending = "</span>" . $ending;
                            break;

                        case "n":
                            $this->string = $this->string . '<span class="mc-n">';
                            $ending = "</span>" . $ending;
                            break;

                        case "o":
                            $this->string = $this->string . '<span class="mc-o">';
                            $ending = "</span>" . $ending;
                            break;

                        case "r":
                            $this->string = $this->string . '<span class="mc-r">';
                            $ending = '</span>';
                            break;

                        case 'k':
                            $this->string = $this->string . '<span class="mc-k">';
                            $ending = '</span>';
                            break;
                    }
                    if (isset($code[1])) {
                        $this->string = $this->string . $code[1];
                        if (isset($ending) && strlen($individual) > 2) {
                            $this->string = $this->string . $ending;
                            $ending = '';
                        }
                    }
                } else {
                    $this->string = $this->string . $individual;
                }
            }
        }

        return $this->string;
    }
}
