<?php
    function writeMsg() {
        echo "Hello World";
    }

    writeMsg(); //call the function
?>

<h3></h3>

<?php
    function familyName($fname) {
        echo "$fname Refsnes.<br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
?>

<h3></h3>

<?php
    function add_some_extra(&$string) {
            $string .= "and something extra";
    }
    $str = "This is a string ";
    add_some_extra($str);
    echo $str //outputs "This is a string and something extra"
?>

<h3></h3>

<?php
    function square($num){
        return $num * $num;
    }
    echo square(4); // outputs '16'
?>

<h3></h3>

<?php
    function sum($num1, $num2){
        return $num1 + $num2;
    }
    echo sum(4, 5);
?>

<h3></h3>

<?php
    echo preg_replace_callback('~-([a-z])~', function ($match) {
        return strtoupper($match[1]);
    }, 'hello-world');
    // outputs helloworld
?>
