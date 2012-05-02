<?php
class Framework_Web_Model_Db_PhpbbForumsAccess extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_forums_access";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'forum_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
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
         );
     }
}