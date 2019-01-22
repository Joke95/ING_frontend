<?php include 'header.php';?>


<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-5 panel twocol">
				<h2>ING Chatbot</h2>
				<img src="http://<?php echo $base_url;?>/imgChatbot.png" class="img_normal" alt="ING chatbot" > 
			</div>
			
			<div class="col-md-5 panel twocol">
				<h2>Instructions</h2>
				<p>
					Hello and thank you for helping us evaluate our chatbot system! 
					Your upcoming task consists of analyzing conversations made with the chatbot, and determining if the user left the conversation satisfied or not.
				</p>
				<p>
					Once you start the evaluation, conversations will be displayed on the left. 
					During these conversations the user was tasked with finding a restaurant based on several specification such as location, cuisine type and price range. 
					If no restaurant was found the user had to ask for an alternative. 
					After reading the conversation, please indicate how satisfied you think the user felt after the conversation. 
				</p>

				<p>If the user was not satisfied this can happen due to several factors namely:</p>
				<ul>
					<li>the system was unable to understand the user (for example: the user asks for a restaurant in the west part of town but the system does not pick up on this)</li>
					<li>the user did not know how to talk to the system ( for example: the user continuously uses phrasing that the system does not  understand)</li>
					<li>the  system was unable to provide the user with the right information (for example: no matching restaurants were found)</li>
				</ul>
				<p>
					For each factor you will be able to select relevant sentences in the conversation where that factor causes problems. 
					If you think the user was dissatisfied due to a different factor, you can enter this in the “other” field.
				</p>

				<p>
					Please try to answer the questions to the best of your abilities. To begin press “Start”.
				</p>
				<button type="button">Start</button> 
			</div>
		</div>
	</div>
</section>


<?php include 'footer.php';?>
