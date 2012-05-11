<?php
class Framework_Model_Db_PhpbbStylesTemplateData extends Bull_Model_Abstract
{
     protected $table = "phpbb_styles_template_data";

     protected $name  = "db";

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
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'template_filename' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_filename',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'template_included' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_included',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'template_mtime' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_mtime',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'template_data' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'template_data',
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