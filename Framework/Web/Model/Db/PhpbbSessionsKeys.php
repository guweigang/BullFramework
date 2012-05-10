<?php
class Framework_Web_Model_Db_PhpbbSessionsKeys extends Bull_Model_Abstract
{
     protected $table = "phpbb_sessions_keys";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'key_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'key_id',
                 'type' => 'char',
                 'size' => 32,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => true,
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
                 'primary' => true,
             )),
             'last_ip' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'last_ip',
                 'type' => 'varchar',
                 'size' => 40,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'last_login' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'last_login',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}