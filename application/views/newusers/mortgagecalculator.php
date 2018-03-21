<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mortgage Calculator Tool</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mortgage Calculator Tool
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#payment" data-toggle="tab" aria-expanded="true">Mortgage Payment Calculator</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Mortgage Amount Calculator</a>
                        </li>
                        <li class=""><a href="#amortization " data-toggle="tab" aria-expanded="false">Mortgage Amortization Calculator</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="payment">
                            <CENTER><h4>Mortgage Payment Calculator</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="payment_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="mortgage_calculator_payment_frm" id="mortgage_calculator_payment_frm" action="#">
                                    <?php
                                        $pv_payment = $leftmeta['mortgage_calculator_payment_amount'] ;
                                        $t_payment = $leftmeta['mortgage_calculator_payment_amortization'];
                                        $sf_payment = $leftmeta['mortgage_calculator_payment_frequency'];
                                        $n_payment='';
                                        if($sf_payment=='Weekly'){$n_payment = 52;}
                                        if($sf_payment=='Biweekly'){$n_payment = 26;}
                                        if($sf_payment=='Monthly'){$n_payment = 12;}
                                        $i_payment = $leftmeta['mortgage_calculator_payment_interest_rate'];
                                        $td_payment = 25;
                                        if($n_payment != 0)
                                        {
                                            $percetage_payment = (($i_payment*(1-$td_payment/100))/$n_payment)/100;
                                        }
                                        if($n_payment != 0 && $t_payment != 0)
                                        {
                                            $finalvalue_payment = round($pv_payment*($percetage_payment*pow(1+$percetage_payment, $n_payment*$t_payment))/(pow(1+$percetage_payment, $n_payment*$t_payment)-1),2);
                                        }
                                    ?>
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_calculator_payment_amount">
                                                        <label>Mortgage Amount</label>
                                                        <input class="mortgage_calculator_payment_amount__range" type="range" value="<?= $leftmeta['mortgage_calculator_payment_amount'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_calculator_payment_amount" id="mortgage_calculator_payment_amount" class="form-control" value="<?= $leftmeta['mortgage_calculator_payment_amount'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_calculator_payment_amortization">
                                                        <label>Amortization</label>
                                                        <input class="mortgage_calculator_payment_amortization__range" type="range" value="<?= $leftmeta['mortgage_calculator_payment_amortization'] ?>" min="0" max="5">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    Year
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_calculator_payment_amortization" id="mortgage_calculator_payment_amortization" class="form-control" value="<?= $leftmeta['mortgage_calculator_payment_amortization'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Payment Frequency</label>
                                                    <select class="form-control" name="mortgage_calculator_payment_frequency" id="mortgage_calculator_payment_frequency">
                                                        <option value="">Payment Frequency</option>
                                                        <option value="Weekly" <?php if($leftmeta['mortgage_calculator_payment_frequency'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                        <option value="Biweekly" <?php if($leftmeta['mortgage_calculator_payment_frequency'] == 'Biweekly'){ ?> selected <?php } ?> >Biweekly</option>
                                                        <option value="Monthly" <?php if($leftmeta['mortgage_calculator_payment_frequency'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Custom Rate</label>
                                                    <select class="form-control" name="mortgage_calculator_payment_custom_rate" id="mortgage_calculator_payment_custom_rate">
                                                        <option value="Custom Rate" <?php if($leftmeta['mortgage_calculator_payment_custom_rate'] == 'Custom Rate'){ ?> selected <?php } ?> >Custom Rate</option>
                                                        
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_calculator_payment_interest_rate">
                                                        <label>Interest Rate</label>
                                                        <input class="mortgage_calculator_payment_interest_rate__range" type="range" value="<?= $leftmeta['mortgage_calculator_payment_interest_rate'] ?>" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_calculator_payment_interest_rate" id="mortgage_calculator_payment_interest_rate" class="form-control" value="<?= $leftmeta['mortgage_calculator_payment_interest_rate'] ?>">
                                                </div>
                                            </div>
											
											<div class="col-lg-12" >
															<select name="mortgage_goal" id="mortgage_goal" class="form-control">
															<option value="">Mortgage Goal</option>
															<option value="buy first home">Buy First Home</option>
															</select>
														</div>	
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="mortgage_payment" id="mortgage_payment" value="<?=$finalvalue_payment?>" readonly>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Add Additional Lump Sum">
                                            <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                            <input type="hidden" name="td_payment" id="td_payment" value="25">
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="mortgage">
                            <CENTER><h4>Mortgage Amount Calculator</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="mortgage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="mortgage_calculator_amount_frm" id="mortgage_calculator_amount_frm" action="#">
                                    <?php
                                        $pv_ammount = $leftmeta['mortgage_calculator_amount_payment'] ;
                                        $t_ammount = $leftmeta['mortgage_calculator_amount_amortization'];
                                        $sf_ammount = $leftmeta['mortgage_calculator_amount_payment_frequency'];
                                        $n_ammount = '';
                                        if($sf_ammount=='Weekly'){$n_ammount = 52;}
                                        if($sf_ammount=='Biweekly'){$n_ammount = 26;}
                                        if($sf_ammount=='Monthly'){$n_ammount = 12;}
                                        $i_ammount = $leftmeta['mortgage_calculator_amount_interest_rate'];
                                        $td_ammount = 25;
                                        if($n_ammount != 0)
                                        {
                                            $percetage_ammount = (($i_ammount*(1-$td_ammount/100))/$n_ammount)/100;
                                        }
                                        if($n_ammount != 0 && $t_ammount != 0)
                                        {
                                            $finalvalue_ammount = round($pv_ammount*($percetage_ammount*pow(1+$percetage_ammount, $n_ammount*$t_ammount))/(pow(1+$percetage_ammount, $n_ammount*$t_ammount)-1),2);
                                        }
                                    ?>
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_calculator_amount_amortization">
                                                        <label>Amortization</label>
                                                        <input class="mortgage_calculator_amount_amortization__range" type="range" value="<?= $leftmeta['mortgage_calculator_amount_amortization'] ?>" min="0" max="5">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    Year
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_calculator_amount_amortization" id="mortgage_calculator_amount_amortization" class="form-control" value="<?= $leftmeta['mortgage_calculator_amount_amortization'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_calculator_amount_payment">
                                                        <label>Payment</label>
                                                        <input class="mortgage_calculator_amount_payment__range" type="range" value="<?= $leftmeta['mortgage_calculator_amount_payment'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_calculator_amount_payment" id="mortgage_calculator_amount_payment" class="form-control" value="<?= $leftmeta['mortgage_calculator_amount_payment'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Payment Frequency</label>
                                                    <select class="form-control" name="mortgage_calculator_amount_payment_frequency" id="mortgage_calculator_amount_payment_frequency">
                                                        <option value="Biweekly" <?php if($leftmeta['mortgage_calculator_amount_payment_frequency'] == 'Biweekly'){ ?> selected <?php } ?> >Biweekly</option>
                                                        <option value="Weekly" <?php if($leftmeta['mortgage_calculator_amount_payment_frequency'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                        <option value="Monthly" <?php if($leftmeta['mortgage_calculator_amount_payment_frequency'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Product</label>
                                                    <select class="form-control" name="mortgage_calculator_amount_product" id="mortgage_calculator_amount_product">
                                                        <option value="Custom Rate" <?php if($leftmeta['mortgage_calculator_amount_product'] == 'Custom Rate'){ ?> selected <?php } ?> >Custom Rate</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_calculator_amount_interest_rate">
                                                        <label>Interest Rate</label>
                                                        <input class="mortgage_calculator_amount_interest_rate__range" type="range" value="<?= $leftmeta['mortgage_calculator_amount_interest_rate'] ?>" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_calculator_amount_interest_rate" id="mortgage_calculator_amount_interest_rate" class="form-control" value="<?= $leftmeta['mortgage_calculator_amount_interest_rate'] ?>">
                                                </div>
                                            </div>
											<div class="col-lg-12" >
															<select name="mortgage_goal" id="mortgage_goal" class="form-control">
															<option value="">Mortgage Goal</option>
															<option value="buy first home">Buy First Home</option>
															</select>
														</div>	
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="mortgage_ammount" id="mortgage_ammount" value="<?=$finalvalue_ammount?>" readonly="">
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Add Additional Lump Sum">
                                            <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                            <input type="hidden" name="td_ammount" id="td_ammount" value="25">
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="amortization">
                            <CENTER><h4>Mortgage Amortization Calculator</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="amortization_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="mortgage_calculator_amortization_frm" id="mortgage_calculator_amortization_frm" action="#">
                                <?php
                                    $pmt_amortization = $leftmeta['mortgage_calculator_amortization_amount'] ;
                                    $pv_amortization  = $leftmeta['mortgage_calculator_amortization_amortization'];
                                    $amortization_frequency_years  = $leftmeta['mortgage_calculator_amortization_frequency'];
                                    $n_amortization='';
                                    if($amortization_frequency_years=='Weekly'){$n_amortization = 52;}
                                    if($amortization_frequency_years=='Biweekly'){$n_amortization = 26;}
                                    if($amortization_frequency_years=='Monthly'){$n_amortization = 12;}
                                    $i_amortization = $leftmeta['mortgage_calculator_amortization_interest_rate'];
                                    $td_amortization = 25;
                                    if($n_amortization != 0)
                                    {
                                        $percetage_amortization = (($i_amortization*(1-$td_amortization/100))/$n_amortization)/100;
                                    }
                                    //echo $percetage_amortization;
                                    if($pmt_amortization != 0 && $pv_amortization !=0 && $n_amortization !=0)
                                    {
                                        $x_amortization = $pmt_amortization/($pv_amortization*$percetage_amortization);
                                        $y_amortization = pow(1+$percetage_amortization, $n_amortization);
                                        $z_amortization = $x_amortization/($x_amortization-1);
                                        $finalvalue_amortization = round(log($z_amortization)/log($y_amortization));   
                                    }                                    
                                ?>
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_calculator_amortization_amount">
                                                        <label>Mortgage Amount</label>
                                                        <input class="mortgage_calculator_amortization_amount__range" type="range" value="<?= $leftmeta['mortgage_calculator_amortization_amount'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_calculator_amortization_amount" id="mortgage_calculator_amortization_amount" class="form-control" value="<?= $leftmeta['mortgage_calculator_amortization_amount'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_calculator_amortization_amortization">
                                                        <label>Amortization</label>
                                                        <input class="mortgage_calculator_amortization_amortization__range" type="range" value="<?= $leftmeta['mortgage_calculator_amortization_amortization'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_calculator_amortization_amortization" id="mortgage_calculator_amortization_amortization" class="form-control" value="<?= $leftmeta['mortgage_calculator_amortization_amortization'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Payment Frequency</label>
                                                    <select class="form-control" name="mortgage_calculator_amortization_frequency" id="mortgage_calculator_amortization_frequency">
                                                        <option value="">Payment Frequency</option>
                                                        <option value="Weekly" <?php if($leftmeta['mortgage_calculator_amortization_frequency'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                        <option value="Biweekly" <?php if($leftmeta['mortgage_calculator_amortization_frequency'] == 'Biweekly'){ ?> selected <?php } ?> >Biweekly</option>
                                                        <option value="Monthly" <?php if($leftmeta['mortgage_calculator_amortization_frequency'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Custom Rate</label>
                                                    <select class="form-control" name="mortgage_calculator_amortization_custom_rate" id="mortgage_calculator_amortization_custom_rate">
                                                        <option value="Custom Rate" <?php if($leftmeta['mortgage_calculator_amortization_custom_rate'] == 'Custom Rate'){ ?> selected <?php } ?> >Custom Rate</option>
                                                        
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="mortgage_calculator_amortization_interest_rate">
                                                        <label>Interest Rate</label>
                                                        <input class="mortgage_calculator_amortization_interest_rate__range" type="range" value="<?= $leftmeta['mortgage_calculator_amortization_interest_rate'] ?>" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="mortgage_calculator_amortization_interest_rate" id="mortgage_calculator_amortization_interest_rate" class="form-control" value="<?= $leftmeta['mortgage_calculator_amortization_interest_rate'] ?>">
                                                </div>
                                            </div>
											<div class="col-lg-12" >
															<select name="mortgage_goal" id="mortgage_goal" class="form-control">
															<option value="">Mortgage Goal</option>
															<option value="buy first home">Buy First Home</option>
															</select>
														</div>	
                                        </div>
                                        <dir class="col-lg-6">
                                            <input type="text" name="mortgage_amortization_finalvalue" id="mortgage_amortization_finalvalue" class="form-control" value="<?=$finalvalue_amortization?>" readonly>
                                        </dir>
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