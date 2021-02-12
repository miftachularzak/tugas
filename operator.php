<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan Operator</title>
	<style>
		body{
			margin-left: 100px;
		}
		td{
			text-align: center;
		}
		tr td:nth-child(3){
			width: 350px;
		}
	</style>
</head>
<body>
	<?php 
		$a = 9;
		$b = 3;
		$c = "9";
		$d = 3;
	?>
	<h3>Tugas Operator</h3>
	<p>Miftachul Arzak / 888740806190093 / TI-P.19.1K</p>
	<table border="1" cellspacing="0" cellpadding="20">
		<tr>
			<th>Operasi</th>
			<th>Hasil</th>
			<th>Keterangan</th>
		</tr>
		<tr>
			<td><?php echo "$a + $b"; ?></td>
			<td><?php echo $a+$b; ?></td>
			<td>Hasil 9 ditambah 3 adalah 12</td>
		</tr>
		<tr>
			<td><?php echo "$a - $b"; ?></td>
			<td><?php echo $a-$b; ?></td>
			<td>Hasil 9 dikurangi 3 adalah 6</td>
		</tr>
		<tr>
			<td><?php echo "$a * $b"; ?></td>
			<td><?php echo $a*$b; ?></td>
			<td>Hasil 9 dikali 3 adalah 27</td>
		</tr>
		<tr>
			<td><?php echo "$a / $b"; ?></td>
			<td><?php echo $a/$b; ?></td>
			<td>Hasil 9 dibagi 3 adalah 3</td>
		</tr>
		<tr>
			<td><?php echo "$a % $b"; ?></td>
			<td><?php echo $a%$b; ?></td>
			<td>Sisa bagi dari 9 dibagi 3 adalah 0</td>
		</tr>
		<tr>
			<td><?php echo "$a == \"$c\""; ?></td>
			<td><?php echo ($a == $c) ? "Benar" : "Salah";?></td>
			<td>Benar, karena keduanya merupakan angka 9 meskipun tipe datanya berbeda. (Operator == tidak memandang tipe data, selama yang dibandingkan sama maka benar)</td>
		</tr>
		<tr>
			<td><?php echo "$a === \"$c\""; ?></td>
			<td><?php echo ($a === $c) ? "Benar" : "Salah";?></td>
			<td>Salah, Karena meskipun keduanya angka 9 tetapi tipe data dari keduanya berbeda. Yang satu integer sedangkan yang satu string</td>
		</tr>
		<tr>
			<td><?php echo "$a <> $b"; ?></td>
			<td><?php echo ($a <> $b) ? "Benar" : "Salah";?></td>
			<td>Benar, Karena 9 tidak sama dengan 3</td>
		</tr>
		<tr>
			<td><?php echo "$a != \"$c\""; ?></td>
			<td><?php echo ($a != $c) ? "Benar" : "Salah";?></td>
			<td>Salah, Karena harusnya keduanya merupakan angka yang sama meskipun tipe datanya berbeda</td>
		</tr>
		<tr>
			<td><?php echo "$a !== \"$c\""; ?></td>
			<td><?php echo ($a !== $c) ? "Benar" : "Salah";?></td>
			<td>Benar, Karena meskipun keduanya angka 9 tetapi tipe data dari keduanya tidak sama. Yang satu integer sedangkan yang satu string</td>
		</tr>
		<tr>
			<td><?php echo "$a < $b"; ?></td>
			<td><?php echo ($a < $b) ? "Benar" : "Salah";?></td>
			<td>Salah, Karena 9 harusnya lebih besar dari 3</td>
		</tr>
		<tr>
			<td><?php echo "$a > $b"; ?></td>
			<td><?php echo ($a > $b) ? "Benar" : "Salah";?></td>
			<td>Benar, Karena 9 lebih besar dari 3</td>
		</tr>
		<tr>
			<td><?php echo "$b <= $d"; ?></td>
			<td><?php echo ($b <= $d) ? "Benar" : "Salah";?></td>
			<td>Karena 3 kurang dari atau sama dengan 3 maka benar</td>
		</tr>
		<tr>
			<td><?php echo "$b >= $d"; ?></td>
			<td><?php echo ($b >= $d) ? "Benar" : "Salah";?></td>
			<td>Karena 3 lebih besar dari atau sama dengan 3 maka benar</td>
		</tr>
		<tr>
			<td><?php echo "$a > $b and $a == $b"; ?></td>
			<td><?php echo ($a > $b && $a == $b) ? "Benar" : "Salah";?></td>
			<td>Karena salah satunya salah maka salah. (And keduanya harus benar)</td>
		</tr>
		<tr>
			<td><?php echo "$a > $b or $a == $b"; ?></td>
			<td><?php echo ($a > $b || $a == $b) ? "Benar" : "Salah";?></td>
			<td>Karena salah satunya benar maka benar. (Or salah satu atau keduanya harus benar)</td>
		</tr>
		<tr>
			<td><?php echo "$a > $b xor $b < $a"; ?></td>
			<td><?php echo ($a > $b xor $b < $a) ? "Benar" : "Salah";?></td>
			<td>Karena keduanya benar maka salah. (Xor salah satu harus benar, jika keduanya benar atau keduanya salah maka salah)</td>
		</tr>
		<tr>
			<td><?php echo "!($a > $b)"; ?></td>
			<td><?php echo !($a > $b) ? "Benar" : "Salah";?></td>
			<td>Karena Not maka yang seharusnya benar menjadi salah</td>
		</tr>
	</table>
</body>
</html>
