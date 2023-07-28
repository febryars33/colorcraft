<?php

namespace Febryars33\ColorCraft;

class Encoding
{
    /**
     * Converting (question mark) to character encoding.
     *
     * @param array $array
     * @return array
     */
    public function encodingConverter(array $array): array
    {
        foreach ($array as $key => $value) {
            $fixed[$key] = iconv(mb_detect_encoding($value, mb_detect_order(), true), 'UTF-8', $value);
        }
        return $fixed;
    }
}
