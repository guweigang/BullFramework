<?php
/**
 *
 * 单例抽象类(PHP_VERSION >= 5.3.0)
 *
 * @package Bull
 *
 * @author Gu Weigang <guweigang@baidu.com>
 *
 */
abstract class Bull_Singleton
{
    protected function __construct($param = array()) {}
    
    public static function getInstance($param = array())
    {
        
        if (!isset(static::$instance)) {
            
            static::$instance = new static($param);
        }
        
        return static::$instance;
    }
}