<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Studi Kasus 1 - Greeting </title>
</head>

<body>
<h4>***********************</h4>
<h2>** Fungsi Greeting **</h2>
<h4>***********************</h4>

<p>
<justify>
<h1><?php 
$MyTime=08.00;

function greeting($jam){
if ($jam>=00.01 && $jam<10.00 ) {
	echo "Selamat Pagi, Selamat Beraktifitas ";
}
else if ($jam>=10.00 && $jam<15.00) {
	echo "Selamat Siang";
}
else if ($jam>=15.00 && $jam<18.00) {
	echo "Selamat Sore";
}
else if ($jam>=18.00 && $jam<23.59) {
	echo "Selamat Malam,";
}
}

greeting($MyTime);
?>
</h1>
</justify>
</p>

</body>
</html>

