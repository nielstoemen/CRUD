<?php 
    include('includes/session.php');
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
    
    <form action="boekingdelete.php" method="post" class="forum">
        <input type="text" name="id" value="<?php echo $_GET['id'];?>">
        <input name="submit" type="submit" value="verwijder">
    </form>

        <?php
        include_once 'includes/connect.php';

        if(isset($_POST['submit']))
        {
            var_dump($_POST);
            $sql = "DELETE FROM boekingen WHERE id =:id";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":id", $_POST['id']);
            $stmt->execute();
            header("Location: adminpage.php");
        }
    ?>

</body>
</html>