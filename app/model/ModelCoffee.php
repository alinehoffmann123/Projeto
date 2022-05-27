<?php

namespace App\Model;

use App\Db\ModelPadrao;

class ModelCoffee extends \App\Model\ModelPadrao{
    
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
    function insertProduto(){
        $nome = $this->getBdValue ($this->nome);
        $preco = $this->getBdValue ($this->preco);
        $imagem = $this->getBdValue ($this->imagem);
        return parent::insert(['cofnome'=> $nome,'cofpreco'=> $preco,'imagemproduto'=>$imagem]);
    }
}
