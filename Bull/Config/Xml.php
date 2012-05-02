<?php

class Bull_Config_Xml extends Bull_Config_Abstract
{
    public function load($file)
    {
        if (file_exists($file) == false) {
            return false;
        }
        
        $xml = simplexml_load_file($file);
        
        $json = json_encode($xml);
        
        $this->configs = json_decode($json,TRUE);
    }
}