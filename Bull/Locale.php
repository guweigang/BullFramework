<?php
/**
 *
 * 全局本地字符类，其他本地字符类需继续此类 (PHP_VERSION > 5.3.0)
 *
 * @author Gu Weigang <guweigang@baidu.com>
 *
 * @package Bull
 *
 */

class Bull_Locale
{
    /**
     *
     * 本地字符数组
     *
     * @var array
     *
     */
    protected static $locale = array(
        'INVALID_RANGE' => "所传值不在规定范围内",
        'NOT_ALLOWED_PARAMETER' => '所传参数不符合要求',
    );

    /**
     *
     * 获取本地字符，如$replace不为空，则替换本地字符串中的格式符
     *
     * Notice: 静态延迟绑定 self绑定到父类，static绑定到子类本身
     *
     * @param string $key 键值
     *
     * @param array $replace 替换数组
     *
     */
    public static function get($key, $replace=array())
    {
        /* 如果是本类被调用，则直接使用本类的本地化数组 */
        if (self::$locale == static::$locale)
        {
            $locale = self::$locale;
        } else {
            $locale = array_merge(self::$locale, static::$locale);
        }

        /* 如果不存在相关的映射，则返回$key */
        if (! isset($locale[$key]))
        {
            return $key;
        }

        /* 如果替换数组不为空，则替换相关映射中的格式符 */
        if (! empty($replace))
        {
            return vsprintf($locale[$key], $replace);
        }

        /* return */
        return $locale[$key];
    }
        
}