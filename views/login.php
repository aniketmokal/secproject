<?php 
  if(!isset($_SESSION['username'])){
    header("location:index.php");
  }

	require_once ('header.php');
 ?>
	<div class="content-wrapper">
    	<div class="container-fluid">
    		<h1 class="text-center">Login page</h1>
    		<div class="card card-register mx-auto mt-5">
      <div class="card-header">Login an Account</div>
      <div class="card-body">
        <form id="login_form">
          <div class="form-group">
            <div class="form-row">
                            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" type="text" name="uemail">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password" name="upass">
              </div>
              
            </div>
          </div>
          <button type="button" class="btn btn-primary btn-block btn_login" >Login</button>
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