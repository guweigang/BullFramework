<?php
class Framework_Web_Model_Db_PhpbbProfileFieldsLang extends Bull_Model_Abstract
{
     protected $table = "phpbb_profile_fields_lang";

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
             'option_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'option_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'field_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_type',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'lang_value' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_value',
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