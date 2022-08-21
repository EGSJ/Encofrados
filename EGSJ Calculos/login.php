<?php
echo '<font color="black" size="3" face="arial">';
$user=$_POST["user"];
$contra=$_POST["contra"];
$usuario1="joseluis";
$usuario2="lourdes";
$usuario3="diego";
$pass1="joseluis";
$pass2="lourdes";
$pass3="diego";
$sw=0

if($user==$usuario1)
{
	if($contra==$pass1)
	{
		ECHO "Usuario y contraseña correctos";
		ECHO "Usuario y contraseña correctos";
		ECHO '<a href="main.html">';
		ECHO '<input type="button" value="INGRESAR">';
		ECHO '</a>';
		$sw=1;
	}
}
if($user==$usuario2)
{
	if($contra==$pass2)
	{
		ECHO "Usuario y contraseña correctos";
		ECHO "Usuario y contraseña correctos";
		ECHO '<a href="main.html">';
		ECHO '<input type="button" value="INGRESAR">';
		ECHO '</a>';
		$sw=1;
	}
}
if($user==$usuario3)
{
	if($contra==$pass3)
	{
		ECHO "Usuario y contraseña correctos";
		ECHO "Usuario y contraseña correctos";
		ECHO '<a href="main.html">';
		ECHO '<input type="button" value="INGRESAR">';
		ECHO '</a>';
		$sw=1;
	}
}

if($sw==0)
{
	ECHO "Usuario y contraseña incorrectos";
}

		
			
			
			
		
		ECHO "<P>";
	ECHO '<a href="index.html">';
	ECHO '<input type="button" value="VOLVER">';
	ECHO '</a>';
echo '</font>';	
?>