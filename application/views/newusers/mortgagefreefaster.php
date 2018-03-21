<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mortgage Free Faster</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mortgage Free Faster
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#payment" data-toggle="tab" aria-expanded="true">Start Here</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Small Changes</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="payment">
                            <CENTER><h4>Start Here</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="payment_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="mortgage_freefaster_start_frm" id="mortgage_freefaster_start_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                <label>Calculate For.</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="mortgage_freefaster_calculatefor" <?php if (!empty($leftmeta['mortgage_freefaster_calculatefor']) && $leftmeta['mortgage_freefaster_calculatefor'] == 'Payment') { ?> checked <?php } ?> value="Payment">Payment
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="mortgage_freefaster_calculatefor" <?php if (!empty($leftmeta['mortgage_freefaster_calculatefor']) && $leftmeta['mortgage_freefaster_calculatefor'] == 'Amortization') { ?> checked <?php } ?> value="Amortization">Amortization
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Start Month</label>
                                                    <select class="form-control" name="mortgage_freefaster_startmonth" id="mortgage_freefaster_startmonth">
                                                        <option value="">Select Month</option>
                                                        <option value="January" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'January'){ ?> selected <?php } ?> >January</option>
                                                        <option value="February" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'February'){ ?> selected <?php } ?>>February</option>
                                                        <option value="March" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'March'){ ?> selected <?php } ?> >March</option>
                                                        <option value="April" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'April'){ ?> selected <?php } ?> >April</option>
                                                        <option value="May" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'May'){ ?> selected <?php } ?>>May</option>
                                                        <option value="June" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'June'){ ?> selected <?php } ?> >June</option>
                                                        <option value="July" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'July'){ ?> selected <?php } ?> >July</option>
                                                        <option value="August" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'August'){ ?> selected <?php } ?>>August</option>
                                                        <option value="September" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'September'){ ?> selected <?php } ?> >September</option>
                                                        <option value="October" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'October'){ ?> selected <?php } ?> >October</option>
                                                        <option value="November" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'November'){ ?> selected <?php } ?>>November</option>
                                                        <option value="December" <?php if($leftmeta['mortgage_freefaster_startmonth'] == 'December'){ ?> selected <?php } ?> >December</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_freefaster_anticipated_homeprice">
                                                        <label>Anticipated Home Price</label>
                                                        <input class="mortgage_freefaster_anticipated_homeprice__range" type="range" value="<?= $leftmeta['mortgage_freefaster_anticipated_homeprice'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_freefaster_anticipated_homeprice" id="mortgage_freefaster_anticipated_homeprice" class="form-control" value="<?= $leftmeta['mortgage_freefaster_anticipated_homeprice'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_freefaster_available_downpayment">
                                                        <label>Available Down Payment</label>
                                                        <input class="mortgage_freefaster_available_downpayment__range" type="range" value="<?= $leftmeta['mortgage_freefaster_available_downpayment'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_freefaster_available_downpayment" id="mortgage_freefaster_available_downpayment" class="form-control" value="<?= $leftmeta['mortgage_freefaster_available_downpayment'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_freefaster_anticipated_annual_homeprice">
                                                        <label>Anticipated Annual Home Value Increase</label>
                                                        <input class="mortgage_freefaster_anticipated_annual_homeprice__range" type="range" value="<?= $leftmeta['mortgage_freefaster_anticipated_annual_homeprice'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_freefaster_anticipated_annual_homeprice" id="mortgage_freefaster_anticipated_annual_homeprice" class="form-control" value="<?= $leftmeta['mortgage_freefaster_anticipated_annual_homeprice'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_freefaster_anticipated_interest_rate">
                                                        <label>Interest Rate</label>
                                                        <input class="mortgage_freefaster_anticipated_interest_rate__range" type="range" value="0" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_freefaster_anticipated_interest_rate" id="mortgage_freefaster_anticipated_interest_rate" class="form-control" value="<?= $leftmeta['mortgage_freefaster_anticipated_interest_rate'] ?>">
                                                </div>
                                            </div> 
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_freefaster_anticipated_amortization">
                                                        <label>Amortization</label>
                                                        <input class="mortgage_freefaster_anticipated_amortization__range" type="range" value="0" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_freefaster_anticipated_amortization" id="mortgage_freefaster_anticipated_amortization" class="form-control" value="<?= $leftmeta['mortgage_freefaster_anticipated_amortization'] ?>">
                                                </div>
                                            </div>  
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_freefaster_anticipated_payment_ammount">
                                                        <label>Payment Amount</label>
                                                        <input class="mortgage_freefaster_anticipated_payment_ammount__range" type="range" value="<?= $leftmeta['mortgage_freefaster_anticipated_payment_ammount'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_freefaster_anticipated_payment_ammount" id="mortgage_freefaster_anticipated_payment_ammount" class="form-control" value="<?= $leftmeta['mortgage_freefaster_anticipated_payment_ammount'] ?>">
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
                            <CENTER><h4>Small Changes</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="mortgage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="mortgage_freefaster_smallchanges_frm" id="mortgage_freefaster_smallchanges_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Option 1: Payment Frequency</label><br>
                                                    <div class="col-lg-4">
                                                        <label >Change To :</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="mortgage_freefaster_smallchange_payment_frequency" id="mortgage_freefaster_smallchange_payment_frequency">
                                                            <option value="">Select Month</option>
                                                            <option value="January" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'January'){ ?> selected <?php } ?> >January</option>
                                                            <option value="February" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'February'){ ?> selected <?php } ?>>February</option>
                                                            <option value="March" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'March'){ ?> selected <?php } ?> >March</option>
                                                            <option value="April" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'April'){ ?> selected <?php } ?> >April</option>
                                                            <option value="May" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'May'){ ?> selected <?php } ?>>May</option>
                                                            <option value="June" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'June'){ ?> selected <?php } ?> >June</option>
                                                            <option value="July" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'July'){ ?> selected <?php } ?> >July</option>
                                                            <option value="August" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'August'){ ?> selected <?php } ?>>August</option>
                                                            <option value="September" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'September'){ ?> selected <?php } ?> >September</option>
                                                            <option value="October" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'October'){ ?> selected <?php } ?> >October</option>
                                                            <option value="November" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'November'){ ?> selected <?php } ?>>November</option>
                                                            <option value="December" <?php if($leftmeta['mortgage_freefaster_smallchange_payment_frequency'] == 'December'){ ?> selected <?php } ?> >December</option>
                                                        </select>
                                                    </div>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>Option 2: Lum Sum Payment</label>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_freefaster_smallchange_lumsum_payment">
                                                        <label>Anticipated To Be Applied</label>
                                                        <input class="mortgage_freefaster_smallchange_lumsum_payment__range" type="range" value="<?= $leftmeta['mortgage_freefaster_smallchange_lumsum_payment'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_freefaster_smallchange_lumsum_payment" id="mortgage_freefaster_smallchange_lumsum_payment" class="form-control" value="<?= $leftmeta['mortgage_freefaster_smallchange_lumsum_payment'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="col-lg-8">
                                                        <label >Prepayment Frequency :</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" name="mortgage_freefaster_prementfrequency_startmonth" id="mortgage_freefaster_prementfrequency_startmonth">
                                                            <option value="">Select Month</option>
                                                            <option value="January" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'January'){ ?> selected <?php } ?> >January</option>
                                                            <option value="February" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'February'){ ?> selected <?php } ?>>February</option>
                                                            <option value="March" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'March'){ ?> selected <?php } ?> >March</option>
                                                            <option value="April" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'April'){ ?> selected <?php } ?> >April</option>
                                                            <option value="May" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'May'){ ?> selected <?php } ?>>May</option>
                                                            <option value="June" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'June'){ ?> selected <?php } ?> >June</option>
                                                            <option value="July" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'July'){ ?> selected <?php } ?> >July</option>
                                                            <option value="August" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'August'){ ?> selected <?php } ?>>August</option>
                                                            <option value="September" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'September'){ ?> selected <?php } ?> >September</option>
                                                            <option value="October" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'October'){ ?> selected <?php } ?> >October</option>
                                                            <option value="November" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'November'){ ?> selected <?php } ?>>November</option>
                                                            <option value="December" <?php if($leftmeta['mortgage_freefaster_prementfrequency_startmonth'] == 'December'){ ?> selected <?php } ?> >December</option>
                                                        </select>
                                                    </div>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>Option 3: Increase Payment</label>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_freefaster_increase_payment">
                                                        <label>Payment Increase To Be Applied</label>
                                                        <input class="mortgage_freefaster_increase_payment__range" type="range" value="<?= $leftmeta['mortgage_freefaster_increase_payment'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_freefaster_increase_payment" id="mortgage_freefaster_increase_payment" class="form-control" value="<?= $leftmeta['mortgage_freefaster_increase_payment'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="col-lg-8">
                                                        <label >Payment Increase Frequency :</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" name="mortgage_freefaster_increase_startmonth" id="mortgage_freefaster_increase_startmonth">
                                                            <option value="">Select Month</option>
                                                            <option value="January" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'January'){ ?> selected <?php } ?> >January</option>
                                                            <option value="February" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'February'){ ?> selected <?php } ?>>February</option>
                                                            <option value="March" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'March'){ ?> selected <?php } ?> >March</option>
                                                            <option value="April" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'April'){ ?> selected <?php } ?> >April</option>
                                                            <option value="May" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'May'){ ?> selected <?php } ?>>May</option>
                                                            <option value="June" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'June'){ ?> selected <?php } ?> >June</option>
                                                            <option value="July" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'July'){ ?> selected <?php } ?> >July</option>
                                                            <option value="August" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'August'){ ?> selected <?php } ?>>August</option>
                                                            <option value="September" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'September'){ ?> selected <?php } ?> >September</option>
                                                            <option value="October" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'October'){ ?> selected <?php } ?> >October</option>
                                                            <option value="November" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'November'){ ?> selected <?php } ?>>November</option>
                                                            <option value="December" <?php if($leftmeta['mortgage_freefaster_increase_startmonth'] == 'December'){ ?> selected <?php } ?> >December</option>
                                                        </select>
                                                    </div>
                                                    <p class="help-block"></p>
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