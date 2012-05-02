<?php
class Framework_Web_Model_Db_PhpbbPrivmsgsTo extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_privmsgs_to";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'msg_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'msg_id',
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
             'author_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'author_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'pm_deleted' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'pm_deleted',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'pm_new' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'pm_new',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'pm_unread' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'pm_unread',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'pm_replied' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'pm_replied',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'pm_marked' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'pm_marked',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'pm_forwarded' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'pm_forwarded',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'folder_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'folder_id',
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