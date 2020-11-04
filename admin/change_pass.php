<?php $title = 'Update Password | Tele Doctor'; include("header.php"); ?>
 	<link rel="stylesheet" type="text/css" href="../css/style2.css">
  	<link rel="stylesheet" href="../css/parsley.css">




			<form action="update_pass.php" method="POST" data-parsley-validate>

				<a>
                 <?php if (isset($_GET['msg2'])) { ?>

                    <div style="background: #23AC7F;color: white;"  id="toastmsg" class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $_GET['msg2'];?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                  <?php } ?>
                 </a>

				<h2>Change Password</h2>
				<div class="form-group">
					<label for="">New Password:</label>
					<input type="password" class="form-control" id="pw" name="npass" required="">
				</div>
				<div class="form-group">
					<label for="">Confirm Password:</label>
					<input type="password" class="form-control" name="cpass" data-parsley-equalto="#pw" required="">
				</div>

				</br>
					<button type="submit" name="register" class="btn">update</button>
					<input type="button" value="cancel" class="btn" onclick="history.back();" />

			</form>


<?php include("footer.php"); ?>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/parsley.min.js"></script>


			