<?php
class Framework_Model_Db_PhpbbSearchResults extends Bull_Model_Abstract
{
     protected $table = "phpbb_search_results";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'search_key' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'search_key',
                 'type' => 'varchar',
                 'size' => 32,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'search_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'search_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'search_keywords' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'search_keywords',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'search_authors' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'search_authors',
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