<?php
class Framework_Web_Model_Db_PhpbbStylesImageset extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_styles_imageset";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'imageset_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'imageset_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'imageset_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'imageset_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'imageset_copyright' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'imageset_copyright',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'imageset_path' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'imageset_path',
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