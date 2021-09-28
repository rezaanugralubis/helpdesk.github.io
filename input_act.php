<?php
include 'connect.php';

$Nama = $_POST ['Nama'];
$No_Whatsapp = $_POST ['No_Whatsapp'];
$Devisi = $_POST ['Devisi'];
$Tanggal = $_POST ['Tanggal'];
$Kendala_yang_dialami = $_POST ['Kendala_yang_dialami'];
$Picture = $_POST ['Picture'];

mysql_query("INSERT INTO helpdesk values( $Nama, $No_Whatsapp, $Devisi, $Tanggal, $Kendala_yang_dialami, $Picture')");
header ("location: CRUD.php");

?>