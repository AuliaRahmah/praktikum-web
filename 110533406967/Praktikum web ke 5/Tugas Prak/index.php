<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
        <title>Halaman Administrator</title>
        <style type="text/css">
        #bigbody{
	margin:  20px auto;
	width: 25%;
	height: auto;
	padding: 20px;
	border: 5px solid pink
}
body {
    background-color: #55ff00;
}
.textinput{
width: 100%;
height: 40px;
margin: 5px auto;
}

.btn{
	width: 50%;
	padding:5px;
	background-color: #00ccff;
	border: none;
	color:white;
	font-weight: 800;

}

.btn:hover{
	cursor: pointer;

}

a{
	font-size: 13px;
	color: purple;
}

.textinput{
	background-color: #fafafa;
	border: inset 2px #efefef;
}

		body{
        background-color:#2380ED;
        color:#CC3300;
        }
        a{
        color:#CC3330;
        }
        .inner{
        margin: 200px auto;
        padding: 20px;
        width: 240px;
        border:7px dotted #000000;
        }
        </style>
</head>
<body bgcolor="33FF33">

<p>
<?php

ini_set('display_errors', 1);
define('_VALID', 1);

require_once('./otentikasi.php');
init_login();
validate();
?>

</p>
  <div align="center" style="font-size:30px" style="font-style:inherit">Selamat Datang di Website Resmi Universitas Negeri Malang</div></td>
    	   	
        <h4 style="font-size:18px" style="font-style:inherit" style="border-color:#2389ED" style="font-stretch:ultra-condensed">
           
		<ul>
			<li>Home</li>
            <li>Kemahasiswaan</li>
			<li>Akademik</li>
			<li>Alumni UM</li>
		</ul>
        <p align="center"><a href="?m=logout"><h1>Logout</h1></a></p>
</body>
 
</html>