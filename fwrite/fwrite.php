<?php
    // utworzenie nowego pliku i zapis tekstu o niego

    $myfile = fopen("newfile.txt", "w")
                or die("Unable to open file");
    $tekst = "John już tu nie mieszka";
    fwrite($myfile, $tekst);
    fclose($myfile);
?>