
<body onload="counting();">
<link rel="stylesheet" href="https://localhost/project/view/style.css">
<?php
session_start();
require_once('conn.php');
$data = new Database();
if(!isset($_SESSION['username']));
if($data->checkRoles($_SESSION['username']))
{
    header("location: https://localhost/project/login_register/login.php");
}
?>

<div class="userh">

<p><a href="https://localhost/project/login_register/edit.php">twoje zamówienia</a></p>
<p><input type="text" placeholder="Wyszukaj zamowienia" name="search"></p>

<div class="userh-content">
<p><a href="https://localhost/project/login_register/insert.php">złóż zamówienie</a></p>
</div>
 
 <a href="https://localhost/project/main_index.php"><button class="buttonu">Wyloguj</button></a>
<?php
if (isset($_SESSION['username'])) { ?>
<p><a class="login"><?= $_SESSION['username'] ?> </a></p>

 <?php
}   else {
    header("location: https://localhost/project/login_register/login.php ");
}
?>
</div>
<div id="clock">


</div>
<div class="termins">
<h1>Aktualne zamówienia</h1>
<table class="tabela">
    <thead>
<tr class="tabelka2">
    <th>
        ID zamówienia
    </th>
    <th>
        Typ zamówienia
    </th>
    <th>
        Marka samochodu
    </th>
    <th>
        Model samochodu
    </th>
    <th>
         Status
    </th>
    <th>
         Data ukończenia
    </th>
</tr>

<?php
require_once('polacz.php');
$sql="SELECT * FROM zamowienie";
$result=mysqli_query($baza ,$sql);
$ctn=1;
if(mysqli_num_rows($result)>0)
{
 while($row=mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?= $ctn?></td>   
    <td><?= $row['ID']?></td>
    <td><?= $row['Typ']?></td>
    <td><?= $row['Marka']?></td>
    <td><?= $row['Model']?></td>
    <td><?= $row['Data']?></td>
    <td><a href="update.php?ID=<?= $row['ID']?>&Typ=<?= $row['Typ']?>&Marka=<?= $row['Marka']?>&Model=<?= $row['Model']?>&Data=<?= $row['Data']?>"><button  class="">edytuj</button></a></td>
    <td><a href="usun.php?ID=<?= $row['ID']?>"><button class="">usuń</button></a></td>
</tr>
<div id="myModal" class="modal">
</div>
<?php
$ctn++;
};
}
else{
?>
<TD colspan="7">
    <?= 'brak danych'?>
</TD>

<?php
}
mysqli_close($baza);
?>
</thead>
</table>

</div>
</div>



<script src="https://localhost/project/scripts/script.js"></script>
</thead>
</table>
<body>