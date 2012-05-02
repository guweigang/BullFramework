<?php
/**
 *
 * 获取命令行参数(PHP_VERSION > 5.3.0)
 *
 * @author Gu Weigang <guweigang@baidu.com>
 *
 * @package Bull.Cli
 *
 */

class Bull_Cli_Getopt
{

    const PARAM_REQUIRED = 'required';
    const PARAM_REJECTED = 'rejected';
    const PARAM_OPTIONAL = 'optional';
    
    protected $params = array();
    
    protected $stdio;

    protected $short = "";

    protected $long  = array();

    public function __construct($short, $long, $stdio)
    {
        $this->short = trim( (string) $short );
        $this->long  = (array) $long;
        $this->params = getopt($this->short, $this->long);
        $this->stdio  = $stdio;
    }

    public function get($key = null)
    {
                
        if ($key !== null && isset($this->params[$key]))
        {
            return $this->params[$key];
        }
        return $this->params;
    }

    public function checkParams()
    {
        $shorts = $this->checkShort();
        $longs  = $this->checkLong();

        foreach($shorts as $key => $param)
        {
            if ($param == self::PARAM_REQUIRED && !isset($this->params[$key]))
            {
                $this->stdio->outln("%RSorry, you must specify -{$key} to run this script.%n");
                exit(1);
            }
        }
        
        foreach($longs as $key => $param)
        {
            if ($param == self::PARAM_REQUIRED && !isset($this->params[$key]))
            {
                $this->stdio->outln("%RSorry, you must specify --{$key} to run this script.%n");
                exit(1);
            }
        }
    }

    public function checkShort()
    {
        $optional = array();
        $required = array();
        $rejected = array();
        
        $short = trim($this->short);

        /* 获取可选参数列表 */
        preg_match_all("/([a-z])::/i", $short, $matches_optional);
        $left = str_replace($matches_optional[0], "",$short);
        foreach((array) $matches_optional[1] as $param)
        {
            $optional[$param] = self::PARAM_OPTIONAL;
        }

        /* 获取必选参数列表 */
        preg_match_all("/([a-z]):/i", $left, $matches_required);
        foreach((array) $matches_required[1] as $param)
        {
            $required[$param] = self::PARAM_REQUIRED;
        }

        /* 获取拒绝参数列表 */
        $left = str_replace($matches_required[0], "", $left);
        if (!empty($left))
        {
            $rejected_array = str_split($left);
            foreach($rejected_array as $param)
            {
                $rejected[$param] = self::PARAM_REJECTED;
            }            
        }
        
        /* return */
        return array_merge($rejected, $optional, $required);
    }

    public function checkLong()
    {
        $long = (array) $this->long;
        $optional = array();
        $required = array();
        $rejected = array();
        
        foreach((array) $long as $param)
        {
            if (($pos=strripos($param, "::")) !== false)
            {
                /* 获取可选参数列表 */
                $optional[substr($param, 0, $pos)] = self::PARAM_OPTIONAL;
            } else if(($pos=strripos($param, ":")) !== false) {
                /* 获取必需参数列表 */
                $required[substr($param, 0, $pos)] = self::PARAM_REQUIRED;
            } else {
                /* 获取拒绝参数列表 */
                $rejected[$param] = self::PARAM_REJECTED;
            }
        }

        /* return */
        return array_merge($rejected, $optional, $required);
    }
}