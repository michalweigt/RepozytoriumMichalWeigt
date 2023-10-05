<?php
    echo strlen( "Hello World" ); //outputs 12
    echo strlen(" Łódź" ); //outputs 7
    // polskie znaki w unicode zajmują dwa bajty

    echo mb_strlen( "Łódź" ); //outputs 4
?>

<?php
    echo str_word_count("Hello world!"); //outputs 2
?>

<?php
    echo str_replace("World", "Dolly", "Hello World!");
    //outputs Hello Dolly!
?>

<?php
    echo strpos("Hello World!", "World")
    //outputs 6
?>