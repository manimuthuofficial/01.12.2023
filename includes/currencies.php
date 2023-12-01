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
    /* Media query for screens 768px and larger */
    @media screen and (min-width: 768px) {
        .modal {
            width: 60%; /* Adjust width for larger screens */
        }
    }

    /* Media query for screens 992px and larger */
    @media screen and (min-width: 992px) {
        .modal {
            width: 50%; /* Adjust width for even larger screens */
        }
    }

    /* Media query for screens 1200px and larger */
    @media screen and (min-width: 1200px) {
        .modal {
            width: 40%; /* Adjust width for the largest screens */
        }
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
                                    <h5 class="breadcrumbs-title" style="text-align:left;"><span><?php echo _l('settings_currencies'); ?></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add new currency popup -->
                    <?php if((has_permission('settings', '', 'create'))) { ?>
                        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large red"><i class="material-icons">add</i></a>
                            <ul>
                                <li><a class="btn-floating green tooltipped modal-trigger add_currency" href="#add_currency" data-position="left" data-tooltip="Create Currency" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">attach_money</i></a></li>
                            </ul>
                        </div>
                    <?php } ?>
                    <!-- Add new currency popup Ends-->
                    <?php $this->load->view('admin/includes/modals/currency_form'); ?>
                    <div class="card-content">
                        <div id="card-panel-type2" class="section" style="text-align:center;">
                            <!-- datatable start -->
                            <div class="responsive-table" style="text-align:center;">
                                <table id="page-length-option-country" class="display">
                                    <thead>
                                        <tr>
                                            <th><?php echo _l('currency_list_name'); ?></th>
                                            <th><?php echo _l('currency_list_symbol'); ?></th>
                                            <?php if (has_permission('settings', '', 'edit') || has_permission('settings', '', 'delete')) { ?>
                                                <th><?php echo _l('Options'); ?></th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($currencies){?>
                                            <?php foreach(($currencies) as $currency) { ?>
                                                <td data-label="@lang('name')"><?php echo $currency->name ?></td>
                                                <td data-label="@lang('symbol')"><?php echo $currency->symbol ?></td>
                                                <td data-label="@lang('options')">
                                                    <?php if(has_permission('settings', '', 'edit')){ ?>
                                                        <a href="#add_currency" class="edit_currency modal-trigger" value="<?php echo $currency->id ?>"><i class="fa fa-pencil-square-o"></i></a>
                                                    <?php }?>
                                                    <?php if(has_permission('settings','','delete')){ ?>
                                                        <a href="<?php echo admin_url('currencies/delete_currency/'.$currency->id); ?>" style="color:red;"><i class="material-icons md-18">delete</i></a>
                                                    <?php }?>
                                                </td>
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
<script>
    <?php if($message == 'success_added_currency'){ ?>
      swal({
        title: 'Currency Created Successfully!',
        icon: 'success'
      })
    <?php } ?>

    <?php if($message == 'error_added_currency'){ ?>
      swal({
        title: 'Currency Created Unsuccessfully!',
        icon: 'error'
      })
    <?php } ?>

    <?php if($message == 'success_updated_currency'){ ?>
      swal({
        title: 'Currency Updated Successfully!',
        icon: 'success'
      })
    <?php } ?>

    <?php if($message == 'error_updated_currency'){ ?>
      swal({
        title: 'Currency Updated Unsuccessfully!',
        icon: 'error'
      })
    <?php } ?>

    <?php if($message == 'success_deleted_currency'){ ?>
      swal({
        title: 'Currency Deleted Successfully!',
        icon: 'success'
      })
    <?php } ?>

    <?php if($message == 'error_deleted_currency'){ ?>
      swal({
        title: 'Currency Deleted Unsuccessfully!',
        icon: 'error'
      })
    <?php } ?>

    $(document).on('click', '.add_currency', function () {
        $('.material-icons').removeClass('active');
        $('.control-label').removeClass('active');
        $('.edit-title').hide();
        $('.add-title').show();
        $('#id').val('');
        $('#name').val('');
        $('#symbol').val('');
    });

    $(document).on('click', '.edit_currency', function () {
        $('.material-icons').addClass('active');
        $('.control-label').addClass('active');
        $('.edit-title').show();
        $('.add-title').hide();
        var id = $(this).attr('value');
        console.log(id);
        $.ajax({
            type: "GET",
            url: "<?php echo admin_url('currencies/editt?id=') ?>" + id,
            success: function (response) {
                var res = jQuery.parseJSON(response);
                if(res.status == 404) {
                    alert(res.message);
                }else if(res.status == 200){
                    $('#id').val(res.data[0].id);
                    $('#name').val(res.data[0].name);
                    $('#symbol').val(res.data[0].symbol);
                }
            }
        });
    });
</script>