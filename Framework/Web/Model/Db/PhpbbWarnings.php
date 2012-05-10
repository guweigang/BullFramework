<?php
class Framework_Web_Model_Db_PhpbbWarnings extends Bull_Model_Abstract
{
     protected $table = "phpbb_warnings";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'warning_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'warning_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
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
                 'primary' => false,
             )),
             'post_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'log_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'log_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'warning_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'warning_time',
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