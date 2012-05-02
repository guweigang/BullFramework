<?php
class Framework_Web_Model_Db_PhpbbForumsTrack extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_forums_track";

     protected $name  = "db";

     protected static $instance = null;

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
                 'primary' => true,
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
                 'primary' => true,
             )),
             'mark_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'mark_time',
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