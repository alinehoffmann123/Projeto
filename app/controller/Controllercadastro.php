<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\Viewcadastro;
use App\DB\Connection;
use App\Model\ModelCoffee;

class Controllercadastro extends ControllerPadrao
{
    function processPage(){
        //var_dump(connection::get());
        $oModelCoffee = new ModelCoffee;
        $a = $oModelCoffee->getAll();
        
       //var_dump($a);
        
        
        $sTitle = 'Coffee';
        $scontent = Viewcadastro::render([
            'homeContent'=> '<h1>Cadastro de Produtos!</h1>',
            'tabelaCoffee' => ''
        ]);
        return parent::getPage( $sTitle,$scontent);
    }       
        
            
            //$oModelCoffee-> deleteCoffee();
            //return $this->processPage();
            
            
       
}       

  