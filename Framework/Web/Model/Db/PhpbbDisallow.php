<?php
class Framework_Web_Model_Db_PhpbbDisallow extends Bull_Model_Abstract
{
     protected $table = "phpbb_disallow";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'disallow_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'disallow_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'disallow_username' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'disallow_username',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}