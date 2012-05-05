<?php

class Bull_Config_Php extends Bull_Config_Abstract
{
    public function load($file)
    {
        $realfile = Bull_Util_File::exists($file);
        
        if (!$realfile) {
            throw new Bull_Config_Exception("File: {$file} Not exists.");
        }
        include $realfile;
        unset($realfile, $file);
        
        $vars = get_defined_vars();
        foreach ($vars as $key => $val) {
            if ($key == 'this') {
                continue;
            }
            $this->configs[$key] = $val;
        }
        
        return $this;
    }
}