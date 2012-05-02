<?php
class Framework_Web_Model_Db_PhpbbIcons extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_icons";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'icons_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'icons_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'icons_url' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'icons_url',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'icons_width' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'icons_width',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'icons_height' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'icons_height',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'icons_order' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'icons_order',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'display_on_posting' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'display_on_posting',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}