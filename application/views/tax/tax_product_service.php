<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Tax product service start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('tax_product_service') ?></h1>
            <small><?php echo display('add_tax_product_service') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('tax') ?></a></li>
                <li class="active"><?php echo display('tax_product_service') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        <?php
        $message = $this->session->userdata('message');
        if (isset($message)) {
            ?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $message ?>
            </div>
            <?php
            $this->session->unset_userdata('message');
        }
        $error_message = $this->session->userdata('error_message');
        $validatio_error = validation_errors();
        if (($error_message || $validatio_error)) {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error_message ?>
                <?php echo $validatio_error ?>
            </div>
            <?php
            $this->session->unset_userdata('error_message');
        }
        ?>

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="<?php echo base_url('Ctax/manage_tax')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('manage_tax')?></a>

                </div>
            </div>
        </div>

        <!-- New tax -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('tax_product_service') ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Ctax/insert_tax_product_service', array('class' => 'form-vertical','id' => 'validate'))?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="product_name" class="col-sm-3 col-form-label"><?php echo display('product_name')?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="product_id" id="product_name" required="">
                                    <option value=""></option>
                                    {product_list}
                                    <option value="{product_id}">{product_name}-({product_model})</option>
                                    {/product_list}
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tax_name" class="col-sm-3 col-form-label"><?php echo display('tax_name')?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="tax_id" id="tax_name" required="">
                                    <option value=""></option>
                                    {tax_list}
                                    <option value="{tax_id}">{tax_name}</option>
                                    {/tax_list}
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tax_percentage" class="col-sm-3 col-form-label"><?php echo display('tax_percentage')?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="tax_percentage" id="tax_percentage" type="number" placeholder="<?php echo display('tax_percentage') ?>"  required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-tax" class="btn btn-success btn-large" name="add-tax" value="<?php echo display('save') ?>" />
                                <input type="submit" id="add-tax-another" class="btn btn-primary btn-large" name="add-tax-another" value="<?php echo display('save_and_add_another') ?>" />
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Tax product service end -->



