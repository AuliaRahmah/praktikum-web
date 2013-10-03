<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Studi Kasus 2</title>
</head>

<body bgcolor="white">

<justify>
<h2>******************************************</h2>
<h1>** Generate Matriks Sel Pada Tabel **</h1>
<h2>******************************************</h2>

<br>
<br>

<?php
function buat_table($cell, $row)
{

echo("<table border=\"1\">\n");

for($b = 0; $b < $cell; $b++) {
echo("<tr height=\"30px\">\n");

for($k = 0; $k < $row; $k++) {
echo("<td width=\"100px\"></td>\n");
}

echo("</tr>\n");
}
echo("</table>\n");

echo("<h3>Tabel : $cell baris dan $row kolom</h3>");
}
buat_table(3,4);
?>

</center>
</body>
</html>


