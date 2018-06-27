<?php 
  if(!isset($_SESSION['username'])){
    header("location:index.php");
  }
	require_once ('header.php');
 ?>
	<div class="content-wrapper">
    	<div class="container-fluid">
    		<h1 class="text-center">Register page</h1>
    		<div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form id="register_form">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Name</label>
                <input class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter first name" type="text" name="uname">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Mobile</label>
                <input class="form-control" id="exampleInputLastName" aria-describedby="nameHelp" placeholder="Enter Mobile No" type="text" name="umobile">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" type="text" name="uemail">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password" name="upass">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" placeholder="Confirm password" type="password" name="ucpass">
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-primary btn-block btn_register" >Register</button>
        </form>
        <div class="errordiv">
          
        </div>
      </div>
    </div>
    	</div>
    </div>
   



 <?php 
 require_once ('footer.php');
  ?>