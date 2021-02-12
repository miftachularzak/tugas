<?php 
	function luasTrapesium($sisiAtas, $sisiBawah, $tinggi)
	{
		return 1/2 * ($sisiAtas+$sisiBawah) * $tinggi;
	}

	$sisiBawah = 12;
	$sisiAtas = 24;
	$tinggi = 8;
	echo 'Diketahui sebuah trapesium memiliki : <br>'.'Sisi Atas = '.$sisiAtas.'cm<br>Sisi Bawah = '.$sisiBawah.'cm<br>Tinggi = '.$tinggi.'cm<br>Rumus L = &#189 x (Sisi Atas + Sisi Bawah) x Tinggi <br>Maka, Luas trapesium = '.luasTrapesium($sisiAtas, $sisiBawah, $tinggi).'cm<sup>2</sup>';

	echo "<br><br>";

	function luasTabung($jariJari, $tinggi)
	{
		return 2 * 22/7 * $jariJari * ($jariJari + $tinggi);
	}

	$jariJari = 21;
	$tinggi = 10;
	echo 'Diketahui sebuah tabung memiliki : <br>'.'Jari-jari alas = '.$jariJari.'cm<br>Tinggi = '.$tinggi.'cm<br>Rumus L = 2 x &#960 x Jari-jari x (Jari-jari + Tinggi) <br>Maka, Luas tabung = '.luasTabung($jariJari, $tinggi).'cm<sup>2</sup>';

	echo "<br><br>";

	function volumeBalok($panjang, $lebar, $tinggi)
	{
		return $panjang*$lebar*$tinggi;
	}

	$panjang = 9;
	$lebar = 8;
	$tinggi = 10;
	echo 'Diketahui sebuah balok memiliki : <br>'.'Panjang = '.$panjang.'cm<br>Lebar = '.$lebar.'cm<br>Tinggi = '.$tinggi.'cm<br>Rumus V = Panjang x Lebar x Tinggi <br>Maka, Volume balok = '.volumeBalok($panjang, $lebar, $tinggi).'cm<sup>3</sup>';


?>