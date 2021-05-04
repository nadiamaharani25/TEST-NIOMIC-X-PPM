<?php

	$toko1  = 10000;
	$toko68 = 30100;
	$toko   = $toko68 - $toko1;
	$selisih= $toko / 67;

	$toko81 = $toko1 + $selisih * 81;

	$i=1;

	do {
		echo "Toko Kelontong $i adalah: $toko1 <br>";
		$toko1 += $selisih;
		$i++;
	} while ($toko1 <= $toko81);
?>