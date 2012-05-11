<?php
class Framework_Model_Db_PhpbbAclRoles extends Bull_Model_Abstract
{
     protected $table = "phpbb_acl_roles";

     protected $name  = "db";

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
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'role_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'role_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'role_description' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'role_description',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'role_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'role_type',
                 'type' => 'varchar',
                 'size' => 10,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'role_order' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'role_order',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}