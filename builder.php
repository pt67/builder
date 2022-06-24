<?php

include 'config/con.php';
include 'classes/Filegenerator.php';

$st = new Filegenerator;
$dir = 'builds/';


if(isset($_POST['submit'])){

$title = mysqli_real_escape_string($db, $_POST['pagename']);
$tname = mysqli_real_escape_string($db, $_POST['page-field']);




$crd = mysqli_query($db, "INSERT INTO builder_data(title, textname) values('$title', '$tname')") or die($db->error);


if($crd){

$st->gen($dir.$title.'.php', $tname);

header("Location: /");

}



}

$db->close();

?>
