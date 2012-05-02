<?php
class Framework_Web_Model_Db_PhpbbSessions extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_sessions";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
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
             'session_user_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_user_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_forum_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_forum_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_last_visit' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_last_visit',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_start' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_start',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_ip' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_ip',
                 'type' => 'varchar',
                 'size' => 40,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_browser' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_browser',
                 'type' => 'varchar',
                 'size' => 150,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_forwarded_for' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_forwarded_for',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_page' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_page',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_viewonline' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_viewonline',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_autologin' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_autologin',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'session_admin' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'session_admin',
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