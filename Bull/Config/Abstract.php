<?php
abstract class Bull_Config_Abstract
{
    protected $configs = array();

    public function __construct() {}
    
    // $config->get("db.master.hostname");
    public function get($key = "")
    {
        $result = $this->configs;
        if ($key == "") {
            return $result;
        }
        $vars = explode ('.', $key);
        foreach ($vars as $key) {
            if (! isset ( $result [$key] )) {  
                return false;  
            }
            $result = $result [$key];  
        }
        return $result;  
    }
    
    // $config->db->master->hostname;
    public function __get($key)
    {
        if (array_key_exists($key, $this->configs)) {
            return  $this->toObject($this->configs[$key]);
        }
    }
    
    // convert to object 
    public function toObject($spec)
    {
        if (! is_array($spec)) {
            return $spec;
        } else {
            $obj = new stdClass();
            if (count($spec) > 0) {
                foreach($spec as $name => $value) {
                    $name = strtolower(trim($name));
                    if (!empty($name)) {
                        $obj->$name = $this->toObject($value);
                    }
                }
                return $obj;
            } else {
                return null;
            }
        }
    }
    
    abstract public function load($file);
}