
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
		<div class="row d-none d-sm-block" style="min-height:70px;"></div>
		<div class="row mainContainerRow">
			<div class="col-sm-4">
				<div class="jumbotron" style="background-color: inherit;">
					<a class="btn btn-link" href="../task2/task2.php">Click here for task1</a>
					<ul>
						<li>You can submit the form and view your submissions.</li>
						<li>To view all submissions you must signin with google
							<a class="btn btn-link" href="<?php echo $authurl ?>"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="formTitle">
					FeedbackForm
				</div>
				<form id="formArea" class="formBox" method="post" action="action.php">
					
					<div class="form-group">
						<label for="textArea">Textarea</label>
						<textarea class="form-control" id="textArea" name="textArea" rows="3">dd</textarea>
					</div>
					<div class="form-group">
						<label for="selectBox">SelectBox</label>
						<select class="form-control" id="selectBox" name="selectBox">
							<option value="val1">Value 1</option>
							<option value="val2">Value 2</option>
							<option value="val3">Value 3</option>
						</select>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="checkBox" name="checkBox">
						<label class="form-check-label" for="checkBox">CheckBox</label>
					</div>
					<input type="submit" class="btn btn-primary" name="action" value="Submit" />
				</form>

			</div>
		</div>
<script>
	$(document).ready(function(){
		$('#formArea').submit(function(e){
			//e.preventDefault();
			//alert('');
			var textArea =$('#textArea').val();
			var selectBox = $('#selectBox').val();
			var checkBox = $('#checkBox').is(':checked');
			if(textArea==''){
				if(confirm('You have not entered any text in textArea. Would you like to submit your form ? ')){
					return true;
				}else{
					return false;
				}
			}
		});
	});

</script>
</body>
</html>