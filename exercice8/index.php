<?php
  $page = 'Exercice 8';//déclaration d'une variable pour l'exercice
  $isOk = true;
  include '../header.php';//inclus le header et la navbar
  $message = '';
  if ($isOk)//condition qui la valeur de la variable
  {
    $message = 'c\'est ok !!';//affiche ce message
  }
  else//sinon
  {
    $message = 'c\'est pas bon !!!';//affiche ce message
  }
?>
<p class="text-center" style="font-size: 25px">
  <?= $message //affiche la valeur de la variable dans la balise?>
</p>
<? include '../footer.php' //inclus le footer?>
