<?php
class Framework_Web_Model_Db_PhpbbPrivmsgs extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_privmsgs";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'msg_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'msg_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'root_level' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'root_level',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'author_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'author_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'icon_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'icon_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'author_ip' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'author_ip',
                 'type' => 'varchar',
                 'size' => 40,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'message_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'message_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'enable_bbcode' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'enable_bbcode',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'enable_smilies' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'enable_smilies',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'enable_magic_url' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'enable_magic_url',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'enable_sig' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'enable_sig',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'message_subject' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'message_subject',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'message_text' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'message_text',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'message_edit_reason' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'message_edit_reason',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'message_edit_user' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'message_edit_user',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'message_attachment' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'message_attachment',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'bbcode_bitfield' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'bbcode_bitfield',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'bbcode_uid' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'bbcode_uid',
                 'type' => 'varchar',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'message_edit_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'message_edit_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'message_edit_count' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'message_edit_count',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'to_address' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'to_address',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'bcc_address' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'bcc_address',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'message_reported' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'message_reported',
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