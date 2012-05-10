<?php
class Framework_Web_Model_Db_PhpbbWords extends Bull_Model_Abstract
{
     protected $table = "phpbb_words";

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
             'word' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'word',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'replacement' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'replacement',
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