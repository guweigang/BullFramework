<?php
class Framework_Web_Model_Db_PhpbbAclRolesData extends Bull_Model_Abstract
{
     protected $table = "phpbb_acl_roles_data";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'role_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'role_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'auth_option_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'auth_option_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'auth_setting' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'auth_setting',
                 'type' => 'tinyint',
                 'size' => 2,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}