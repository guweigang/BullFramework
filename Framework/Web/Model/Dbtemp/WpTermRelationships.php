<?php
class Framework_Web_Model_Dbtemp_WpTermRelationships extends Bull_Model_Abstract
{
     protected $table = "wp_term_relationships";

     protected $name  = "dbtemp";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'object_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'object_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'term_taxonomy_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'term_taxonomy_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'term_order' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'term_order',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}