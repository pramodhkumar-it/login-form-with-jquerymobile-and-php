<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<title>Login Form</title>
<script type="text/javascript">
$(document).ready(function(){
	
   $("#login").click(function(){
		username=$("#user_name").val();
        password=$("#password").val();

         $.ajax({
            type: "POST",
           url: "login.php",
            data: "username="+username+"&password="+password,


            success: function(html){
			
			  if(html=='false')
              {
			  $("#add_err").html("Wrong username or password");
              

				//$("#profile").html("<a href='logout.php' class='red' id='logout'>Logout</a>");
				// You can redirect to other page here....
              }
              else
              {
			       $("#login").fadeOut("normal");
                    $("#profile").html(html);
              }
            }
           
        });
         return false;
    });
});
</script>
</head>
<body>
<?php session_start(); ?>
	
 
 <div id="profile">
 <div>
	
 
</body>
<?php 
if(empty($_SESSION['user_name'])){?>
			<div data-role="page" id="login">
	<div data-role="header"  >
	<h1>This is Login page </h1>
	</div>
	<div data-role="content">
	<div data-role="fieldcontain">
 
	<section id="content">
		<form  class="ui-body ui-body-a ui-corner-all"   >
			<h1>Login Form</h1>
			<div>
				<input class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" type="text" placeholder="Username" required="" id="user_name"  name="user_name"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset" id="password"  name="password"/>
			</div>
		        <div class="err" id="add_err"></div>
			<div>
			<button value="submit-value" name="submit" data-theme="b" type="submit" id="login"  class="ui-btn-hidden" aria-disabled="false">Submit</button>
					 
			 
			</div>
		</form><!-- form -->
		<div class="button">
			
		</div><!-- button -->
	</section><!-- content -->
	 
	</div>
<div data-role="footer"  >
	<h4>this is about Footer copy right</h4>
	</div>
</div>
</div>
<?php }?>
<!-- container -->
</body>
</html>
