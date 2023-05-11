<?php
    // var_dump($_POST); //var_dumb digunakan menampilkan isi apapun dari variabel 
    echo "<h1>" .$_GET['nama']. "</h1>";
    echo "<h1>" .$_GET['nim']. "</h1>";

    foreach ($_GET['vehicle'] as $key => $value){
        echo "$value <br>";
    }
?>