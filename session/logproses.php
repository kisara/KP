<?php 
session_start();
include "config/koneksi.php";

if ($_GET['do']=='login'){
	$masuk = mysql_query("SELECT * FROM user where username='".$_POST['username']."' AND password='".$_POST['password']."'")
		 or die(mysql_error());
		 $bisa = mysql_num_rows($masuk);
	if (!empty($bisa)){
		$c = mysql_fetch_array($masuk);
        $_SESSION['userid'] = $c['username'];
		$_SESSION['level']= $c['hak akses'];
		$_SESSION['login']=true ;
		echo "<script>window.location='index.php?p=admin'</script>";
	} else{
		echo "<script>alert('maaf username / password salah');</script>";	}
	}

if ($_GET['button2']=='Sign Out'){
	$_SESSION['login']=false ;
	unset($_SESSION['userid']);	
}
?>