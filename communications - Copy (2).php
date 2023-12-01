<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<!-- BEGIN: Page Level CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/themes/horizontal-menu-template/materialize.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/themes/horizontal-menu-template/style.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/layouts/style-horizontal.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/app-sidebar.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/app-email.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/app-email.min.css">
<!-- END: Page Level CSS-->




<?php init_head(); ?>
<style>
    .active_new{
        margin-left: -1.8rem;
        padding-left: 1.8rem;
        border-top-right-radius: 2rem;
        border-bottom-right-radius: 2rem;
        background-color: #2196f3;
        box-shadow: 0 0 8px 0 #2196f3;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    td, th {
        text-align: center;
    }
</style>





<!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before blue-grey lighten-5"></div>
        <div class="col s12">
          <div class="container">
            <!-- Sidebar Area Starts -->
<div class="email-overlay"></div>
<div class="sidebar-left sidebar-fixed">
  <div class="sidebar">
    <div class="sidebar-content">
      <div class="sidebar-header">
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
            <div class="email-brief-info collection-item animate fadeUp delay-1">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/2.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Gorge Fernandis</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="purple-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Note</span>
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
            <div class="email-brief-info collection-item animate fadeUp delay-2">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/10.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Pari Kalin</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="amber-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Paypal</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> 12:47 PM </div>
              </div>
            </div>
            <div class="email-brief-info collection-item animate fadeUp delay-3">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/4.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Alin Kystal</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="purple-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Note</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> 8:18 AM </div>
              </div>
            </div>
            <div class="email-brief-info collection-item animate fadeUp delay-4">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/8.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Amy berry</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="light-green-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Invoice</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> Yesterday </div>
              </div>
            </div>
            <div class="email-brief-info collection-item animate fadeUp delay-5">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/1.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">John Doe</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="amber-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Paypal</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> Yesterday </div>
              </div>
            </div>
            <div class="email-brief-info collection-item animate fadeUp delay-6">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/9.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Kellin Blue</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="amber-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Paypal</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> Yesterday </div>
              </div>
            </div>
            <div class="email-brief-info collection-item animate fadeUp">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/5.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Albert Henry</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="purple-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Note</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> 25 Jan </div>
              </div>
            </div>
            <div class="email-brief-info collection-item animate fadeUp">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/11.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Kim Catty</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="light-green-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Invoice</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> 25 Jan </div>
              </div>
            </div>
            <div class="email-brief-info collection-item animate fadeUp">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/7.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Lina Shalin</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="light-green-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Invoice</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> 17 Jan </div>
              </div>
            </div>
            <div class="email-brief-info collection-item animate fadeUp">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/3.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Peter Patric</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="purple-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Note</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> 14 Jan </div>
              </div>
            </div>
            <div class="email-brief-info collection-item animate fadeUp">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/12.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Colin Phelin</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="light-green-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Invoice</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> 9 Jan </div>
              </div>
            </div>
            <div class="email-brief-info collection-item animate fadeUp">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              <a class="list-content" href="app-email-content.html">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="<?php echo base_url(); ?>assets/images/user/6.jpg" alt=""
                      class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Jack Hawk</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="amber-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Paypal</span>
                  </div>
                </div>
                <div class="list-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable. If you are going to use a passage of Lorem Ipsum</div>
              </a>
              <div class="list-right">
                <div class="list-date"> 30 Dec </div>
              </div>
            </div>
            <div class="no-data-found collection-item">
              <h6 class="center-align font-weight-500">No Results Found</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Content Area Ends -->













<div id="main">
    <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                 <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title" style="text-align:left;"><span><?php echo _l('Communications'); ?></span></h5>
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
        <div class="col s12">
            <div class="col s2">
                <div class="card">
                    <div class="card-content">
                        <div id="card-panel-type2" class="section">
                            <ul class="nav navbar-pills navbar-pills-flat nav-tabs nav-stacked">
							
								<li class="active active_new">
									<a href="" data-group=""> Inbox </a>
								</li>
								<li class="active active_new">
									<a href="" data-group=""> Inbox </a>
								</li>
								
							
							
							
							
							
                                <?php
                                foreach ($tabs as $group) 
								{
                                    if($group['name'] != 'SMS')
									{
                                        if($tab_test == $group['slug'])
										{
                                            $i = 1;
                                        }
										else
										{
                                            $i = 0;
                                        }
                                        ?>
										
                                        <li <?php if ($i == 1) { echo " class='active active_new'"; } ?> >
										
										<?php if($group['view'])
										{ 
										?>
											<a href="<?php echo admin_url('settings/settings?group=' . $group['slug']); ?>" style="color:black;" data-group="<?php echo $group['slug']; ?>">
										<?php 
										} 
										?>
										
										<?php 
										if($group['redirect'])
										{ 
										?>
											<a href="<?php echo admin_url($group['redirect']); ?>" style="color:black;" data-group="<?php echo $group['slug']; ?>">
										<?php 
										} 
										?>
                                        <?php echo $group['name']; ?></a>
                                        </li>
                                        <br />
                                    <?php 
									} 
									?>
                                <?php 
								} 
								?>
								
								
								
								
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s10">
                <?php $this->load->view($tab['view']) ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="btn-bottom-pusher"></div>
    </div>
</div>
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?php echo base_url(); ?>assets/js/scripts/app-email.min.js"></script>
<!-- END PAGE LEVEL JS-->
<?php init_tail(); ?>
</body>
</html>
