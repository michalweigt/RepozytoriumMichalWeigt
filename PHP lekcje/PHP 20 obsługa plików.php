<?php
$filename = '/path/to/foo.txt';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>

<h3></h3>

<?php
$filename = 'rzecz.txt';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>

<h3></h3>

<?php
$filename = "rzecz.txt";
echo $filename . ': ' . filesize($filename) . ' bytes';
?>

<h3></h3>

<?php
    $myfile = fopen("rzecz.txt", "r")
        or die("Unable to open file!");
    echo fread($myfile,filesize("rzecz.txt"));
    fclose($myfile);
?>