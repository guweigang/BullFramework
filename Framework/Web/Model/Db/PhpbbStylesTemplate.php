<?php
class Framework_Web_Model_Db_PhpbbStylesTemplate extends Bull_Model_Abstract
{
     protected $table = "phpbb_styles_template";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'template_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'template_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'template_copyright' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_copyright',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'template_path' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_path',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'bbcode_bitfield' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'bbcode_bitfield',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => 'kNg=',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'template_storedb' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_storedb',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'template_inherits_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_inherits_id',
                 'type' => 'int',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'template_inherit_path' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_inherit_path',
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