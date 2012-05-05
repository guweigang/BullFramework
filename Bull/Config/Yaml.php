<?php

class Bull_Config_Yaml extends Bull_Config_Abstract
{
    public function load($file)
    {
        $realfile = Bull_Util_File::exists($file);
        
        if (!$realfile) {
            throw new Bull_Config_Exception("File: {$file} Not exists.");
        }
        
        $this->configs = Bull_Config_Spyc::YAMLLoad($realfile);
        
        return $this;
    }
}