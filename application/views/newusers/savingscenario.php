<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Saving Scenario</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Saving Scenario
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#payment" data-toggle="tab" aria-expanded="true">Payment</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Savings Amount</a>
                        </li>
                        <li class=""><a href="#amortization " data-toggle="tab" aria-expanded="false">Years to save</a>
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
                                <form method="post" name="saving_scenario_payment_frm" id="saving_scenario_payment_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-12">
                                            <?php
                                                $pv = $leftmeta['range_slider_saving_value'] ;
                                                $t = $leftmeta['range_slider_year_value'];
                                                $saving_frequency = $leftmeta['frequency_payment'];
                                                $n='';
                                                if($saving_frequency=='Weekly'){$n = 52;}
                                                if($saving_frequency=='Biweekly'){$n = 26;}
                                                if($saving_frequency=='Monthly'){$n = 12;}
                                                $i = $leftmeta['range_slider_interest_value'];
                                                if($n != 0)
                                                {
                                                    $percetage = round(($i/$n)/100,7);
                                                }
                                                if($n != 0 && $t != 0)
                                                {
                                                    $pvf = ((pow(1+$percetage, $n*$t))-1)/$percetage;
                                                    $finalvalue = round($pv/$pvf,2);
                                                }
                                            ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Required Saving</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="saving_scenario_payment_required_saving" id="saving_scenario_payment_required_saving" class="form-control" value="<?= $leftmeta['saving_scenario_payment_required_saving'] ?>" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-saving">
                                                        <label>Savings Goal Amount</label>
                                                        <input class="range-slider-saving__range" type="range" value="<?= $leftmeta['range_slider_saving_value'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-saving-value" id="range-slider-saving-value" class="form-control" value="<?= $leftmeta['range_slider_saving_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-year">
                                                        <label>Years to Save</label>
                                                        <input class="range-slider-year__range" type="range" value="<?= $leftmeta['range_slider_year_value'] ?>" min="0" max="5">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    Year
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-year-value" id="range-slider-year-value" class="form-control" value="<?= $leftmeta['range_slider_year_value'] ?>">
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-8">
                                                    <label>Current Saving</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="currsaving-payment" id="currsaving-payment" class="form-control" value="<?php if ($leftmeta['currsaving_payment'] !="") { echo $leftmeta['currsaving_payment']; }else{ echo $saving_accounts; } ?>">
                                                </div>
                                            </div> -->
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-8">
                                                    <label>Savings Frequency</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <select class="form-control" name="frequency-payment" id="frequency-payment">
                                                        <option value="">Savings Frequency</option>
                                                        <option value="Weekly" <?php if($leftmeta['frequency_payment'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                        <option value="Biweekly" <?php if($leftmeta['frequency_payment'] == 'Biweekly'){ ?> selected <?php } ?> >Biweekly</option>
                                                        <option value="Monthly" <?php if($leftmeta['frequency_payment'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-interest">
                                                        <label>Interest Rate</label>
                                                        <input class="range-slider-interest__range" type="range" value="<?= $leftmeta['range_slider_interest_value'] ?>" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-interest-value" id="range-slider-interest-value" class="form-control" value="<?= $leftmeta['range_slider_interest_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-saving-hello">To meet your goal of $<strong id="sssgmp"><?php echo number_format($pv);  ?></strong> at  <strong id="ssip"><?=$i?></strong>% for the next<br> <strong id="sstp"><?=$t?></strong> years you need to save <br>$<strong id="ssfvp"><?=$finalvalue?></strong> <strong id="ssfpay"><?=$leftmeta['frequency_payment']?></strong></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" id="complete" name="complete" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" id="return_to" name="retun_to" class="btn btn-primary btn-lg btn-block" value="Save and return to dashboard">
                                                <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="mortgage">
                            <CENTER><h4>Savings Amount</h4></CENTER>
                            <!-- /.panel-body -->
                            <?php
                                $pv_ammount = $leftmeta['range_slider_saving_morgate_value'] ;
                                $t_ammount  = $leftmeta['range_slider_year_morgate_value'];
                                $saving_frequency_ammount  = $leftmeta['frequency_morgate'];
                                $n_ammount='';
                                if($saving_frequency_ammount=='Weekly'){$n_ammount = 52;}
                                if($saving_frequency_ammount=='Biweekly'){$n_ammount = 26;}
                                if($saving_frequency_ammount=='Monthly'){$n_ammount = 12;}
                                $i_ammount = $leftmeta['range_slider_interest_morgate_value'];
                                if($n_ammount != 0)
                                {
                                    $percetage_ammount = round(($i_ammount/$n_ammount)/100,7);
                                }
                                if($n_ammount != 0 && $t_ammount != 0)
                                {
                                   $finalvalue_ammount = round($pv_ammount*(((pow(1+$percetage_ammount, $n_ammount*$t_ammount))-1)/$percetage_ammount),2);
                                }
                            ?>
                            <div class="panel-body">
                                <div class="alert hide" id="mortgage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="saving_scenario_mortgage_frm" id="saving_scenario_mortgage_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Required Saving</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="saving_scenario_savingamount_required_saving" id="saving_scenario_savingamount_required_saving" class="form-control" value="<?= $leftmeta['saving_scenario_savingamount_required_saving'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-year-morgate">
                                                        <label>Years to Save</label>
                                                        <input class="range-slider-year-morgate__range" type="range" value="<?= $leftmeta['range_slider_year_morgate_value'] ?>" min="0" max="5">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    Year
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-year-morgate-value" id="range-slider-year-morgate-value" class="form-control" value="<?= $leftmeta['range_slider_year_morgate_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-saving-morgate">
                                                        <label>My savings amount</label>
                                                        <input class="range-slider-saving-morgate__range" type="range" value="<?= $leftmeta['range_slider_saving_morgate_value'] ?>" min="19" max="8300">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-saving-morgate-value" id="range-slider-saving-morgate-value" class="form-control" value="<?= $leftmeta['range_slider_saving_morgate_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-8">
                                                    <label>Savings Frequency</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <select class="form-control" name="frequency-morgate" id="frequency-morgate">
                                                        <option value="Weekly" <?php if($leftmeta['frequency_morgate'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>

                                                        <option value="Biweekly" <?php if($leftmeta['frequency_morgate'] == 'Biweekly'){ ?> selected <?php } ?> >Biweekly</option>
                                                        <option value="Monthly" <?php if($leftmeta['frequency_morgate'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>  
                                           <!--  <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Current Saving</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="currsaving-morgate" id="currsaving-morgate" class="form-control" value="<?php if ($leftmeta['currsaving_morgate'] !="") { echo $leftmeta['currsaving_morgate']; }else{ echo $saving_accounts; } ?>">
                                                </div>
                                            </div>     -->                                     
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-interest-morgate">
                                                        <label>Interest Rate</label>
                                                        <input class="range-slider-interest-morgate__range" type="range" value="<?= $leftmeta['range_slider_interest_morgate_value'] ?>" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-interest-morgate-value" id="range-slider-interest-morgate-value" class="form-control" value="<?= $leftmeta['range_slider_interest_morgate_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span>With a $<strong id="sssgma"><?= number_format($pv_ammount); ?></strong> <strong id="ssfmpay"><?=$leftmeta['frequency_morgate']?></strong> savings plan, at <strong id="ssia"><?= $i_ammount ?></strong>% for <strong id="ssta"><?= $t_ammount ?></strong> years, your total savings amount will be $<strong id="ssfva"><?= number_format($finalvalue_ammount) ?></strong></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" name="complete" id="complete_saving" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" id="return_to_saving" name="return_to"  class="btn btn-primary btn-lg btn-block" value="Save and return to dashboard">
                                                <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="amortization">
                            <CENTER><h4>Years to save</h4></CENTER>
                            <?php
                                $pmt_years = $leftmeta['range_slider_saving_goal_amortization_value'] ;
                                $pv_years  = $leftmeta['range_slider_saving_amortization_value'];
                                $saving_frequency_years  = $leftmeta['frequency_amortization'];
                                $n_years='';
                                if($saving_frequency_years=='Weekly'){$n_years = 52;}
                                if($saving_frequency_years=='Biweekly'){$n_years = 26;}
                                if($saving_frequency_years=='Monthly'){$n_years = 12;}
                                $i_years = $leftmeta['range_slider_interest_amortization_value'];
                                if($n_years != 0)
                                {
                                    $percetage_years = round(($i_years/$n_years)/100,7);
                                }
                                if($pmt_years != 0 && $pv_years !=0 && $percetage_years !=0)
                                {
                                    $finalvalue_years = round(round(log((($pv_years/$pmt_years)*$percetage_years)+1),6)/round(log(1+$percetage_years),6))/$n_years;   
                                }
                                
                            ?>
                            <div class="panel-body">
                                <div class="alert hide" id="amortization_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="saving_scenario_amortization_frm" id="saving_scenario_amortization_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Required Saving</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="saving_scenario_yearstosave_required_saving" id="saving_scenario_yearstosave_required_saving" class="form-control" value="<?= $leftmeta['saving_scenario_yearstosave_required_saving'] ?>" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-saving-amortization">
                                                        <label>Savings Goal Amount</label>
                                                        <input class="range-slider-saving-amortization__range" type="range" value="<?= $leftmeta['range_slider_saving_amortization_value'] ?>" min="1000" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-saving-amortization-value" id="range-slider-saving-amortization-value" class="form-control" value="<?= $leftmeta['range_slider_saving_amortization_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-saving-goal-amortization">
                                                        <label>My savings amount</label>
                                                        <input class="range-slider-saving-goal-amortization__range" type="range" value="<?= $leftmeta['range_slider_saving_goal_amortization_value'] ?>" min="19" max="8300">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-saving-goal-amortization-value" id="range-slider-saving-goal-amortization-value" class="form-control" value="<?= $leftmeta['range_slider_saving_goal_amortization_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-8">
                                                    <label>Savings Frequency</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <select class="form-control" name="frequency-amortization" id="frequency-amortization">
                                                        <option value="Weekly" <?php if($leftmeta['frequency_amortization'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                        <option value="Biweekly" <?php if($leftmeta['frequency_amortization'] == 'Biweekly'){ ?> selected <?php } ?> >Biweekly</option>
                                                        <option value="Monthly" <?php if($leftmeta['frequency_amortization'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div> 
                                            <!-- <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Current Saving</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="currsaving-amortization" id="currsaving-amortization" class="form-control" value="<?php if ($leftmeta['currsaving_amortization'] !="") { echo $leftmeta['currsaving_amortization']; }else{ echo $saving_accounts; } ?>">
                                                </div>
                                            </div>  -->                                          
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-interest-amortization">
                                                        <label>Interest Rate</label>
                                                        <input class="range-slider-interest-amortization__range" type="range" value="<?= $leftmeta['range_slider_interest_amortization_value'] ?>" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-interest-amortization-value" id="range-slider-interest-amortization-value" class="form-control" value="<?= $leftmeta['range_slider_interest_amortization_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-saving-hello">To reach your Savings goal of $<strong id="sspmty"><?= number_format($leftmeta['range_slider_saving_goal_amortization_value']); ?></strong> with a<br>  $<strong id="ssfvy"><?= number_format($leftmeta['range_slider_saving_amortization_value']); ?></strong> <strong id="ssfapay"><?=$leftmeta['frequency_amortization']?></strong> savings plan, at <strong id="ssiy"><?= $leftmeta['range_slider_interest_amortization_value'] ?></strong>% your total time to save <br>will be  <strong id="ssty"><?= number_format($finalvalue_years, 2, '.', ''); ?> </strong>#years/month</span>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" id="year_complete" name="complete" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" id="year_return_to" name="return_to" class="btn btn-primary btn-lg btn-block" value="Save and return to dashboard">
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
                </div>
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
<style>.penny-saving-hello {
        
    
    font-size: 16px;
    text-align: justify-all;

    }</style>