
<?php
	require('db_access.php');
	$nores=false;
	$code=(isset($_GET['id']))?mysqli_real_escape_string($db,$_GET['id']):'';
	$sql="SELECT * FROM task1 WHERE encryptedId='$code'";
	$res= mysqli_query($db,$sql) or die(mysqli_error($db));
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		extract($row);
		$textArea=(!empty($textArea))?$textArea:'<b style="color:red;">You did not typed anything in the textArea</b>';
	}else{
		$nores=true;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>EpoTask1</title>
	<meta name="google-signin-client_id" content="710620814605-4qjftp0t4tbq3m3na3nm9aduorj8cbcm.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js">	</script>
</head>
<body>

	<div class="header">
		<div class="headerTitle">Exam Preparation Online</div>
	</div>
	<div class="rows d-none d-sm-block" style="min-height:30px;">
		
	</div>
	<div class="rows mainContainerRow">
		<div class="col-sm-6 offset-sm-3">

<?php 
	if(!$nores){

?>
			<div class="well">
				<div class="tableHeading">Your Submission:-</div>
				<table class="table table-hover">
					<tr scope="col">
						<td>
							<b>Code</b>
						</td>
						<td>
							<?php echo $code ?>
						</td>
					</tr>
					<tr>
						<td>
							<b>TextArea</b>
						</td>
						<td>
							<?php echo $textArea ?>
						</td>
					</tr>
					<tr>
						<td>
							<b>SelectBox</b>
						</td>
						<td>
							You have choosed
							<b><?php echo $selectBox ?> </b>from selectbox
						</td>
					</tr>
					<tr>
						<td>
							<b>CheckBox</b>
						</td>
						<td>
							You have
							<b>
								<?php echo ($checkBox=='1')?'Checked':'Not Checked' ?> 
							</b> the boxes.
						</td>
					</tr>
				</table>
			</div>
<?php

	}

if(isset($_SESSION['auth'])){


?>
			<div class="" style="background-color: inherit;">
				Hello <strong><?php echo ucfirst($_SESSION['email']) ?></strong>
					<a class="btn btn-primary" href="task1allres.php">Click Here to view all submitted results.</a>
			</div>

<?php

}else{

?>
			<div class="" style="background-color: inherit;">
				<strong style="">
					To view all the submission You must sign in with google.The link for the same is given on<a class="btn btn-link" href="task1form.php"> This Page.</a>
				</strong>
			</div>

<?php

}

?>
			
		</div>
	</div>
</body>
</html>