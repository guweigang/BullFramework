<?php
class Framework_Web_Model_Db_PhpbbBanlist extends Bull_Model_Abstract
{
     protected $table = "phpbb_banlist";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'ban_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ban_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'ban_userid' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ban_userid',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'ban_ip' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ban_ip',
                 'type' => 'varchar',
                 'size' => 40,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'ban_email' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ban_email',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'ban_start' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ban_start',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'ban_end' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ban_end',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'ban_exclude' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ban_exclude',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'ban_reason' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ban_reason',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'ban_give_reason' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ban_give_reason',
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