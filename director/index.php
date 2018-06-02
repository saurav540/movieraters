<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
    	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	    <title>Movie IMBD</title>
	    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
 	    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
 	    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    	<link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    	<link href="../assets/css/demo.css" rel="stylesheet" />
		<title>Movie Data</title>
		<script src="../jquery.min.js"></script>
		<script src="../angular.min.js"></script>
		<script src="../jquery.dataTables.min.js"></script>
		<script src="../angular-datatables.min.js"></script>
		<link rel="stylesheet" href="../datatables.bootstrap.css">
		
	</head>
	<body class="profile-page sidebar-collapse" ng-app="crudApp" ng-controller="crudController" style="background-color: #000000;" >
		<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
            </div>
            <div class="navbar-translate">
                <a class="navbar-brand" href="#" data-placement="bottom" target="_blank">
                    Movie IMBD
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                	<li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/saurav540" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/saurav540" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/saurabsen" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                	<li class="nav-item">
                        <a class="nav-link" href="../addmovie.html">Add Movie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adddirector.html">Add Director</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../actor/addactor.html">Add Actor</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="#">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../img/bg1.jpg');">
            </div>
            <div class="container">
                <div class="content-center" style="padding-top: 360px; padding-right: 600px;">
                    <div class="button-container">
                    <h1 class="title">Dunkirk</h1>
                    <p>HISTORY || DRAMA || WAR</p>
                    <a href="#button" class="btn btn-primary btn-round btn-lg" fa fa-play>Watch Trailer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<section style="color: white;">
		<div class="container" ng-init="fetchData()">
			<br />
				<h3 align="center">Director Data</h3>
				<p>Deatils of all top Director all around the world.</p>
				<br>
			<br />
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-success alert-dismissible" ng-show="success" >
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				{{successMessage}}
			</div>
			<br />
			<div class="table-responsive" style="overflow-x: unset;">
				<table datatable="ng" dt-options="vm.dtOptions" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Sex</th>
							<th>Date of Birth</th>
							<th>Bio</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="name in namesData">
							<td>{{name.name}}</td>
							<td>{{name.sex}}</td>
							<td>{{name.dob}}</td>
							<td>{{name.bio}}</td>
						</tr>
					</tbody>
				</table>
			</div>


				
	
		</section>
		<div class="container" style="color: white;">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
					<h3>View Other Data</h3>
				<a href="../index1.php" class="btn btn-primary btn-lg" fa fa-play>Movie Data</a>
				<a href="../actor/index.php" class="btn btn-primary btn-lg" fa fa-play>Actor Data</a>
			<br />
				</div>
					</div>
				</div>
				
			</div>
	</body>
</html>	


		</div>
	</body>
</html>

<div class="modal fade" tabindex="-1" role="dialog" id="crudmodal">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
    		<form method="post" ng-submit="submitForm()">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title">{{modalTitle}}</h4>
	      		</div>
	      		<div class="modal-body">
	      			<div class="alert alert-danger alert-dismissible" ng-show="error" >
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						{{errorMessage}}
					</div>
					<div class="form-group">
						<label>Enter Name</label>
						<input type="text" name="name" ng-model="name" class="form-control" />
					</div>
					<div class="form-group">
						<label>Enter Sex</label>
						<input type="text" name="sex" ng-model="sex" class="form-control" />
					</div>
					<div class="form-group">
						<label>Enter Dob</label>
						<input type="text" name="dob" ng-model="dob" class="form-control" />
					</div>
					<div class="form-group">
						<label>Enter Bio</label>
						<input type="bio" name="bio" ng-model="bio" class="form-control" />
					</div>
	      		</div>
	      		<div class="modal-footer">
	      			<input type="hidden" name="hidden_id" value="{{hidden_id}}" />
	      			<input type="submit" name="submit" id="submit" class="btn btn-info" value="{{submit_button}}" />
	        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	</div>
	        </form>
    	</div>
  	</div>
</div>


<script>

var app = angular.module('crudApp', ['datatables']);
app.controller('crudController', function($scope, $http){

	$scope.success = false;

	$scope.error = false;

	$scope.fetchData = function(){
		$http.get('fetch_data.php').success(function(data){
			$scope.namesData = data;
		});
	};

	$scope.openModal = function(){
		var modal_popup = angular.element('#crudmodal');
		modal_popup.modal('show');
	};

	$scope.closeModal = function(){
		var modal_popup = angular.element('#crudmodal');
		modal_popup.modal('hide');
	};

	$scope.addData = function(){
		$scope.modalTitle = 'Add Data';
		$scope.submit_button = 'Insert';
		$scope.openModal();
	};

	$scope.submitForm = function(){
		$http({
			method:"POST",
			url:"insert.php",
			data:{'name':$scope.name, 'sex':$scope.sex, 'dob':$scope.dob, 'bio':$scope.bio, 'action':$scope.submit_button, 'id':$scope.hidden_id}
		}).success(function(data){
			if(data.error != '')
			{
				$scope.success = false;
				$scope.error = true;
				$scope.errorMessage = data.error;
			}
			else
			{
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
				$scope.form_data = {};
				$scope.closeModal();
				$scope.fetchData();
			}
		});
	};

	$scope.fetchSingleData = function(id){
		$http({
			method:"POST",
			url:"insert.php",
			data:{'id':id, 'action':'fetch_single_data'}
		}).success(function(data){
			$scope.name = data.name;
			$scope.sex = data.sex;
			$scope.dob = data.dob;
			$scope.bio = data.bio;
			$scope.hidden_id = id;
			$scope.modalTitle = 'Edit Data';
			$scope.submit_button = 'Edit';
			$scope.openModal();
		});
	};

	$scope.deleteData = function(id){
		if(confirm("Are you sure you want to remove it?"))
		{
			$http({
				method:"POST",
				url:"insert.php",
				data:{'id':id, 'action':'Delete'}
			}).success(function(data){
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
				$scope.fetchData();
			});	
		}
	};

});

</script>