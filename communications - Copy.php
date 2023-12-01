<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
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
<?php init_tail(); ?>
</body>
</html>
