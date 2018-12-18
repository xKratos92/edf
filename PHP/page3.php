<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <title>Nouveau releve</title> 
    </head>
<body>
  
    <?php
    include 'cnx.php';
    $sql = $cnx->prepare ("Select nom, prenom, ancienReleve, dernierReleve from client where identifiant=".$_GET['var']);
    $sql->execute();
    echo"<table>";
    foreach ($sql->fetchAll (PDO::FETCH_ASSOC) as $ligne)
    {
        echo "<tr>";

            echo "<td>".$ligne['nom']."</td>";
            echo "<td>".$ligne['prenom']."</td>";
            echo "<td>".$ligne['ancienReleve']."</td>";
            echo "<td>".$ligne['dernierReleve']."</td>";
            echo "<td><a href=''></a></td>";
            
        echo "</tr>";
    }
        
    echo "</table>";       
      ?>

        
</body>
</html>