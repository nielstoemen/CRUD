<?php 
    include('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpage</title>
    <link rel="stylesheet" href="css/adminstyle.css">
</head>
<body>
    <nav>
    <img src="image/feddy.png" class="freddy1">
    <p class="dashboard">Dashboard</p>
    </nav>
    <div class="welkomtekst">
        <h1>WELKOM</h1>
        <p>Welkom op de admin pagina van de Fazzbear travel webpagina. Op deze pagina kunt u allerlei dingen zoals reizen, klanten profielen en reviews bekijken, verwijderen of aanmaken. Klik op een van de onderstaande opties om te beginnen.</p>
    </div>

    <?php
                include_once 'includes/connect.php';

                $sql = "SELECT * FROM rijzen";
                $stmt = $connect->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchALL();
                ?>

            <table>
                <?php
                foreach ($result as $reizen) 
                { ?>
                     <tr>
                         <th>
                         <?php 
                            echo '<img src="image/'.$reizen['foto'].'" height="50px" width="50px" alt="image error">'. ':' . ' ' . $reizen['titel'] . $reizen['beschrijving'] . $reizen['prijs'] . $reizen['pension'] . $reizen['sterren'];
                         ?> 
                         <a href="detail.php?id=<?php echo $reizen['id']; ?>">Meer informatie</a>
                        </th> 
                    </tr>
                <?php 
            } ?>
            </table>

    <footer>
    <button class="logoutbutton"><a href="includes/logout.php">logout</a></button>
    </footer>
</body>
</html>