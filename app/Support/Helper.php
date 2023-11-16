<?php

namespace App\Support;

class Helper
{
    public static function sanitizeFilename($filename)
    {
        $disallowedSymbols = '/[\/\\\:\*\?\"\<\>\|\0\t\r\n]/';
        $cleanFilename = preg_replace($disallowedSymbols, '', $filename);

        return $cleanFilename;
    }
}
