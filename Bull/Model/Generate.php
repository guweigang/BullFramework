<?php
/**
 *
 * 模型生成类
 *
 * @author: Gu Weigang <guweigang@baidu.com>
 *
 * @package Bull.Model
 *
 */

class Bull_Model_Generate
{
    protected $sql;

    protected $name;
    
    public function __construct($name = null)
    {
        $this->name = $name;
        $this->sql = Bull_Di_Container::newInstance('Bull_Db_Front')->getConnect($name);
    }
    
    public function execute($table, $model)
    {
        if ('*' == $table)
        {
            $tables = $this->sql->fetchTableList();
            $model = null;
            
            foreach($tables as $tbl)
            {
                $this->code($tbl, $model);
            }
            
        } else {
            $this->code($table, $model);
        }
    }

    protected function code($tbl, $model)
    {
        $model_name = $model ? $model : join("", array_map("ucfirst", explode("_", $tbl)));
        
        // db => Db, it will generate  models with Db_ prefix in dir "models/Db"
        // dbtemp =>Dbtemp, it will generate models with Dbtemp_ prefix in dir "models/Dbtemp"
        $model_prefix = ucfirst(strtolower($this->name));
        
        $prefix11 = str_repeat(" ", 11);
        $prefix09 = str_repeat(" ", 9);
        
        $cols  = $this->sql->fetchTableCols($tbl);
        
        $cols_code = var_export($cols, true).";";
        
        $cols_code = str_replace(array("Bull_Sql_Column::", ")),", ");"),
                                 array($prefix11. "Bull_Sql_Column::", $prefix11. ")),", $prefix09.");"),
                                 $cols_code);
        
        $cols_code = preg_replace('/(\'\w+\' =>\s*)/', $prefix11. "$1", $cols_code);
        $cols_code = preg_replace('/(\'\w+\' => \S+)/', " $1", $cols_code);

        $root_dir   = Bull_Di_Container::get('config')->system->directory. "/";
        $model_dir  = Bull_Di_Container::get('config')->model->directory;
        
        $class_prefix = str_replace("/", "_", substr($model_dir, strlen($root_dir)));
        
        $dir = $model_dir ."/". $model_prefix;
        
        $code = <<<EOT
<?php
class {$class_prefix}_{$model_prefix}_{$model_name} extends Bull_Model_Abstract
{
     protected \$table = "{$tbl}";

     protected \$name  = "{$this->name}";

     protected static \$instance = null;

     protected function postConstruct()      
     {
         \$this->cols = {$cols_code}
     }
}
EOT;
        if (!file_exists($dir))
        {
            try {
                mkdir($dir, 0777, true);
            } catch (Bull_Model_Exception $e) {
                error_log($e->getMessage());
            }
        }
        $fhander = fopen($dir. "/". $model_name.".php", "w+");
        fwrite($fhander, $code);
        fclose($fhander);
    }
}
