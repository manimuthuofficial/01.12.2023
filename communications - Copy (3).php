<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<?php init_head(); ?>
<style>
    
	
	.email-tabs li
	{
        margin-left: -1.8rem;
        padding-left: 1.8rem;
        border-top-right-radius: 2rem;
        border-bottom-right-radius: 2rem;
        background-color: #f9f9f9;
        //box-shadow: 0 0 8px 0 #2196f3;
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
        //box-shadow: 0 0 8px 0 #2196f3;
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
        //text-align: center;
    }
	
	.email-collection .row
	{
		border-bottom:1px solid #eceff1;
		padding:10px;
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
							<h4></h4>
                            <ul class="nav navbar-pills navbar-pills-flat nav-tabs nav-stacked email-tabs">
							
								<li class="active">
									<a href="" data-group=""> Inbox </a>
								</li>
								<li>
									<a href="" data-group=""> Sent </a>
								</li>
								<li>
									<a href="" data-group=""> Drafts </a>
								</li>								
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s10">
                <!-- Page Length Options -->

			  <div class="card">
				<div class="card-content">
				  <h4 class="card-title">Communications</h4>
				  <hr>
				  <br>
				  <div class="row">
					<div class="col s12">
						<div class="email-collection">
							
							<div class="row">
							
								
								<div class="col s9">
									<div class="title">Gorge Fernandis</div>
								</div>
								<div class="col s1">
									<div class="date-tile"><i class="material-icons">attach_file</i></div>
								</div>
								<div class="col s2">
									<div class="date-tile" style="text-align:right">01.01.2023 3:00 PM</div>
								</div>
								<br>
								<div class="col s9">
									<div class="description">
										When a developer writes code, they will usually write for their own eyes to read it. They’ll make notes to themselves, split out the code onto multiple lines so it’s easier to read, and even write out explanations of what’s happening so they can reference it later.
									</div>
								</div>
									
							</div>
							
							<style>
							.title
							{
								font-weight:bold;
								color:#2196f3;
							}
							.description
							{
								margin-top:15px;
								margin-bottom:15px;
							}								
							
							</style>
							
						</div>
					</div>
				  </div>
				</div>
			  </div>
    
            </div>
            <div class="clearfix"></div>
        </div>
		
		
        <div class="col s12"  style="display:none">
            <div class="col s2">
                <div class="card">
                    <div class="card-content">
                        <div id="card-panel-type2" class="section">
                            <ul class="nav navbar-pills navbar-pills-flat nav-tabs nav-stacked email-tabs">
																						
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
										
                                        <li <?php if ($i == 1) { echo " class='active'"; } ?> >
										
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


<script>

$(function () {
    $("#data-table-simple").DataTable({ responsive: !0 });
    $("#data-table-row-grouping").DataTable({
        responsive: !0,
        columnDefs: [{ visible: !1, targets: 2 }],
        order: [[2, "asc"]],
        displayLength: 25,
        drawCallback: function (e) {
            var t = this.api(),
                l = t.rows({ page: "current" }).nodes(),
                c = null;
            t.column(2, { page: "current" })
                .data()
                .each(function (e, t) {
                    c !== e &&
                        ($(l)
                            .eq(t)
                            .before('<tr class="group"><td colspan="5">' + e + "</td></tr>"),
                        (c = e));
                });
        },
    });
    $("#communication-table").DataTable({
        responsive: !0,
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"],
        ],
    }),
        $("#scroll-dynamic").DataTable({ responsive: !0, scrollY: "50vh", scrollCollapse: !0, paging: !1 }),
        $("#scroll-vert-hor").DataTable({ scrollY: 200, scrollX: !0 }),
        $("#multi-select").DataTable({ responsive: !0, paging: !0, ordering: !1, info: !1, columnDefs: [{ visible: !1, targets: 2 }] });
}),
    $(window).on("load", function () {
        $(".dropdown-content.select-dropdown li").on("click", function () {
            var e = this;
            setTimeout(function () {
                $(e).parent().parent().find(".select-dropdown").hasClass("active") && ($(e).parent().parent().find(".select-dropdown").removeClass("active"), $(e).parent().hide());
            }, 100);
        });
    });
var checkbox = $("#multi-select tbody tr th input"),
    selectAll = $("#multi-select .select-all");
$(document).ready(function () {
    checkbox.on("click", function () {
        $(this).parent().parent().parent().toggleClass("selected");
    }),
        checkbox.on("click", function () {
            $(this).attr("checked") ? $(this).attr("checked", !1) : $(this).attr("checked", !0);
        }),
        selectAll.on("click", function () {
            $(this).toggleClass("clicked"),
                selectAll.hasClass("clicked") ? $("#multi-select tbody tr").addClass("selected") : $("#multi-select tbody tr").removeClass("selected"),
                $("#multi-select tbody tr").hasClass("selected") ? checkbox.prop("checked", !0) : checkbox.prop("checked", !1);
        });
});


</script>