<?php
/**
 *
 * 数据过滤器本地字符类
 *
 * @author Gu Weigang <guweigang@baidu.com>
 *
 * @package Bull.Filter
 *
 */

class Bull_Filter_Locale extends Bull_Locale
{
    protected static $locale = array(
        'INVALID_NUMERIC' => '非法数字',
        'INVALID_NOT_BLANK' => '不允许为空',
        'INVALID_RANGE' => "所传值不在规定范围内：%d ~ %d",
    );
}