<?php
  require_once('session.php');
	require_once('conexion.php');

function get_user_data_by_user( $user )
{
	global $mysqli, $result;
	$sql = "SELECT * FROM `acceso` WHERE `user_acces`='{$user}'";
	$result = $mysqli->query($sql);
	return $result->fetch_assoc();

}
function validar_clave($clave,&$error_clave){
   if(strlen($clave) < 8){
      $error_clave = "La clave debe tener al menos 8 caracteres";
      return false;
   }
   if(strlen($clave) > 25){
      $error_clave = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$clave)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   $error_clave = "";
   return true;
} 

if(isset($_SESSION['perfiles_user']) )
{
  header('Location: ../index.php');
  die();

}
if(isset( $_POST ))
{


   $error_encontrado="";
   $u = htmlspecialchars($_POST['user']);
  

if (validar_clave(htmlspecialchars($_POST["password"]), $error_encontrado)){

 	$p = md5(htmlspecialchars($_POST["password"]));
  var_dump($u);
  	if($user_data = get_user_data_by_user($u)){
  		var_dump( $user_data);
  		if($p == $user_data['login_acces']){ 
    		
    		$_SESSION = array();
    		$_SESSION['perfiles_user'] = $user_data['user_acces'];
    
        header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['SKey'] = uniqid(mt_rand(), true);
        $_SESSION['IPaddress'] = $_SERVER['SERVER_ADDR'];
        $_SESSION['LastActivity'] = $_SERVER['REQUEST_TIME'];

    
    		header('Location: ../busqueda-avanzada.php');
  		}else{
      echo "PASSWORD INCORRECTO: " . $error_encontrado;
   		}
  }
  
}else{echo "PASSWORD INVALIDO";}

}
?>
