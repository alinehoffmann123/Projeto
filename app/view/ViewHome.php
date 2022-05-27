<?php

namespace App\View;

use App\View\ViewHome;

class ViewHome extends ViewPadrao
{
     static function gethtmltabelaCards(array $a){
         $sHtml.='';
         foreach ($a as $x){
           $sHtml.='
                   <div class="card" style="width: 18rem;">
  <img src="'.$x["imagemproduto"].'" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">'. $x["cofnome"].'</h5>
    <h5 class="card-title">'. $x["cofpreco"].'</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary"></a>
  </div>
</div>';
         }
         return $sHtml;
     }
}
