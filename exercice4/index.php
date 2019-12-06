<?php
  $page = 'Exercice 4';//déclaration d'une variable pour l'exercice
  $magnitude = 9;
  include '../header.php';//inclus le header et la navbar
  $message = '';
  //on indique sur quelle variable on travaille
  switch ($magnitude)
  {
    case 1://dans le cas où $magnitude vaut 1
    $message = 'Micro-séisme impossible à ressentir.';
    break;
    case 2://dans le cas où $magnitude vaut 2
    $message = 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';//affiche ce message
    break;
    case 3://dans le cas où $magnitude vaut 3
    $message = 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';//affiche ce message
    break;
    case 4://dans le cas où $magnitude vaut 4
    $message = 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';//affiche ce message
    break;
    case 5://dans le cas où $magnitude vaut 5
    $message = 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';//affiche ce message
    break;
    case 6://dans le cas où $magnitude vaut 6
    $message = 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';//affiche ce message
    break;
    case 7://dans le cas où $magnitude vaut 7
    $message = 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';//affiche ce message
    break;
    case 8://dans le cas où $magnitude vaut 8
    $message = 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';//affiche ce message
    break;
    case 9://dans le cas où $magnitude vaut 9
    $message = 'Séisme capable de tout détruire sur une très vaste zone.';//affiche ce message
    break;
  }
?>
<p class="text-center" style="font-size: 25px">
  <?= $message ?>
</p>
<? include '../footer.php' //inclus le footer?>
