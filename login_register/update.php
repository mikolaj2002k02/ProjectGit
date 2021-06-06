<?php
include_once 'polacz.php';
if(count($_GET)>0) {
mysqli_query($baza,"UPDATE zamowienie set ID='" . $_GET['ID'] . "', Typ='" . $_GET['Typ'] . "', Marka='" . $_GET['Marka'] . "', Model='" . $_GET['Model'] . "' ,Data='" . $_GET['Data'] . "' WHERE ID='" . $_GET['ID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($baza,"SELECT * FROM zamowienie WHERE ID='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
</head>
<body>
<form name="frmUser" method="GET" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
ID zamówienia: <br>

<input type="text" name="ID"  value="<?php echo $row['ID']; ?>">
<br>
Typ zamówienia: <br>
<input type="text" name="Typ" class="txtField" value="<?php echo $row['Typ']; ?>">
<br>
Marka samochodu:<br>
<input type="text" name="Marka" class="txtField" value="<?php echo $row['Marka']; ?>">
<br>
Model samochodu<br>
<input type="text" name="Model" class="txtField" value="<?php echo $row['Model']; ?>">
<br>
Data ukończenia:<br>
<input type="text" name="Data" class="txtField" value="<?php echo $row['Data']; ?>">
<br>
<input type="submit" name="submit" class="button"></a>



</form>
</body>
</html>