<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <title>Liste des clients</title> 
    </head>
<body>
  
    <?php
    include 'cnx.php';
 
    $sql = $cnx->prepare ("Select client.nom, client.prenom, ancienReleve, identifiant, dernierReleve from client, controleur where controleur.id = client.idcontroleur and id=".$_GET['nom']);
        $sql->execute();
        echo"<table>";
        foreach ($sql->fetchAll (PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<tr>";
                echo "<td>".$ligne['nom']."</td>";
                echo "<td>".$ligne['prenom']."</td>";
                echo "<td>".$ligne['ancienReleve']."</td>";
                echo "<td>".$ligne['dernierReleve']."</td>";
                echo "<td><a href='page3.php?var=".$ligne['identifiant']."'>Nouveau relever</a></td>";
                
            echo "</tr>";
        }
        echo "<td><a href='page1.php'>Home</a></td>"; 
        echo "</table>";       
          ?>
        
</body>
</html>