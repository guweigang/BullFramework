<?php
class Framework_Model_Db_PhpbbPosts extends Bull_Model_Abstract
{
     protected $table = "phpbb_posts";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'post_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'topic_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'poster_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poster_id',
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
             'poster_ip' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poster_ip',
                 'type' => 'varchar',
                 'size' => 40,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_approved' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_approved',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_reported' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_reported',
                 'type' => 'tinyint',
                 'size' => 1,
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
             'post_username' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_username',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_subject' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_subject',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_text' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_text',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_checksum' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_checksum',
                 'type' => 'varchar',
                 'size' => 32,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_attachment' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_attachment',
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
             'post_postcount' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_postcount',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_edit_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_edit_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_edit_reason' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_edit_reason',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_edit_user' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_edit_user',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_edit_count' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_edit_count',
                 'type' => 'smallint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_edit_locked' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_edit_locked',
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