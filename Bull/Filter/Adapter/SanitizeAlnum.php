<?php

class Bull_Filter_Adapter_SanitizeAlnum extends Bull_Filter_Adapter_Abstract
{
    public function sanitizeAlnum($value)
    {
        // if the value is not required, and is blank, sanitize to null        
        $null = ! $this->objManager->getRequire() &&
            $this->objManager->validateBlank($value);                         

        if ($null) {
            return null;
        }

        // normal sanitize                                                     
        return preg_replace('/[^a-z0-9]/i', '', $value);
    }

}