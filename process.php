
<?php
session_start();
ob_start();
require_once ('conn.php');
if(isset($_POST['login'])){



if(empty ($_POST['email']) || empty($_POST['pwd'])){
header("location:login.php? empty= please fill in the blanks");

}

if(!empty ($_POST['email']) || !empty($_POST['pwd'])){

	$pwd=$_POST['pwd'];
	
	$epwd=md5($pwd);

	echo $query="SELECT * FROM football WHERE email='".$_POST['email']."' and pwd='$epwd'";
	$result= mysqli_query($conn,$query);

	if(mysqli_fetch_row($result)){

		$_SESSION['user']=$_POST['email'];
		header("location: index.php");

		//$variable=$_SESSION['user'];
		//echo ">>>>>>$variable";
	}
	else{
	header("location: login.php?invalid=please enter correct user name and password");

}
	

}





}

?>