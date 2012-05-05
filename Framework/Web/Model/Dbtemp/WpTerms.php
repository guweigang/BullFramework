<?php
class Framework_Web_Model_Dbtemp_WpTerms extends Bull_Model_Abstract
{
     protected $table = "wp_terms";

     protected $name  = "dbtemp";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'term_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'term_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'name',
                 'type' => 'varchar',
                 'size' => 200,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'slug' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'slug',
                 'type' => 'varchar',
                 'size' => 200,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'term_group' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'term_group',
                 'type' => 'bigint',
                 'size' => 10,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}