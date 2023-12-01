<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<?php init_head(); ?>

<!-- BEGIN: Page Level CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/themes/horizontal-menu-template/materialize.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/themes/horizontal-menu-template/style.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/layouts/style-horizontal.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/app-sidebar.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/app-email.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/select2/select2.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/select2/select2-materialize.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/form-select2.min.css">
<!-- END: Page Level CSS-->


<?php 
$session_email = $this->session->userdata('session_email');	
?>


<div id="main">
    <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                 <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title" style="text-align:left;"><span><?php echo _l('Communications'); ?> <?php  ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url(); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo _l('Communications'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		
		
		
		<div class="content-wrapper-before lighten-5"></div>
			<div class="col s12">
				<div class="container">
				
				
				
					<!-- Sidebar Area Starts -->
					<div class="email-overlay"></div>
					<div class="sidebar-left sidebar-fixed">
					  <div class="sidebar">
						<div class="sidebar-content">
						  <div class="sidebar-header" style="display:none">
							<div class="sidebar-details">
							  <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">mail_outline</i> Mailbox</h5>
							  <div class="row valign-wrapper mt-10 pt-2 animate fadeLeft">
								<div class="col s3 media-image">
								  <img src="<?php echo base_url(); ?>assets/images/user/2.jpg" alt="" class="circle z-depth-2 responsive-img">
								  <!-- notice the "circle" class -->
								</div>
								<div class="col s9">
								  <p class="m-0 subtitle font-weight-700">Lawrence Collins</p>
								  <p class="m-0 text-muted">lawrence.collins@xyz.com</p>
								</div>
							  </div>
							</div>
						  </div>
						  <div id="sidebar-list" class="sidebar-menu list-group position-relative animate fadeLeft">
							<div class="sidebar-list-padding app-sidebar sidenav" id="email-sidenav">
							  <ul class="email-list display-grid">
								<li class="sidebar-title">Folders</li>
								<li class="active"><a href="#!" class="text-sub"><i class="material-icons mr-2"> mail_outline </i> Inbox</a>
								</li>
								<li><a href="#!" class="text-sub"><i class="material-icons mr-2"> send </i> Sent</a></li>
								<li><a href="#!" class="text-sub"><i class="material-icons mr-2"> description </i> Draft</a></li>
								<!--
								<li><a href="#!" class="text-sub"><i class="material-icons mr-2"> info_outline </i> Span</a></li>
								<li><a href="#!" class="text-sub"><i class="material-icons mr-2"> delete </i> Trash</a></li>						
								<li class="sidebar-title">Filters</li>
								<li><a href="#!" class="text-sub"><i class="material-icons mr-2"> star_border </i> Starred</a></li>
								<li><a href="#!" class="text-sub"><i class="material-icons mr-2"> label_outline </i> Important</a></li>
								<li class="sidebar-title">Labels</li>
								<li><a href="#!" class="text-sub"><i class="purple-text material-icons small-icons mr-2">
									  fiber_manual_record </i> Note</a></li>
								<li><a href="#!" class="text-sub"><i class="amber-text material-icons small-icons mr-2">
									  fiber_manual_record </i> Paypal</a></li>
								<li><a href="#!" class="text-sub"><i class="light-green-text material-icons small-icons mr-2">
									  fiber_manual_record </i> Invoice</a></li>
								!-->
							  </ul>
							</div>
						  </div>
						  <a href="#" data-target="email-sidenav" class="sidenav-trigger hide-on-large-only"><i
							  class="material-icons">menu</i></a>
						</div>
					  </div>
					</div>
					<!-- Sidebar Area Ends -->

					
					
					<!-- Content Area Starts -->
					<div class="app-email">
					  <div class="content-area content-right">
						<div class="app-wrapper">
						  <div class="app-search">
							<i class="material-icons mr-2 search-icon">search</i>
							<input type="text" placeholder="Search Mail" class="app-filter" id="email_filter">
						  </div>
						  <div class="card card card-default scrollspy border-radius-6 fixed-width">
							<div class="card-content p-0 pb-2">
							  <div class="email-header">
								<div class="left-icons">
								  <span class="header-checkbox">
									<label>
									  <input type="checkbox" onClick="toggle(this)" />
									  <span></span>
									</label>
								  </span>
								  <span class="action-icons">
									<i class="material-icons">refresh</i>
									<i class="material-icons">mail_outline</i>
									<i class="material-icons">label_outline</i>
									<i class="material-icons">folder_open</i>
									<i class="material-icons">info_outline</i>
									<i class="material-icons delete-mails">delete</i>
								  </span>
								</div>
								<div class="list-content"></div>
								<div class="email-action">
								  <span class="email-options"><i class="material-icons grey-text">more_vert</i></span>
								</div>
							  </div>
							  <div class="collection email-collection">
							  
							  
								<div class="email-brief-info collection-item animate fadeUp">
								  <div class="list-left">
									<label>
									  <input type="checkbox" name="foo" />
									  <span></span>
									</label>									
								  </div>
								  <a class="list-content" href="app-email-content.html">
									<div class="list-title-area">
									  <div class="user-media">
										<div class="list-title">Gorge Fernandis</div>
									  </div>									  
									</div>
									<div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
									  have suffered alteration in some form, by injected humour, or randomised words which don't look even
									  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
								  </a>
								  <div class="list-right">
									<div class="list-date"> 2:03 PM </div>
								  </div>
								</div>
								
								
								<div class="email-brief-info collection-item animate fadeUp">
								  <div class="list-left">
									<label>
									  <input type="checkbox" name="foo" />
									  <span></span>
									</label>									
								  </div>
								  <a class="list-content" href="app-email-content.html">
									<div class="list-title-area">
									  <div class="user-media">
										<div class="list-title">Gorge Fernandis</div>
									  </div>									  
									</div>
									<div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
									  have suffered alteration in some form, by injected humour, or randomised words which don't look even
									  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
								  </a>
								  <div class="list-right">
									<div class="list-date"> 2:03 PM </div>
								  </div>
								</div>
								
								
								
								
								
								
							</div>
						  </div>
						</div>
					  </div>
					</div>
					<!-- Content Area Ends -->
				
				
				
				
				
				
				</div>					
				
				
				
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
        
        <div class="btn-bottom-pusher"></div>
    </div>
