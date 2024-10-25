<?php 
    $host="127.0.0.1";
    $dbname="bibliotheque_de_jeux";
    $user="root";
    $pass="";
    $db =  new PDO("mysql:host=$host; dbname=$dbname;charset=UTF8", $user, $pass);
    // print_r($db);

    // $requete = "SELECT * FROM liste_de_jeux ";
    // $resultat = $db->query($requete);
    // // $resultat->setFetchMode(PDO::FETCH_ASSOC);
    // $allGames=$resultat->fetch()

?>



