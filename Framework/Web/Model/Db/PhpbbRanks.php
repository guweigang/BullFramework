<?php
class Framework_Web_Model_Db_PhpbbRanks extends Bull_Model_Abstract
{
     protected $table = "phpbb_ranks";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'rank_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rank_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'rank_title' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rank_title',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'rank_min' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rank_min',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'rank_special' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rank_special',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'rank_image' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rank_image',
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