<html>
<head>
</head>
<body>
<?php
$host="localhost";
 
$database="coba";
 
$user="root";
 
$pass="12345";
 
$koneksi = new PDO("mysql:host=".$host.";dbname=".$database,$user,$pass);
if($koneksi)
{
echo (“koneksi sukses”);
}
else
{
echo (“koneksi gagal”);
}
?>
</body>
</html>
