<?php
//jika session tidak sesuai dengan data_admin  maka akan diarahkan ke halaman logout.php atau keluar dari sistem
if(!isset($_SESSION['data_admin'])){
        header('location:logout.php');
}
else{
//jika session sesuai maka session akan digunakan untuk memanggil data dari tb_admin
$akun=$_SESSION['data_admin'];
$admin=mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_admin where email_admin='$akun'"));
$iweb=mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_identitas where id_identitas='1'"));
}
//$admin merupakan variabel dari query pemanggilan tb_admin
//$iweb merupakan variabel dari query pemanggilan tb_identitas
?>