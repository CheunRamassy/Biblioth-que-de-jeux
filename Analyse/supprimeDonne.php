<?php 
    require_once "../bdConnect.php";
    $id=$_GET["ID"]; 
    // var_dump($allGames);
    // $requete = "INSERT INTO liste_de_jeux (Nom, Type) VALUES (".$name."," .$type.");";
    $requete = $db->prepare("DELETE FROM liste_de_jeux WHERE ID = ?");
    // echo $requete;
    // $db->exec($requete);
    $requete->execute([$id]);
    // $stmt->bind_param("si", $name , $jeu);
    // $stmt->bind_param("si", $type, $jeu);
    // $conn->execute($stmt);
    // header("Location: ../listeJeu.php");
?>