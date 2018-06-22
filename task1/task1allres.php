<?php

require_once 'db_access.php';
$login=true;
$nores=false;
	if(isset($_SESSION['auth']) && $_SESSION['auth']){
		$code=(isset($_GET['id']))?mysqli_real_escape_string($db,$_GET['code']):'91378c';
		$sql="SELECT * FROM task1 ORDER BY id desc";
		$res= mysqli_query($db,$sql) or die(mysqli_error($db));
	}else{
		$login=false;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>EpoTask1</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<div class="headerTitle">Exam Preparation Online</div>
	</div>
<?php

if($login){
	

?>
	<div class="row d-none d-sm-block" style="min-height:30px;"></div>
	<div class="row mainContainerRow">
		<div class="col-sm-4 col-xs-12" style="margin-left:10px;">
			<div class="tableHead" >UserDetails <a class="btn btn-link" href="action.php?logout=yes">LogOut</a> </div>
			<table class="table">
				<tr>
					<td>Email:-</td>
					<td><?php echo $_SESSION['email'] ?></td>
				</tr>
			</table>
		</div>
		<div class="col-sm-6 ">
			<div class="well">
				<div class="tableHeading">All Submitted forms</div>

				  
<?php
	
if(mysqli_num_rows($res)>0){
	$i=0;
	while($row=mysqli_fetch_assoc($res)){
		$i++;
		extract($row);
		$textArea=(!empty($textArea))?$textArea:'<b style="color:red;">You did not typed anything in the textArea</b>';
		$box=($checkBox=='1')?'Checked':'Not Checked';

		echo "<div class='tableHead'>Result No :- $i</div>";
		echo '<table class="table table-hover ">';

		echo "<tr scope='col'>
					<td><b>Code</b></td>
					<td><b>$encryptedId</b></td>
				</tr>
				<tr>
					<td><b>TextArea</b></td>
					<td>$textArea</td>
				</tr>
				<tr>
					<td><b>SelectBox</b></td>
					<td>Value selected: <b>$selectBox </b>.</td>
				</tr>
				<tr>
					<td><b>CheckBox</b></td>
					<td>Checkbox was <b> $box </b>.</td>
				</tr>";
		echo "</tbody>
			</table>";
	}
}else{
	echo '<tr style="padding: 13px;"><td class="showError">No results has been submitted.</br>
			<a class="btn btn-danger" href="task1form.php">Click Here to submit one.</a>
		</td></tr>
	  </tbody>
	</table>';
}
?>
				
				</div>
		</div>
	</div>
<?php

}else{

?>
	<div class="row">
		<div class="col-sm-6 offset-sm-3">
			<div class="jumbotron" style="background-color: inherit;">
				<strong>You must signin with google to view all submitted results.The link for the same is given on<a class="btn btn-link" href="task1form.php"> This Page.</a></strong>
				
			</div>
		</div>
	</div>

<?php

}

?>
</body>
</html>