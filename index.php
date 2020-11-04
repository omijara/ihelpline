<?php $handle = fopen("counter.txt", "r"); 
if(!$handle){ echo "could not open the file" ; } 
else { $counter = (int ) fread($handle,20); 
	fclose ($handle); $counter++; 
	
                          $handle = fopen("counter.txt", "w" ); 
                          fwrite($handle,$counter) ; fclose ($handle) ;
	$handle = fopen("counter.txt", "w" ); 
	fwrite($handle,$counter) ; fclose ($handle) ; } 

	?>
	<head>
		<meta charset="utf-8">
		<title>Tele Doctor Service | Woato</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/parsley.css">
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="images/ihelpline2.jpg" alt="">
			</div>
			<br>

			<div class="detail">
				<div class="p">
				<p style="font-size: 35px; color: white; font-family: elephant; ">24hr Tele Doctor service in this pandemic situation</p>
				<p style="font-size: 35px; color: white; font-family: elephant; ">A collaborative approach by WOATO and BADAS</p>
			</div>
			<div class="">
				<p>Follow the below instruction to get the service:</p>
				<ol>
				  <li>Fill up the registration form as right side.</li>
				  <li>When registration is done you will see Facebook like button</li>
				  <li>Click and give a like to our Facebook page</li>
				  <li>Click Join button to join our Facebook Group</li>
				</ol>
				<p>After completing all the instruction you will receive a confirmation message</p>
				<p>from BADAS in your registered phone number within 24 hr. Then you can enjoy the 24hr service.</p>
			</div>
				<footer>
				<p style="margin-left: 18;">
                © <span id="copy-year">2020</span> Copyright Woato | Developed by
                <a class="text-primary" href="http://www.facebook.com/omijara" target="_blank">Omi Mazumder</a>
              </p>
				</footer>
				
			</div>




			<div class="form-inner">
				<form action="check_json.php" method="post" data-parsley-validate>
					<div class="form-header">
						<h3>Registration  <?php echo $counter; ?></h3>
						
						<img src="images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">Name:</label>
						<input type="text" class="form-control" name="name" data-parsley-length="[3, 16]" required="">
					</div>
					<div class="form-group">
						<label for="">Age:</label>
						<input data-parsley-type="number" class="form-control" name="age" data-parsley-range="[13, 99]" required="">
					</div>
					<div class="form-group" >
						<label for="">Mobile Number:</label>
						<input data-parsley-type="digits" class="form-control" name="mnum" data-parsley-length="[11, 11]" data-parsley-pattern="\d+" required="">
					</div>
					<div class="form-group" >
						<label for="">Present Address:</label>
						<input type="text" class="form-control" name="paddress" required="">
					</div>
					
<p>Solve this Equation to proceed: <br>
<?php echo "3". " ". "x". " ". "3". " ". "=" ; ?>
<input type="text" name="nb" size="5" required="" data-parsley-multiple-of="3" /></p>

					<button>Submit</button>
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
		</form>
	</div>
</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<!--<script src="js/jquery.form-validator.min.js"></script>-->
		<script src="js/main.js"></script>
		<script src="js/parsley.min.js"></script>

		<script type="text/javascript">
			window.Parsley.addValidator('multipleOf', {
			  validateNumber: function(value, requirement) {
			    return value % requirement === 0;
			  },
			  requirementType: 'integer',
			  messages: {
			    en: 'This value should be a multiple of %s.',
			    fr: "Ce nombre n'est pas un multiple de %s."
			  }
			});
		</script>
	</body>
</html>