</div>

<!-- Add new email popup -->
<div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
  <a class="btn-floating btn-large primary-text gradient-shadow compose-email-trigger" href="#">
    <i class="material-icons">add</i>
  </a>
</div>
<!-- Add new email popup Ends-->


<!-- email compose sidebar -->
<div class="email-compose-sidebar">
  <div class="card quill-wrapper">
    <div class="card-content pt-0">
      <div class="card-header display-flex pb-2">
        <h3 class="card-title">NEW MESSAGE</h3>
        <div class="close close-icon">
          <i class="material-icons">close</i>
        </div>
      </div>
      <div class="divider"></div>
      <!-- form start -->
	  
	  
	  <?php echo form_open('admin/Communications/insertCommunications', 'class="edit-email-item mt-10 mb-10" id="email-form"'); ?>	  
         
		<div class="input-field">          
		  <input type="text" class="edit-email-item-title" id="from_email" name="from_email" value="<?php echo $session_email; ?>" readonly>
          <label for="edit-item-from">From</label>
        </div>
		<div class="input-field col s12">
			<select id="to_email" name="to_email">
				<option value="" disabled selected>Select Client's Email</option>
				
				<?php foreach ($emails as $email): ?>
				
				<option value="<?php echo $email['email']; ?>"><?php echo $email['email']; ?></option>

				<?php endforeach; ?>
				
			</select>
			<label>Client's Email</label>
		</div>
        <div class="input-field">
          <input type="text" class="edit-email-item-date" id="subject" name="subject">
          <label for="edit-item-subject">Subject</label>
        </div>
        
		<div class="input-field">
           <textarea id="message" name="message" class="materialize-textarea" style="height:150px"></textarea>
          <label for="textarea2">Write a Message</label>
        </div>
        
		<div class="card-action pl-0 pr-0 right-align">
			<button type="reset" class="btn-small waves-effect waves-light cancel-email-item mr-1">
				<i class="material-icons left">close</i>
				<span>Cancel</span>
			</button>
			<button type="submit" class="btn-small waves-effect waves-light send-email-item">
				<i class="material-icons left">send</i>
				<span>Send</span>
			</button>
		</div>        
      <?php echo form_close(); ?>
      
      <!-- form start end-->
    </div>
  </div>
