<?php
  $page = 'Exercice 2';//déclaration d'une variable pour l'exercice
  $isEasy = true;
  include '../header.php';//inclus le header et la navbar
  $message = '';
  if ($isEasy == true)//condition si la variable est égale à true
  {
    $message = 'C\'est facile !!';//affiche ce message
  }
  else//sinon
  {
    $message = 'C\'est difficile!!';//affiche ce message
  }
?>
<p class="text-center" style="font-size: 25px">
  <?= $message ?>
</p>
<? include '../footer.php' //inclus le footer?>
