<?php
class Framework_Web_Model_Dbtemp_WpUsers extends Bull_Db_AbstractModel
{
     protected $table = "wp_users";

     protected $name  = "dbtemp";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'ID' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ID',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'user_login' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_login',
                 'type' => 'varchar',
                 'size' => 60,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_pass' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_pass',
                 'type' => 'varchar',
                 'size' => 64,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_nicename' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_nicename',
                 'type' => 'varchar',
                 'size' => 50,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_email' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_email',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_url' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_url',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_registered' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_registered',
                 'type' => 'datetime',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0000-00-00 00:00:00',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_activation_key' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_activation_key',
                 'type' => 'varchar',
                 'size' => 60,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_status' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_status',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'display_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'display_name',
                 'type' => 'varchar',
                 'size' => 250,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}