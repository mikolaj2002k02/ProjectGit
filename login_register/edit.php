<?php
include_once 'polacz.php';
$result = mysqli_query($baza,"SELECT * FROM zamowienie");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
<tr>
<td>ID zamówienia</td>
<td>Typ zamówienia</td>
<td>Marka samochodu</td>
<td>sModel samochodu</td>
<td>Data ukończenia</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["ID"]; ?></td>
<td><?php echo $row["Typ"]; ?></td>
<td><?php echo $row["Marka"]; ?></td>
<td><?php echo $row["Model"]; ?></td>
<td><?php echo $row["Data"]; ?></td>
<td><a href="update.php?ID=<?php echo $row["ID"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>