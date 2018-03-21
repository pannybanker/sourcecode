<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mortgage Comparison Tool</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mortgage Comparison Tool
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#payment" data-toggle="tab" aria-expanded="true">Mortgage1</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Mortgage2</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="payment">
                            <CENTER><h4>Mortgage1</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="payment_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="mortgage_mortgage1_comparison_frm" id="mortgage_mortgage1_comparison_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_comparison_mortgage1_amount">
                                                        <label>Mortgage Amount</label>
                                                        <input class="mortgage_comparison_mortgage1_amount__range" type="range" value="<?= $leftmeta['mortgage_comparison_mortgage1_amount'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_comparison_mortgage1_amount" id="mortgage_comparison_mortgage1_amount" class="form-control" value="<?= $leftmeta['mortgage_comparison_mortgage1_amount'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Payment Frequency</label>
                                                    <select class="form-control" name="mortgage_comparison_mortgage1_payment_frequency" id="mortgage_comparison_mortgage1_payment_frequency">
                                                        <option value="">Payment Frequency</option>
                                                        <option value="Yearly" <?php if($leftmeta['mortgage_comparison_mortgage1_payment_frequency'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['mortgage_comparison_mortgage1_payment_frequency'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['mortgage_comparison_mortgage1_payment_frequency'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Product</label>
                                                    <select class="form-control" name="mortgage_comparison_mortgage1_product" id="mortgage_calculator_amount_product">
                                                        <option value="Custom Rate" <?php if($leftmeta['mortgage_comparison_mortgage1_product'] == 'Custom Rate'){ ?> selected <?php } ?> >Custom Rate</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_comparison_mortgage1_interest_rate">
                                                        <label>Interest Rate</label>
                                                        <input class="mortgage_comparison_mortgage1_interest_rate__range" type="range" value="0" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_comparison_mortgage1_interest_rate" id="mortgage_comparison_mortgage1_interest_rate" class="form-control" value="<?= $leftmeta['mortgage_comparison_mortgage1_interest_rate'] ?>">
                                                </div>
                                            </div>  
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_comparison_mortgage1_amortization">
                                                        <label>Amortization</label>
                                                        <input class="mortgage_comparison_mortgage1_amortization__range" type="range" value="<?= $leftmeta['mortgage_comparison_mortgage1_amortization'] ?>" min="0" max="5">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    Year
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_comparison_mortgage1_amortization" id="mortgage_comparison_mortgage1_amortization" class="form-control" value="<?= $leftmeta['mortgage_comparison_mortgage1_amortization'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Add Additional Lump Sum">
                                            <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="mortgage">
                            <CENTER><h4>Mortgage2</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="mortgage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="mortgage_mortgage2_comparison_frm" id="mortgage_mortgage2_comparison_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_comparison_mortgage2_amount">
                                                        <label>Mortgage Amount</label>
                                                        <input class="mortgage_comparison_mortgage2_amount__range" type="range" value="<?= $leftmeta['mortgage_comparison_mortgage2_amount'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_comparison_mortgage2_amount" id="mortgage_comparison_mortgage2_amount" class="form-control" value="<?= $leftmeta['mortgage_comparison_mortgage2_amount'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Payment Frequency</label>
                                                    <select class="form-control" name="mortgage_comparison_mortgage2_payment_frequency" id="mortgage_comparison_mortgage2_payment_frequency">
                                                        <option value="">Payment Frequency</option>
                                                        <option value="Yearly" <?php if($leftmeta['mortgage_comparison_mortgage2_payment_frequency'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['mortgage_comparison_mortgage2_payment_frequency'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['mortgage_comparison_mortgage2_payment_frequency'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Product</label>
                                                    <select class="form-control" name="mortgage_comparison_mortgage2_product" id="mortgage_comparison_mortgage2_product">
                                                        <option value="Custom Rate" <?php if($leftmeta['mortgage_comparison_mortgage2_product'] == 'Custom Rate'){ ?> selected <?php } ?> >Custom Rate</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_comparison_mortgage2_interest_rate">
                                                        <label>Interest Rate</label>
                                                        <input class="mortgage_comparison_mortgage2_interest_rate__range" type="range" value="0" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_comparison_mortgage2_interest_rate" id="mortgage_comparison_mortgage2_interest_rate" class="form-control" value="<?= $leftmeta['mortgage_comparison_mortgage2_interest_rate'] ?>">
                                                </div>
                                            </div>  
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_comparison_mortgage2_amortization">
                                                        <label>Amortization</label>
                                                        <input class="mortgage_comparison_mortgage2_amortization__range" type="range" value="<?= $leftmeta['mortgage_comparison_mortgage2_amortization'] ?>" min="0" max="5">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    Year
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_comparison_mortgage2_amortization" id="mortgage_comparison_mortgage2_amortization" class="form-control" value="<?= $leftmeta['mortgage_comparison_mortgage2_amortization'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Add Additional Lump Sum">
                                            <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->