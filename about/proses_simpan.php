<?php
//load koneksi database
include '../../koneksi.php';
//ambil id dari form
$judul_post = $_POST['nama_judul_post'];
$isi_post = $_POST['nama_isi_post'];
//ambil data dari database
$query = mysqli_query($koneksi, "INSERT INTO tb_about VALUES (
  Null,
  '$judul_post',
  '$isi_post'
)");
//cek apakah proses simpan ke database berhasil
if($insert){
  //jika berhasil
  echo "<script>
  alert('Data berhasil ditambahkan');
  window.location.href='index.php';
</script>";

}else{
//jika gagal
echo "<script>
alert('Data gagal ditambahkan');
window.location.href='index.php';
</script>";
}
?>
//  //
