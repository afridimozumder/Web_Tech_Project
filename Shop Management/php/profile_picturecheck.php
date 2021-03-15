<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$target_dir = "../upload/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];



	if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
       echo $_FILES["filetoupload"]["type"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
?>

