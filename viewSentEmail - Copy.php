<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<?php init_head(); ?>

<!-- BEGIN: Page Level CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/themes/horizontal-menu-template/materialize.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/themes/horizontal-menu-template/style.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/layouts/style-horizontal.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/app-sidebar.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/app-email.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/mailbox.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/select2/select2.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/select2/select2-materialize.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/app-email-content.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/sweetalert/sweetalert.css">
<!-- END: Page Level CSS-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">


<?php 
$session_email = $this->session->userdata('session_email');	
$firstname = $this->session->userdata('firstname');
$lastname = $this->session->userdata('lastname');

$tab_active = "sent";
?>


<div id="main">
    <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper" style="border-bottom:1px solid #ebebeb">
            <div class="container">
                 <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title" style="text-align:left;"><span><?php echo _l('Mail Box <span style="color:#bdbaba;font-size:17px">- Sent Item</span>'); ?> <?php  ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url(); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo _l('Mail Box <span style="color:#bdbaba;font-size:17px">- Sent Item</span>'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
			<br>
        </div>
		
		
		
		<div class="content-wrapper-before lighten-5"></div>
			<div class="col s12">
				<div class="container">
				
				
				
					<?php include('sidebar-area.php'); ?>

					
					
					
					<!-- Content Area Starts -->
					<div class="app-email-content">
					  <div class="content-area content-right">
						<div class="app-wrapper">
						  
						  
						  
						  
						  <div class="card card-default scrollspy border-radius-6 fixed-width">
							<div class="card-content pt-0" >
							  <div class="row">
								<div class="col s12">
								
									<!-- Display the conversation -->
									<div class="conversation">
									
										
																																						
										<div class="" style="background-color:#f9f9f9;margin-top:30px;padding:5px 25px;">
											<!-- Email Header -->
											<div class="email-header">
												<div class="subject">
													
													<?php
													$subject = $sent_email_details['subject'];
													if (!empty($subject))
													{
													?>
													
													<div class="email-title" style="font-size:16px;">Subject: <?php echo $subject; ?></div>
													<?php
													}
													else
													{
													?>
													<div class="email-title"><?php echo "No Subject."; ?></div>	
													<?php
													}
													?>
												  
												</div>
											</div>
											<!-- Email Header Ends -->

											<!-- Email Content -->
											<div class="email-content">
												<div class="list-title-area">
												  <div class="user-media">
													<img style="display:none" src="<?php echo base_url(); ?>assets/images/user/9.jpg" alt=""
													  class="circle z-depth-2 responsive-img avtar">
													<div class="list-title">
													
													
													  <span class="name" style="color:#727272">										  
													  <?php echo "From: ".$sent_email_details['from']; ?>								  
													  </span>
													  
														<p style="font-weight:bold; color:#727272">
														<?php echo "To: ".$sent_email_details['recipient']; ?>
														</p>
														
														<?php
														if(!empty($sent_email_details['cc']))
														{
														?>
														<p style="font-weight:normal; color:#727272">
														<?php echo "Cc: ".$sent_email_details['cc']; ?></p>
														<?php
														}
														else
														{
														}
														?>
														
														<?php
														if(!empty($sent_email_details['bcc']))
														{
														?>
														<p style="font-weight:normal; color:#727272">
														<?php echo "Bcc: ".$sent_email_details['bcc']; ?></p>
														<?php
														}
														else
														{
														}
														?>
														
														
														
														<p style="font-weight:normal; color:#727272">
														<?php 									
														// Assuming $message['date'] contains the date '2023-09-28 18:49:35'
														$date =  $sent_email_details['created_at'];
														// Convert the original date to a DateTime object
														$date = new DateTime($date);

														// Format the date in the desired format
														$date = $date->format('D, M d Y, g:i A');

														// Update $message['date'] with the formatted date
														$email_data['date'] = $date;	
														echo "Date: ".$date;
														?> 
														</p>
														
														
														
																										  
													</div>
												  </div>
												  
												</div>
												<div class="email-desc">												
													<?php
													$message = $sent_email_details['message'];
													if (!empty($message))
													{
													?>
													
													<div class="email-title" style="font-size:16px;"><?php echo $message; ?></div>
													<?php
													}
													else
													{
													?>
													<div class="email-title"><?php echo "No Message to Dsiplay."; ?></div>	
													<?php
													}
													?>							
												</div>
												
										
												<?php
												$attachments_folder = FCPATH . 'assets/attachments/' . $sent_email_details['id'];

												if (is_dir($attachments_folder)) {
													$attachments = scandir($attachments_folder);

													if (count($attachments) > 2) { // Account for . and ..
														echo '<hr>';
														echo '<div class="subject">';
														echo '<div class="email-title"><b> Attachments: ' . (count($attachments) - 2) . '</b> </div>';
														echo '</div>';
														echo '<ul>';

														// Initialize a counter
														$serialNumber = 1;

														foreach ($attachments as $attachment) {
															if ($attachment !== '.' && $attachment !== '..') {
																$attachment_path = base_url('assets/attachments/' . $sent_email_details['id'] . '/' . $attachment);

																// Get the file size
																$file_size = filesize($attachments_folder . '/' . $attachment);

																echo '<li>';
																echo '<span>' . $serialNumber . '.</span> '; // Display serial number
																echo '<a href="' . $attachment_path . '" target="_blank">' . $attachment . '</a> (' . formatFileSize($file_size) . ')';
																echo '</li>';

																// Increment the counter
																$serialNumber++;
															}
														}

														echo '</ul>';
													} else {
														echo '<hr>';
														echo '<p>No Attachments.</p>';
													}
												} else {
													echo '<p>Attachments folder not found.</p>';
												}

												// Function to format file size
												function formatFileSize($size) {
													$units = array('B', 'KB', 'MB', 'GB', 'TB');
													$bytes = max($size, 0);
													$pow = floor(($bytes ? log($bytes) : 0) / log(1024));
													$pow = min($pow, count($units) - 1);
													$bytes /= (1 << (10 * $pow));

													return round($bytes, 2) . ' ' . $units[$pow];
												}
												?>




										
										
										



												<br>										
											</div>
											<!-- Email Content Ends -->
										</div>	

										
																				
																		  
									  
									  
									  
									</div>
									
								  </div>
								  <!-- Email Footer Ends -->
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
					<!-- Content Area Ends --><!-- START RIGHT SIDEBAR NAV -->
					
				
				
				
				</div>					
				
				
				
			</div>
		</div>
		
        <div class="btn-bottom-pusher"></div>
    </div>
</div>

<?php include('fixed-action-btn.php'); ?>

<!-- Add new email popup
<div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
  <a class="btn-floating btn-large primary-text gradient-45deg-light-blue-cyan gradient-shadow compose-email-trigger" href="#">
    <i class="material-icons">add</i>
  </a>
</div>
Add new email popup Ends-->
		
	

<script src="<?php echo base_url(); ?>assets/vendors/select2/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/form-select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/advance-ui-modals.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/app-email-content.min.js"></script>
<?php init_tail(); ?>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/extra-components-sweetalert.min.js"></script>

</body>
</html>

<!-- Add a loader overlay with a loading message -->
<div class="loader-overlay" id="loader-overlay">
    <div class="loader" style="padding:9px; padding-left:50px;padding-right:50px">
        <div class="spinner"></div>
        <p style="color:#fff">Reply Email Sending... Please Wait...</p>
    </div>
</div>


<?php include('modasl-popup.php'); ?>

