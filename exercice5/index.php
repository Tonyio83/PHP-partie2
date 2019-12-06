<?php
  $page = 'Exercice 5';//déclaration d'une variable pour l'exercice
  $gender = 'homme';
  include '../header.php';//inclus le header et la navbar
?>
<p class="text-center" style="font-size: 25px">
  <?php
    if ($gender != 'homme')//condition si la variable est différente de la valeur
    {
      echo 'C\'est une développeuse !!!';//affiche ce message
    }
    else//sinon
    {
      echo 'C\'est un developpeur !!!';//affiche ce message
    }
   ?>
</p>
<? include '../footer.php' //inclus le footer?>
