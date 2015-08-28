<?php

/**
 * Class: ${NAMESPACE}${NAME}
 * Modified by: duyhn
 * Modified date: 8/29/2015
 * Time: 2:21 AM
 */
namespace TestCases;

class ReadTestCase
{
    private $data = [];
    private function readFile($filename)
    {
        $handler = @fopen($filename);
        if($handler){
            while(($buffer = fgets($handler, 4096)) !== false){
                $str = trim($buffer);
                if($str != ""){
                    $this->data[] = $str;
                }
            }
            if (!feof($handler)) {
                echo "Error: unexpected fgets() fail\n";
            }
            fclose($handler);
        }

    }

    public function getTestCase($index = 0)
    {
        if(!empty($this->data)){
            $n = (int)$this->data[0];
            if($index < 0 || $index >= $n)
                return false;
            return $this->data[$index + 1];
        }

        return false;
    }

    public function getTestCaseArrayInterger($index = 0){
        $str = $this->getTestCase($index);
        $arr = explode(" ", $str);
        for($i = 0; $i < count($arr); $i++){
            $arr[$i] = (int)$arr[$i];
        }
        return $arr;
    }
}