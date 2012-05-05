<?php
class Framework_Web_Model_Db_PhpbbAttachments extends Bull_Model_Abstract
{
     protected $table = "phpbb_attachments";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'attach_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'attach_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'post_msg_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_msg_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
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
             'in_message' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'in_message',
                 'type' => 'tinyint',
                 'size' => 1,
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
             'is_orphan' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'is_orphan',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'physical_filename' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'physical_filename',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'real_filename' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'real_filename',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'download_count' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'download_count',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'attach_comment' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'attach_comment',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'extension' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'extension',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'mimetype' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'mimetype',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'filesize' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'filesize',
                 'type' => 'int',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'filetime' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'filetime',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'thumbnail' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'thumbnail',
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