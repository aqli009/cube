<div align="center">
<?php
$huruf = array(' ','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');

	$text = $_GET['text'];
	$key = $_GET['key'];
	$pt = strlen($text);
	$pk = strlen($key);
	$ik = 0;

	
	$i=0;
	for($j=0;$j<$pt;$j++){
 		$ht = $text[$j];
 		$hk = $key[$ik];
		$at[$j] = array_search($ht,$huruf);
		$ak[$j] = array_search($hk,$huruf);
		$b[$j] = ($at[$j]-$ak[$j]) % 53;
		if ($b[$j]<0){
			$b[$j] = ($at[$j]-$ak[$j]) + 53;
		}
 		$c[$j] = $huruf[$b[$j]]; 	
 			$ik++;
			if ($ik >= $pk)
			{
				$ik = 0;

			}
 	}

  		echo "Text Awal : ";
	  	for($i=0;$i<strlen($text);$i++)
	  	{
	  	echo $text[$i];
	  	}
	  	echo "<br>";
	  	echo "Hasil Deskripsi = ";
	  	$hsl = '';
	  	for ($i=0;$i<strlen($text);$i++)
	  	{
	  	echo $c[$i];
	  	$hsl = $hsl . $c[$i];
	  	}
	  	;
?> 