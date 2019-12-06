<?php
  $page = 'Exercice 3';//déclaration d'une variable pour l'exercice
  include '../header.php';//inclus le header et la navbar
  $gender = 'homme';
  $age = '18';
  $message = '';
  if ($gender == 'homme' AND $age >= 18)//condition si c'est un homme et qu'il est majeur
  {
    $message = 'Vous êtes un homme et vous êtes majeur.';//affiche ce message
  }
  if ($gender == 'femme' AND $age >= 18)//condition si c'est une femme et qu'elle est majeur
  {
    $message = 'Vous êtes une femme et vous êtes majeur.';// affiche ce message
  }
  elseif ($gender == 'homme' AND $age < 18)//condition sinon si c'est un homme et qu'il est mineur
  {
    $message = 'Vous êtes un homme et vous êtes mineur.';// affiche ce message
  }
  elseif ($gender == 'femme' AND $age < 18)//condition sinon si c'est une femme et qu'elle est mineur
  {
    $message = 'Vous êtes une femme et vous êtes mineur.';// affiche ce message
  }
?>
<p class="text-center" style="font-size: 25px">
  <?= $message ?>
</p>
<? include '../footer.php' //inclus le footer?>
