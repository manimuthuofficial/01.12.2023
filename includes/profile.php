<style>
    .modal-header {
        color:#fff;
        padding:4px 15px;
        border-bottom:1px solid #eee;
        background-color: #2196F3;
    }
    #page-length-option-country{
        width: 100% !important;
        height: 100% !important;
    }
</style>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/page-users.min.css"> -->
<!-- <div id="main"> -->
    <div class="row">
        <!-- <section class="users-list-wrapper section">
            <div class="users-list-table"> -->
                <div class="card">
                    <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m6 l6">
                                    <h5 class="breadcrumbs-title" style="text-align:left;"><span><?php echo _l('settings_profile'); ?></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div id="card-panel-type2" class="section" style="text-align:center;">
                            <!-- datatable start -->
                            <div class="responsive-table" style="text-align:center;">
                                <table id="page-length-option-country" class="display">
                                    <thead>
                                        <tr>
                                            <th><?php echo _l('profile name'); ?></th>
                                            <?php if((has_permission('departments', '', 'edit') && get_staff_types() == 'Company') || (has_permission('departments', '', 'edit')  && get_staff_types() == 'Corporate') || (has_permission('departments', '', 'delete')  && get_staff_types() == 'Branch') || is_admin()) {?>
                                                <th><?php echo _l('Options'); ?></th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($roles){?>
                                            <?php foreach(($roles) as $role) { ?>
                                                <?php if((has_permission('departments', '', 'view') && get_staff_types() == 'Branch' && $staff->branch_staff == $department->branch_department) || (has_permission('departments', '', 'view') && get_staff_types() == 'Company' && $staff->company_staff == $department->company_department) || (has_permission('departments', '', 'view')  && get_staff_types() == 'Corporate') || is_admin()) {?>
                                                    <tr>
                                                        <td data-label="@lang('name')"><?php echo $role->name ?></td>
                                                        <td data-label="@lang('options')">
                                                            <?php if((has_permission('departments', '', 'edit') && get_staff_types() == 'Company') || (has_permission('departments', '', 'edit')  && get_staff_types() == 'Corporate') || is_admin()) {?>
                                                                <a href="<?php echo admin_url('profiles/role/'.$role->roleid); ?>"><i class="fa fa-pencil-square-o"></i></a>
                                                            <?php }?>
                                                            <?php if((has_permission('departments', '', 'delete') && get_staff_types() == 'Company') || (has_permission('departments', '', 'delete')  && get_staff_types() == 'Corporate') || is_admin()) {?>
                                                                <a href="#" value="<?php echo $role->roleid; ?>" class="delete"><i class="material-icons md-18">delete</i></a>
                                                            <?php }?> 
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- datatable ends -->
                        </div>
                    </div>
                </div>
            <!-- </div>
        </section> -->
    </div>
<!-- </div> -->
<script src="<?php echo base_url(); ?>assets/js/scripts/advance-ui-modals.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/page-users.min.js"></script>