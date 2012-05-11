<?php
class Framework_Model_Db_PhpbbReportsReasons extends Bull_Model_Abstract
{
     protected $table = "phpbb_reports_reasons";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'reason_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'reason_id',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'reason_title' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'reason_title',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'reason_description' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'reason_description',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'reason_order' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'reason_order',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}