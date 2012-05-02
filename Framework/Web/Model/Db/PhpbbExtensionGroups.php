<?php
class Framework_Web_Model_Db_PhpbbExtensionGroups extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_extension_groups";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'group_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'group_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'cat_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'cat_id',
                 'type' => 'tinyint',
                 'size' => 2,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'allow_group' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'allow_group',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'download_mode' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'download_mode',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'upload_icon' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'upload_icon',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'max_filesize' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'max_filesize',
                 'type' => 'int',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'allowed_forums' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'allowed_forums',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'allow_in_pm' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'allow_in_pm',
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