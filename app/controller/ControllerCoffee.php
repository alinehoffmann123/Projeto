<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewCoffee;
use App\DB\Connection;
use App\Model\ModelCoffee;

class ControllerCoffee extends ControllerPadrao
{
    function processPage(){
        //var_dump(connection::get());
        $oModelCoffee = new ModelCoffee;
        $a = $oModelCoffee->getAll();
        
       //var_dump($a);
        
        
        $sTitle = 'Coffee';
        $scontent = ViewCoffee::render([
            'homeContent'=> '<h1>Confira aqui os produtos!</h1>',
            'tabelaCoffee' => ViewCoffee::gethtmltabelaCoffee($a)
        ]);
        return parent::getPage( $sTitle,$scontent);
    }       
        function processDelete(){
            $iIdCoffee = $_GET['proid'] ??  '';
            
            $oModelCoffee = new ModelCoffee;
            $oModelCoffee->id = $iIdCoffee;
            
            $this->footerVars = [
                'footerContent'=>''
            ];
            
            if($oModelCoffee->deleteCoffee()){
                $this->footerVars= [ 
                  'footerContent' => '<div class="alert alert-success" role="alert">
                     Produto Excluído com sucesso!
                </div>'  
                ];
                
            }
            return $this->processPage();
            }
        function processInsert(){
        $NomeProduto = $_POST['nomeproduto'] ??= '';
        $PrecoProduto = $_POST['precoproduto'] ??= '';
        $ImagemProduto = $_POST['imagemproduto'] ??='';
        
        $oModelCoffee = new ModelCoffee;
        $oModelCoffee->nome=$NomeProduto;
        $oModelCoffee->preco=$PrecoProduto;
        $oModelCoffee->imagem=$ImagemProduto;

        $this -> footerVars = ['footerContent' => ''];

        if($oModelCoffee->insertProduto()){
            $this -> footerVars = ['footerContent' => '<div class="alert alert-success" role="alert">
            Produto incluído com sucesso!
          </div>'];
        }
        
        return $this -> processPage();
    }
}
            
            
            //$oModelCoffee-> deleteCoffee();
            //return $this->processPage();
            
            
       
       

  