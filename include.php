<?php

spl_autoload_register(function($class){
    include('../'.str_replace('\\','/',$class).'.php');
    
    //générer un tableau à partir d'une chaine en indiquant un séparateur
    //$dirs=explode('\\',$class);
    //retourne la dernière valeur du tableau
    //$fichier=array_pop($dirs);
    //var_dump($dirs);
    //var_dump($fichier);
})
?>