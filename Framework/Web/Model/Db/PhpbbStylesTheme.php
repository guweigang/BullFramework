<?php
class Framework_Web_Model_Db_PhpbbStylesTheme extends Bull_Model_Abstract
{
     protected $table = "phpbb_styles_theme";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'theme_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'theme_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'theme_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'theme_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'theme_copyright' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'theme_copyright',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'theme_path' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'theme_path',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'theme_storedb' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'theme_storedb',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'theme_mtime' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'theme_mtime',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'theme_data' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'theme_data',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}