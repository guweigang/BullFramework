<?php
class Framework_Web_Model_Dbtemp_WpUsermeta extends Bull_Db_AbstractModel
{
     protected $table = "wp_usermeta";

     protected $name  = "dbtemp";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'umeta_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'umeta_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'user_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_id',
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