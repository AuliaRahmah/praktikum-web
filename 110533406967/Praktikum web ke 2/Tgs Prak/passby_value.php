<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Fungsi Pass By Value</title>
</head>
<body>
<p>Hasil Pengolahan Fungsi Pass By Value</p>
<?php
function jumlah($nilai) {
$nilai++;
}
$input=30;
jumlah($input);
echo $input;
?>
</body>
</html>
