<?php

require'../class/sessions.php';
$objses = new Sessions();
$objses->init();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

if($user == ''){
	header('Location: http://localhost:8888/CodigosVideos/2-adminusers1/index.php?error=2');
}

?>
<?php

//Llamado de los archivos clase
require'../class/config.php';
require'../class/users.php';
require'../class/dbactions.php';
require'../class/profiles.php';


//realizamos la conexión a la base de datos
$objCon = new Connection();
$objCon->get_connected();

$objUse = new Users();

$objUse->modify_user();

header('Location: user_list.php');

?>