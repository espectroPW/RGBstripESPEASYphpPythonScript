<?php
/*
	Author: Nazmus Nasir
	Website: https://www.EasyProgramming.net
*/

session_start();

if(isset($_GET['red'])){
    $red = $_GET['red'];
	$_SESSION['czerwony'] = $red;
    $green = $_GET['green'];
	$_SESSION['zielony'] = $green;
    $blue = $_GET['blue'];
	$_SESSION['niebieski'] = $blue;
    
    //trigger rgb.py python code with the red, green, and blue params
    $output = exec('python3 rgb.py ' . $red . ' ' . $green . ' ' . $blue . ' 2>&1');
    
    //ouput for troubleshooting
    echo $output . '<br />'; 
}

?>
