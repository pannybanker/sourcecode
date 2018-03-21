<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">What can I afford</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    What can I afford
                </div>
                <div class="panel-body">
                    <CENTER><h4>Payment</h4></CENTER>
                    <!-- /.panel-body -->
                    <div class="panel-body">
                        <div class="alert hide" id="msg">
                            <span></span>
                        </div>
                        <form method="post" name="whaticanafford_frm" id="whaticanafford_frm" action="#">
                            <?php
                                if($leftmeta['whaticanafford_gross_income'] != 0 && $leftmeta['whaticanafford_property_taxes'] !=0 && $leftmeta['whaticanafford_condominium_fees'] !=0 && $leftmeta['whaticanafford_healing_costs'] !=0 && $leftmeta['whaticanafford_borrowing_payments'] !=0 && $leftmeta['whaticanafford_intrest_rate'] !=0 && $leftmeta['whaticanafford_intrest_rate'] !=0 )
                                {
                                    // $tdsr = ($leftmeta['whaticanafford_property_taxes']+$leftmeta['whaticanafford_condominium_fees']+$leftmeta['whaticanafford_healing_costs']+$leftmeta['whaticanafford_borrowing_payments'])/$leftmeta['whaticanafford_gross_income'];
                                    $tdsr = 0.40;
                                    $mortgage_ammount = ($tdsr*$leftmeta['whaticanafford_gross_income'])-($leftmeta['whaticanafford_property_taxes']+$leftmeta['whaticanafford_condominium_fees']+$leftmeta['whaticanafford_healing_costs']+$leftmeta['whaticanafford_borrowing_payments']);
                                    $a  = $leftmeta['whaticanafford_amoritization'];
                                    $ai  = ($leftmeta['whaticanafford_intrest_rate']/100);
                                    $i  = ($leftmeta['whaticanafford_intrest_rate']/12/100);
									$v = round(1+$i, 6);
                                    $years = $a*12;
									$mp = pow($v, $years);
                                    $value  =  ($i*($mp)/($mp-1));
									echo $value;
                                    $pv  = round($mortgage_ammount/$value,2);
                                    $pp = round($pv/(1-$ai),2);
                                    $dp = $pp-$pv;
                                }
                            ?>
                            <div class="row form">
                                <div class="col-lg-6">
                                    <h4>Enter Your Monthly Information</h4>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="whaticanafford_gross_income">
                                                <label>Gross Income</label>
                                                <input class="whaticanafford_gross_income__range" type="range" value="<?= $leftmeta['whaticanafford_gross_income'] ?>" min="0" max="100000">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            $
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="whaticanafford_gross_income" id="whaticanafford_gross_income" class="form-control" value="<?= $leftmeta['whaticanafford_gross_income'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="whaticanafford_property_taxes">
                                                <label>Property Taxes</label>
                                                <input class="whaticanafford_property_taxes__range" type="range" value="<?= $leftmeta['whaticanafford_property_taxes'] ?>" min="0" max="10000">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            $
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="whaticanafford_property_taxes" id="whaticanafford_property_taxes" class="form-control" value="<?= $leftmeta['whaticanafford_property_taxes'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="whaticanafford_condominium_fees">
                                                <label>Condominium Fees</label>
                                                <input class="whaticanafford_condominium_fees__range" type="range" value="<?= $leftmeta['whaticanafford_condominium_fees'] ?>" min="0" max="10000">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            $
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="whaticanafford_condominium_fees" id="whaticanafford_condominium_fees" class="form-control" value="<?= $leftmeta['whaticanafford_condominium_fees'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="whaticanafford_healing_costs">
                                                <label>Heating Costs</label>
                                                <input class="whaticanafford_healing_costs__range" type="range" value="<?= $leftmeta['whaticanafford_healing_costs'] ?>" min="0" max="10000">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            $
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="whaticanafford_healing_costs" id="whaticanafford_healing_costs" class="form-control" value="<?= $leftmeta['whaticanafford_healing_costs'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="whaticanafford_borrowing_payments">
                                                <label>Borrowing Payments</label>
                                                <input class="whaticanafford_borrowing_payments__range" type="range" value="<?= $leftmeta['whaticanafford_borrowing_payments'] ?>" min="0" max="10000">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            $
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="whaticanafford_borrowing_payments" id="whaticanafford_borrowing_payments" class="form-control" value="<?= $leftmeta['whaticanafford_borrowing_payments'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h4>Enter Your Mortgage Information</h4>
                                    <!-- <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Product</label>
                                            <select class="form-control" name="whaticanafford_product" id="whaticanafford_product">
                                                <option value="">Select Options</option>
                                                <option value="12 Months" <?php if($leftmeta['whaticanafford_product'] == '12 Months'){ ?> selected <?php } ?> >12 Months</option>
                                            </select>
                                            <p class="help-block"></p>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="whaticanafford_intrest_rate">
                                                <label>Interest Rate</label>
                                                <input class="whaticanafford_intrest_rate__range" type="range" value="<?= $leftmeta['whaticanafford_intrest_rate'] ?>" min="0" max="100">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            %
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="whaticanafford_intrest_rate" id="whaticanafford_intrest_rate" class="form-control" value="<?= $leftmeta['whaticanafford_intrest_rate'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="whaticanafford_amoritization">
                                                <label>Amortization</label>
                                                <input class="whaticanafford_amoritization__range" type="range" value="<?= $leftmeta['whaticanafford_amoritization'] ?>" min="0" max="99">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            Year
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="whaticanafford_amoritization" id="whaticanafford_amoritization" class="form-control" value="<?= $leftmeta['whaticanafford_amoritization'] ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <p> 
										A maximum purchase price of $<strong id="mpp"><?=number_format($pp)?></strong> , based on a minimum down payment of $<strong id="dp"><?=number_format($dp)?></strong> and a total mortgage amount of $<strong id="pv"><?=number_format($pv)?></strong>, you could afford a monthly payment of $<strong id="pmt"><?=number_format($mortgage_ammount)?></strong>.”
										</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <div class="col-lg-6">
                                        <input type="submit" id="complete" name="complete" class="btn btn-primary btn-lg btn-block" value="Complete">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="submit" id="return_to" name="return_to" class="btn btn-primary btn-lg btn-block" value="Save and return to dashboard">
                                        <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </form>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->