<?php
	
	session_start();
	if(isset($_SESSION['Name'])) header('Location:homepage.php');
	elseif (isset($_COOKIE['login_session'])) {
		$_SESSION['Name'] = $_COOKIE['login_session'];
		header('Location:homepage.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>


<body>

<div class="row container m-auto">
  <div class="d-inline-block text-center mx-auto mt-5">
	  <h2>Login / SingUp In bootsrap 4</h2><br>
	  <!-- Trigger the modal with a button -->
	  <button type="button" class="btn btn-info btn-lg" id="logBtn" data-target="#log-sign-modal" data-toggle="modal">Login / SignUp</button>
	  <div class=" rounded mt-5">
	  	<p> Note. One user is Already added. Email: user1@gmail.com , Passowrd: User11 </p>
	  </div>
  </div>

  <!-- login & signUp Modal-->
    <div class="modal fade" id="log-sign-modal">
      <div class="modal-dialog modal-dialog-centered" style="max-width: 350px !important;">
        <div class="modal-content">
          <div class="text-center mb-4" style="background-color: #ff2d8b;">
            <h3 class="text-white d-inline-block my-3"><i class="fa fa-user"></i> <span id="head">Log In</span> </h3>
            <button class="close m-3" data-dismiss="modal"> &times; </button>  <!-- &times; use for making closing cross --> 
          </div>
          <div class="text-center" id="status">
            <!-- <img src="images/line.gif"> -->
          </div>
          <form class="col-11 mx-auto" onsubmit="return login();" id="log" onclick="hide_status();">
            <div class="modal-body">    
                <div class="form-group">
                  <label><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" class="form-control form-control-sm" id="l_email">
                </div>
                <div class="form-group">
                  <label><i class="fa fa-key"></i> Password</label>
                  <input type="password" class="form-control form-control-sm" id="l_pass">
                </div>
                <input type="checkbox" id="l_remember"> Remember me
            </div>
            <div class=" text-center mb-3">
              <button type="submit" class="btn btn-success">Log In <i class="fa fa-paper-plane"></i></button>
            </div>
            <center>Forgot Password? <a href="forgot.php">Click Here</a></center>
            <p class="text-center">Not Registerd? <a href="#" onclick="change(this);">SignUp Here</a></p>
          </form>
          <form class="col-11 mx-auto" onsubmit="return signup();" id="sign" onclick="hide_status();">
            <div class="modal-body ">    
                <div class="form-group">
                  <label><i class="fa fa-user"></i> Name</label>
                  <input type="text" class="form-control form-control-sm" id="s_name">
                </div>
                <div class="form-group">
                  <label><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" class="form-control form-control-sm" id="s_email">
                </div>
                <div class="form-group">
                  <label><i class="fa fa-key"></i> Password</label>
                  <input type="password" class="form-control form-control-sm" id="s_pass">
                  <small class="text-info text-center">At least 1 number, 1 lowercase ,1 uppercase and 6 length</small>
                </div>
            </div>
            <div class=" text-center mb-3">
              <button type="submit" class="btn btn-info">Sign Up <i class="fas fa-sign-in-alt"></i></button> 
            </div>
            <p class="text-center">Already Register? <a href="#" onclick="change(this);">Login Here</a></p>
          </form> 
        </div>
      </div>
    </div>
    <script type="text/javascript">

      regexName = /[a-zA-Z][^#&<>\"~;$^%{}?]{1,20}$/;
      regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}$/; //at least one number, one lowercase ,one uppercase and atleast 6 length
      

      $('#sign').hide();

      function hide_status(){
      	$('#status').html('');
      }
      
      function change(obj){
        $('#sign').toggle();
        $('#log').toggle();
        var c = obj.innerHTML;
        if(c=='SignUp Here')
          $('#head').html('Sign Up');
        else
          $('#head').html('Log In');
      }

      function signup(){
      	var _name = $('#s_name').val(), _email = $('#s_email').val(), _password = $('#s_pass').val();

      	if(!regexName.test(_name) || !regexEmail.test(_email) || !regexPassword.test(_password)){ 
      		$('#status').html('<small class="text-danger">Data Not Filled Correct Format.</small>');
      		return false;
      	}

        $('#status').html('<img src="images/line.gif">');
        $.ajax({
          url: 'ajax/opreation.php', type:'POST', data:{opreation: 'signup',name: _name ,email: _email ,password: _password},
          success:function(result){
            $('#status').html(result);
            if(result.includes("Successfully"))
            	setTimeout(function(){window.location.href='homepage.php';},1000);
          }
        });
        return false;
      }

      function login(){
      	var _email = $('#l_email').val(), _password = $('#l_pass').val(), _remember = $('#l_remember').prop('checked');

      	if(!regexEmail.test(_email) || !regexPassword.test(_password)){ 
      		$('#status').html('<small class="text-danger">Data Not Filled Correct Format.</small>');
      		return false;
      	}
        $('#status').html('<img src="images/line.gif">');
        $.ajax({
          url: 'ajax/opreation.php', type:'POST', data:{opreation: 'login',email: _email, password: _password, remember: _remember},
          success:function(result){
            $('#status').html(result);   
            if(result.includes("Successfully"))
            	setTimeout(function(){window.location.href='homepage.php';},1000);
          }
        });
        return false;
      }

    </script>
  <!--  Modal -->
</div>
 

</body>
</html>
