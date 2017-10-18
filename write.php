<?php

ini_set('display_errors', 1); error_reporting(E_ALL);

$data = $_POST['fname'];
$data1 = $_POST['lname'];
$data2 = $_POST['email'];
$data3 = $_POST['dob'];

$file = time().".txt";

//$file = "YOURDATAFILE.txt";
$arrayed_content = array($data,$data1,$data2,$data3);
$saveit = serialize($arrayed_content);


$fp = fopen($file, "w") or die("Couldn't open $file for writing!");

fwrite($fp, $saveit) or die("Couldn't write values to file!");

fclose($fp);
echo "Your Form has been Submitted!";

?>
