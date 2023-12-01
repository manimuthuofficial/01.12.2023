<div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
    <ul>        
        <li><a class="btn-floating green tooltipped btn modal-trigger"  href="#emailAddContact" data-position="left" data-tooltip="Add Contact"><i class="material-icons">contacts</i></a></li>
        <li><a href="<?php echo admin_url('communications/compose'); ?>" class="btn-floating red tooltipped" data-target="slide-out-right" data-position="left" data-tooltip="Compose Mail"><i class="material-icons">edit</i></a></li>
    </ul>
</div>

<!-- Error Modal -->
<div id="emailAddContact" class="modal emailAddContactModal">
    <div class="modal-content">
        
        <div style="">
        <h4 style="font-size:20px;font-weight:bold;">Add Email Contact</h4>
        </div>
		<hr style="border: 1px solid #ebebeb;">
		<br>
		
		<?php echo form_open_multipart('class="edit-email-item mt-10 mb-10" id="addEmailContact"'); ?>
		
			<div class="s12" style="padding-bottom:7px;">
				<div class="input-field">
					<input placeholder="Enter Full Name Here..." type="text" id="name" name="name" required>
					<label for="">Full Name</label>
				</div>													
			</div>
				
			<div class="s12" style="padding-bottom:7px;">
				<div class="input-field">
					<input placeholder="Enter Email Here..." type="email" id="email_contact" name="email_contact" required>
					<label for="">Email</label>
				</div>													
			</div>
			
																
																												
			<div class="card-action pl-0 pr-0 right-align" style="padding-bottom:0px !important">
				<button style="padding-left:25px;padding-right:25px;" type="submit" id="add-email-contact-btn" class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1">
					<i class="material-icons left">send</i>
					<span style="font-size:16px;font-weight:normal">Add</span>
				</button>
				
				<a style="padding-left:25px;padding-right:25px;" type="submit" id="" class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1 modal-action modal-close">
					<i class="material-icons left">close</i>
					<span style="font-size:16px;font-weight:normal">Close</span>
				</a>
			</div> 
	
		<?php echo form_close(); ?>
		
		
		
		
    </div>
    
</div>

<script>
$(document).ready(function() 
{
	
	$('#addEmailContact').submit(function(e) 
	{
		e.preventDefault();
		
		
		// Serialize form data
		var formData = new FormData(this);
		
		

		$.ajax({
			type: 'POST',
			url: '<?php echo admin_url('Communications/addEmailContact'); ?>', // Replace with the correct URL path to your controller method
			data: formData,
			processData: false,
			contentType: false,
			success: function(response) 
			{
				//alert(response); // Show a success message
				
				$("#successModalMessage").text("Email ID successfully added in your contacts.");
				$("#successModal").modal("open");
								
				$("#addEmailContact")[0].reset();
								
				$("#successModalBtn").click(function () {
				  location.reload();
				});

				setTimeout(function () {
				  location.reload();
				}, 3000);
				
				
				
				
			},
			error: function(xhr, status, error) 
			{
				//console.error(error); // Handle errors, if any
				// Handle error response and show errorModal
				$("#errorModalMessage").text("ERROR Add.");
				$("#errorModal").modal("open");
			}
		});
	});
});
</script>