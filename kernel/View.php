<?php

namespace Kernel;

class View{
    private string $filename;
    private $params;

    public function __construct($filename,$params=[]){
        $this->fileName = $filename;
        $this->params = $params;
    }
    public function display(){
        foreach ($this->params as $key => $value) {
            $$key = $value;
        }

        include('../app/views/'.$this->fileName);
    }
}
?>