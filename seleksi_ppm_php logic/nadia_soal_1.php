 <?php
 		function rupiah($angka){
 			$hasil_rupiah = "Rp " .number_format($angka, 0,',','.');
 			return $hasil_rupiah;
 		}

 		$bulpoin = 1750; //Harga Bulpoin satuan
 		$uang = 5000; //Pecahan uang : 5000an

 		
 		echo "Harga 1 bulpoin             = " .rupiah($bulpoin). "<br>";

 		$total = 12 * $bulpoin; //Jika beli 1 lusin (12 buah) = 21000
 		echo "Total 1 lusin : 12 x Rp 1.750   = " .rupiah($total). "<br>";

 		$subtotal = 5 * $uang; //Uang Rian 5 lembar 5000 = 25000
 		echo "Uang Rian adalah : 5 lembar * Rp 5.000 = " .rupiah($subtotal). "<br><br>";

 		$kembalian = $subtotal - $total;
 		echo "Jadi, kembaliannya adalah   : <br> Rp 25.000 - Rp 21.000 = " .rupiah($kembalian);
 ?>
