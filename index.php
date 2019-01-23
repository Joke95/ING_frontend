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
				<p>Hello!</p>
				<p>
					Thank you for helping us evaluate our chatbot system! 
					Your upcoming task consists of analyzing chatbot conversations and determining if the user left the conversation feeling satisfied or not.
				</p>
				<p>
					Once you start the evaluation, conversations will be displayed on the left. 
					During these conversations the user was tasked with finding a restaurant based on several specification such as location, cuisine type and price range. 
					If no restaurant was found the user had to ask for an alternative. 
					After reading the conversation, please indicate how satisfied you think the user felt after their conversation.
				</p>
				<p>
					If the user was not satisfied you can select one or more sentences in the conversation where you think the user felt dissatisfied.
				</p>
				<p>
					For each sentence you select you will then be able to choose one or more reasons as to why the user would be dissatisfied at that moment. 
					These reasons include:
				</p>
				<ul>
					<li>The system was unable to understand the user (for example: the user asks for a restaurant in the west part of town, but the system does respond to this)</li>
					<li>The user did not know how to talk to the system (for example: the user continuously uses phrasing that the system does not understand)</li>
					<li>The system was unable to provide the user with the right information (for example: no matching restaurants were found)</li>
				</ul>
				<p>
					If you want to add your own reason you can do so by selecting “Other”. 
					If the user was satisfied you will also be able to give a reason why this is, but you do not need to select any sentences.
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
