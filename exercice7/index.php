<?php
  $page = 'Exercice 7';//déclaration d'une variable pour l'exercice
  $isOk = true;
  include '../header.php';//inclus le header et la navbar
  $message = '';
  if ($isOk == false)//condition si la variable est égale à false
  {
    $message = 'c\'est pas bon !!!';//affiche ce message
  }
  else//sinon
  {
    $message = 'c\'est ok !!';//affiche ce message
  }
?>
<p class="text-center" style="font-size: 25px">
  <?= $message ?>
</p>
<? include '../footer.php' //inclus le footer?>
