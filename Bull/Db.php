<?php
/**
 *
 * Bull_Sql的包装器，维持全局DB状态
 *
 * @package Bull
 *
 * @author Gu Weigang <guweigang@baidu.com>
 *
 */
class Bull_Db
{
    /**
     *
     * 当前活跃的数据库连接池
     *
     * @var object Bull_Sql_Adapter_Abstract
     *
     */
    private static $current = array();

    /**
     *
     * 数据库当前配置节
     *
     * @var string
     *
     */
    private static $name  = null;

    /**
     *
     * 指定当前数据库服务器，为null则随机选取
     *
     * @var mixed
     *
     */
    private static $index = null;
    
    /**
     *
     * 生产数据库配置
     *
     * @param string $name 数据库配置节
     *
     * @param array $config 数据库配置数组
     */
    public static function factory($name, $config)
    {
        Bull_Db_Factory::newConnection($name, $config);
    }
    
    /**
     *
     * 选择服务器
     *
     * @param $name See self::$name
     *
     * @param $idx See self::$index
     *
     */
    public static function setConf($name = null, $idx = null)
    {
        if ($name !== null) {
            self::$name = $name;
        }

        if ($idx !== null) {
            self::$index = $idx;
        }
    }

    /**
     *
     * 连接数据库
     *
     * @param $type 类型：主库或从库。取值： "master"/"slave"
     *
     * @param $name See self::$name
     *
     * @param $idx See self::$index
     *
     * @return object Bull_Sql_Adapter_Abstract
     *
     */
    public static function connect($type = null, $name = null, $idx = null)
    {
        self::setConf($name, $idx);
        
        if (self::$name === null) {
            throw new Bull_Db_Exception(Bull_Locale::get("ERR_DB_NOT_ACTIVE"));
        }
        
        if ($type === null) {
            $type = "slave";
        }
        
        if ($type !== "master" && $type !== "slave") {
            throw new Bull_Db_Exception(Bull_Locale::get("ERR_DB_WRONG_SERVER_TYPE"));
        }
        
        $call = "Bull_Db_Factory::get". ucfirst($type);
        
        self::$current[self::$name] = call_user_func($call, self::$name, self::$index);

        return self::$current[self::$name];
        
    }

    /**
     *
     * 获取数据库连接，默认为从库
     *
     * @param $name See self::$name
     *
     * @param $idx See self::$index
     *
     * @return object Bull_Sql_Adapter_Abstract
     *
     */
    public static function getConnect($name = null, $idx = null)
    {
        self::setConf($name, $idx);
        
        if (!isset(self::$current[self::$name])) {
            self::connect("slave");
        }
        
        return self::$current[self::$name];
    }

    /**
     *
     * 执行SQL
     *
     * @param $sql string SQL语句,可以带占位符
     *
     * @param $data array 替换SQL中的占位符
     *
     * @return object PDOStatment
     *
     */
    public static function query($text = "", array $data = array())
    {
        if (self::iswrite($text))
        {
            $sql = self::connect("master");
        } else {
            $sql = self::getConnect();
        }

        return $sql->query($text, $data);
    }

    /**
     *
     * 判断SQL类型
     *
     * @param $sql string
     *
     * @return bool
     *
     */
    public static function iswrite($sql="")
    {
        /* No empty Value for $sql*/
        if (empty($sql))
        {
            throw new Bull_Db_Exception_IllegalSql(Bull_Locale::get("ERR_ILLEGAL_SQL"));
        }
        /* All types of read statments  */
        $read_stats = array("SELECT", "SHOW", "DESCRIBE", "DESC", "EXPLAIN");

        /* Regex to parse SQL */
        $regex = <<<EOREGEX
/(`(?:[^`]|``)`|[@A-Za-z0-9_.`-]+)
|(\+|-|\*|\/|!=|>=|<=|<>|>|<|&&|\|\||=|\^|\(|\)|\\t|\\r\\n|\\n)
|('(?:[^']+|'')*'+)
|("(?:[^"]+|"")*"+)
|([^ ,]+)
/ix
EOREGEX;
        
        /* Parse SQL */
        $tokens = (array) preg_split($regex, $sql, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
        /* Convert to Upper-String */
        $stat_type = strtoupper($tokens[0]);
        /* Check if is it in read-statments */
        if (!in_array($stat_type, $read_stats, true))
        {
            return true;
        }
        
        return false;
    }
}