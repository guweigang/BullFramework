<?php
class Framework_Web_Model_Dbtemp_WpComments extends Bull_Model_Abstract
{
     protected $table = "wp_comments";

     protected $name  = "dbtemp";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'comment_ID' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_ID',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'comment_post_ID' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_post_ID',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_author' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_author',
                 'type' => 'tinytext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_author_email' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_author_email',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_author_url' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_author_url',
                 'type' => 'varchar',
                 'size' => 200,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_author_IP' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_author_IP',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_date' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_date',
                 'type' => 'datetime',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0000-00-00 00:00:00',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_date_gmt' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_date_gmt',
                 'type' => 'datetime',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0000-00-00 00:00:00',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_content' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_content',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_karma' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_karma',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_approved' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_approved',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_agent' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_agent',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_type',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_parent' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_parent',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'user_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_id',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}