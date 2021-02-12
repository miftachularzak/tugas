<!-- abaikan komentar -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan For</title>
</head>
<body>
	<p>Miftachul Arzak / 888740806190093 / TI-P.19.1K</p>
	<table border="1" cellspacing="0" cellpadding="20">
		<?php for($i = 1; $i <= 12; $i++): ?>  <!-- untuk mengulang jml baris -->
			<tr>
				<?php for($j = 5; $j <= 8; $j++): ?> <!-- untuk mengulang jml kolom -->
					<?php if ($i == 4){  // jika baris($i) == 4 maka baris($i) menjadi 7 -> (baris 4,5,6 di skip tidak di cetak)
							$i += 3;
					  }else if($i == 8){  // jika baris($i) == 8 maka baris($i) menjadi 12 -> (baris 8,9,10,11 di skip tidak di cetak)
							$i += 4;
					  }
					?>
					<td><?php echo "$i x $j = ".$i*$j ?></td> <!-- mencetak ke layar -->
				<?php endfor; ?>	
			</tr>
		<?php endfor; ?>
	</table>
</body>
</html>