<?php

namespace DurianSoftware\Helper;

class FileExtensionHelper
{
    public static function encode($ext)
    {
        for ($i=0; $i<strlen($ext); $i++) {
            $ext{$i} = chr(ord($ext{$i})+1);
        }
        return $ext;
    }

    public static function decode($ext)
    {
        for ($i=0; $i<strlen($ext); $i++) {
            $ext{$i} = chr(ord($ext{$i})-1);
        }
        return $ext;
    }
}
