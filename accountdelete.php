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
    <title>Document</title>
</head>
<body>

    <?php
        
        $sql = "SELECT * FROM accounts WHERE id =:id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetch();

        echo $result['id'];

        ?>

        <table>
                     <tr>
                         <th>
                         <?php 
                            echo $result['email'] . $result['wachtwoord'];
                         ?>
                        </th> 
                    </tr>
            </table>

    <form action="includes/accountchange.php" method="post" class="forum">
        <label for="email">email:</label>
        <input type="text" name="email" id="email" value=<?php echo $result['email'];?>>

        <label for="wachtwoord">wachtwoord:</label>
        <input type="text" name="wachtwoord" id="wachtwoord" value=<?php echo $result['wachtwoord'];?>>

        <label for="id">id:</label>
        <input type="text" name="id" id="id" value=<?php echo $result['id'];?>>

        <input type="submit" value="Submit">
    </form>
    
    <form action="accountdelete.php" method="post" class="forum">
        <input type="text" name="id" value="<?php echo $_GET['id'];?>">
        <input name="submit" type="submit" value="verwijder">
    </form>

        <?php

        if(isset($_POST['submit']))
        {
            var_dump($_POST);
            $sql = "DELETE FROM accounts WHERE id =:id";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":id", $_POST['id']);
            $stmt->execute();
            header("Location: adminpage.php");
        }
    ?>

</body>
</html>