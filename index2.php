<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tele Doctor Service | Woato</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="images/registratio.jpg" alt="">
			</div>
			<div class="form-inner">
				<form metod="post" id="captcha_form">
					<div class="form-header">
						<h3>Registration</h3>
						<img src="images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">First Name:</label>
						<input type="text" class="form-control" name="name" id="first_name" data-validation="length alphanumeric" data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">Last Name:</label>
						<input type="text" class="form-control" name="name" id="last_name" data-validation="length alphanumeric" data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">Age:</label>
						<input type="number" class="form-control" name="age" id="age">
					</div>
					<div class="form-group" >
						<label for="">Mobile Number:</label>
						<input type="number" class="form-control" name="num" id="mobile" data-validation="length" data-validation-length="min11">
					</div>
					<div class="form-group" >
						<label for="">Present Address:</label>
						<input type="text" class="form-control" name="address" id="address" data-validation="length alphanumeric" data-validation-length="12-30">
					</div>
					<button id="savebtn" class="btn btn-theme btn-block" href="" type="button" name="register"><i class="fa fa-lock"></i> register</button>
					<!--<div class="socials">
						<p>Sign up with social platforms</p>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-facebook"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-instagram"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-twitter"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-tumblr"></i>
						</a>
					</div>
				</form>
			</div>
			
		</div>
		-->
<script>
$(document).ready(function(){

 $('#captcha_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"process.php",
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   beforeSend:function()
   {
    $('#savebtn').attr('disabled','disabled');
   },
   success:function(data)
   {
    $('#savebtn').attr('disabled', false);
    if(data.success)
    {
     $('#captcha_form')[0].reset();
     $('#first_name_error').text('');
     $('#last_name_error').text('');
     $('#age_error').text('');
     $('#mobile_error').text('');
     $('#address_error').text('');
     $('#captcha_error').text('');
     grecaptcha.reset();
     alert('Form Successfully validated');
    }
    else
    {
     $('#first_name_error').text(data.first_name_error);
     $('#last_name_error').text(data.last_name_error);
     $('#age_error').text(data.age_error);
      $('#mobile_error').text(data.mobile_error);
     $('#address_error').text(data.address_error);
     $('#captcha_error').text(data.captcha_error);
    }
   }
  })
 });

});
</script>

	</body>
</html>