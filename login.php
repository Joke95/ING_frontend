<?php include 'header.php';?>


<section>
	<div class="container">
		<div class="row">
					
			<div class="col-md-5 panel onecol">
			  <h2>Log in</h2>
			   <form action="action_page.php">
					<div class="container">
						<div class="div_line">
							<label for="uname"><b>Username</b></label>
							<input type="text" placeholder="Enter Username" name="uname" required>
						</div>
						<div class="div_line">
							<label for="psw"><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="psw" required>
						</div>
						<div class="div_line">
							<button type="submit" id="login_button" >Login</button>
						</div>
							<div class="div_line">
							<label>
								<input type="checkbox" checked="checked" name="remember"> Remember me
							</label>
						</div>
					</div>

					<div class="container" style="background-color:#f1f1f1">
					
						<span class="psw"> <a href="#">Forgot password?</a></span>
					</div>
				</form> 
			</div>
		</div>
	</div>
</section>


<?php include 'footer.php';?>
