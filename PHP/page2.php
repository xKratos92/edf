<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <title>Liste des clients</title> 
    </head>
<body>
  
    <?php
    include 'cnx.php';
    $sql = $cnx->prepare ("Select nom, prenom, ancienReleve, dernierReleve from client");
        $sql->execute();
        echo"<table>";
        foreach ($sql->fetchAll (PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<tr>";
                echo "<td>".$ligne['nom']."</td>";
                echo "<td>".$ligne['prenom']."</td>";
                echo "<td><a href='page3.php?nom=".$ligne['nom']."'>Nouveau releve</a></td>";
            echo "</tr>";
        }
        echo"</table>";
    ?>
        
</body>
</html>