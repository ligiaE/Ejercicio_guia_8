<?php
	    if (isset($_POST['Mi'])){
	$m=$_POST['Mi'];
	$km=0;
	$y=0;
	$p=0;
	$pulg=0;
	
	$km=$m*0.6214;
	$y=$m*1760;
	$p=$y*3;
	$pulg=$y*36;
	
	echo "Los km equivalen a: ".$km."<br> Las yardas equivalen a: ".$y."<br> Los pies equivalen a: ".$p. "<br> Las pulgadas equivalen a: ".$pulg;
		}
	
?>