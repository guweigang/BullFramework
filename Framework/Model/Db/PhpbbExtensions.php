<?php
class Framework_Model_Db_PhpbbExtensions extends Bull_Model_Abstract
{
     protected $table = "phpbb_extensions";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'extension_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'extension_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
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
             'extension' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'extension',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}