<?php
class Framework_Web_Model_Db_PhpbbProfileLang extends Bull_Model_Abstract
{
     protected $table = "phpbb_profile_lang";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'field_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'lang_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'lang_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'lang_explain' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_explain',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'lang_default_value' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_default_value',
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