<?php 
    include('includes/session.php');
    include_once 'includes/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailpage</title>
</head>
<body>
     <?php
        
        $sql = "SELECT * FROM rijzen WHERE id =:id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetch();

        ?>

        <table>
                     <tr>
                         <th>
                         <?php 
                            echo '<img src="image/'.$result['foto'].'" height="50px" width="50px" alt="image error">'. ':' . ' ' . $result['titel'] . $result['beschrijving'] . $result['prijs'] . $result['pension'] . $result['sterren'];
                         ?>
                        </th> 
                    </tr>
            </table>
    <form action="includes/change.php" method="post" class="forum">
        <label for="titel">titel:</label>
        <input type="text" name="titel" id="titel" value=<?php echo $result['titel'];?>>

        <label for="beschrijving">beschrijving:</label>
        <input type="text" name="beschrijving" id="beschrijving" value=<?php echo $result['beschrijving'];?>>

        <label for="prijs">prijs:</label>
        <input type="text" name="prijs" id="prijs" value=<?php echo $result['prijs'];?>>

        <label for="datum">datum:</label>
        <input type="text" name="datum" id="datum" value=<?php echo $result['datum'];?>>

        <label for="pension">pension:</label>
        <input type="text" name="pension" id="pension" value=<?php echo $result['pension'];?>>

        <label for="sterren">sterren:</label>
        <input type="text" name="sterren" id="sterren" value=<?php echo $result['sterren'];?>>

        <label for="foto">foto:</label>
        <input type="text" name="image" id="image" value=<?php echo $result['foto'];?>>

        <input type="text" name="id" value="<?php echo $_GET['id'];?>">

        <input type="submit" value="Submit">
    </form>

    <form action="detail.php" method="post" class="forum">
        <input type="text" name="id" value="<?php echo $_GET['id'];?>">
        <input name="submit" type="submit" value="verwijder">
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            var_dump($_POST);
            $sql = "DELETE FROM rijzen WHERE id =:id";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":id", $_POST['id']);
            $stmt->execute();
            header("Location: adminpage.php");
        }
    ?> 

</body>
</html>