<?php
class Framework_Web_Model_Db_PhpbbProfileFields extends Bull_Db_AbstractModel
{
     protected $table = "phpbb_profile_fields";

     protected $name  = "db";

     protected static $instance = null;

     protected function postConstruct()      
     {
         $this->cols = array (
             'field_id' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_id',
                 'type' => 'mediumint',
                 'size' => 8,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => NULL,
                 'autoinc' => true,
                 'primary' => true,
             )),
             'field_name' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_name',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_type' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_type',
                 'type' => 'tinyint',
                 'size' => 4,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_ident' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_ident',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_length' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_length',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_minlen' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_minlen',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_maxlen' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_maxlen',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_novalue' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_novalue',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_default_value' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_default_value',
                 'type' => 'varchar',
                 'size' => 255,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_validation' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_validation',
                 'type' => 'varchar',
                 'size' => 20,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_required' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_required',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_show_on_reg' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_show_on_reg',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_show_on_vt' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_show_on_vt',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_show_profile' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_show_profile',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_hide' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_hide',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_no_view' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_no_view',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_active' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_active',
                 'type' => 'tinyint',
                 'size' => 1,
                 'scale' => NULL,
                 'notnull' => true,
                 'default' => '0',
                 'autoinc' => false,
                 'primary' => false,
             )),
             'field_order' => 
             Bull_Sql_Column::__set_state(array(
                 'name' => 'field_order',
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