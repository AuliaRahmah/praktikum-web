<?php
defined('_VALID') or die ('not allowed');

session_start();
function init_login(){

    $user = 'aulia';
    $pass = 'uli';  

    if (isset($_POST['user']) && isset ($_POST['pass'])){
        $n = trim($_POST['user']);
        $p = trim($_POST['pass']);

        if(($n===$user) && ($p ===$pass)){          

            if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){
                $_SESSION['nlogin'] = $n;
                $_SESSION['time'] = time();
            } 
            ?>
            <script type="text/javascript">
            document.location.href="./";
            </script>
            <?php
            } 
            else {
                echo "Nama/Password Yang Anda Masukkan Salah";
                return false;
            }
        }
    }

function validate(){
    if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){?>
            <style type="text/css">
</style>        
    <div id="bigbody">
	<form action="" method="post" name="myForm">
		<div align="left"><strong><br>User Name </strong>  
		<input type="text" name="user" class="textinput"/>
		<br>
		<strong>Password </strong> 
		<br>
		<input type="password" name="pass" class="textinput"/>
		<input type="submit" name="submit" value="LOGIN" class="btn"/>
	</form>
	</div>
	
    <?php
    exit;
    }
    if(isset($_GET['m']) && $_GET['m'] == 'logout'){
    
    if(isset($_SESSION['nlogin'])){
        unset($_SESSION['nlogin']);
        }
    if(isset($_SESSION['time'])){
        unset($_SESSION['time']);
        }
    ?>
    <script type="text/javascript">
    document.location.href="./";
    </script>
    <?php
    }
}
?>