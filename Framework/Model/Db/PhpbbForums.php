<?php
class Framework_Model_Db_PhpbbForums extends Bull_Model_Abstract
{
     protected $table = "phpbb_forums";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'forum_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'parent_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'parent_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'left_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'left_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'right_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'right_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_parents' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_parents',
                 'type' => 'mediumtext',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_desc' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_desc',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_desc_bitfield' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_desc_bitfield',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_desc_options' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_desc_options',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '7',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_desc_uid' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_desc_uid',
                 'type' => 'varchar',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_link' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_link',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_password' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_password',
                 'type' => 'varchar',
                 'size' => 40,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_style' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_style',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_image' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_image',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_rules' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_rules',
                 'type' => 'text',
                 'size' => NULL,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_rules_link' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_rules_link',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_rules_bitfield' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_rules_bitfield',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_rules_options' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_rules_options',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '7',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_rules_uid' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_rules_uid',
                 'type' => 'varchar',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_topics_per_page' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_topics_per_page',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_type',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_status' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_status',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_posts' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_posts',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_topics' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_topics',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_topics_real' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_topics_real',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_last_post_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_last_post_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_last_poster_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_last_poster_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_last_post_subject' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_last_post_subject',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_last_post_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_last_post_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_last_poster_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_last_poster_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_last_poster_colour' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_last_poster_colour',
                 'type' => 'varchar',
                 'size' => 6,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_flags' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_flags',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '32',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'forum_options' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'forum_options',
                 'type' => 'int',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'display_subforum_list' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'display_subforum_list',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'display_on_index' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'display_on_index',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'enable_indexing' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'enable_indexing',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'enable_icons' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'enable_icons',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'enable_prune' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'enable_prune',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'prune_next' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'prune_next',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'prune_days' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'prune_days',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'prune_viewed' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'prune_viewed',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'prune_freq' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'prune_freq',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}