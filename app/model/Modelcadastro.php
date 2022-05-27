<?php

namespace App\Model;

use App\Db\ModelPadrao;

class Modelcadastro extends \App\Model\ModelPadrao{
    
    public $id;
    
    function getTable (){
        return 'loja.tbcoffee';
    }
    function deleteCoffee(){
        $iId = $this->id;
       return parent :: delete([
         'IDCoffee'=> $iId   
        ]);
    }
}