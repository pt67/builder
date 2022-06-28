<?php 
error_reporting();
ini_set('display_errors', E_ALL);


include 'config/con.php';



?>



<!DOCTYPE html>
<html>
<head>
<title>Page Builder</title>
</head>
<body>

<form method="POST" action="builder.php">

<div class="">
<input type="text" name="pagename" placeholder="Page Title">
</div>

<div class="">
<textarea cols="100" rows="30" name="page-field">


</textarea>
</div>

<button type="submit" name="submit">Create</button>

</form>


<div class="">

<h3>Created Pages</h3>
<ul>
<?php

$query = mysqli_query($db, "SELECT * FROM builder_data") or ($db->error);


while($p = mysqli_fetch_assoc($query)){


echo "<li><a href=builds/". $p['title'].".php" .">".$p['title'] ."</a></li>";

}



 ?>

</ul>
</div>

</body>
</html>







