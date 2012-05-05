<?php
class Framework_Web_Model_Db_PhpbbConfirm extends Bull_Model_Abstract
{
     protected $table = "phpbb_confirm";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'confirm_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'confirm_id',
                 'type' => 'char',
                 'size' => 32,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'session_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_id',
                 'type' => 'char',
                 'size' => 32,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'confirm_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'confirm_type',
                 'type' => 'tinyint',
                 'size' => 3,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'code' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'code',
                 'type' => 'varchar',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'seed' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'seed',
                 'type' => 'int',
                 'size' => 10,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'attempts' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'attempts',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}