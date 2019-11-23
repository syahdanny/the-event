<?php 
include "conSQL.php"; 
if (isset($_POST['register'])) {
    $name = $_POST['nama'];
    $jk = $_POST['jenis-kelamin'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirm-password'];

	if(strlen($password) >= 6 && strlen($password) <= 15)
	{
		if($confirmPassword == $password)
		{
            $query = "INSERT INTO pengunjung (nama_lengkap, jenis_kelamin, email, no_telp, alamat, username) VALUES ('$name','$jk','$email','$nomor','$alamat', '$username')"; 
            $query2 = "INSERT INTO user (id_pengunjung, username, password, level) values ((SELECT max(id) FROM pengunjung),'$username', '$password',2)";

            if(mysqli_query($con,$query) AND mysqli_query($con, $query2))
            {
                echo "<script>document.location.href = '../index.php#login';</script>";
            }
            else{

                echo "<script>alert('Input data tidak valid');document.location.href = '../index.php';</script>";
           	}
		}
		else
		{
			echo "<script>alert('konfirmasi password keliru jon');document.location.href = '../index.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('Password harus  minimal 6 karakter ');document.location.href = 'index.php';</script>";
	}
} 
else {
	echo "<script>alert('Pendaftaran $nama gagal.');document.location.href = '../index.php';</script>";
}
?>