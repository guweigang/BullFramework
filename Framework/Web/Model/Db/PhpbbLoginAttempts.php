<?php
class Framework_Web_Model_Db_PhpbbLoginAttempts extends Bull_Model_Abstract
{
     protected $table = "phpbb_login_attempts";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'attempt_ip' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'attempt_ip',
                 'type' => 'varchar',
                 'size' => 40,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'attempt_browser' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'attempt_browser',
                 'type' => 'varchar',
                 'size' => 150,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'attempt_forwarded_for' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'attempt_forwarded_for',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'attempt_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'attempt_time',
                 'type' => 'int',
                 'size' => 11,
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
             'username' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'username',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'username_clean' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'username_clean',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}