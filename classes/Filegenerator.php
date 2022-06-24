<?php

class Filegenerator{

public function gen(string $file, string $content){
$f = fopen($file, 'w');

if($f == false){
echo "File path not found.";
}


fwrite($f, $content);
fclose($f); 
}



public function read(string $source){

$f = fopen($source, 'r');

for($i=1; $i<filesize($source); $i++){
echo fread($f , $i);
}

fclose($f);

}


}


?>
