<?php
class Framework_Web_Model_Db_PhpbbGroups extends Bull_Model_Abstract
{
     protected $table = "phpbb_groups";

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
             'group_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_type',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_founder_manage' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_founder_manage',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_skip_auth' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_skip_auth',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
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
             'group_desc' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_desc',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_desc_bitfield' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_desc_bitfield',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_desc_options' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_desc_options',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '7',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_desc_uid' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_desc_uid',
                 'type' => 'varchar',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_display' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_display',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_avatar' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_avatar',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_avatar_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_avatar_type',
                 'type' => 'tinyint',
                 'size' => 2,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_avatar_width' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_avatar_width',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_avatar_height' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_avatar_height',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_rank' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_rank',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_colour' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_colour',
                 'type' => 'varchar',
                 'size' => 6,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_sig_chars' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_sig_chars',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_receive_pm' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_receive_pm',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_message_limit' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_message_limit',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_max_recipients' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_max_recipients',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'group_legend' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'group_legend',
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