<?php
/**
 *
 * 数据库模型过滤器
 *
 * @author Gu Weigang <guweigang@baidu.com>
 *
 * @package Bull.Db
 *
 */

class Bull_Db_Filter
{
    /**
     *
     * 元素
     *
     * @var
     */
    protected $objElement;
    
    /* protected $arrColsType = array( */
    /*     'char'      => array('ValidateString', array('ValidateRangeLength', 1, null)), */
    /*     'varchar'   => array('ValidateString', array('ValidateRangeLength', 1, null)), */
    /*     'tinyint'   => array('ValidateBool'), */
    /*     'int'       => array('ValidateInt'), */
    /*     'bigint'    => array('ValidateInt'), */
    /*     'numeric'   => array('ValidateNumeric'), */
    /*     'float'     => array('ValidateFloat'), */
    /*     'date'      => array('ValidateIsoDate'), */
    /*     'time'      => array('ValidateIsoTime'), */
    /*     'timestamp' => array('ValidateIsoTimestamp'), */
    /* ); */
    
    
    public function __construct(Bull_Element $objElement)
    {
        $this->objElement = $objElement;
    }

    public function newFilter($arrColumns)
    {
        $arrElements = array();
        $arrColumns  = (array) $arrColumns;
        foreach($arrColumns as $objColumn)
        {
            switch($objColumn->type) {
                case "char":
                case "varchar":
                    $filters = array('ValidateString', array('ValidateRangeLength', 1, $objColumn->size));
                    break;
                case "tinyint":
                    $filters = array('ValidateBool');
                    break;
                case "int":
                case "bigint":
                    $filters = array('ValidateInt');
                    break;
                case "numeric":
                    $filters = array('ValidateNumeric');
                    break;
                case "float":
                    $filters = array('ValidateFloat');
                    break;
                case "date":
                    $filters = array('ValidateIsoDate');
                    break;
                case "time":
                    $filters = array('ValidateIsoTime');
                    break;
                case "timestamp":
                    $filters = array('ValidateIsoTimestamp');
                    break;
                default :
                    $filters = array();
            }
            
            $arrElements[$objColumn->name] = array(
                "filters" => (array) $filters,
                "require" => $objColumn->primary ? false: (bool)  $objColumn->notnull,
            );
            
        }
        
        $this->objElement->setElements($arrElements);
        
        return $this->objElement;
    }
}