<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(session_destroy())//Destroying all sessions
{
	header("Location:index.php");
}
?>