<html>
<head>
</head>
<body>
<?php
$host ="localhost";
$username ="root";
$password ="";
$database ="test";
$koneksi = mysql_connect($host,$username,$password);
if($koneksi)
{
echo ("koneksi database sukses");
}
else
{
echo ("koneksi database gagal");
}
?>
</body>
</html>
