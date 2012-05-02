<?php

class Bull_Config_Php extends Bull_Config_Abstract
{
    public function load($file)
    {
        if (file_exists($file) == false) {
            return false;
        }

        include($file);
        unset($file);

        $vars = get_defined_vars();

        foreach ($vars as $key => $val) {
            if ($key == 'this') {
                continue;
            }
            $this->configs[$key] = $val;
        }
    }
}