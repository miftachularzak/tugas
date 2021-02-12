<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan</title>
</head>
<body>
	<?php 
		$teks[0] = "PHP pertama kali dibuat oleh Rasmus Lerdorf pada tahun 1995.";
		$teks[1] = "Pada waktu itu PHP bernama FI (Form Interpreted).Pada saat tersebut PHP";
		$teks[2] = "adalah sekumpulan script yang digunakan untuk mengolah data form dari web";

		echo "<b> Menggunakan fungsi str_replace :</b><br>
		".str_replace(" ", "", $teks[0])."<br>
		".str_replace(" ", "", $teks[1])."<br>
		".str_replace(" ", "", $teks[2])."<br>

		<br><b>Menggunakan proses perulangan : <br></b>"; 
		for ($i=0; $i < 3; $i++) { 
			$x = 0;
			while ($x < strlen($teks[$i])) {
				if (substr($teks[$i], $x, 1)<> " ") {
					echo substr($teks[$i], $x, 1);
				}
				$x++;
			}
			echo "<br>";
		}

		$str = explode(" ", $teks[0]);
		for ($i=0; $i < count($str); $i++) { 
			if ($i % 2 == 0) {
				echo " ".$str[$i]." ";
			}else{
				echo strtoupper("<b>".$str[$i]."</b>");
			}
		}
	 ?>
</body>
</html>