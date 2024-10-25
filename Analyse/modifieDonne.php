<?php 
    require_once "../bdConnect.php";
    $jeu=$_POST["id"];
    $name=$_POST["nomJeu"];
    $type=$_POST["typeDeJeu"];
    $requete = "UPDATE liste_de_jeux SET Nom = ".$name.", Type=".$type."  WHERE ID=".$jeu.";";
    $db->exec($requete);
    // $stmt->bind_param("si", $name , $jeu);
    // $stmt->bind_param("si", $type, $jeu);
    // $conn->execute($stmt);
    header("Location: ../listeJeu.php");

?>