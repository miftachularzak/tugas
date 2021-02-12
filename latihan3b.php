<!-- abaikan komentar -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan While</title>
	<style>
		td{
			text-align: center;
		}
	</style>
</head>
<body>
	<p>Miftachul Arzak / 888740806190093 / TI-P.19.1K</p>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>Senin</th>
			<th>Selasa</th>
			<th>Rabu</th>
			<th>Kamis</th>
			<th>Jumat</th>
			<th>Sabtu</th>
			<th>Minggu</th>
		</tr>
		<?php $i = 1; while ( $i <= 5):?> <!-- mengulang jml baris -->
			<tr>
				<?php $jmlkolom = 7 ?> <!-- deklarasi jumlah kolom -->
				<!-- untuk menentukan angka setiap kolom($j) pada setiap baris($i)
					1  2  3  4  5  6  7    ->  $j = 1($jmlkolom*$i-6)  && $j <= 7($jmlkolom*$i)   -> $i = 1
					8  9  10 11 12 13 14   ->  $j = 8($jmlkolom*$i-6)  && $j <= 14($jmlkolom*$i)  -> $i = 2
					15 16 17 18 19 20 21   ->  $j = 15($jmlkolom*$i-6) && $j <= 21($jmlkolom*$i)  -> $i = 3 
					22 23 24 25 26 27 28   ->  $j = 22($jmlkolom*$i-6) && $j <= 28($jmlkolom*$i)  -> $i = 4
					29 30 31 32 33 34 35   ->  $j = 29($jmlkolom*$i-6) && $j <= 35($jmlkolom*$i)  -> $i = 5
				-->
				<?php $j = $jmlkolom*$i-6; while ( $j <= $jmlkolom*$i):?>
					<?php if ($j <= 31): ?> <!-- jika $j melebihi 31 maka tidak di cetak  -->
						<?php if ($j == $i*7): ?> <!-- jika kolom($j) == 7,14,21,28($i*7) maka kolom($j) dicetak berwarna merah -->
							<td style="color: red"><?php echo $j; ?></td>
						<?php else: ?>	<!-- jika tidak maka dicetak biasa -->
							<td><?php echo $j; ?></td> 
						<?php endif ?>
					<?php endif ?>
				<?php $j++; endwhile; ?>
			</tr>
		<?php $i++; endwhile; ?>
	</table>
</body>
</html>