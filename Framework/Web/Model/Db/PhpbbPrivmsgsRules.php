<?php
class Framework_Web_Model_Db_PhpbbPrivmsgsRules extends Bull_Model_Abstract
{
     protected $table = "phpbb_privmsgs_rules";

     protected $name  = "db";

     protected function postConstruct()      
     {
         $this->cols = array (
             'rule_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rule_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'user_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'user_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'rule_check' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rule_check',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'rule_connection' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rule_connection',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'rule_string' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rule_string',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'rule_user_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rule_user_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'rule_group_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rule_group_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'rule_action' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rule_action',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'rule_folder_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'rule_folder_id',
                 'type' => 'int',
                 'size' => 11,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
         );
     }
}