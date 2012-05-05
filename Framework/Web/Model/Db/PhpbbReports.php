<?php
class Framework_Web_Model_Db_PhpbbReports extends Bull_Model_Abstract
{
     protected $table = "phpbb_reports";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'report_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'report_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'reason_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'reason_id',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'pm_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'pm_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_notify' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_notify',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'report_closed' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'report_closed',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'report_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'report_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'report_text' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'report_text',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}