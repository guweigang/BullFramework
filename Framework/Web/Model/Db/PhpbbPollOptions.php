<?php
class Framework_Web_Model_Db_PhpbbPollOptions extends Bull_Model_Abstract
{
     protected $table = "phpbb_poll_options";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'poll_option_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poll_option_id',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'poll_option_text' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poll_option_text',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'poll_option_total' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poll_option_total',
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