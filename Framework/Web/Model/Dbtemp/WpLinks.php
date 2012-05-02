<?php
class Framework_Web_Model_Dbtemp_WpLinks extends Bull_Db_AbstractModel
{
     protected $table = "wp_links";

     protected $name  = "dbtemp";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'link_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'link_url' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_url',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_image' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_image',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_target' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_target',
                 'type' => 'varchar',
                 'size' => 25,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_description' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_description',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_visible' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_visible',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => 'Y',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_owner' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_owner',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_rating' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_rating',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_updated' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_updated',
                 'type' => 'datetime',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0000-00-00 00:00:00',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_rel' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_rel',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_notes' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_notes',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'link_rss' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'link_rss',
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