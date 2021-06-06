<?php
include_once 'polacz.php';
if(isset($_GET['save']))
{	 
     $ID = $_GET['ID'];
	 $Typ = $_GET['Typ'];
	 $Marka = $_GET['Marka'];
	 $Model = $_GET['Model'];
     $Data = $_GET['Data'];
	 $sql = "INSERT INTO zamowienie (ID,Typ,Marka,Model,Data)
	 VALUES ('$ID','$Typ','$Marka','$Model','$Data')";
	 if (mysqli_query($baza, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($baza);
	 }
	 mysqli_close($baza);
}
header("Location: https://localhost/project/login_register/user.php")

?>