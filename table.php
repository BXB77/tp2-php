<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>my site</title>
    </head>
    <body>
        <?php
          if(isset($_POST['table'])){
            $table=$_POST['table'];
            echo"<h1>Table de $table</h1>";
            for($i=1;$i<=10;$i++){
              $cal=$i*$table;
              echo "$i x $table = $cal<br>";
            }
          }
        ?>
        <form method="post" action="table.php" enctype="encodage" >
            <input type="text" placeholder="Table" name="table" required>
            <input type="submit" value="Envoyer"/>
        </form> 
    </body>
</html>