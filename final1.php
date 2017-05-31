<?php
 
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "60200114037";

 

mysql_connect($server,$username,$password) or die ("Koneksi database gagal");
mysql_select_db($database) or die ("Database tidak tersedia");
 
	echo '<h3>Data User</h3>
		<table>
		<tr>
		<th>nik</th>
		<th>nama</th>
		<th>usia</th>
		<th>alamat</th>
		<th>tempatlahir</th>
		<th>tgllahir</th>
		</tr>
<tr>';

$i=0; 
$tampil ="SELECT * FROM kariyawan
WHERE nama LIKE 'a%'";


$sql = mysql_query($tampil);
 
//tampilkan seluruh data yang ada pada tabel kariywan
while($data = mysql_fetch_array($sql))
 {
 $i++;
 
echo "
 <td>".$i."</td>
 <td>".$data[nik]."</td>
 <td>".$data[nama]."</td>
 <td>".$data[usia]."</td>
 <td>".$data[alamat]."</td>
  <td>".$data[tempatlahir]."</td>
   <td>".$data[tgllahir]."</td>
 </tr>";
 }
echo '</table>';
 
?>