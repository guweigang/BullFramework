<?php
/**
 *
 * 命令行类
 *
 * @author Gu Weigang <guweigang@baidu.com>
 *
 * @package Bull.Cli
 *
 */
class Bull_Cli_Command
{
    protected $stdio;
    protected $opt;
    
    public function __construct($short="", $long=array())
    {
        $this->stdio = new Bull_Cli_Stdio(
            fopen('php://stdin', 'r'),
            fopen('php://stdout', 'w+'),
            fopen('php://stderr', 'w+'),
            new Bull_Cli_Vt100()
        );
        
        $this->opt = new Bull_Cli_Getopt($short, $long, $this->stdio);
    }

    public function getOpt()
    {
        return $this->opt;
    }

    public function getStdio()
    {
        return $this->stdio;
    }
}