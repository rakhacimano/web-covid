<?php  
session_start();

include '../koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$sql = mysqli_query($koneksi, "SELECT * FROM admin_user");
$data = mysqli_fetch_array($sql);

if (! empty($data)){
	$_SESSION['username'] = $data['username'];

	setcookie("message", "delete", time()-1);
	
	echo
		"<script>
			alert('Hei, user selamat datang');
			document.location.href = '../tujuan-user';
		</script>";


} else{
	setcookie("message" , "maaf, username atau password salah", time()+3600);
		echo
			"<script>
				alert('Maaf nih, gagal nih loginnya');
				document.location.href = 'index.php';
			</script>";
}


?>