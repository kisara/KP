<?php
if(!$_SESSION['login']){

?>

<div id="login"><form method="post" action="?do=login">
  Username: <input type="text" name="username" size="15" /><br />
  <br />Password: <input type="password" name="password" size="15" /><br />
  <div align="center">
  <br /><input type="submit" value="Login" />
  </div>
</form>

<? }else{?>

<table border="0">
<tr>
   <td align="center"><form id="form2" name="form2" method="get" action="">
    <a><label>
     Hello <? echo $_SESSION['userid'] ?>
              </label></a><label> 
         <? if ($_SESSION['level']=="admin"){ ?>
         | <a href="?p=admin">Admin Page</a> | <? } ?>
         <input type="submit" name="button2" id="button2" value="Sign Out" />
        </label>
    </form>
    </td>
 </tr>
</table>

<? }?>