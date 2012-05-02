<?php
class Framework_Web_Model_Db_PhpbbSitelist extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_sitelist";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'site_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'site_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'site_ip' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'site_ip',
                 'type' => 'varchar',
                 'size' => 40,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'site_hostname' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'site_hostname',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'ip_exclude' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ip_exclude',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}