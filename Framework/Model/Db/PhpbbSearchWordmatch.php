<?php
class Framework_Model_Db_PhpbbSearchWordmatch extends Bull_Model_Abstract
{
     protected $table = "phpbb_search_wordmatch";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'post_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'word_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'word_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'title_match' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'title_match',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
         );
     }
}