<?php
class Framework_Web_Model_Db_PhpbbLang extends Bull_Model_Abstract
{
     protected $table = "phpbb_lang";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'lang_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_id',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'lang_iso' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_iso',
                 'type' => 'varchar',
                 'size' => 30,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'lang_dir' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_dir',
                 'type' => 'varchar',
                 'size' => 30,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'lang_english_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_english_name',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'lang_local_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_local_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'lang_author' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'lang_author',
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