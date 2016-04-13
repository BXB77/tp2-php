<?php
  $nbq=$_POST['nbq'];
  $compt=$nbq;
  for($i=1;$i<=$nbq;$i++){
    if (isset($_POST["question$i"])){
      $question=$_POST["question$i"];
    }
    else{
      $question="vide";
    }
    if ($question=="faux"){
      echo "<li> Question $i : mauvaise reponse </li>";
      $compt=$compt-1;
    }
    if ($question=="vide"){
      echo "<li> Question $i : pas de reponse </li>";
      $compt=$compt-1;
    }
    if ($question=="vrai"){
      echo "<li> Question $i : bonne reponse </li>";
    }
  }
  echo "<b>Score: $compt</b>";
?>