<?php include 'header.php';?>

<?php
$conversation = array(
"[SYSTEM] Hello , welcome to the Cambridge restaurant system? You can ask for restaurants by area , price range or food type . How may I help you?",
"[USER]   cheap restaurant in the south part of town",
"[SYSTEM] What kind of food would you like?",
"[USER]   any",
"[SYSTEM] the lucky star is a nice place in the south of town and the prices are cheap",
"[USER]   phone number",
"[SYSTEM] The phone number of the lucky star is 01223 244277",
"[USER]   address",
"[SYSTEM] Sure , the lucky star is on Cambridge Leisure Park Clifton Way Cherry Hinton",
"[USER]   thank you good bye");


?> 

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-5 panel twocol">
				<h2>The converstation
					<button type="button" id="deselectAll" >Deselect all</button> 
					<button type="button" id="selectAll" >Select all</button> 
				</h2>
				<div class="div_conversation">
						<?php
						$tem = 0;
						foreach ($conversation as $value) {
							if(substr($value,0,2)==='[S'){
								echo "<div class='con_line system'>";
							}else{	
								echo "<div class='con_line user'>";
							}	
								$style="disabled name='conversation' class='checkbox' id='check$tem'";
								$popover= "data-toggle='popover' data-placement='right' data-container='body'" ;
								echo "<input type='checkbox' value='$value' $style $popover>";
								echo "<label class='checklabel' for='check$tem' >$value</label>";
							echo "</div>";
							$tem++;
						}?>
					</div>
			</div>

			<div class="col-md-5 panel twocol">
				<h2>The questions</h2>
				<div class="div_line">
					<p>
						How strongly do you agree with the following statement:
					</p>
					<p class="statement">
						The user had a satisfying conversation with the systemversation
					</p>
					<div class="div_line likert">
						<ul >
							<li>Not satisfied at all</li>
							<li><input type="radio" name="satisfaction" class="radio_sat" value="0" /></li>
							<li><input type="radio" name="satisfaction" class="radio_sat" value="1" /></li>
							<li><input type="radio" name="satisfaction" class="radio_sat" value="2" /></li>
							<li><input type="radio" name="satisfaction" class="radio_sat" value="3" /></li>
							<li><input type="radio" name="satisfaction" class="radio_sat" value="4" /></li>
							<li>Very satisfied</li>
						</ul>
					</div>
				</div>
				<div class="div_line second_question" id="satisfied">
					<p>
						Why do you think the user had a satisfying conversation? You can select mutliple answers.
					</p>
					<ul > 
						<li>
							<input type='checkbox' name='reason_satisfaction' value='User'>
							<label>The system was able to answer the users’ question(s)</label>
						</li>
						<li>
							<input type='checkbox' name='reason_satisfaction' value='Interact'>
							<label>The system was able to interact with the user well</label>
						</li>
						<li>
							<input type='checkbox' name='reason_satisfaction' value='Naturally'>
							<label>The user was able to talk to the system naturally</label>
						</li>
						<li>
							<label for="Other_satisfied">
								<input type="checkbox" name="reason_satisfaction" id="Other_satisfied" value="Other">
							    <input id="propertytype_other" name="propertytype_other" type="text" value="" placeholder="other" class="form-control" width="80%">  
							</label>
						</li>
						<div class="checkbox" >
							       
						</div>
					</ul>
				</div>
				<div class="div_line second_question" id="dissatisfied">
					<p >
						Please select sentence(s) where you think the user would be dissatisfied
					</p>
				</div>
				<button type="button" >Exit</button> 
				<button type="button" >Submit >></button> 
				
			</div>
		</div>
	</div>
</section>

<div id="popover-content-popover" class="hide">
	<ul class="popover-content-popover" >
		<li>
			<label>
				<input id="tem_input" type='checkbox' class="radio_reason" name='reason_dissatisfaction' value='Not understanding' width="80%">
				The system was unable to understand the user
			</label>
		</li>
		<li>
			<label>
				<input id="tem_input" type='checkbox' class="radio_reason" name='reason_dissatisfaction' value='User error'>
				The user did not know how to talk to the system
			</label>
		</li>
		<li>
			<label>
				<input id="tem_input" type='checkbox' class="radio_reason" name='reason_dissatisfaction' value='No information'>
				The system did not have enough information available to answer the user
			</label>
		</li>
		<li>
			<label for="Other_dissatisfied">
				<input type="checkbox" name="reason_satisfaction" id="Other_dissatisfied" value="Other">
				<input id="propertytype_other" name="propertytype_other" type="text" value="" placeholder="other" class="form-control" width="70%">  
			</label>
		</li>
	</ul>
	<button id="tem_btn" class="button_dis" type="button">Ok</button> 
</div>
<script>
$(document).ready(function(){
	$('.hide').hide();
	$('#dissatisfied').hide();
	$('#satisfied').hide();
	$('.checkbox').prop('disabled', true);
	$( "#deselectAll" ).prop('disabled', true);
	$( "#selectAll" ).prop('disabled', true);
	
	$("[data-toggle=popover]").popover({
		html: true,
		title: "Why do you think that the user was dissatisfied?",
		placement: 'right',
		boundary:'viewport',
		content: function() {
			var id = this.id;
			var html_string = jQuery($('#popover-content-popover').html());
			html_string.children().children().children('#tem_input').attr('id', 'input' + id);
			html_string.attr('id', 'button' + id);
			return html_string;
		}
	});
	$( ".button_dis" ).prop('disabled', true);
	
});

$('#selectAll').click(function() {
	$( ".checkbox" ).prop('checked', true);
});
$('#deselectAll').click(function() {
	$( ".checkbox" ).prop('checked', false);
});

$('.radio_sat').click(function() {
	if ($("input[name='satisfaction']:checked").val() <= 2) {
		/*Dissatisfied */
		$('#dissatisfied').show();
		$('#satisfied').hide();
		
		$( ".div_conversation" ).focus();
		$( ".checkbox" ).prop('disabled', false);
		$(".checklabel").addClass("hover_checklabel");
		$( "#deselectAll" ).prop('disabled', false);
		$( "#selectAll" ).prop('disabled', false);

	}else{
		/*Satisfied*/
		$('#satisfied').show();
		$('#dissatisfied').hide();

		$( ".checkbox" ).prop('checked', false);
		$( ".checkbox" ).prop('disabled', true);
		$(".checklabel").removeClass("hover_checklabel");
		$( "#deselectAll" ).prop('disabled', true);
		$( "#selectAll" ).prop('disabled', true);
	};
});
$(document).on('click', '.radio_reason', function() {
	var trimmed = this.id.substring(5);
	var tem_trimmed = 'button' + trimmed;
	$('#'+tem_trimmed).prop('disabled', false);	
});
$( ".button_dis" ).click(function() {
	alert( "Handler for .click() called." );
});
</script>

<?php include 'footer.php';?>
