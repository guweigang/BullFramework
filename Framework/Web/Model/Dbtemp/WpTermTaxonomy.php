<?php
class Framework_Web_Model_Dbtemp_WpTermTaxonomy extends Bull_Db_AbstractModel
{
     protected $table = "wp_term_taxonomy";

     protected $name  = "dbtemp";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'term_taxonomy_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'term_taxonomy_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'term_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'term_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'taxonomy' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'taxonomy',
                 'type' => 'varchar',
                 'size' => 32,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'description' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'description',
                 'type' => 'longtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'parent' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'parent',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'count' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'count',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}