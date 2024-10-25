<?php 
    require_once "../bdConnect.php";
    $name=$_POST["nomJeu"];
    $type=$_POST["typeDeJeu"];
    $requete = "UPDATE liste_de_jeux SET Nom = ".$name.", Type=".$type."  WHERE ID=".$jeu;
    $stmt = $conn->prepare($requete);
    $stmt->bind_param("si", $name , $jeu);
    $stmt->bind_param("si", $type, $jeu);
    $conn->execute($stmt);
    header("Location: ../listeJeu.php");

?>