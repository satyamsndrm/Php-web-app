<!DOCTYPE html>
<html>
<head>
	<title>Epotask2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
	</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js">
	</script>
	<!-- -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body >
	<div class="header">
		<div class="headerTitle" style="text-align: left;">Exam Preparation Online</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="well row">
					<div class="clickBtn"><a class="btn btn-link" onClick="">Apply Filter</a></div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="org">Organisation:</label>
							<select class="form-control selectBox" id="org">
								<option>ARW</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="org">Engineering Stream:</label>
							<select class="form-control selectBox" id="org">
								<option>Select</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="org">Application Mode</label>
							<select class="form-control selectBox" id="org">
								<option>Select</option>
							</select>
						</div>
					</div>
				</div>
				<div class="well row">
					<a class="btn btn-link checkBoxbtn" onClick="">Clear all/</a>
					<a class="btn btn-link checkBoxbtn" onClick="">Select all</a>
					<div class="col-sm-12">
						<div class="checkbox">
						    <label>
								<input type="checkbox" ng-model="selPr"> Selection Procedure
						    </label>
						</div>
						<div class="checkbox">
						    <label>
								<input type="checkbox" ng-model="techView"> Technical Interview
						    </label>
						</div>
						<div class="checkbox">
						    <label>
								<input type="checkbox" ng-model="anaQue"> Analytical Questions
						    </label>
						</div>
						<div class="checkbox">
						    <label>
								<input type="checkbox" ng-model="hrQue"> HR Questions
						    </label>
						</div>
						<div class="checkbox">
						    <label>
								<input type="checkbox" ng-model="sug"> Suggestions 
						    </label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="row">
					<div class="col-sm-1 hidden-xs">
						<div class="hline"></div>
					</div>
					<div class="col-sm-11">
						<div class="title">INTERVIEW EXPERIENCES :: ARW</div>
						<div class="contentBox">
							<div class="contentRow">
								<div class="contentLeft">
									Job Location :
								</div>
								<div class="contentRight">
									Chennai
								</div>
							</div>
							<div class="contentRow">
								<div class="contentLeft">
									Organisation :
								</div>
								<div class="contentRight">
									ARW
								</div>
							</div>
							<div class="contentRow">
								<div class="contentLeft">
									Application Mode :
								</div>
								<div class="contentRight">
									On Campus
								</div>
							</div>
							<div class="contentRow" ng-show="selPr">
								<div class="contentLeft">
									Selection Procedure :
								</div>
								<div class="contentRight">
									Looking for candidate so awesome in coding.SO fucking awesome
								</div>
							</div>
							<div class="contentRow" ng-show="techView">
								<div class="contentLeft">
									Technical Interview :
								</div>
								<div class="contentRight">
									Looking for candidate so awesome in coding.SO fucking awesome
								</div>
							</div>
							<div class="contentRow" ng-show="anaQue">
								<div class="contentLeft">
									Analytical Questions :
								</div>
								<div class="contentRight">
									Looking for candidate so awesome in coding.SO fucking awesome
								</div>
							</div>
							<div class="contentRow" ng-show="hrQue">
								<div class="contentLeft">
									HR Questions :
								</div>
								<div class="contentRight">
									Looking for candidate so awesome in coding.SO fucking awesome
								</div>
							</div>
							<div class="contentRow" ng-show="sug">
								<div class="contentLeft">
									Suggestions :
								</div>
								<div class="contentRight">
									Looking for candidate so awesome in coding.SO fucking awesome
								</div>
							</div>
							<div class="contentRow">
								<div class="contentLeft">
									Shared By :
								</div>
								<div class="contentRight">
									Looking for candidate so awesome in coding.SO fucking awesome
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>