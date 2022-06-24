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

<?php




 ?>


</div>

</body>
</html>







