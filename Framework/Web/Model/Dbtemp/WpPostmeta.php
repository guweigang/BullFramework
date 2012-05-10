<?php
class Framework_Web_Model_Dbtemp_WpPostmeta extends Bull_Model_Abstract
{
     protected $table = "wp_postmeta";

     protected $name  = "dbtemp";

     protected function postConstruct()      
     {
         $this->cols = array (
             'meta_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'meta_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'post_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'meta_key' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'meta_key',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => false,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'meta_value' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'meta_value',
                 'type' => 'longtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => false,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}