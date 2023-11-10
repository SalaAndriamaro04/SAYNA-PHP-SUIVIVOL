<?php

namespace app\Controllers;

class PaysController extends \Kernel\Controller
{
    public function index(){
        $pays = \app\Models\Pays::all();
        return new \Kernel\View('pays/index.php',['pays'=>$pays]);
    }
}


?>