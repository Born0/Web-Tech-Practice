<?php

    $myfile= fopen("readme.txt", "r") or die("Error");
    echo fread($myfile,filesize("readme.txt"));
    fclose($myfile);
?>

<?php
    $myFile= fopen("readme.txt", "w") or die("Error");
    $txt="hello";
    fwrite($myFile,$txt);
    fclose($myFile);
?>