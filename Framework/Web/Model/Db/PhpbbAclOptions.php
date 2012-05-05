<?php
class Framework_Web_Model_Db_PhpbbAclOptions extends Bull_Model_Abstract
{
     protected $table = "phpbb_acl_options";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'auth_option_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'auth_option_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'auth_option' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'auth_option',
                 'type' => 'varchar',
                 'size' => 50,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'is_global' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'is_global',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'is_local' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'is_local',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'founder_only' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'founder_only',
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