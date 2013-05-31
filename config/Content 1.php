<?php
if(empty($_REQUEST['x'])) { include "static/home.php"; }
if($_REQUEST['x']=='home'){ include "static/home.php"; }
  
switch($_REQUEST['x']){
case 'daftar' : include "session/daftar peserta.php"; break;
case 'contact' : include "static/contact.php"; break;
case 'print' : include "session/print.php"; break;
case 'pendaftar' : include "session/pendaftar.php"; break;
case 'info' : include "static/informasi.php"; break;
}
?>