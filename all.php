<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<style>
   
    #page-length-option-matrix{
        width: 100% !important;
        height: 100% !important;
    }
    #page-length-option-cover{
        width: 100% !important;
        height: 100% !important;
    } 
    #page-length-option-inch{
        width: 100% !important;
        height: 100% !important;
    } 
    #page-length-option-grade{
        width: 100% !important;
        height: 100% !important;
    }
    #page-length-option-concrete{
        width: 100% !important;
        height: 100% !important;
    }

    #page-length-option-service{
        width: 100% !important;
        height: 100% !important;
    }
    #page-length-option-units{
        width: 100% !important;
        height: 100% !important;
    }
    #page-length-option-service_units{
        width: 100% !important;
        height: 100% !important;
    }
   
    #page-length-option-skills{
        width: 100% !important;
        height: 100% !important;
    }
    
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/layouts/style-horizontal.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/page-account-settings.min.css">
<div id="main">
<div class="row">
<div class="pt-1 pb-0" id="breadcrumbs-wrapper">
         
         <div class="container">
            <div class="row">
               <div class="col s12 m6 l6">
                  <h5 class="breadcrumbs-title"><span>Settings</span></h5>
               </div>
               <div class="col s12 m6 l6 right-align-md">
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="<?php echo admin_url('dashboard'); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo admin_url('settings'); ?>"><?php echo _l('settings'); ?></a></li>
                     <li class="breadcrumb-item active">Settings</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
