<?php
/**
 *
 * 配置抽象基类 (PHP_VERSION >= 5.3.0)
 *
 *
 */
abstract class Bull_Config_Abstract
{
    protected $configs = array();
    
    public function __construct($configs = array())
    {
        $this->configs = $configs;
    }
    
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
                return null;  
            }
            $result = $result [$key];  
        }
        return $result;  
    }
    
    /* $config->db->master->hostname; */
    public function __get($key)
    {
        if (!array_key_exists($key, $this->configs)) {
            return null;
        }
        
        $config = $this->configs[$key];
        if (is_array($config)) {
            if (count($config) >0) {
                $class  = get_called_class();
                $config =  new $class($config);                
            } else {
                $config = null;
            }
        }
        return $config;
    }
    
    // @TODO: need to delete
    public function toObject($spec)
    {
        if (! is_array($spec)) {
            return $spec;
        } else {
            $obj = new stdClass();
            if (count($spec) > 0) {
                foreach($spec as $name => $value) {
                    $name = trim($name);
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