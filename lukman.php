<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan</title>
</head>
<body>
	<p>Lukman Fadhli / 888740806190087 / TI-P.19.1K</p>

	<?php 
		$teks[0] = "PHP pertama kali dibuat oleh Rasmus Lerdorf pada tahun 1995.";
		$teks[1] = "Pada waktu itu PHP bernama FI (Form Interpreted). Pada saat tersebut PHP";
		$teks[2] = "adalah sekumpulan script yang digunakan untuk mengolah data form dari web";

		for ($i=0; $i < 3; $i++) { 
			echo str_replace([" ", "PHP", "RasmusLerdorf"], ["", "<b><u>PHP</u></b>", "<b><i>**RasmusLerdorf**</i></b>"], $teks[$i]);
			echo "<br>";
		}

		echo "<br>";

		for ($i=0; $i < 3; $i++) { 
			$str = explode(" ", $teks[$i]);
			for ($j=0; $j < count($str); $j++) { 
				if ($j % 2 == 0) {
					echo " ".$str[$j]." ";
				}else{
					echo strtoupper("<b>".$str[$j]."</b>");
				}
			}
			echo "<br>";
		}

		echo "<br>";

		for ($i=0; $i < 3; $i++) { 
			$str = explode(" ", $teks[$i]);
			for ($j=0; $j < count($str); $j++) { 
				echo " ".$str[$j]."(".strlen($str[$j]).") ";
			}
			echo "<br>";
		}
	 ?>
</body>
</html>