</div>




<?php init_tail(); ?>


</body>
</html>



<style>
    
	
	.email-tabs li
	{
        margin-left: -1.8rem;
        padding-left: 1.8rem;
        border-top-right-radius: 2rem;
        border-bottom-right-radius: 2rem;
        background-color: #f9f9f9;
        /box-shadow: 0 0 8px 0 #2196f3;
        padding-top: 10px;
        padding-bottom: 10px;
		margin-bottom:10px;
    }
	.email-tabs li:hover
	{
        margin-left: -1.8rem;
        padding-left: 1.8rem;
        border-top-right-radius: 2rem;
        border-bottom-right-radius: 2rem;
        background-color: #2196f3;
        //box-shadow: 0 0 8px 0 #2196f3;
        padding-top: 10px;
        padding-bottom: 10px;
		margin-bottom:10px;
    }
	.email-tabs li:hover a
	{
        color:#fff;
    }
	.email-tabs li a
	{
        color:#000;
    }
	
	.email-tabs .active
	{
        margin-left: -1.8rem;
        padding-left: 1.8rem;
        border-top-right-radius: 2rem;
        border-bottom-right-radius: 2rem;
        background-color: #2196f3 !important;
        box-shadow: 0 0 8px 0 #2196f3;
        padding-top: 10px;
        padding-bottom: 10px;
    }
	.email-tabs .active a
	{
		color:#fff !important;
		width:100%;
	}
	
	
    td, th 
	{
        text-align: center;
    }
	
	.app-email .content-area
	{
		//width:100%;
	}
	
	.ql-editor.ql-blank::before 
	{
		font-size: 1.1rem;
		color: #000;
		position: absolute;
		font-style:normal;
		top: 0;
		left: 0;
		cursor: text;
		-webkit-transition: color .2s ease-out,-webkit-transform .2s ease-out;
		transition: color .2s ease-out,-webkit-transform .2s ease-out;
		transition: transform .2s ease-out,color .2s ease-out;
		transition: transform .2s ease-out,color .2s ease-out,-webkit-transform .2s ease-out;
		-webkit-transform: translateY(12px);
		-ms-transform: translateY(12px);
		transform: translateY(12px);
		-webkit-transform-origin: 0 100%;
		-ms-transform-origin: 0 100%;
		transform-origin: 0 100%;
		text-align: initial;
		color: #9e9e9e;
	}
	.input-field.col label
	{
		left:0px;
	}
		
</style>




