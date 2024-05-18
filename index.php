<?php 
//Memanggil controller dan model

require_once "model/anggota_model.php";
require_once "controller/anggota.php";

//routing
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ("/oppmvc/index.php" == $uri){
    index();
} else if ("/oopmvc/index.php/detail" == $uri && isset($_GET['id'])){
    detail($_GET['id']);
} else {
    header("HTTP/1.1 404 not found");
    echo "<html> <body><h1>page not found</h1> </body> </html>";
}
?>

