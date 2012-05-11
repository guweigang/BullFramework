<?php
class Framework_Model_Db_PhpbbSearchWordlist extends Bull_Model_Abstract
{
     protected $table = "phpbb_search_wordlist";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'word_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'word_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'word_text' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'word_text',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'word_common' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'word_common',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'word_count' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'word_count',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}