<script>
function toggle(e) {
    checkboxes = document.getElementsByName("foo");
    for (var i = 0, o = checkboxes.length; i < o; i++) checkboxes[i].checked = e.checked;
}
function resizetable() {
    0 < $(".vertical-layout").length ? $(".app-email .collection").css({ maxHeight: $(window).height() - 350 + "px" }) : $(".app-email .collection").css({ maxHeight: $(window).height() - 410 + "px" });
}
$(document).ready(function () {
    "use strict";
    900 < $(window).width() && $("#email-sidenav").removeClass("sidenav");
    new Quill(".snow-container .compose-editor", { modules: { toolbar: ".compose-quill-toolbar" }, placeholder: "Write a Message... ", theme: "snow" });
    if (
        ($("#email-sidenav").sidenav({
            onOpenStart: function () {
                $("#sidebar-list").addClass("sidebar-show");
            },
            onCloseEnd: function () {
                $("#sidebar-list").removeClass("sidebar-show");
            },
        }),
        0 < $("#sidebar-list").length)
    )
        new PerfectScrollbar("#sidebar-list", { theme: "dark", wheelPropagation: !1 });
    if (0 < $(".app-email .collection").length) new PerfectScrollbar(".app-email .collection", { theme: "dark", wheelPropagation: !1 });
    if (
        ($(".email-list li").click(function () {
            var e = $(this);
            e.hasClass("sidebar-title") || ($("li").removeClass("active"), e.addClass("active"));
        }),
        $('.app-email i[type="button"]').click(function (e) {
            $(this).closest("tr").remove();
        }),
        $(".app-email .favorite i").on("click", function (e) {
            e.preventDefault(), $(this).toggleClass("amber-text");
        }),
        $(".app-email .email-label i").on("click", function (e) {
            e.preventDefault(), $(this).toggleClass("amber-text"), "label_outline" == $(this).text() ? $(this).text("label") : $(this).text("label_outline");
        }),
        $(".app-email .delete-mails").on("click", function () {
            $(".collection-item").find("input:checked").closest(".collection-item").remove();
        }),
        $(".app-email .delete-task").on("click", function () {
            $(this).closest(".collection-item").remove();
        }),
        $(".sidenav-trigger").on("click", function () {
            $(window).width() < 960 && ($(".sidenav").sidenav("close"), $(".app-sidebar").sidenav("close"));
        }),
        $("#email_filter").on("keyup", function () {
            $(".email-brief-info").css("animation", "none");
            var e = $(this).val().toLowerCase();
            "" != e
                ? ($(".email-collection .email-brief-info").filter(function () {
                      $(this).toggle(-1 < $(this).text().toLowerCase().indexOf(e));
                  }),
                  0 == $(".email-brief-info:visible").length ? $(".no-data-found").hasClass("show") || $(".no-data-found").addClass("show") : $(".no-data-found").removeClass("show"))
                : $(".email-collection .email-brief-info").show();
        }),
        $(".compose-email-trigger").on("click", function () {
            $(".email-overlay").addClass("show"), $(".email-compose-sidebar").addClass("show");
        }),
		
		
        $(".email-compose-sidebar .cancel-email-item, .email-compose-sidebar .close-icon, .email-overlay").on("click", function () {
			// Reset the select element to its default value
			//$("#to_email").val(""); // This line resets the select element to its default option
    
	
            $(".email-overlay").removeClass("show"), $(".email-compose-sidebar").removeClass("show"), $(".compose-editor .ql-editor p").html(""), $("#edit-item-from").val("<?php echo $user_email; ?>");
        }),
        0 < $(".email-compose-sidebar").length)
    )
        new PerfectScrollbar(".email-compose-sidebar", { theme: "dark", wheelPropagation: !1 });
    0 < $("html[data-textdirection='rtl']").length &&
        $("#email-sidenav").sidenav({
            edge: "right",
            onOpenStart: function () {
                $("#sidebar-list").addClass("sidebar-show");
            },
            onCloseEnd: function () {
                $("#sidebar-list").removeClass("sidebar-show");
            },
        });
		
		
		
}),
    $(window).on("resize", function () {
        resizetable(),
            $(".email-compose-sidebar").removeClass("show"),
            $(".email-overlay").removeClass("show"),
            $("input").val(""),
            $(".compose-editor .ql-editor p").html(""),
            $("#edit-item-from").val("<?php echo $user_email; ?>"),
            899 < $(window).width() && $("#email-sidenav").removeClass("sidenav"),
            $(window).width() < 900 && $("#email-sidenav").addClass("sidenav");
    }),
    resizetable();

</script>

