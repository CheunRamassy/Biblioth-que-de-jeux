<?php 
    require_once "../bdConnect.php";

    $name=$_GET["Nom"];
    $type=$_GET["Type"];
    // var_dump($allGames);
    // $requete = "INSERT INTO liste_de_jeux (Nom, Type) VALUES (".$name."," .$type.");";
    $requete = $db->prepare("INSERT INTO liste_de_jeux (Nom, Type) VALUES (?, ?)");
    // echo $requete;
    // $db->exec($requete);
    $requete->execute([$name, $type]);
    // $stmt->bind_param("si", $name , $jeu);
    // $stmt->bind_param("si", $type, $jeu);
    // $conn->execute($stmt);
    header("Location: ../listeJeu.php");
?>