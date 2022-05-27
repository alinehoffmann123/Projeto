<?php

/**
 * Rederiza o conteúdo da página solicitada
 * @param string $sPage
 * @return string
 */
function render($sPage)
{
    switch ($sPage) {
        case 'home':
            return (new App\Controller\ControllerHome)->render();
        case 'Coffee':
            return (new App\Controller\ControllerCoffee)->render();
        case 'Cadastrodeprodutos':
            return (new App\Controller\Controllercadastro)->render();
        case 'delete':
            return (new App\Controller\ControllerCoffee)->render();
        case 'PáginadoAdministrador':
            return (new App\Controller\Controlleradministrador)->render();
        case 'carrinho':
            return (new App\Controller\Controllercarrinho)->render();
       
    }

    return 'Página não encontrada!';
}
