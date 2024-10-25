<?php 
    require_once "../bdConnect.php";
    $jeu=$_GET["ID"];
    $name=$_GET["Nom"];
    $type=$_GET["Type"];
    // var_dump($allGames);
    $requete = "UPDATE liste_de_jeux SET Nom ='".$name."', Type='".$type."'  WHERE ID=".$jeu.";";
    echo $requete;
    $db->exec($requete);
    // $stmt->bind_param("si", $name , $jeu);
    // $stmt->bind_param("si", $type, $jeu);
    // $conn->execute($stmt);
    header("Location: ../listeJeu.php");

?>