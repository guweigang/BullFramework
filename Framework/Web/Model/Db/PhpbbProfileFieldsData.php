<?php
class Framework_Web_Model_Db_PhpbbProfileFieldsData extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_profile_fields_data";

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
         );
     }
}