<?php 
    require_once "bdConnect.php";
    $jeu=$_GET["id"];
    $requete = "SELECT * FROM liste_de_jeux WHERE ID=".$jeu;
    $resultat = $db->query($requete);
    $allGames=$resultat->fetch();
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <body>

        <form method="POST">
            <div class="container" style=" margin-top: 10%;">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <?php 
                        echo "<input type='texte' class='form-control' id='name' value=".$allGames["Nom"].">";
                    ?>
                    
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Type du jeu</label>
                    <?php 
                        echo "<input type='texte' class='form-control' id='typeDeJeu' value=".$allGames["Type"].">";
                    ?>

                    <?php 
                            if ()
                            $requete = "UPDATE * FROM liste_de_jeux WHERE ID=".$jeu;
                            $resultat = $db->query($requete);
                            $majGames=$resultat->fetch();
                    ?>
                    </div>
                    <div class="mb-3 form-check">
                    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                    </div>
                    <button class="btn btn-primary" onclick="changePage();" style="margin-bottom: 1; color:white">Annuler</button>

                    <button type="submit" class="btn btn-primary" style="margin-bottom: 1; color:white"><a href="listeJeu.php">Enregistrer</a></button>
            </div>
        </form>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->

        <script>
            function changePage(){
                document.getElementsByTagName('button').innerHTML=("<a href='listeJeu.php'>");

            }

        </script>

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
