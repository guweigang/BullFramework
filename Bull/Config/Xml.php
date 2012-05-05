<?php

class Bull_Config_Xml extends Bull_Config_Abstract
{
    public function load($file)
    {
        $realfile = Bull_Util_File::exists($file);
        
        if (!$realfile) {
            throw new Bull_Config_Exception("File: {$file} Not exists.");
        }
        
        $xml = simplexml_load_file($realfile);
        
        $json = json_encode($xml);
        
        $this->configs = json_decode($json,TRUE);

        return $this;
    }
}