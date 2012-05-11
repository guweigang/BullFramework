<?php
class Framework_Model_Db_PhpbbModules extends Bull_Model_Abstract
{
     protected $table = "phpbb_modules";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'module_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'module_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'module_enabled' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'module_enabled',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'module_display' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'module_display',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'module_basename' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'module_basename',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'module_class' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'module_class',
                 'type' => 'varchar',
                 'size' => 10,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'parent_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'parent_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'left_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'left_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'right_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'right_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'module_langname' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'module_langname',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'module_mode' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'module_mode',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'module_auth' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'module_auth',
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