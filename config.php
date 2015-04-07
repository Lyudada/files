<div id="aside" class="box">


</div>
<hr class="noscreen" />
		<!-- Content (Right Column) -->
<div id="content" class="box">
<?
if(isset($_POST['name']))
{
		if($_POST['pass']!=""){$pass=md5($_POST['pass']);$ddd=", pass='$pass'";}
		$query2 = "update users set mail='{$_POST['name']}', tel='{$_POST['tel']}', email='{$_POST['email']}', adres='{$_POST['adres']}' $ddd where id='1'";
		$result2 = sql($query2);
		echo"<p class=\"msg done\">News was modifided!</p>";
}

$query = "SELECT * FROM users";
$result = sql($query);
$row = mysql_fetch_assoc($result);
?>
<form method="POST" enctype="multipart/form-data" >
<table class="news">
    <tr>
    	<td>
        Логин:
        </td>
        <td>
        <input type="text" name="name" value="<?=$row['mail']?>"  size="35" />
        </td>
    </tr>
    <tr>
    	<td>
        Пароль:
        </td>
        <td>
        <input type="text" name="pass" size="35"  />
        </td>
    </tr>
    <tr>
    	<td>
        Тел.:
        </td>
        <td>
        <input type="text" name="tel" value="<?=$row['tel']?>" size="35" />
        </td>
    </tr>
    <tr>
    	<td>
        Email:
        </td>
        <td>
        <input type="text" name="email" value="<?=$row['email']?>" size="35"  />
        </td>
    </tr> 
     <tr>
    	<td>
        Адрес:
        </td>
        <td>
        <input type="text" name="adres" value="<?=$row['adres']?>" size="35"  />
        </td>
    </tr>    
    <tr>
    	<td>
        
        </td>
        <td>
       <input type="image" src="./images/save.png">
        </td>
    </tr>
</table>     
</form>