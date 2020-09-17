<?php 

function security($url){
 		if ($_SESSION['userAgent'] === $_SERVER['HTTP_USER_AGENT'] && $_SESSION['IPaddress'] === $_SERVER['SERVER_ADDR']) {
 			return true;
 		}elseif($_SESSION['userAgent'] !== $_SERVER['HTTP_USER_AGENT'] && $_SESSION['IPaddress'] !== $_SERVER['SERVER_ADDR']){
 			require_once('logout.php');
 		}
		
}
 ?>