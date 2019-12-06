<?php
  $page = 'Exercice 1';//déclaration d'une variable pour l'exercice
  $age = 36;//déclaration d'une variable int avec pour valeur l'age
  include '../header.php';//inclus le header et la navbar
  $message = '';
  if($age >= 18)//condition si l'age est supérieur ou égale à 18 ans
  {
    $message = 'Vous êtes majeur.';//affiche ce message
  }
  else//sinon
  {
    $message = 'Vous êtes mineur.';//affiche ce message
  }
?>
<p class="text-center" style="font-size: 25px">
  <?= $message ?>
</p>
<? include '../footer.php' //inclus le footer?>
