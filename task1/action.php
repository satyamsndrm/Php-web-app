<?php
	require('db_access.php');
	if(isset($_POST['action'])){
		$textArea=mysqli_real_escape_string($db, $_POST['textArea']);
		$selectBox=mysqli_real_escape_string($db, $_POST['selectBox']);
		$checkBox=(isset($_POST['checkBox']))?((mysqli_real_escape_string($db, $_POST['checkBox']))?'1':'0'):'0';
		$encryptedId=substr(md5(time()), 3,6);
		$sql ="INSERT INTO 
			task1
			(encryptedId,textArea , selectBox , checkBox)
			VALUES 
			('$encryptedId', '$textArea', '$selectBox', '$checkBox')";
		
		$res=mysqli_query($db, $sql) or die(mysqli_error($db));
		header('Location:task1res.php?id='.$encryptedId);
	}
	if(isset($_POST['signIn'])){
		$_SESSION['auth']=true;
		$_SESSION['name']=$_POST['name'];
		$_SESSION['email']=$_POST['email'];
		echo $_SESSION['auth'];
		return ;
	}

	if(isset($_POST['code'])){
		echo $_POST['code'];
		return ;
	}

	if(isset($_GET['logout'])){
		session_unset();
		session_destroy();
		header("Location:task1form.php");
	}
?>
