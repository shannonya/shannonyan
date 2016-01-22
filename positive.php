
<?php

$name = $_POST["name"];
$text = $_POST["mes"];




#WRITE DOWN COMMENTS#

$write = fopen("com.txt","a+");
fwrite($write,"<u><b> $name</b></u>$text<br></br>");
fclose($write);

#DISPLAY COMMENTS#

$read = fopen("com.text","r+t");
echo "All Comments:<br>";

while(!feof($read)){
echo fread($read,1024);
}
fclose($read);




?>