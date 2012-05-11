<?php
class Framework_Model_Db_PhpbbZebra extends Bull_Model_Abstract
{
     protected $table = "phpbb_zebra";

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
                 'primary' => true,
             )),
             'zebra_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'zebra_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'friend' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'friend',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'foe' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'foe',
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