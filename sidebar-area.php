<!-- Sidebar Area Starts -->
					<div class="email-overlay"></div>
					<div class="sidebar-left sidebar-fixed">
					  <div class="sidebar">
						<div class="sidebar-content">
						  <div class="sidebar-header">
							<div class="sidebar-details">
							  <h5 class="m-0 sidebar-title" style="display:none"><i class="material-icons app-header-icon text-top">mail_outline</i> Mailbox</h5>
							  <div class="row valign-wrapper mt-10 pt-2 animate fadeLeft">
								<div class="col s3 media-image">
								  <img src="<?php echo base_url(); ?>assets/images/avatar/profile.png" alt="" class="circle  responsive-img">
								  <!-- notice the "circle" class -->
								</div>
								<div class="col s10">
								  <p class="m-0 subtitle font-weight-700">Pro Track</p>
								  <p class="m-0 text-muted">protrack@mdsengg.com</p>
								  <?php
								  
								  ?>
								</div>
							  </div>
							</div>
						  </div>
						  <div id="sidebar-list" class="sidebar-menu list-group position-relative animate fadeLeft">
							<div class="sidebar-list-padding app-sidebar sidenav" id="email-sidenav">
							
							
								<ul class="email-list display-grid" id="messageTabs">
									<li class="sidebar-title">Folders</li>
									
									<li <?php if ($tab_active === 'inbox') echo 'class="active"'; ?>>
										<a href="<?= admin_url('communications/dashboard') ?>" class="text-sub">
											<i class="material-icons mr-2"> mail_outline </i> Inbox &nbsp; <?php //echo $unread_count; ?>
										</a>
									</li>
															
									<li <?php if ($tab_active === 'sent') echo 'class="active"'; ?>>
										<a  href="<?= admin_url('communications/sentEmailBox') ?>" class="text-sub">
											<i class="material-icons mr-2"> send </i> Sent Items &nbsp; <?php //echo $sent_count; ?>
										</a>
									</li>
									
									
								</ul>
							  
							  
							  
							</div>
						  </div>
						  <a href="#" data-target="email-sidenav" class="sidenav-trigger hide-on-large-only"><i
							  class="material-icons">menu</i></a>
						</div>
					  </div>
					</div>
					<!-- Sidebar Area Ends -->
					
					<style>
					.sidebar .sidebar-content .sidebar-header .sidebar-details .media-image img
					{
						width: 100%;
					}
					</style>