<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\Model\ModelCoffee;

class ControllerHome extends ControllerPadrao
{

    protected function processPage()
    {
        $sTitle = 'Jovens Talentos';
        $oModelCoffee = new ModelCoffee;
        $a = $oModelCoffee->getAll();

        $sContent = ViewHome::render([
            // Passar aqui os parâmetros do conteúdo da página
            'homeContent' => ViewHome::gethtmltabelaCards($a)
        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '<h5>Welcome!</h5>'
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}