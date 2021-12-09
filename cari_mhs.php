<?php 
include "koneksi.php";
?>
<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
<form action="" method="get">
<!-- sintaks untuk membuat form menggunakan metode get -->
<label>Cari :</label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</form>
<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."</b>";// $cari digunakan untuk menampung nilai inputan
}
?>
<table border="1">
<tr>
<th>No</th>
<th>Nama</th>
</tr>
<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
$sql="select * from mahasiswa where nama like'%".$cari."%'";
$tampil = mysqli_query($con,$sql);
}else{
$sql="select * from mahasiswa";
$tampil = mysqli_query($con,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $r['nama']; ?></td>
</tr>
<!-- menampilkan nama pada tabel mahasiswa sesuai dengan inputan NIM -->
<?php } ?>
</table>