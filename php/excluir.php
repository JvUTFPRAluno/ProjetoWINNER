<?php
    include 'config.php';

    $id = $_GET['id'];

   $sql = "DELETE FROM `ordemservico` WHERE `id`='$id' LIMIT 1";
   mysqli_query($conn, $sql);

   mysqli_close($conn);
   header('Location: '. '../ordens.php');
   die();
?>