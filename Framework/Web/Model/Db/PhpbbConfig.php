<?php
class Framework_Web_Model_Db_PhpbbConfig extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_config";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'config_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'config_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'config_value' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'config_value',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'is_dynamic' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'is_dynamic',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}