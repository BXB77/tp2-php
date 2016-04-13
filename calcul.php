<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>my site</title>
    </head>
    <body>
        <?php
          if((isset($_POST['operand1']))&&(isset($_POST['operand2']))){
            $operand1=$_POST['operand1'];
            $operand2=$_POST['operand2'];
            $operation=$_POST['operation'];
            if ((is_numeric($operand1)==true)&&(is_numeric($operand2)==true)){
              if($operation=="soustraction"){
                $cal=$operand1-$operand2;
                echo "$operand1 - $operand2 = $cal<br>";
              }
              if($operation=="addition"){
                $cal=$operand1+$operand2;
                echo "$operand1 + $operand2 = $cal<br>";
              }
              if($operation=="multiplication"){
                $cal=$operand1*$operand2;
                echo "$operand1 x $operand2 = $cal<br>";
              }
              if($operation=="division"){
                if ($operand2==0){
                  echo "Impossible";
                }
                else{
                  $cal=$operand1/$operand2;
                  echo "$operand1 / $operand2 = $cal<br>";
                }
              }
            }
          }
        ?>
        <form method="post" action="calcul.php" enctype="encodage" >
            <input type="text" placeholder="Operand1" name="operand1" required>
            <select name="operation" required>
              <option value="soustraction">-</option>
              <option value="addition">+</option>
              <option value="multiplication">x</option>
              <option value="division">/</option>
            </select>
            <input type="text" placeholder="Operand2" name="operand2" required>
            <input type="submit" value="Calculer"/>
        </form> 
    </body>
</html>