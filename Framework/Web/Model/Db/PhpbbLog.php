<?php
class Framework_Web_Model_Db_PhpbbLog extends Bull_Model_Abstract
{
     protected $table = "phpbb_log";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'log_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'log_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'log_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'log_type',
                 'type' => 'tinyint',
                 'size' => 4,
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
             'forum_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'reportee_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'reportee_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'log_ip' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'log_ip',
                 'type' => 'varchar',
                 'size' => 40,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'log_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'log_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'log_operation' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'log_operation',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'log_data' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'log_data',
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