<?php
include "polacz.php";
$ID = $_GET['ID']; 
if ($sql = $baza->prepare( "DELETE FROM zamowienie WHERE ID = ?;" ))
{
 $sql->bind_param( "s", $ID);
 $sql->execute();
 $sql->close();
}
$baza->close();
header("Location: https://localhost/project/login_register/user.php")

?>