<?php include 'header.php';?>


<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-5 panel twocol">
			  <h2>Explanation of the data format</h2>
			  <p>This is some text.</p>
			</div>
			
			<div class="col-md-5 panel twocol ">
				<h2>Option to upload converstations</h2>
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<div class="div_line">
						Select the conversations to upload:
						<input type="file" name="fileToUpload" id="fileToUpload">
					</div>
					<div class="div_line">
						<input type="submit" value="Upload conversations" name="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<?php include 'footer.php';?>
