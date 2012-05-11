<?php
class Framework_Model_Db_PhpbbStylesImagesetData extends Bull_Model_Abstract
{
     protected $table = "phpbb_styles_imageset_data";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'image_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'image_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'image_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'image_name',
                 'type' => 'varchar',
                 'size' => 200,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'image_filename' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'image_filename',
                 'type' => 'varchar',
                 'size' => 200,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'image_lang' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'image_lang',
                 'type' => 'varchar',
                 'size' => 30,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'image_height' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'image_height',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'image_width' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'image_width',
                 'type' => 'smallint',
                 'size' => 4,
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