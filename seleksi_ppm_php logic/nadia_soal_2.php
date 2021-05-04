<?php

	function rupiah($angka){
 			$hasil_rupiah = "Rp " .number_format($angka, 0,',','.');
 			return $hasil_rupiah;
 	}


 	echo "Uang Setyo : <br>";

	$uang1 = 3 * 10000;
	echo "3 x Rp 10.000 = " .rupiah($uang1). "<br>";

	$uang2 = 4 * 5000;
	echo "4 x Rp 5.000 = " .rupiah($uang2). "<br>";

	$uang3 = 5 * 20000;
	echo "5 x Rp 20.000 = " .rupiah($uang3). "<br>";

	$total  = $uang1 + $uang2 + $uang3;
	echo "Total Uang Setyo = " .rupiah($total). "<br>";

	$mainan = 55000;
	echo "Harga Mainan = " .rupiah($mainan). "<br><br>";
	
	$subtotal = $total - $mainan;
	echo "Subtotal = Total Uang Setyo - Harga Mainan <br>= Rp 150.000 - Rp 55.000 <br>= " .rupiah($subtotal);
?>