<div class="col s12">
    <div class="container">
        <!-- users edit start -->
        <div class="section users-edit">
            <div class="card">
                <div class="card-content">
                    <ul class="tabs mb-2 row">
                        <li class="tab">
                            <a class="display-flex align-items-center active" id="profile-tab"  href="#test1">
                                <span>PRICING</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="cover-tab"  href="#test2">
                                <span>COVER</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="inch-tab"  href="#test3">
                                <span>INCH</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="concrete_cover-tab"  href="#test4">
                                <span>CONCRETE COVER</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="concrete_grade-tab"  href="#test5">
                                <span>CONCRETE GRADE</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="complication_matrix-tab"  href="#test6">
                                <span>COMPLICATION MATRIX</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="services-tab"  href="#test7">
                                <span>SERVICES</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="units-tab"  href="#test8">
                                <span>UNITS</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="services_units-tab"  href="#test9">
                                <span>SERVICES AND UNITS</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="skills-tab"  href="#test10">
                                <span>SKILLS</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a class="display-flex align-items-center" id="currencies-tab"  href="#test11">
                                <span>CURRENCIES</span>
                            </a>
                        </li>
                    </ul>
                    <div class="row">
                    <div id="test1" class="col s12">
                           <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title"><span><?php echo $title; ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url('dashboard'); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo admin_url('pricing'); ?>"><?php echo _l('pricing'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo $title; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div id="add_pricing" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('create_pricing'); ?></span>
                    </h5>
                    <?php echo form_open('admin/pricing/store_pricing',array('id'=>'pricing-form')); ?>
                        <div class="modal-body" id="add_pricing_field">
                            
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn btn-info float-right light-blue darken-1"><?php echo _l('submit'); ?></button>
                                    <button type="button" class="close modal-action modal-close btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <?php if((has_permission('pricing', '', 'create') && get_staff_types() == 'Corporate') || is_admin()) {?>
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
                <ul>
                    <?php if((has_permission('pricing','','create') && get_staff_types() == 'Corporate') || is_admin()){ ?>
                        
                        <li><a href="<?php echo admin_url('pricing/create_pricing'); ?>" class="btn-floating red tooltipped" data-position="left" data-tooltip="Create Pricing" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">request_quote</i></a></li>
                    
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!-- <div class="card">
                        <div class="card-content"> -->
                            <div id="card-panel-type2" class="section" style="text-align:center;">

                                <!-- datatable start -->
                                <div class="responsive-table" style="text-align:center;">
                                    <table id="page-length-option" class="table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;"><?php echo _l('service_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('unit'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('amount'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('range'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('added_from'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('date_created'); ?></th>
                                                <?php if((has_permission('pricing', '', 'create') && get_staff_types() == 'Corporate') || is_admin()) {?>

                                                <th style="text-align:center;"><?php echo _l('options'); ?></th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $service_units = get_service_unit(); ?>
                                            <?php foreach(($service_units) as $service_unit) { ?>
                                                <tr>
                                                    <td data-label="@lang('service_name')" style="text-align:center;"><?php echo $service_unit['work_name']; ?></td>
                                                    <?php $unit_names = get_service_work_unit($service_unit['id']); ?>
                                                    <td data-label="@lang('service_name')" style="text-align:center;">
                                                        <?php foreach($unit_names as $unit_name) { ?>
                                                            <?php echo $unit_name['unit']; ?>
                                                            <br>
                                                        <?php } ?>
                                                    </td>
                                                    <td data-label="@lang('amount')" style="text-align:center;"></td>
                                                    <td data-label="@lang('range')" style="text-align:center;"></td>
                                                    <?php $staff_name = get_staff_full_name($service_unit['added_from']); ?>
                                                    <td data-label="@lang('added_from')" style="text-align:center;"><?php echo $staff_name; ?></td>
                                                    <td data-label="@lang('date_created')" style="text-align:center;"><?php echo $service_unit['date_created']; ?></td>
                                                    <?php if((has_permission('pricing', '', 'edit') && get_staff_types() == 'Corporate') || is_admin()) {?>
                                                        <td data-label="@lang('options')" style="text-align:center;"><a class="pricing" value="<?php echo $service_unit['id']; ?>"><i class="fa fa-pencil-square-o"></i></a></td>
                                                    <?php } ?>
                                                
                                                    </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
        
    </div>
</div>
                        <div class="col s12" id="test2">
                           
                                    <div class="row">
                                        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col s12 m6 l6">
                                                        <h5 class="breadcrumbs-title" style="text-align:left;"><span><?php echo _l('cover'); ?></span></h5>
                                                    </div>
                                                    <div class="col s12 m6 l6 right-align-md">
                                                        <ol class="breadcrumbs mb-0">
                                                            <li class="breadcrumb-item"><a href="<?php echo admin_url(); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                                                            <li class="breadcrumb-item active"><?php echo _l('settings'); ?></li>
                                                            <li class="breadcrumb-item active"><?php echo _l('cover'); ?></li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if(has_permission('project_settings','','create')){ ?>
                                            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large red gradient-shadow"><i class="material-icons">roller_shades_closed</i></a>
                                            <ul>
                                                <li>
                                                    <a href="#add_cover" class="btn-floating green tooltipped modal-trigger" data-position="left" data-tooltip="Create Cover" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">text_snippet</i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php } ?>
                                        <div id="add_cover" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-header">

                                                </div>
                                                <div class="modal-content">
                                                    <h5   style="text-align:center;">
                                                    <span class="add-title"><?php echo _l('create_cover'); ?></span>
                                                </h5>
                                                <?php echo form_open('admin/projects/create_cover',array('id'=>'create_cover-form')); ?>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" name="add_cover_name" id="add_cover_name" style="text-align:center;" class="validate" required>
                                                            <label for="add_cover_name"><?php echo _l('cover_name'); ?></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <button type="submit" class="btn btn-info float-right light-blue darken-1"><?php echo _l('submit'); ?></button>
                                                            <button type="button" class="close modal-action modal-close btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo form_close(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="edit_cover" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-header">

                                            </div>
                                            <div class="modal-content">
                                                <h5 style="text-align:center;">
                                                <span><?php echo _l('edit_cover'); ?></span>
                                            </h5>
                                            <?php echo form_open('admin/projects/create_cover',array('id'=>'create_cover-form')); ?>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div  style="display:none" class="input-field col s5">
                                                    <label for="id" class="control-label"><?php echo _l('id'); ?></label>
                                                    <input type="number" id="id" class="form-control" name="id" value="<?php if(isset($cover)){echo $cover->id;} ?>">
                                                </div>
                                                <div class=" col s5">
                                                    <input type="text" id="cover_name" class="form-control" name="cover_name" value="<?php if(isset($cover)){echo $cover->cover_name;} ?>">
                                                    <label for="cover_name" class="control-label"><?php echo _l('cover_name'); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info float-right border-round z-depth-4 light-blue darken-1"><?php echo _l('submit'); ?></button>
                                            <button type="button" class="close modal-action modal-close waves-effect waves-red btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!-- <div class="card">
                        <div class="card-content"> -->
                            <div id="card-panel-type2" class="section" style="text-align:center;">
                                <!-- datatable start -->
                                <div class="responsive-table" style="text-align:center;">
                                    <table id="page-length-option-cover" class="display">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;"><?php echo _l('cover_id'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('cover_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('added_from'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('date_created'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('options'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $covers = get_cover(); ?>
                                            
                                            
                                            <?php foreach(($covers) as $cover) { ?>
                                                <tr>
                                                    <td data-label="@lang('cover_id')" style="text-align:center;"><?php echo $cover['id']; ?></td>
                                                    <td data-label="@lang('cover_name')" style="text-align:center;"><?php echo $cover['cover_name']; ?></td>
                                                    <?php $staff_name = get_staff_full_name($cover['added_from']); ?>
                                                    <td data-label="@lang('added_from')" style="text-align:center;"><?php echo $staff_name; ?></td>
                                                    <td data-label="@lang('date_created')" style="text-align:center;"><?php echo $cover['date_created']; ?></td>
                                                    <td data-label="@lang('options')" style="text-align:center;">
                                                    <a href="#" value="<?php echo $cover['id']; ?>" class="cover_edit"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="#" value="<?php echo $cover['id']; ?>" class="cover_delete"><i class="material-icons md-18">delete</i></a>

                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col s12" id="test3">
    <div class="row">
        <div class="col s12">
        <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                 <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title" style="text-align:left;"><span><?php echo _l('inch'); ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url(); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo _l('settings'); ?></li>
                            <li class="breadcrumb-item active"><?php echo _l('inch'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php if(has_permission('project_settings'  ,'','create')){ ?>
        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large red gradient-shadow"><i class="material-icons">square_foot</i></a>
            <ul>
                <li>
                    <a href="#add_inch" class="btn-floating green tooltipped modal-trigger" data-position="left" data-tooltip="Create Inch" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">text_snippet</i></a>
                </li>
            </ul>
        </div>
        <?php } ?>
        <div id="add_inch" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span class="add-title"><?php echo _l('create_inch'); ?></span>
                    </h5>
                    <?php echo form_open('admin/projects/create_inch',array('id'=>'create_inch-form')); ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="add_inch_name" id="add_inch_name" style="text-align:center;" class="validate" required>
                                <label for="add_inch_name"><?php echo _l('inch_name'); ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn btn-info float-right light-blue darken-1"><?php echo _l('submit'); ?></button>
                                <button type="button" class="close modal-action modal-close btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <div id="edit_inch" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('edit_inch'); ?></span>
                    </h5>

                    <?php echo form_open('admin/projects/create_inch',array('id'=>'create_inch-form')); ?>
                        <div class="modal-body">
                            <div class="row">
                            <div style="display:none" class="input-field col s5">
                        <label for="id" class="control-label"><?php echo _l('id'); ?></label>
                        <input type="number" id="id" class="form-control" name="id" value="<?php if(isset($inch)){echo $inch['id'];} ?>">
                      </div>
                    
                      <div class=" col s5">
                        <input type="text" id="inch_name" class="form-control" name="inch_name" value="<?php if(isset($inch)){echo $inch['inch_name'];} ?>">
                        <label for="inch_name" class="control-label"><?php echo _l('cover_name'); ?></label>
                      </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                  <button type="submit" class="btn btn-info float-right border-round z-depth-4 light-blue darken-1"><?php echo _l('submit'); ?></button>
                  <button type="button" class="close modal-action modal-close waves-effect waves-red btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                  <?php echo form_close(); ?>
                </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!-- <div class="card"> -->
                        <!-- <div class="card-content"> -->
                            <div id="card-panel-type2" class="section" style="text-align:center;">
                                <!-- datatable start -->
                                <div class="responsive-table" style="text-align:center;">
                                    <table id="page-length-option-inch" class="display">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;"><?php echo _l('inch_id'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('inch_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('added_from'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('date_created'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('options'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $inches = get_inch(); ?>
                                            <?php foreach(($inches) as $inch) { ?>
                                                <tr>
                                                    <td data-label="@lang('inch_id')" style="text-align:center;"><?php echo $inch['id']; ?></td>
                                                    <td data-label="@lang('inch_name')" style="text-align:center;"><?php echo $inch['inch_name']; ?></td>
                                                    <?php $staff_name = get_staff_full_name($inch['added_from']); ?>
                                                    <td data-label="@lang('added_from')" style="text-align:center;"><?php echo $staff_name; ?></td>
                                                    <td data-label="@lang('date_created')" style="text-align:center;"><?php echo $inch['date_created']; ?></td>
                                                    <td data-label="@lang('options')" style="text-align:center;">
                                                    
                                                    <a href="#" value="<?php echo $inch['id']; ?>" class="inches_edit"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="#" value="<?php echo $inch['id']; ?>" class="inch_delete"><i class="material-icons md-18">delete</i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="col s12" id="test4">
    <div class="row">
        <div class="col s12">
        <?php $elements = get_element(); ?>
                           <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title"><span><?php echo _l('concrete_cover'); ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url('dashboard'); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item"><?php echo _l('settings'); ?></li>
                            <li class="breadcrumb-item active"><?php echo _l('concrete_cover'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large red gradient-shadow"><i class="material-icons">add</i></a>
            <ul>
                <li><a href="#add_concrete_cover" class="btn-floating blue tooltipped modal-trigger" data-position="left" data-tooltip="Create Concrete Cover" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">ad_units</i></a></li>
            </ul>
        </div>
        <div id="add_concrete_cover" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('create_concrete_cover'); ?></span>
                    </h5>
                    <?php echo form_open('admin/projects/create_concrete_cover',array('id'=>'create_concrete_cover-form')); ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col s12">
                                    <div class="col s4">
                                        <?php echo render_select_with_input_group('add_element',get_element(),array('id','element_name'),'element_name'); ?>
                                    </div>
                                    <div class="col s4" id="inches" style="display:none;">
                                        
                                    </div>
                                    <div class="col s4">
                                        <?php echo render_select_with_input_group('add_inch',get_inch(),array('id','inch_name'),'inch_name'); ?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn btn-info float-right light-blue darken-1"><?php echo _l('submit'); ?></button>
                                    <button type="button" class="close modal-action modal-close btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <div id="edit_concrete_cover" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('edit concrete cover'); ?></span>
                    </h5>

                    <?php echo form_open('admin/projects/create_concrete_cover',array('id'=>'create_concrete_cover-form')); ?>
                        <div class="modal-body">
                            <div class="row">
                            <div style="display:none" class="input-field col s5">
                        <label for="id" class="control-label"><?php echo _l('id'); ?></label>
                        <input type="number" id="id" class="form-control" name="id" value="<?php if(isset($element)){echo $element->id;} ?>">
                      </div>
                    
                      <div class=" col s5">
                        <input type="text" id="element" class="form-control" name="element" value="<?php if(isset($element)){echo $element->element;} ?>">
                        <label for="element" class="control-label"><?php echo _l('element_name'); ?></label>
                      </div>

                      <div class=" col s5">
                        <input type="text" id="cover" class="form-control" name="cover" value="<?php if(isset($element)){echo $element->cover;} ?>">
                        <label for="cover" class="control-label"><?php echo _l('cover_name'); ?></label>
                      </div>
                      <div class=" col s5">
                        <input type="text" id="inch" class="form-control" name="inch" value="<?php if(isset($element)){echo $element->inch;} ?>">
                        <label for="inch" class="control-label"><?php echo _l('inch_name'); ?></label>
                      </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                  <button type="submit" class="btn btn-info float-right border-round z-depth-4 light-blue darken-1"><?php echo _l('submit'); ?></button>
                  <button type="button" class="close modal-action modal-close waves-effect waves-red btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                  <?php echo form_close(); ?>
                </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!-- <div class="card"> -->
                        <!-- <div class="card-content"> -->
                            <div id="card-panel-type2" class="section" style="text-align:center;">
                                <!-- datatable start -->
                                <div class="responsive-table" style="text-align:center;">
                                    <table id="page-length-option-concrete" class="display">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;"><?php echo _l('element_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('cover_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('inch_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('added_from'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('date_created'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('options'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php foreach(($elements) as $element) { ?>
                                                <?php $element_covers = get_element_cover($element['id']); ?>
                                                <?php if($element_covers != '') {?>
                                                    <tr>
                                                    <td data-label="@lang('element_name')" style="text-align:center;"><?php echo $element['element_name']; ?></td>
                                                    
                                                        
                                                    <td data-label="@lang('cover_name')" style="text-align:center;">
                                                    <?php foreach($element_covers as $element_cover){ ?>
                                                    <?php echo $element_cover['cover_name']; ?>
                                                    <br>
                                                    <?php } ?>
                                                </td>
                                                    
                                                    
                                                    <td data-label="@lang('inch_name')" style="text-align:center;">
                                                    <?php foreach($element_covers as $element_cover){ ?>
                                                            <?php echo $element_cover['inch_name']; ?>
                                                            <br>
                                                        <?php } ?>
                                                    </td>
                                                    <td data-label="@lang('added_from')" style="text-align:center;">
                                                   
                                                    <?php foreach($element_covers as $element_cover){ ?>
                                                        <?php $staff_name = get_staff_full_name($element_cover['added_from']); ?>
                                                            <?php echo $staff_name; ?>
                                                            <br>
                                                        <?php } ?></td>
                                                    <td data-label="@lang('date_created')" style="text-align:center;">
                                                    <?php foreach($element_covers as $element_cover){ ?>
                                                            <?php echo $element_cover['date_created']; ?>
                                                            <br>
                                                        <?php } ?>
                                                        </td>
                                                    <td data-label="@lang('options')" style="text-align:center;">
                                                    <a href="#" value="<?php echo $element['id']; ?>" style="text-align:center;" class="concrete_edit"> <i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="#" value="<?php echo $element['id']; ?>" style="text-align:center;" class="concrete_delete"> <i class="material-icons md-18">delete</i></a>
                                                
                                                    </td>
                                                
                                                    
                                                    </tr>
                                            <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


                        <div class="col s12" id="test5">
                        <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title"><span><?php echo _l('concrete_grade'); ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url('dashboard'); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item"><?php echo _l('settings'); ?></li>
                            <li class="breadcrumb-item active"><?php echo _l('concrete_grade'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large red gradient-shadow"><i class="material-icons">add</i></a>
            <ul>
                <li><a href="#add_concrete_grade" class="btn-floating blue tooltipped modal-trigger" data-position="left" data-tooltip="Create Concrete Grade" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">ad_units</i></a></li>
            </ul>
        </div>
        <div id="add_concrete_grade" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('create_concrete_grade'); ?></span>
                    </h5>
                    <?php echo form_open('admin/projects/create_concrete_grade',array('id'=>'create_concrete_grade-form')); ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="number" name="add_concrete_grade" id="add_concrete_grade" style="text-align:center;" class="validate" required>
                                    <label for="add_concrete_grade"><?php echo _l('concrete_grade'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn btn-info float-right light-blue darken-1"><?php echo _l('submit'); ?></button>
                                    <button type="button" class="close modal-action modal-close btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <div id="edit_concrete_grade" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('edit concrete grade'); ?></span>
                    </h5>

                    <?php echo form_open('admin/projects/create_concrete_grade',array('id'=>'create_concrete_grade_form')); ?>
                        <div class="modal-body">
                            <div class="row">
                            <div style="display:none" class="input-field col s5">
                        <label for="id" class="control-label"><?php echo _l('id'); ?></label>
                        <input type="number" id="id" class="form-control" name="id" value="<?php if(isset($concrete_grade)){echo $concrete_grade['id'];} ?>">
                      </div>
                    
                      <div class=" col s5">
                        <input type="text" id="concrete_grade" class="form-control" name="concrete_grade" value="<?php if(isset($concrete_grade)){echo $concrete_grade['concrete_grade'];} ?>">
                        <label for="concrete_grade" class="control-label"><?php echo _l('concrete_grade'); ?></label>

                    </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                  <button type="submit" class="btn btn-info float-right border-round z-depth-4 light-blue darken-1"><?php echo _l('submit'); ?></button>
                  <button type="button" class="close modal-action modal-close waves-effect waves-red btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                  <?php echo form_close(); ?>
                </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!-- <div class="card">
                        <div class="card-content"> -->
                            <div id="card-panel-type2" class="section" style="text-align:center;">
                                <!-- datatable start -->
                                <div class="responsive-table" style="text-align:center;">
                                    <table id="page-length-option-grade" class="display">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;"><?php echo _l('concrete_grade_id'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('concrete_grade'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('added_from'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('date_created'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('options'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $concrete_grades = get_concrete_grade(); ?>
                                            <?php foreach(($concrete_grades) as $concrete_grade) { ?>
                                                <tr>
                                                    <td data-label="@lang('concrete_grade_id')" style="text-align:center;"><?php echo $concrete_grade['id']; ?></td>
                                                    <td data-label="@lang('concrete_grade')" style="text-align:center;"><?php echo $concrete_grade['concrete_grade']; ?></td>
                                                    <?php $staff_name = get_staff_full_name($concrete_grade['added_from']); ?>
                                                    <td data-label="@lang('added_from')" style="text-align:center;"><?php echo $staff_name; ?></td>
                                                    <td data-label="@lang('date_created')" style="text-align:center;"><?php echo $concrete_grade['date_created']; ?></td>
                                                    <td data-label="@lang('options')" style="text-align:center;">
                                                    <a href="#" value="<?php echo $concrete_grade['id']; ?>" class="grade_edit"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="#" value="<?php echo $concrete_grade['id']; ?>" class="grade_delete"><i class="material-icons md-18">delete</i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col s12" id="test6">
<div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                 <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title" style="text-align:left;"><span><?php echo _l('complication_matrix'); ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url(); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo _l('settings'); ?></li>
                            <li class="breadcrumb-item active"><?php echo _l('complication_matrix'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php if(has_permission('project_settings','','create')){ ?>
        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large red gradient-shadow"><i class="material-icons">add</i></a>
            <ul>
                <li>
                    <a href="#add_complication_matrix" class="btn-floating green tooltipped modal-trigger" data-position="left" data-tooltip="Create Complication Matrix" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">text_snippet</i></a>
                </li>
            </ul>
        </div>
        <?php } ?>
        <div id="add_complication_matrix" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span class="add-title"><?php echo _l('create_complication_matrix'); ?></span>
                    </h5>
                    <?php echo form_open('admin/projects/create_complication_matrix',array('id'=>'create_complication_matrix-form')); ?>
                    <div class="modal-body">
                        <div class="row">
                            <br />
                            <div class="col s4">
                                <?php echo render_select_with_input_group('add_element',get_element(),array('id','element_name'),'element_name'); ?>
                            </div>
                            <div class="col s8">
                                <label for="adds_complication_matrix"><?php echo _l('complication_matrix'); ?></label>
                                <textarea type="text" name="adds_complication_matrix" id="adds_complication_matrix" style="text-align:center;" class="validate" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn btn-info float-right light-blue darken-1"><?php echo _l('submit'); ?></button>
                                <button type="button" class="close modal-action modal-close btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <div id="edit_complication_matrix" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('edit cover'); ?></span>
                    </h5>

                    <?php echo form_open('admin/projects/create_complication_matrix',array('id'=>'create_complication_matrix-form')); ?>
                        <div class="modal-body">
                            <div class="row">
                            <div style="display:none" class="input-field col s5">
                        <label for="id" class="control-label"><?php echo _l('id'); ?></label>
                        <input type="number" id="id" class="form-control" name="id" value="<?php if(isset($complication_matrix)){echo $complication_matrix->id;} ?>">
                      </div>

                      <div class="col s5">
                        <?php $value = (isset($complication_matrixs) ? $complication_matrixs[0]->element_name : ''); ?>
                        <?php print_r($value); ?>
                        <?php if(has_permission('project','','create')){
                           echo render_select_with_input_group('element',get_element_name(),array('id','element_name'),'Element Name',$value);
                        } 
                        else {
                           echo render_select('element',get_element_name(),array('id','element_name'),'Department',$value);
                        }
                        ?>
                     </div>
                    
                      <!-- <div class=" col s5">
                      <input type="text" id="element" class="form-control" name="element" value="<?php if(isset($complication_matrix)){echo $complication_matrix->element_name;} ?>">
                        <label for="element" class="control-label"><?php echo _l('element_name'); ?></label>

                    </div> -->

                    <div class=" col s5">
                        <input type="text" id="complication_matrix" class="form-control" name="complication_matrix" value="<?php if(isset($complication_matrix)){echo $complication_matrix->complication_matrix;} ?>">
                        <label for="complication_matrix" class="control-label"><?php echo _l('complication_matrix'); ?></label>

                    </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                  <button type="submit" class="btn btn-info float-right border-round z-depth-4 light-blue darken-1"><?php echo _l('submit'); ?></button>
                  <button type="button" class="close modal-action modal-close waves-effect waves-red btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                  <?php echo form_close(); ?>
                </div>
                </div>
            </div>
        </div>

        
        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!-- <div class="card">
                        <div class="card-content"> -->
                            <div id="card-panel-type2" class="section" style="text-align:center;">
                                <!-- datatable start -->
                                <div class="responsive-table" style="text-align:center;">
                                    <table id="page-length-option-matrix" class="display">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;"><?php echo _l('complication_matrix_id'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('element_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('complication_matrix'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('added_from'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('date_created'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('options'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $complication_matrices = get_complication_matrix(); ?>
                                            <?php foreach(($complication_matrices) as $complication_matrix) { ?>
                                                <tr>
                                                    <td data-label="@lang('cover_id')" style="text-align:center;"><?php echo $complication_matrix['id']; ?></td>
                                                    <td data-label="@lang('cover_name')" style="text-align:center;"><?php echo $complication_matrix['element_name']; ?></td>
                                                    <td data-label="@lang('cover_name')" style="text-align:center;"><?php echo $complication_matrix['complication_matrix']; ?></td>
                                                    <?php $staff_name = get_staff_full_name($complication_matrix['added_from']); ?>
                                                    <td data-label="@lang('added_from')" style="text-align:center;"><?php echo $staff_name; ?></td>
                                                    <td data-label="@lang('date_created')" style="text-align:center;"><?php echo $complication_matrix['date_created']; ?></td>
                                                    <td data-label="@lang('options')" style="text-align:center;">
                                                    <a href="#" value="<?php echo $complication_matrix['id']; ?>" class="matrix_edit"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="#" value="<?php echo $complication_matrix['id']; ?>" class="matrix_delete"><i class="material-icons md-18">delete</i></a>
                                                    
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="test7" class="col s12">

<div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title"><span><?php echo $title; ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url('dashboard'); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo admin_url('quote/services'); ?>"><?php echo _l('services'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo $title; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php if((has_permission('pricing', '', 'create') && get_staff_types() == 'Corporate') || is_admin()) {?>

        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
            <ul>
            <?php if((has_permission('pricing', '', 'create') && get_staff_types() == 'Corporate') || is_admin()) {?>

                <li><a href="#add_service" class="btn-floating red tooltipped modal-trigger" data-position="left" data-tooltip="Create Service" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">lan</i></a></li>
                <?php } ?>
            
            </ul>
        </div>
        <?php } ?>

        <div id="add_service" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('create_service'); ?></span>
                    </h5>
                    <?php if((has_permission('service', '', 'create') && get_staff_types() == 'Corporate') || is_admin()) {?>
                    <?php echo form_open('admin/pricing/service',array('id'=>'service-form')); ?>
                    <?php } ?>

                        <div class="modal-body">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="service_name" id="service_name" class="validate" required>
                                    <label for="service_name"><?php echo _l('service_name'); ?></label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn btn-info float-right light-blue darken-1"><?php echo _l('submit'); ?></button>
                                    <button type="button" class="close modal-action modal-close btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <div id="edit_service" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('edit service'); ?></span>
                    </h5>

                    <?php echo form_open('admin/pricing/service',array('id'=>'service_form')); ?>
                        <div class="modal-body">
                            <div class="row">
                            <div style="display:none" class="input-field col s5">
                        <label for="id" class="control-label"><?php echo _l('id'); ?></label>
                        <input type="number" id="id" class="form-control" name="id" value="<?php if(isset($service)){echo $service->id;} ?>">
                      </div>
                    
                      <div class=" col s5">
                        <input type="text" id="work_name" class="form-control" name="work_name" value="<?php if(isset($service)){echo $service->work_name;} ?>">
                        <label for="work_name" class="control-label"><?php echo _l('service_name'); ?></label>
                      </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                  <button type="submit" class="btn btn-info float-right border-round z-depth-4 light-blue darken-1"><?php echo _l('submit'); ?></button>
                  <button type="button" class="close modal-action modal-close waves-effect waves-red btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                  <?php echo form_close(); ?>
                </div>
                </div>
            </div>
        </div>

        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!-- <div class="card">
                        <div class="card-content"> -->
                            <div id="card-panel-type2" class="section" style="text-align:center;">

                                <!-- datatable start -->
                                <div class="responsive-table" style="text-align:center;">
                                    <table id="page-length-option-service" class="table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;"><?php echo _l('service_id'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('service_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('added_from'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('date_created'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('options'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $services = get_nature_of_work(); ?>
                                            <?php foreach(($services) as $service) { ?>
                                                <tr>
                                                    <td data-label="@lang('service')" style="text-align:center;"><?php echo $service['id']; ?></td>
                                                    <td data-label="@lang('service')" style="text-align:center;"><?php echo $service['work_name']; ?></td>
                                                    <?php $staff_name = get_staff_full_name($service['added_from']); ?>
                                                    <td data-label="@lang('added_from')" style="text-align:center;"><?php echo $staff_name; ?></td>
                                                    <td data-label="@lang('date_created')" style="text-align:center;"><?php echo $service['date_created']; ?></td>
                                                    <td data-label="@lang('options')" style="text-align:center;">
                                                    <?php if((has_permission('pricing','','edit') && get_staff_types() == 'Corporate') || is_admin()){ ?>
                                                        <a href="#" value="<?php echo $service['id']; ?>" class="service_edit"><i class="fa fa-pencil-square-o"></i></a>
                                                        <a href="#" value="<?php echo $service['id']; ?>" class="service_delete"><i class="material-icons md-18">delete</i></a>
                                                        <?php }?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        <!-- </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="test8" class="col s12">
<div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title"><span><?php echo $title; ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url('dashboard'); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo admin_url('quote/units'); ?>"><?php echo _l('units'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo $title; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php if((has_permission('pricing', '', 'create') && get_staff_types() == 'Corporate') || is_admin()) {?>

        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
            <ul>
            <?php if((has_permission('pricing', '', 'create') && get_staff_types() == 'Corporate') || is_admin()) {?>

                <li><a href="#add_unit" class="btn-floating red tooltipped modal-trigger" data-position="left" data-tooltip="Create Unit" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">ac_unit</i></a></li>
                <?php } ?>
            
            </ul>
        </div>
        <?php } ?>

        <div id="add_unit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('create_unit'); ?></span>
                    </h5>
                    <?php if((has_permission('unit','','create') && get_staff_types() == 'Corporate') || is_admin()){ ?>

                    <?php echo form_open('admin/pricing/unit',array('id'=>'unit-form')); ?>
                    <?php } ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="unit_name" class="active"><?php echo _l('unit_name'); ?></label>
                                    <input type="text" class="form-control" name="unit_name" id="unit_name" value="" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn btn-info float-right light-blue darken-1"><?php echo _l('submit'); ?></button>
                                    <button type="button" class="close modal-action modal-close btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div id="edit_unit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('edit unit'); ?></span>
                    </h5>

                    <?php echo form_open('admin/pricing/unit',array('id'=>'unit_form')); ?>
                        <div class="modal-body">
                            <div class="row">
                            <div style="display:none" class="input-field col s5">
                        <label for="id" class="control-label"><?php echo _l('id'); ?></label>
                        <input type="number" id="id" class="form-control" name="id" value="<?php if(isset($unit)){echo $unit->id;} ?>">
                      </div>
                    
                      <div class=" col s5">
                        <input type="text" id="unit" class="form-control" name="unit" value="<?php if(isset($unit)){echo $unit->unit;} ?>">
                        <label for="unit" class="control-label"><?php echo _l('unit'); ?></label>
                      </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                  <button type="submit" class="btn btn-info float-right border-round z-depth-4 light-blue darken-1"><?php echo _l('submit'); ?></button>
                  <button type="button" class="close modal-action modal-close waves-effect waves-red btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                  <?php echo form_close(); ?>
                </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!-- <div class="card">
                        <div class="card-content"> -->
                            <div id="card-panel-type2" class="section" style="text-align:center;">
                                <!-- datatable start -->
                                <div class="responsive-table" style="text-align:center;">
                                    <table id="page-length-option-units" class="table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;"><?php echo _l('unit_id'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('unit_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('added_from'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('date_created'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('options'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $units = get_work_unit(); ?>
                                            <?php foreach(($units) as $unit) { ?>
                                                <tr>
                                                    <td data-label="@lang('unit_id')" style="text-align:center;"><?php echo $unit['id']; ?></td>
                                                    <td data-label="@lang('unit_name')" style="text-align:center;"><?php echo $unit['unit']; ?></td>
                                                    <?php $staff_name = get_staff_full_name($unit['added_from']); ?>
                                                    <td data-label="@lang('added_from')" style="text-align:center;"><?php echo $staff_name; ?></td>
                                                    <td data-label="@lang('date_created')" style="text-align:center;"><?php echo $unit['date_created']; ?></td>

                                                    <td data-label="@lang('options')" style="text-align:center;">

                                                    <?php if((has_permission('pricing','','edit') && get_staff_types() == 'Corporate') || is_admin()){ ?>
                                                        <a href="#" value="<?php echo $unit['id']; ?>" style="text-align:center;" class="unit_edit"> <i class="fa fa-pencil-square-o"></i></a>
                                                        <a href="#" value="<?php echo $unit['id']; ?>" class="unit_delete"><i class="material-icons md-18">delete</i></a>
                                                        <?php }?>
                                                    </td>
                                                </tr>   
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div id="test9" class="col s12">
<div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title"><span><?php echo $title; ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url('dashboard'); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo admin_url('quote/service_units'); ?>"><?php echo _l('service_units'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo $title; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php if((has_permission('pricing', '', 'create') && get_staff_types() == 'Corporate') || is_admin()) {?>

        
        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>

        <ul>
        <?php if((has_permission('pricing', '', 'create') && get_staff_types() == 'Corporate') || is_admin()) {?>

                <li><a href="#add_service_unit" class="btn-floating red tooltipped modal-trigger" data-position="left" data-tooltip="Create Service Unit" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">add units</i></a></li>
                <?php } ?>
            
            </ul>
            


        </div>
        <?php } ?>

        <div id="add_service_unit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('create_service_unit'); ?></span>
                    </h5>
                    <?php if((has_permission('service_unit','','create') && get_staff_types() == 'Corporate') || is_admin()){ ?>

                    <?php echo form_open('admin/pricing/service_unit',array('id'=>'service_unit-form')); ?>
                    <?php } ?>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col s12">
                                    
                                    <?php if($work_units_service != ''){ ?>
                                        <div class="col s6">
                                            <?php echo render_select_with_input_group('service',get_work_service_unit($service_units),array('id','work_name'),'service_name'); ?>
                                        </div>
                                    <?php } ?>
                                    <?php if($work_units_service == ''){ ?>
                                        <div class="col s6">
                                            <?php echo render_select_with_input_group('service',get_nature_of_work(),array('id','work_name'),'service_name'); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="col s6">
                                        <?php $units = get_work_unit();
                                        $selected = array();
                                        if(isset($units)){
                                            foreach($units as $member){
                                                array_push($selected,$member['unit_id']);
                                            }
                                        } else {
                                            // array_push($selected,get_staff_user_id());
                                        }
                                        echo render_select('unit[]',$units,array('id',array('unit')),'unit',$selected,array('multiple'=>true,'data-actions-box'=>true),array(),'','',false);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn btn-info float-right light-blue darken-1"><?php echo _l('submit'); ?></button>
                                    <button type="button" class="close modal-action modal-close btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>


        <div id="edit_service_unit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('edit_service_unit'); ?></span>
                    </h5>
                    <?php if((has_permission('service_unit','','edit') && get_staff_types() == 'Corporate') || is_admin()){ ?>

                    <?php echo form_open('admin/pricing/service_unit',array('id'=>'service_unit-form')); ?>
                    <?php } ?>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col s12">
                                    
                                    <?php if($work_units_service != ''){ ?>
                                        <div class="col s6">
                                            <?php echo render_select_with_input_group('service',get_work_service_unit($service_units),array('id','work_name'),'service_name'); ?>
                                        </div>
                                    <?php } ?>
                                    <?php if($work_units_service == ''){ ?>
                                        <div class="col s6">
                                            <?php echo render_select_with_input_group('service',get_nature_of_work(),array('id','work_name'),'service_name'); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="col s6">
                                        <?php $units = get_work_unit();
                                        $selected = array();
                                        if(isset($units)){
                                            foreach($units as $member){
                                                array_push($selected,$member['unit_id']);
                                            }
                                        } else {
                                            // array_push($selected,get_staff_user_id());
                                        }
                                        echo render_select('unit[]',$units,array('id',array('unit')),'unit',$selected,array('multiple'=>true,'data-actions-box'=>true),array(),'','',false);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                  <button type="submit" class="btn btn-info float-right border-round z-depth-4 light-blue darken-1"><?php echo _l('submit'); ?></button>
                  <button type="button" class="close modal-action modal-close waves-effect waves-red btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                  <?php echo form_close(); ?>
                </div>
                   
                </div>
            </div>
        </div>
        
        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!-- <div class="card"> -->
                        <!-- <div class="card-content"> -->
                            <div id="card-panel-type2" class="section" style="text-align:center;">
                                <!-- datatable start -->
                                <div class="responsive-table" style="text-align:center;">
                                    <table id="page-length-option-service_units" class="table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;"><?php echo _l('service_unit_id'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('service_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('unit_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('added_from'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('date_created'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('options'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php foreach(($service_units) as $service_unit) { ?>
                                                <tr>
                                                    <td data-label="@lang('service_unit_id')" style="text-align:center;"><?php echo $service_unit['id']; ?></td>
                                                    <td data-label="@lang('service_name')" style="text-align:center;"><?php echo $service_unit['work_name']; ?></td>
                                                    <?php $unit_names = get_service_work_unit($service_unit['id']); ?>
                                                    <td data-label="@lang('service_name')" style="text-align:center;">
                                                        <?php foreach($unit_names as $unit_name) { ?>
                                                            <?php echo $unit_name['unit']; ?>
                                                            <br>
                                                        <?php } ?>
                                                    </td>
                                                    <?php $staff_name = get_staff_full_name($service_unit['added_from']); ?>
                                                    <td data-label="@lang('added_from')" style="text-align:center;"><?php echo $staff_name; ?></td>
                                                    <td data-label="@lang('date_created')" style="text-align:center;"><?php echo $service_unit['date_created']; ?></td>
                                                    <td data-label="@lang('options')" style="text-align:center;">
                                                    <?php if((has_permission('pricing','','edit') && get_staff_types() == 'Corporate') || is_admin()){ ?>
                                                    <a href="#" value="<?php echo $service_unit['id']; ?>" style="text-align:center;" class="service_units_edit"> <i class="fa fa-pencil-square-o"></i></button>
                                                    <a href="#" value="<?php echo $service_unit['id']; ?>" class="service_units_delete"><i class="material-icons md-18">delete</i></a>

                                                    <?php }?>
                                                </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

</div>

<div id="test10" class="col s12">
<div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <div class="container">
                 <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title" style="text-align:left;"><span><?php echo _l('skill'); ?></span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo admin_url(); ?>"><?php echo _l('dashboard_string'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo _l('settings'); ?></li>
                            <li class="breadcrumb-item active"><?php echo _l('skill'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php if(has_permission('project_settings','','create')){ ?>
        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large red gradient-shadow"><i class="material-icons">star_rate_half</i></a>
            <ul>
                <li>
                    <a href="#add_skill" class="btn-floating green tooltipped modal-trigger" data-position="left" data-tooltip="Create Skill" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">auto_mode</i></a>
                </li>
            </ul>
        </div>
        <?php } ?>
        <div id="add_skill" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span class="add-title"><?php echo _l('create_skill'); ?></span>
                    </h5>
                    <?php echo form_open('admin/projects/create_skill',array('id'=>'create_skill-form')); ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="add_skill_name" id="add_skill_name" style="text-align:center;" class="validate" required>
                                <label for="add_skill_name"><?php echo _l('skill_name'); ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn btn-info float-right light-blue darken-1"><?php echo _l('submit'); ?></button>
                                <button type="button" class="close modal-action modal-close btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <div id="edit_cover" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-header">
                    
                </div>
                <div class="modal-content">
                    <h5 style="text-align:center;">
                        <span><?php echo _l('edit_cover'); ?></span>
                    </h5>

                    <?php echo form_open('admin/projects/create_skill',array('id'=>'create_cover-form')); ?>
                        <div class="modal-body">
                            <div class="row">
                            <div style="display:none" class="input-field col s5">
                        <label for="id" class="control-label"><?php echo _l('id'); ?></label>
                        <input type="number" id="id" class="form-control" name="id" value="<?php if(isset($cover)){echo $cover->id;} ?>">
                      </div>
                    
                      <div class=" col s5">
                        <input type="text" id="cover_name" class="form-control" name="cover_name" value="<?php if(isset($cover)){echo $cover->cover_name;} ?>">
                        <label for="cover_name" class="control-label"><?php echo _l('skill_name'); ?></label>

                    </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                  <button type="submit" class="btn btn-info float-right border-round z-depth-4 light-blue darken-1"><?php echo _l('submit'); ?></button>
                  <button type="button" class="close modal-action modal-close waves-effect waves-red btn-flat light-blue lighten-5" data-dismiss="modal"><?php echo _l('close'); ?></button>
                  <?php echo form_close(); ?>
                </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="seaction">
                    <!-- <div class="card"> -->
                        <!-- <div class="card-content"> -->
                            <div id="card-panel-type2" class="section" style="text-align:center;">
                                <!-- datatable start -->
                                <div class="responsive-table" style="text-align:center;">
                                    <table id="page-length-option-skills" class="display">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;"><?php echo _l('skill_id'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('skill_name'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('added_from'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('date_created'); ?></th>
                                                <th style="text-align:center;"><?php echo _l('options'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $skills = get_skill(); ?>
                                            
                                            
                                            <?php foreach(($skills) as $skill) { ?>
                                                <tr>
                                                    <td data-label="@lang('cover_id')" style="text-align:center;"><?php echo $skill['id']; ?></td>
                                                    <td data-label="@lang('cover_name')" style="text-align:center;"><?php echo $skill['skills']; ?></td>
                                                    <?php $staff_name = get_staff_full_name($cover['added_from']); ?>
                                                    <td data-label="@lang('added_from')" style="text-align:center;"><?php echo $staff_name; ?></td>
                                                    <td data-label="@lang('date_created')" style="text-align:center;"><?php echo $skill['date_created']; ?></td>
                                                    <td data-label="@lang('options')" style="text-align:center;">
                                                    <a href="#" value="<?php echo $skill['id']; ?>" class="edit"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="#" value="<?php echo $skill['id']; ?>" class="delete"><i class="material-icons md-18">delete</i></a>

                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
















</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
                                
                            



                  
                           
                        
                          
                           
                          
                           

                           
                           
                           

<?php init_tail(); ?>
<script src="<?php echo base_url(); ?>assets/js/scripts/page-users.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/scripts/advance-ui-modals.min.js"></script>
<script>
    $(document).ready(function(){

$('.pricing').click(function(){
    var service_id = $(this).attr('value');
    $.ajax({
        url: "<?php echo admin_url('pricing/pricing'); ?>",
        type: "POST",
        data: {
            service_id:service_id
        },
        success: function(response){
            $('#add_pricing_field').html(response);
            $('#add_pricing').modal('open');
        }
    });
});

$('.edit_quote').click(function(){
    var service_id = $(this).attr('value');
    $.ajax({
        url: "<?php echo admin_url('quote/edit_quote'); ?>",
        type: "POST",
        data: {
            service_id:service_id
        },
        success: function(response){
            $('#edit_quote_field').html(response);
            $('#edit_quote').modal('open');
        }
    });
});

$('.add_quote_amount').click(function(){
    var service_id = $(this).attr('value');
    $.ajax({
        url: "<?php echo admin_url('quote/add_quote_amount'); ?>",
        type: "POST",
        data: {
            service_id:service_id
        },
        success: function(response){
            $('#add_quote_amount_field').html(response);
            $('#add_quote_amount').modal('open');
        }
    });
});

<?php foreach($units as $unit){ ?>
    $(document).on('change', '#<?php echo $unit['id']; ?>ranges', function(e){
        var unit_id = $(this).attr('value');
        var unit = '<?php echo $unit['id']; ?>' ;
        if( $('#<?php echo $unit['id']; ?>ranges').is(':checked') ){
            if(unit == unit_id){
                // id amount value = 0
                $('#<?php echo $unit['id']; ?>amount').val(0);
                $('#<?php echo $unit['id']; ?>amount_head').hide();
                $('#<?php echo $unit['id']; ?>range_head').show();
            }
        }
        else{
            if(unit == unit_id){
                $('#<?php echo $unit['id']; ?>amount').val(0);
                $('#<?php echo $unit['id']; ?>amount_head').show();
                $('#<?php echo $unit['id']; ?>range_head').hide();
            }
        }
    });
<?php } ?>

<?php foreach($units as $unit){ ?>
    $(document).on('click', '.<?php echo $unit['id']; ?>add_row', function(e){
        event.preventDefault();
        var unit_id = $(this).attr('value');
        var unit = '<?php echo $unit['id']; ?>' ;
        if(unit == unit_id){
            var html = '<tr id="row'+unit_id+'">';
            html += '<td><input type="number" name="range_from[]" class="form-control" required></td>';
            html += '<td><input type="number" name="range_to[]" class="form-control" required></td>';
            html += '<td><input type="number" name="amount[]" class="form-control" required></td>';
            html += '<td><a class="'+unit_id+'add_row" value="'+unit_id+'"><i class="material-icons left">add</i></a><a class="remove_row"><i class="material-icons left">remove</i></a></td></tr>';
            $('#'+unit_id+'tbody').append(html);
        }
    });
<?php } ?>

$(document).on('click', '.remove_row', function(e){
    e.preventDefault();
    let row_item = $(this).parent().parent();
    $(row_item).remove();
});

<?php foreach($units as $unit){ ?>
    $(document).on('click', '.<?php echo $unit['id']; ?>row', function(e){
        event.preventDefault();
        var unit_id = $(this).attr('value');
        var unit = '<?php echo $unit['id']; ?>' ;
        if(unit == unit_id){
            var service_id = $('#service_id').val();
            var amount = $('#<?php echo $unit['id']; ?>amount').val();
            if( $('#<?php echo $unit['id']; ?>ranges').is(':checked') ){
                var ranges = 1;
            }else{
                var ranges = 0;
            }
            $.ajax({
                url: "<?php echo admin_url('quote/quote_amount_store'); ?>",
                type: "POST",
                data: {
                    unit_id:unit_id,
                    amount:amount,
                    ranges:ranges,
                    service_id:service_id
                },
                success: function(response){
                    $('#add_quote_amount_field').html(response);
                    $('#add_quote_amount').modal('open');
                }
            });
        }
    });
<?php } ?>

});


//cover edit and delete function//
$(document).on('click', '.cover_edit', function () {
    // alert('fj');

    var id = $(this).attr('value');
    // alert(id);
    console.log(id);

    $.ajax({
      type: "GET",
      url: "<?php echo admin_url('projects/cover_edit?id=') ?>" + id,
      success: function (response) {
        
        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

          alert(res.message);

        }else if(res.status == 200){

          $('#id').val(res.data[0].id);
          $('#cover_name').val(res.data[0].cover_name);
          $('#edit_cover').modal('open');

        }
      }
    });
  });

    $(document).on('click', '.cover_delete', function () {
    // alert('kdjh');
    var id = $(this).attr('value');
    $.ajax({
      type: "POST",
      data: {id:id},
      url: "<?php echo admin_url('projects/delete_cover') ?>",
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if(res.status == '200'){
          window.location.reload();
        }else if(res.status == '404'){
          M.toast({
            html: 'Cover Delete Failed'})
        }
      }
    });
  });


  //inch edit and delete function //
  $(document).on('click', '.inches_edit', function () {
    // alert('fj');

    var id = $(this).attr('value');
    console.log(id);

    $.ajax({
      type: "GET",
      url: "<?php echo admin_url('projects/inch_edit?id=') ?>" + id,
      success: function (response) {
        
        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

          alert(res.message);

        }else if(res.status == 200){

          $('#id').val(res.data[0].id);
          $('#inch_name').val(res.data[0].inch_name);
          $('#edit_inch').modal('open');

        }
      }
    });
  });



  $(document).on('click', '.inch_delete', function () {
    // alert('kdjh');
    var id = $(this).attr('value');
    $.ajax({
      type: "POST",
      data: {id:id},
      url: "<?php echo admin_url('projects/delete_inch') ?>",
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if(res.status == '200'){
          window.location.reload();
        }else if(res.status == '404'){
          M.toast({
            html: 'Inch Delete Failed'})
        }
      }
    });
  });

  //concrete cover edit delete function //

  $(document).on('click', '.concrete_edit', function () {
    // alert('fj');

    var id = $(this).attr('value');
    console.log(id);

    $.ajax({
      type: "GET",
      url: "<?php echo admin_url('projects/concrete_cover_edit?id=') ?>" + id,
      success: function (response) {
        
        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

          alert(res.message);

        }else if(res.status == 200){

          $('#id').val(res.data[0].id);
          $('#element').val(res.data[0].element);
          $('#cover').val(res.data[0].cover);
          $('#inch').val(res.data[0].inch);

          $('#edit_concrete_cover').modal('open');

        }
      }
    });
  });

  $(document).on('click', '.concrete_delete', function () {
    // alert('kdjh');
    var id = $(this).attr('value');
    $.ajax({
      type: "POST",
      data: {id:id},
      url: "<?php echo admin_url('projects/delete_concrete_cover') ?>",
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if(res.status == '200'){
          window.location.reload();
        }else if(res.status == '404'){
          M.toast({
            html: 'Cover Delete Failed'})
        }
      }
    });
  });

  //concrete grade edit and delete function //
  $(document).on('click', '.grade_edit', function () {
    // alert('fj');

    var id = $(this).attr('value');
    console.log(id);

    $.ajax({
      type: "GET",
      url: "<?php echo admin_url('projects/concrete_grade_edit?id=') ?>" + id,
      success: function (response) {
        
        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

          alert(res.message);

        }else if(res.status == 200){

          $('#id').val(res.data[0].id);
          $('#concrete_grade').val(res.data[0].concrete_grade);
          $('#edit_concrete_grade').modal('open');

        }
      }
    });
  });


  $(document).on('click', '.grade_delete', function () {
    // alert('kdjh');
    var id = $(this).attr('value');
    $.ajax({
      type: "POST",
      data: {id:id},
      url: "<?php echo admin_url('projects/delete_concrete_grade') ?>",
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if(res.status == '200'){
          window.location.reload();
        }else if(res.status == '404'){
          M.toast({
            html: 'Concrete Grade Delete Failed'})
        }
      }
    });
  });


  // complization matrix edit and delete function //
  $(document).on('click', '.matrix_edit', function () {
    // alert('fj');

    var id = $(this).attr('value');    
    console.log(id);
   

    $.ajax({
      type: "GET",
      url: "<?php echo admin_url('projects/complication_matrices_edit?id=') ?>" + id,
      success: function (response) {
        
        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

          alert(res.message);

        }else if(res.status == 200){

          $('#id').val(res.data[0].id);
          $('#element').val(res.data[0].element);
          $('#complication_matrix').val(res.data[0].complication_matrix);
          $('#edit_complication_matrix').modal('open');

        }
      }
    });
  });


  $(document).on('click', '.matrix_delete', function () {
    // alert('kdjh');
    var id = $(this).attr('value');
    // alert(id);
    $.ajax({
      type: "POST",
      data: {id:id},
      url: "<?php echo admin_url('projects/delete_complication_matrix') ?>",
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if(res.status == '200'){
          window.location.reload();
        }else if(res.status == '404'){
          M.toast({
            html: 'Complication Matrix Delete Failed'})
        }
      }
    });
  });


  //service edit and delete function//
  $(document).on('click', '.service_edit', function () {
    // alert('fj');

    var id = $(this).attr('value');
    console.log(id);

    $.ajax({
      type: "GET",
      url: "<?php echo admin_url('pricing/edit_service?id=') ?>" + id,
      success: function (response) {
        
        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

          alert(res.message);

        }else if(res.status == 200){

          $('#id').val(res.data[0].id);
          $('#work_name').val(res.data[0].work_name);
          $('#edit_service').modal('open');

        }
      }
    });
  });



  $(document).on('click', '.service_delete', function () {
   //  alert('kdjh');
    var id = $(this).attr('value');
   //  alert(id);
    $.ajax({
      type: "POST",
      data: {id:id},
      url: "<?php echo admin_url('pricing/delete_service') ?>",
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if(res.status == '200'){
          window.location.reload();
        }else if(res.status == '404'){
          M.toast({
            html: ' Service Delete Failed'})
        }
      }
    });
  });

  //unit edit and delete function//

  $(document).on('click', '.unit_edit', function () {
    // alert('fj');
    var id = $(this).attr('value');
    console.log(id);

    $.ajax({
      type: "GET",
      url: "<?php echo admin_url('pricing/editt?id=') ?>" + id,
      success: function (response) {
        
        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

          alert(res.message);

        }else if(res.status == 200){

          $('#id').val(res.data[0].id);
          $('#unit').val(res.data[0].unit);
          $('#edit_unit').modal('open');

        }
      }
    });
  });


  $(document).on('click', '.unit_delete', function () {
   //  alert('kdjh');
    var id = $(this).attr('value');
   //  alert(id);
    $.ajax({
      type: "POST",
      data: {id:id},
      url: "<?php echo admin_url('pricing/delete_units') ?>",
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if(res.status == '200'){
          window.location.reload();
        }else if(res.status == '404'){
          M.toast({
            html: ' Units Delete Failed'})
        }
      }
    });
  });


  $(document).on('click', '.service_units_edit', function () {
    // alert('fj');

    var id = $(this).attr('value');
    console.log(id);

    $.ajax({
      type: "GET",
      url: "<?php echo admin_url('pricing/edit_service_units?id=') ?>" + id,
      success: function (response) {
        
        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

          alert(res.message);

        }else if(res.status == 200){

          $('#id').val(res.data[0].id);
          $('#service_id').val(res.data[0].service_id);

          $('#edit_service_unit').modal('open');

        }
      }
    });
  });



  //service unit edit and delete function//
  $(document).on('click', '.service_units_delete', function () {
   //  alert('kdjh');
    var id = $(this).attr('value');
   //  alert(id);
    $.ajax({
      type: "POST",
      data: {id:id},
      url: "<?php echo admin_url('pricing/delete_service_units') ?>",
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if(res.status == '200'){
          window.location.reload();
        }else if(res.status == '404'){
          M.toast({
            html: 'Service Units Delete Failed'})
        }
      }
    });
  });



</script>

                   
                     


      
      