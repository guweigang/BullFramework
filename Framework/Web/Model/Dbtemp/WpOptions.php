<?php
class Framework_Web_Model_Dbtemp_WpOptions extends Bull_Model_Abstract
{
     protected $table = "wp_options";

     protected $name  = "dbtemp";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'option_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'option_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'blog_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'blog_id',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'option_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'option_name',
                 'type' => 'varchar',
                 'size' => 64,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'option_value' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'option_value',
                 'type' => 'longtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'autoload' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'autoload',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => 'yes',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}