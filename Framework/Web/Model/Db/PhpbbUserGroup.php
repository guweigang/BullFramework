<?php
class Framework_Web_Model_Db_PhpbbUserGroup extends Bull_Model_Abstract
{
     protected $table = "phpbb_user_group";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'group_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_id',
                 'type' => 'mediumint',
                 'size' => 8,
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
             'group_leader' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_leader',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_pending' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_pending',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}