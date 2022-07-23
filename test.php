<?php 
error_reporting();
ini_set('display_errors', E_ALL);

$con = mysqli_connect('localhost', 'root', '123456', 'test');

if($con->connect_error){
  die($con->error);
}


if(isset($_SERVER['REQUEST_METHOD'])){

$data = $_POST;

foreach($data as  $d){
$sql = "INSERT INTO tester(name) VALUES('$d')";

mysqli_query($con, $sql);

}

}



?>
<!DOCTYPE html>
<html>
<head>
<title>Testing Multiple Data with mysql and retriving</title>
</head>
<body>

<form method="POST" >
<b>
<input type="text" name="0" id="parent"/>
</b>
<button class="plus">+ Add Another</button><br><br>
<input type="submit" value="Submit Items"/>

</form>

<script>

var plus = document.querySelector('.plus');

var count = 0;
plus.onclick = (e)=>{
e.preventDefault();

count++;

var input = document.createElement('input');
    input.setAttribute('name', count);
    input.setAttribute('type', 'text');
    
var parent = document.getElementById('parent');
    
parent.parentNode.insertBefore(input, parent.lastChild);

}


</script>


</body>
</html>
