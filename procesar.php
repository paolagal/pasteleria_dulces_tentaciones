<?php

if (!empty($_POST["nickname"]) && !empty($_POST["password"]))
	
{

$nickname =$_POST["nickname"];
$password =$_POST["password"];
if ($nickname== "usuario" && $password =="123" or $nickname== "UAM" && $password== "1011")

{
	header("location:bienvenida.html");
}
else
{
	echo "usuario o contraseña no valido";
}


}else{
		echo "Los datos estan vacios";
}

?>