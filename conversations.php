<?php include 'header.php';?>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-5 panel twocol">
			  <h2>The converstation</h2>
			  <p>This is some text.</p>
			</div>
			
			<div class="col-md-5 panel twocol">
			  <h2>The questions</h2>
			  <p>Was the conversation satisfying to the user?</p>
			  <ul class="likert">
					<li>Strongly agree</li>
					<li><input type="radio" name="guilty" value="1" /></li>
					<li><input type="radio" name="guilty" value="2" /></li>
					<li><input type="radio" name="guilty" value="3" /></li>
					<li><input type="radio" name="guilty" value="4" /></li>
					<li><input type="radio" name="guilty" value="5" /></li>
					<li>Strongly disagree</li>
				</ul>
			</div>
		</div>
	</div>
</section>


<?php include 'footer.php';?>
