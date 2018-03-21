<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Leverage vs Savings Scenario Tools</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Leverage vs Savings Scenario Tools
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#payment" data-toggle="tab" aria-expanded="true">Payment</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Lending Amount</a>
                        </li>
                        <li class=""><a href="#amortization " data-toggle="tab" aria-expanded="false">Term of Loan</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="payment">
                            <CENTER><h4>Payment</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="payment_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="borrwing_scenario_payment_frm" id="borrwing_scenario_payment_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Long Term Goal:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="borrwing_scenario_payment_long_term_goal" id="borrwing_scenario_payment_long_term_goal" class="form-control" value="<?= $leftmeta['borrwing_scenario_payment_long_term_goal'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-saving-borrwing">
                                                        <label>Savings Goal Amount</label>
                                                        <input class="range-slider-saving-borrwing__range" type="range" value="<?= $leftmeta['range_slider_saving_borrwing_value'] ?>" min="0" max="500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-saving-borrwing-value" id="range-slider-saving-borrwing-value" class="form-control" value="<?= $leftmeta['range_slider_saving_borrwing_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-year-borrwing">
                                                        <label>Years to Save</label>
                                                        <input class="range-slider-year-borrwing__range" type="range" value="<?= $leftmeta['range_slider_year_borrwing_value'] ?>" min="0" max="99">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    Year
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-year-borrwing-value" id="range-slider-year-borrwing-value" class="form-control" value="<?= $leftmeta['range_slider_year_borrwing_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Current Savings</label>
                                                    <select class="form-control" name="currsaving-borrwing-payment" id="currsaving-borrwing-payment">
                                                        <option value="">Current Savings</option>
                                                        <option value="Yearly" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Savings Frequency</label>
                                                    <select class="form-control" name="frequency-borrwing-payment" id="frequency-borrwing-payment">
                                                        <option value="">Savings Frequency</option>
                                                        <option value="Yearly" <?php if($leftmeta['frequency_borrwing_payment'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['frequency_borrwing_payment'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['frequency_borrwing_payment'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-borrwing-interest">
                                                        <label>Interest Rate</label>
                                                        <input class="range-slider-borrwing-interest__range" type="range" value="<?= $leftmeta['range_slider_borrwing_interest_value'] ?>" min="0" max="100">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-borrwing-interest-value" id="range-slider-borrwing-interest-value" class="form-control" value="<?= $leftmeta['range_slider_borrwing_interest_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span>To meet your goal of $________ at  __% for the<br> next ___ years you need to save<br> $___________ (with frequency chosen)</span>
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
                            <CENTER><h4>Lending Amount</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="mortgage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="borrwing_scenario_mortgage_frm" id="borrwing_scenario_mortgage_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Long Term Goal:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="borrwing_scenario_leading_amount_long_term_goal" id="borrwing_scenario_leading_amount_long_term_goal" class="form-control" value="<?= $leftmeta['borrwing_scenario_leading_amount_long_term_goal'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-year-morgate-borrwing">
                                                        <label>Years to Save</label>
                                                        <input class="range-slider-year-morgate-borrwing__range" type="range" value="<?= $leftmeta['range_slider_year_morgate_borrwing_value'] ?>" min="0" max="99">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    Year
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-year-morgate-borrwing-value" id="range-slider-year-morgate-borrwing-value" class="form-control" value="<?= $leftmeta['range_slider_year_morgate_borrwing_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-saving-morgate-borrwing">
                                                        <label>My savings amount</label>
                                                        <input class="range-slider-saving-morgate-borrwing__range" type="range" value="<?= $leftmeta['range_slider_saving_morgate_borrwing_value'] ?>" min="0" max="500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-saving-morgate-borrwing-value" id="range-slider-saving-morgate-borrwing-value" class="form-control" value="<?= $leftmeta['range_slider_saving_morgate_borrwing_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Savings Frequency</label>
                                                    <select class="form-control" name="frequency-morgate-borrwing" id="frequency-morgate-borrwing">
                                                        <option value="">Savings Frequency</option>
                                                        <option value="Yearly" <?php if($leftmeta['frequency_morgate_borrwing'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['frequency_morgate_borrwing'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['frequency_morgate_borrwing'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Current Savings</label>
                                                    <select class="form-control" name="currsaving-morgate-borrwing" id="currsaving-morgate-borrwing">
                                                        <option value="">Current Savings</option>
                                                        <option value="Yearly" <?php if($leftmeta['currsaving_morgate_borrwing'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['currsaving_morgate_borrwing'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['currsaving_morgate_borrwing'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>                                            
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-interest-morgate-borrwing">
                                                        <label>Interest Rate</label>
                                                        <input class="range-slider-interest-morgate-borrwing__range" type="range" value="<?= $leftmeta['range_slider_interest_morgate_borrwing_value'] ?>" min="0" max="100">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-interest-morgate-borrwing-value" id="range-slider-interest-morgate-borrwing-value" class="form-control" value="<?= $leftmeta['range_slider_interest_morgate_borrwing_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span>With a $_____(frequency) savings plan,<br> at ___% for ____(#years), your total savings amount <br>will be $_________________</span>
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
                        <div class="tab-pane fade" id="amortization">
                            <CENTER><h4>Term of Loan</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="amortization_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="borrwing_scenario_amortization_frm" id="borrwing_scenario_amortization_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Long Term Goal:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="borrwing_scenario_termofloan_long_term_goal" id="borrwing_scenario_termofloan_long_term_goal" class="form-control" value="<?= $leftmeta['borrwing_scenario_termofloan_long_term_goal'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-saving-goal-amortization-borrwing">
                                                        <label>Savings Goal Amount</label>
                                                        <input class="range-slider-saving-goal-amortization-borrwing__range" type="range" value="<?= $leftmeta['range_slider_saving_goal_amortization_borrwing_value'] ?>" min="0" max="500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-saving-goal-amortization-borrwing-value" id="range-slider-saving-goal-amortization-borrwing-value" class="form-control" value="<?= $leftmeta['range_slider_saving_goal_amortization_borrwing_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-saving-amortization-borrwing">
                                                        <label>My savings amount</label>
                                                        <input class="range-slider-saving-amortization-borrwing__range" type="range" value="<?= $leftmeta['range_slider_saving_amortization_borrwing_value'] ?>" min="0" max="500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-saving-amortization-borrwing-value" id="range-slider-saving-amortization-borrwing-value" class="form-control" value="<?= $leftmeta['range_slider_saving_amortization_borrwing_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Savings Frequency</label>
                                                    <select class="form-control" name="frequency-amortization-borrwing" id="frequency-amortization-borrwing">
                                                        <option value="">Savings Frequency</option>
                                                        <option value="Yearly" <?php if($leftmeta['frequency_amortization_borrwing'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['frequency_amortization_borrwing'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['frequency_amortization_borrwing'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Current Savings</label>
                                                    <select class="form-control" name="currsaving-amortization-borrwing" id="currsaving-amortization-borrwing">
                                                        <option value="">Current Savings</option>
                                                        <option value="Yearly" <?php if($leftmeta['currsaving_amortization_borrwing'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['currsaving_amortization_borrwing'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['currsaving_amortization_borrwing'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>                                            
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-interest-amortization-borrwing">
                                                        <label>Interest Rate</label>
                                                        <input class="range-slider-interest-amortization-borrwing__range" type="range" value="<?= $leftmeta['range_slider_interest_amortization_borrwing_value'] ?>" min="0" max="100">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-interest-amortization-borrwing-value" id="range-slider-interest-amortization-borrwing-value" class="form-control" value="<?= $leftmeta['range_slider_interest_amortization_borrwing_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span>To reach your Savings goal of $________ with a  $______(frequency)<br> savings plan, at ___% your total time to save <br>will be  ____(#years/month)</span>
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