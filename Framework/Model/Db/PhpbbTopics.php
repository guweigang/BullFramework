<?php
class Framework_Model_Db_PhpbbTopics extends Bull_Model_Abstract
{
     protected $table = "phpbb_topics";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'topic_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
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
             'topic_attachment' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_attachment',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_approved' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_approved',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_reported' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_reported',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_title' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_title',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_poster' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_poster',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_time_limit' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_time_limit',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_views' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_views',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_replies' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_replies',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_replies_real' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_replies_real',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_status' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_status',
                 'type' => 'tinyint',
                 'size' => 3,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_type',
                 'type' => 'tinyint',
                 'size' => 3,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_first_post_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_first_post_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_first_poster_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_first_poster_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_first_poster_colour' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_first_poster_colour',
                 'type' => 'varchar',
                 'size' => 6,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_last_post_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_last_post_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_last_poster_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_last_poster_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_last_poster_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_last_poster_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_last_poster_colour' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_last_poster_colour',
                 'type' => 'varchar',
                 'size' => 6,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_last_post_subject' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_last_post_subject',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_last_post_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_last_post_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_last_view_time' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_last_view_time',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_moved_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_moved_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_bumped' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_bumped',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'topic_bumper' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'topic_bumper',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'poll_title' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poll_title',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'poll_start' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poll_start',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'poll_length' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poll_length',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'poll_max_options' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poll_max_options',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '1',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'poll_last_vote' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poll_last_vote',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'poll_vote_change' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'poll_vote_change',
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