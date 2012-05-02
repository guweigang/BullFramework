<?php

class Bull_Config_Yaml extends Bull_Config_Abstract
{
    public function load($file)
    {
        if (file_exists($file) == false) {
            return false;
        }
        
        $this->configs = Bull_Config_Spyc::YAMLLoad($file);
        
    }
}