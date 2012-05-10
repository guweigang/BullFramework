<?php
class Framework_Web_Model_Dbtemp_WpPosts extends Bull_Model_Abstract
{
     protected $table = "wp_posts";

     protected $name  = "dbtemp";

     protected function postConstruct()      
     {
         $this->cols = array (
             'ID' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ID',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'post_author' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_author',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_date' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_date',
                 'type' => 'datetime',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0000-00-00 00:00:00',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_date_gmt' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_date_gmt',
                 'type' => 'datetime',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0000-00-00 00:00:00',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_content' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_content',
                 'type' => 'longtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_title' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_title',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_excerpt' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_excerpt',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_status' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_status',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => 'publish',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_status' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_status',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => 'open',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'ping_status' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'ping_status',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => 'open',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_password' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_password',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_name',
                 'type' => 'varchar',
                 'size' => 200,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'to_ping' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'to_ping',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'pinged' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'pinged',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_modified' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_modified',
                 'type' => 'datetime',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0000-00-00 00:00:00',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_modified_gmt' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_modified_gmt',
                 'type' => 'datetime',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0000-00-00 00:00:00',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_content_filtered' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_content_filtered',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_parent' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_parent',
                 'type' => 'bigint',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'guid' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'guid',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'menu_order' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'menu_order',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_type',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => 'post',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'post_mime_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'post_mime_type',
                 'type' => 'varchar',
                 'size' => 100,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'comment_count' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'comment_count',
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