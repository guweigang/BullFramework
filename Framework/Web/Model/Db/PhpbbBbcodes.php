<?php
class Framework_Web_Model_Db_PhpbbBbcodes extends Bull_Model_Abstract
{
     protected $table = "phpbb_bbcodes";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'bbcode_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'bbcode_id',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => true,
             )),
             'bbcode_tag' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'bbcode_tag',
                 'type' => 'varchar',
                 'size' => 16,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'bbcode_helpline' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'bbcode_helpline',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'display_on_posting' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'display_on_posting',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'bbcode_match' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'bbcode_match',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'bbcode_tpl' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'bbcode_tpl',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'first_pass_match' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'first_pass_match',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'first_pass_replace' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'first_pass_replace',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'second_pass_match' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'second_pass_match',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'second_pass_replace' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'second_pass_replace',
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