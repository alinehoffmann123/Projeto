<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewCoffee extends ViewPadrao
{
   static function gethtmltabelaCoffee(array $a){
        $sHtml ='
                <table class="table">
              
  <thead>
    <tr>
      <th scope="col">IDCoffee</th>
      <th scope="col">cofnome</th>
      <th scope="col">cofpreco</th>
              
    </tr>
  </thead>
  <tbody>';
   
   foreach ($a as $x){
        $sHtml.='
       <tr>
           <td>'. $x["idcoffee"].' </td>
       
           <td>'. $x["cofnome"].'</td>
       
           <td>'. $x["cofpreco"].'</td>
               
           <td><a href="index.php?pg=Coffee&act=delete&proid='. $x["idcoffee"].'"</a>Excluir</td>;
        </tr>';
 }
    $sHtml.='
            </tbody>
            </table>';
    
    return $sHtml;
}
}
