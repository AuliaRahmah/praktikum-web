<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tabel Generat- Tugas Praktikum 2</title>
<style type="text/css">

#apDiv1 {
    width:78px;
    height:24px;
    z-index:1;
    left: 284px;
    top: 189px;
color: #0000ff;
	}
    
.style1 {
    font-weight: bold;
}

</style>

<body>

_TUGAS GENERATE TABLE  SECARA FLEKSIBEL_
<br />
<p></p>

<?php 
$cell=15;
$kolom=4;

function generator($jum_cell, $k)
{

echo "<table border='1'>";
$x=1;
	for ($i=1; $i <=ceil($jum_cell/$k); $i++) { 

		echo "<tr>";
		for ($j=1; $j <=$k ; $j++) { 
			if ($x<=$jum_cell) {
				echo"<td  id='apDiv1'>".$x."</td>";
			}
			else
			{
				echo " ";
			}
			
			$x++;
		}
		// $x=$x+$k;
		echo "</tr>";
	}

	echo "</table>";

}

generator($cell, $kolom);
 ?>

</body>
</html>
