<?php
session_start();
if(!isset($_SESSION['account'])){
session_destroy();
echo ' <meta http-equiv="refresh" content="0;url=index.php">';
die();
}
?>