<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="assets/img/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Movie IMBD</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
      <link href="assets/css/demo.css" rel="stylesheet" />
    <title>Movie Data</title>
    <script src="jquery.min.js"></script>
    <script src="angular.min.js"></script>
    <script src="jquery.dataTables.min.js"></script>
    <script src="angular-datatables.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="datatables.bootstrap.css">
    
  </head>
  <body ng-app="crudApp" ng-controller="crudController" style="background-color: #000000;">
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
                        <a class="nav-link" href="addmovie.html">Add Movie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="director/adddirector.html">Add Director</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actor/addactor.html">Add Actor</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <div class="page-header page-header" filter-color="#">
            <div class="page-header-image" data-parallax="true" style="background-image: url('img/bg.jpg');">
            </div>
            <div class="container">
                <div class="content-center" style="padding-top: 360px; padding-right: 600px;">
                    <div class="button-container">
                    <h1 class="title">The Alien</h1>
                    <p>SCI FI || ENTERTAINMANT || MYSTERY</p>
                    <a href="#button" class="btn btn-primary btn-round btn-lg" fa fa-play>Watch Trailer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" ng-init="fetchData()" style="color: white;">
      <br />
        <h3 align="center">Movie Data</h3>
        <br>
        <div class="alert alert-success alert-dismissible" ng-show="success" >
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{successMessage}}
      </div>
      <br />
      <div class="row">
        <div class="col-md-2">
          <div align="right">
            <!-- <button type="button" name="add" id="add" class="btn btn-success">Add</button>-->
            </div>
            <br />
            <div id="image_data">
              
            </div>
        </div>

        <div class="col-md-10">
          <div align="right">
        <!-- <button type="button" name="add_button" ng-click="addData()" class="btn btn-success">Add</button> -->
      </div>
      <br />
      <div class="table-responsive" style="overflow-x: unset;">
        <table dt-options="vm.dtOptions" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="padding-right: 160px;">Movie</th>
              <th>Year</th>
              <th>Plot</th>
              <th>Director</th>
              <th>Actor</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="name in namesData">
              <td style="box-sizing: content-box; height: 125px;">{{name.movie_name}}</td>
              <td>{{name.year}}</td>
              <td>{{name.plot}}</td>
              <td>{{name.director}}</td>
              <td>{{name.actor}}</td>
            </tr>
          </tbody>
        </table>
        </div>
          </div>
      </div>

      
<div class="container" style="color: white;">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
          <h3>View Other Data</h3>
        <a href="director/index.php" class="btn btn-primary btn-lg" fa fa-play>Director Data</a>
        <a href="actor/index.php" class="btn btn-primary btn-lg" fa fa-play>Actor Data</a>
      <br />
        </div>
          </div>
        </div>
        
      </div>


    </div>
  </body>
</html>

<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Image</h4>
   </div>
   <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data">
     <p><label>Select Image</label>
     <input type="file" name="image" id="image" /></p><br />
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
      
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>




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
            <label>Enter Movie Name</label>
            <input type="text" name="movie_name" ng-model="movie_name" class="form-control" />
          </div>
          <div class="form-group">
            <label>Enter Year</label>
            <input type="text" name="year" ng-model="year" class="form-control" />
          </div>
          <div class="form-group">
            <label>Enter Plot</label>
            <input type="text" name="plot" ng-model="plot" class="form-control" />
          </div>
          <div class="form-group">
            <label>Enter Director</label>
            <input type="text" name="director" ng-model="director" class="form-control" />
          </div>
          <div class="form-group">
            <label>Enter actor</label>
            <input type="text" name="actor" ng-model="actor" class="form-control" />
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
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"action1.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
 $('#add').click(function(){
  $('#imageModal').modal('show');
  $('#image_form')[0].reset();
  $('.modal-title').text("Add Image");
  $('#image_id').val('');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });
 $('#image_form').submit(function(event){
  event.preventDefault();
  var image_name = $('#image').val();
  if(image_name == '')
  {
   alert("Please Select Image");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#image').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"action1.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.update', function(){
  $('#image_id').val($(this).attr("id"));
  $('#action').val("update");
  $('.modal-title').text("Update Image");
  $('#insert').val("Update");
  $('#imageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Are you sure you want to remove this image from database?"))
  {
   $.ajax({
    url:"action1.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  
</script>


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
      data:{'movie_name':$scope.movie_name, 'year':$scope.year, 'plot':$scope.plot, 'director':$scope.director, 'actor':$scope.actor, 'action':$scope.submit_button, 'id':$scope.hidden_id}
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
      $scope.movie_name = data.movie_name;
      $scope.year = data.year;
      $scope.plot = data.plot;
      $scope.director = data.director;
      $scope.actor = data.actor;
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

<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>