<?php
  $page = 'Exercice 6';//déclaration d'une variable pour l'exercice
  $age = 36;
  include '../header.php';//inclus le header et la navbar
  $message = '';
  if ($age >= 18)//condition si la variable est supérieur ou égale à 18
  {
    $message = 'Tu es majeur';//affiche ce message
  }
  else//sinon
  {
    $message = 'Tu es mineur';//affiche ce message
  }
?>
<p class="text-center" style="font-size: 25px">
  <?= $message ?>
</p>
<? include '../footer.php' //inclus le footer?>
