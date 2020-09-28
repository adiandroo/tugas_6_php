<?php
$hargaJambu = 15000;
$hargaDus = 2000;
$jumlahDus = 6 * 5;
$hargaJambuSeluruhnya = $jumlahDus * $hargaJambu;
$hargaDusSeluruhnya = 6 * $hargaDus;
$total = $hargaJambuSeluruhnya + $hargaDusSeluruhnya;

echo "===================================================<br>";
echo "Harga Jambu = Rp $hargaJambu / Kg<br>";
echo "Harga Kardus = Rp $hargaDus / pcs<br>";
echo "Total Penjualan(Dus dan Jambu) = Rp $total<br>";
echo "===================================================<br>";
?>