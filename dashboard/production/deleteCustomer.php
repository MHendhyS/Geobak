<?php
	include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
	$id = $_GET['id_customer'];
	 
	 
	// menghapus data dari database
	mysqli_query($koneksi,"delete from customer where id_customer='$id'");
	 
	// mengalihkan halaman kembali ke index.php
	header("location:tables_dynamic.php");
?>