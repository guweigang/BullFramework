<?php
class Framework_Web_Model_Db_PhpbbStyles extends Bull_Model_Abstract
{
     protected $table = "phpbb_styles";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'style_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'style_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'style_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'style_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'style_copyright' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'style_copyright',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'style_active' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'style_active',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'template_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'theme_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'theme_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'imageset_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'imageset_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}