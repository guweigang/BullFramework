<?php
class Framework_Model_Db_PhpbbAclUsers extends Bull_Model_Abstract
{
     protected $table = "phpbb_acl_users";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
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
             'auth_option_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'auth_option_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'auth_role_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'auth_role_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
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