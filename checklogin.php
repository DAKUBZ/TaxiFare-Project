<?php
function check_login()
{
	// check if session user id is false, then return to index.php
	if(strlen($_SESSION['id'])==false)
		{		
			$_SESSION["id"]="";
			header("Location: index.php");
		}
}
?>