<?php
/**
 * 
 * Registry for storing objects, with built-in lazy loading.
 * 
 * @package Bull
 * 
 */
class Bull_Registry
{
    /**
     * 
     * Map of registry names to object instances (or their specs for on-demand 
     * creation).
     * 
     * @var array
     * 
     */
    protected static $_obj = array();
    
    /**
     * 
     * Constructor is disabled to enforce a singleton pattern.
     * 
     */
    final private function __construct() {}
    
    /**
     * 
     * Accesses an object in the registry.
     * 
     * @param string $name The registered name.
     * 
     * @return object The object registered under $name.
     * 
     * @todo Localize these errors.
     * 
     */
    public static function get($name)
    {
        // has the shared object already been loaded?
        if (! Bull_Registry::exists($name)) {
            throw new Bull_Exception('ERR_NOT_IN_REGISTRY');
        }
        
        // was the registration for a lazy-load?
        if (Bull_Registry::$_obj[$name] instanceof Bull_Lazy) {
            $call = Bull_Registry::$_obj[$name];
            Bull_Registry::$_obj[$name] = $call();
        }
        
        // done
        return Bull_Registry::$_obj[$name];
    }
    
    /**
     * 
     * Registers an object under a unique name.
     * 
     * @param string $name The name under which to register the object.
     * 
     * @param object $value The registry specification.
     * 
     * @return void
     * 
     */
    public static function set($name, $value)
    {
        if (Bull_Registry::exists($name)) {
            // name already exists in registry
            throw new Bull_Exception('ERR_REGISTRY_NAME_EXISTS');
        }

        if (!is_object($value)) {
            throw new Bull_Exception("ERR_REGISTRY_FAILURE");
        }

        // register as an object, or as a class and config?
        if ($value instanceof Closure) {
            // register a class and config for lazy loading
            $value = new Bull_Lazy($value);
        }
        
        Bull_Registry::$_obj[$name] = $value;
    }
    
    /**
     * 
     * Check to see if an object name already exists in the registry.
     * 
     * @param string $name The name to check.
     * 
     * @return bool
     * 
     */
    public static function exists($name)
    {
        return ! empty(Bull_Registry::$_obj[$name]);
    }    
}