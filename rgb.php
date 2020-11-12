<?php
/*
	Author: Nazmus Nasir
	Website: https://www.EasyProgramming.net
*/

session_start();


$sw1 = $_SESSION['switch1'];
$sw = $_SESSION['switch'];

if(isset($_GET['red'])){
    $red = $_GET['red'];
	$_SESSION['czerwony'] = $red;
    $green = $_GET['green'];
	$_SESSION['zielony'] = $green;
    $blue = $_GET['blue'];
	$_SESSION['niebieski'] = $blue;
	



	
	
	
	
	
	
	# zapis do pliku z sesji
	$fp = fopen("database.txt", "w");

	#fwrite($fp, "czerwony=");
	fwrite($fp, $red);
	fwrite($fp, "\n");


	#fwrite($fp, "zielony=");
	fwrite($fp, $green);
	fwrite($fp, "\n");


	#fwrite($fp, "niebieski=");
	fwrite($fp, $blue);
	fwrite($fp, "\n");

	#fwrite($fp, "switch1=");
	fwrite($fp, $sw1);
	fwrite($fp, "\n");

	#fwrite($fp, "switch=");
	fwrite($fp, $sw);
	fwrite($fp, "\n");

	fclose($fp);


	
	
    
    //trigger rgb.py python code with the red, green, and blue params
    $output = exec('python3 rgb.py ' . $red . ' ' . $green . ' ' . $blue . ' 2>&1');
    
    //ouput for troubleshooting
    echo $output . '<br />'; 
}

?>
