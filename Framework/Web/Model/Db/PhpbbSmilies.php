<?php
class Framework_Web_Model_Db_PhpbbSmilies extends Bull_Model_Abstract
{
     protected $table = "phpbb_smilies";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'smiley_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'smiley_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'code' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'code',
                 'type' => 'varchar',
                 'size' => 50,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'emotion' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'emotion',
                 'type' => 'varchar',
                 'size' => 50,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'smiley_url' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'smiley_url',
                 'type' => 'varchar',
                 'size' => 50,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'smiley_width' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'smiley_width',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'smiley_height' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'smiley_height',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'smiley_order' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'smiley_order',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
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
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}