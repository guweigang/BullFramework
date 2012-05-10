<?php
class Framework_Web_Model_Db_PhpbbPollVotes extends Bull_Model_Abstract
{
     protected $table = "phpbb_poll_votes";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
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
             'vote_user_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'vote_user_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'vote_user_ip' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'vote_user_ip',
                 'type' => 'varchar',
                 'size' => 40,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}