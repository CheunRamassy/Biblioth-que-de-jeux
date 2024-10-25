
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
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    </head>

    <body>
        <?php 
            $host="127.0.0.1";
            $dbname="bibliothèque de jeux";
            $user="root";
            $pass="";
            $db =  new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
            // print_r($db);

            $requete = "SELECT nom, type FROM liste_de_jeux ";
            $resultat = $db->query($requete);
            // $resultat->setFetchMode(PDO::FETCH_ASSOC);

        ?>

        <h1 style="margin-top: 1%">Liste des jeux</h1>
            <div class="container" style="margin-top:5%">
                <a name="Ajouter" id="Ajouter" class="btn btn-primary" href="#" role="button" >Ajouter un jeu</a>
                <table id="maTable" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nom du jeu</th>
                        <th>type de jeu</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>      
                        <?php 
                            while($allGames=$resultat->fetch()){
                                echo "<tr>";
                                echo "<td>". $allGames["nom"] ."</td>";
                                echo "<td>". $allGames["type"] ."</td>";
                                echo "<td><a name='modifier' id='' class='btn btn-primary' href='#' role='button' >Modifier</a>
                                            <a name='' id='' class='btn btn-primary' href='#' role='button' >Supprimer</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>

                

                
                

            </div>

        <header>
            <!-- place navbar here -->
        </header>

        <main></main>

        <footer>
            <!-- place footer here -->
        </footer>
        <script>

            $(document).ready(function () {
                    $('#maTable').DataTable();
                })
        </script>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
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
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    </body>
</html>


