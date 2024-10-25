<?php 
    $host="127.0.0.1";
    $dbname="bibliothèque de jeux";
    $user="root";
    $pass="";
    $db =  new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
    // print_r($db);

    // $requete = "SELECT * FROM liste_de_jeux ";
    // $resultat = $db->query($requete);
    // // $resultat->setFetchMode(PDO::FETCH_ASSOC);
    // $allGames=$resultat->fetch()

?>



