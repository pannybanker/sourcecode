<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Retirement Scenario Tools</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Retirement Scenario Tools 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#payment" data-toggle="tab" aria-expanded="true">Retirement Savings</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Retirement Available Savings</a>
                        </li>
                        <li class=""><a href="#amortization" data-toggle="tab" aria-expanded="false">Retirement Capital Needed</a>
                        </li>
                        <li class=""><a href="#capitalavailable" data-toggle="tab" aria-expanded="false">Retirement Capital Available</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="payment">
                            <CENTER><h4>Retirement Savings</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="payment_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="retirement_scenario_payment_frm" id="retirement_scenario_payment_frm" action="#">
                                    <?php
                                        if($leftmeta['range_slider_desired_annual_retirement_value'] !=0 &&   $leftmeta['range_slider_ageto_option_retirement_value'] !=0 && $leftmeta['range_slider_average_tax_rate_retirement_value'] !=0 && $leftmeta['range_slider_age_option_retirement_value'] !=0 && $leftmeta['range_slider_average_return_retirement_value'] !=0 && $leftmeta['initial_investment_retirement'] !=0 )
                                    { 
                                        $pv = $leftmeta['range_slider_desired_annual_retirement_value'];
                                        $n = ($leftmeta['range_slider_ageto_option_retirement_value']-$leftmeta['range_slider_age_option_retirement_value']);
                                        $i = $leftmeta['range_slider_average_return_retirement_value']/100;
                                        $t = $leftmeta['range_slider_average_tax_rate_retirement_value']/100;
                                        $np = $n/100;
                                        $pmt1 = $leftmeta['initial_investment_retirement'];
                                        $interest = $i*(1-$n);
                                        $pvi = "";
                                        for ($k=1; $k <= $n ; $k++) 
                                        { 
                                            if($k == 1)
                                            {
                                                $pvi = $pv*(1+$interest) - $pmt;
                                            }
                                            else
                                            {
                                                $pvi = $pvi*(1+$interest) - $pmt;
                                            }
                                        }
                                        $terms='';
                                        $irs = round(($i*(1-$t))/12,6);
                                        $nrs = $n*12;
                                        $pmt2 = round($pv/((pow(1+$irs, $nrs)-1)/$irs),2);
                                        $pmt3 = $pv*(pow((1+$irs), $nrs));
                                        for ($j=0; $j <= $nrs; $j++) 
                                        { 
                                            $pmt3 = $pmt3 + $pmt*pow((1+$irs), $j); 
                                        } 
                                        $finalpmt = round($pmt3,2);
                                    }
                                    ?>
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Required Savings for Retirement:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    
													<select name="retirement_scenario_required_savings_for_retirement" id="retirement_scenario_required_savings_for_retirement" class="form-control">
													<option>Please Select</option>
													<option value="Retirement Lifestyle" <?php if($leftmeta['retirement_scenario_required_savings_for_retirement'] == "Retirement Lifestyle"){ echo "selected"; } ?>>Retirement Lifestyle</option>
													</select>
													
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-desired-annual-retirement">
                                                        <label>Desired Annual Income( after tax)</label>
                                                        <input class="range-slider-desired-annual-retirement__range" type="range" value="<?= $leftmeta['range_slider_desired_annual_retirement_value'] ?>" min="12000" max="500000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-desired-annual-retirement-value" id="range-slider-desired-annual-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_desired_annual_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-5">
                                                    <div class="available-morgate">
                                                        <label>Age option</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <select id="range-slider-age-option-retirement-value" name="range-slider-age-option-retirement-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_age_option_retirement_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 7px;">
                                                    To
                                                </div>
                                                <div class="col-lg-3">
                                                    <select  id="range-slider-ageto-option-retirement-value" name="range-slider-ageto-option-retirement-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_ageto_option_retirement_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-payment-frequency-retirement">
                                                        <label>Payment Frequency</label>
                                                        <input class="range-slider-payment-frequency-retirement__range" type="range" value="<?= $leftmeta['range_slider_payment_frequency_retirement_value'] ?>" min="0" max="30">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-payment-frequency-retirement-value" id="range-slider-payment-frequency-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_payment_frequency_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="initial-investment-retirement">
                                                        <label>Inflation Investment</label>
                                                        <input class="initial-investment-retirement__range" type="range" value="<?= $leftmeta['initial_investment_retirement'] ?>" min="0" max="10000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="initial-investment-retirement" id="initial-investment-retirement" class="form-control" value="<?= $leftmeta['initial_investment_retirement'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-return-retirement">
                                                        <label>Average Return</label>
                                                        <input class="range-slider-average-return-retirement__range" type="range" value="<?= $leftmeta['range_slider_average_return_retirement_value'] ?>" min="0" max="20">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-return-retirement-value" id="range-slider-average-return-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_average_return_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-tax-rate-retirement">
                                                        <label>Average Tax Rate</label>
                                                        <input class="range-slider-average-tax-rate-retirement__range" type="range" value="<?= $leftmeta['range_slider_average_tax_rate_retirement_value'] ?>" min="0" max="50">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-tax-rate-retirement-value" id="range-slider-average-tax-rate-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_average_tax_rate_retirement_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!--<span class="penny-hello3"> You need to save $<strong id="rspmt"><?=$pmt2?></strong> per month to a taxable <br>savings account from age <strong id="rsage"><?=$leftmeta['range_slider_ageto_option_retirement_value']?></strong> to <strong id="rsage2"><?=$leftmeta['range_slider_ageto_option_retirement_value']?></strong>. As of<br> age (start payment age), the value will be $<strong  id="rsfpmt"><?=$finalpmt?></strong> .</span>-->
                                    
									
											<span class="penny-hello3"> To meet your retirement income goal of $<strong  id="rsfpmt"><?=$finalpmt?></strong>, you will need to save a minimum of $<strong id="rspmt"><?=$pmt2?></strong> each month.</span>
											<div id="scenario_graph"></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="current_year" id="current_year" value="<?=date('Y')?>">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and return to dashboard">
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
                            <CENTER><h4>Retirement Available Savings</h4></CENTER>
                            <?php
                                if($leftmeta['range_slider_intial_investment_morgate_retirement_value'] !=0 &&   $leftmeta['range_slider_saving_amount_morgate_retirement_value'] !=0 && $leftmeta['range_slider_average_return_morgate_retirement_value'] !=0 && $leftmeta['range_slider_ageto_option_morgate_retirement_value'] !=0 && $leftmeta['range_slider_age_option_morgate_retirement_value'] !=0 && $leftmeta['range_slider_average_tax_rate_morgate_retirement_value'] !=0 )
                                { 
                                    $pvras = $leftmeta['range_slider_intial_investment_morgate_retirement_value'];
                                    $pmtras = $leftmeta['range_slider_saving_amount_morgate_retirement_value'];
                                    $iras = $leftmeta['range_slider_average_return_morgate_retirement_value']/100;
                                    $nras = $leftmeta['range_slider_ageto_option_morgate_retirement_value']-$leftmeta['range_slider_age_option_morgate_retirement_value'];
                                    $tras = $leftmeta['range_slider_average_tax_rate_morgate_retirement_value']/100;
                                    $yras = $nras/100;
                                    $interestras = $iras*(1-$yras);
                                    $iras1 = round(($iras*(1-$tras))/12,6);
                                    $pmtras1 = $pvras*(pow((1+$iras1), $nras));
                                    for ($j=0; $j <= $nras; $j++) 
                                    { 
                                        $pmtras1 = $pmtras1 + $pmtras*pow((1+$iras1), $j); 
                                    } 
                                    $finalpmtras = round($pmtras1,2);
                                    $nraspv = $nras*12;
                                    $finalpvras = round($pmtras*((pow(1+$iras1, $nraspv)-1)/$iras1),2);
                                    $finalpmtras1 = round($pvras/((1-(1/(pow(1+$interestras, $nraspv))))/$interestras),2);
                                }
                            ?>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="mortgage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="retirement_scenario_mortgage_frm" id="retirement_scenario_mortgage_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Available Savings for Retirement:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="retirement_scenario_available_savings_for_retirement" id="retirement_scenario_available_savings_for_retirement" class="form-control" value="<?= $leftmeta['retirement_scenario_available_savings_for_retirement'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-intial-investment-morgate-retirement">
                                                        <label>Initial Investment</label>
                                                        <input class="range-slider-intial-investment-morgate-retirement__range" type="range" value="<?= $leftmeta['range_slider_intial_investment_morgate_retirement_value'] ?>" min="0" max="10000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-intial-investment-morgate-retirement-value" id="range-slider-intial-investment-morgate-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_intial_investment_morgate_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-saving-amount-morgate-retirement">
                                                        <label>Savings Amount</label>
                                                        <input class="range-slider-saving-amount-morgate-retirement__range" type="range" value="<?= $leftmeta['range_slider_saving_amount_morgate_retirement_value'] ?>" min="0" max="96500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-saving-amount-morgate-retirement-value" id="range-slider-saving-amount-morgate-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_saving_amount_morgate_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Savings Frequency</label>
                                                    <select class="form-control" name="frequency-morgate-retirement" id="frequency-morgate-retirement">
                                                        <option value="">Savings Frequency</option>
                                                        <option value="Yearly" <?php if($leftmeta['frequency_morgate_retirement'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['frequency_morgate_retirement'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['frequency_morgate_retirement'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div> 
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-5">
                                                    <div class="available-morgate">
                                                        <label>Age option</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <select id="range-slider-age-option-morgate-retirement-value" name="range-slider-age-option-morgate-retirement-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_age_option_morgate_retirement_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 7px;">
                                                    To
                                                </div>
                                                <div class="col-lg-3">
                                                    <select  id="range-slider-ageto-option-morgate-retirement-value" name="range-slider-ageto-option-morgate-retirement-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_ageto_option_morgate_retirement_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>                                         
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-inflation-rate-morgate-retirement">
                                                        <label>Interest Rate</label>
                                                        <input class="range-slider-inflation-rate-morgate-retirement__range" type="range" value="<?= $leftmeta['range_slider_inflation_rate_morgate_retirement_value'] ?>" min="0" max="30">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-inflation-rate-morgate-retirement-value" id="range-slider-inflation-rate-morgate-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_inflation_rate_morgate_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-return-morgate-retirement">
                                                        <label>Average Return</label>
                                                        <input class="range-slider-average-return-morgate-retirement__range" type="range" value="<?= $leftmeta['range_slider_average_return_morgate_retirement_value'] ?>" min="0" max="20">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-return-morgate-retirement-value" id="range-slider-average-return-morgate-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_average_return_morgate_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-tax-rate-morgate-retirement">
                                                        <label>Average Tax Rate</label>
                                                        <input class="range-slider-average-tax-rate-morgate-retirement__range" type="range" value="<?= $leftmeta['range_slider_average_tax_rate_morgate_retirement_value'] ?>" min="0" max="50">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-tax-rate-morgate-retirement-value" id="range-slider-average-tax-rate-morgate-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_average_tax_rate_morgate_retirement_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!--<span class="penny-hello3">Based on your current savings strategy, you may be able<br> to attain a retirement income of $<strong id="finalpmtras"><?=$finalpmtras1?></strong>. As of Age <strong id="finalretireageras"><?=$leftmeta['range_slider_ageto_option_morgate_retirement_value']?></strong>, The Value of investment will be<br> $<strong id="finalpvras"><?=$leftmeta['range_slider_intial_investment_morgate_retirement_value']?></strong>.</span>-->
                                        
										
											<span class="penny-hello3">Your current savings plan may provide the equivalent of $<strong id="finalpmtras"><?=$finalpmtras1?></strong> a year in retirement income.  At retirement your available savings will be $<strong id="finalpvras"><?=$leftmeta['range_slider_intial_investment_morgate_retirement_value']?></strong>.</span>
											
										
										
										
										
										
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="current_year" id="current_year" value="<?=date('Y')?>">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and return to dashboard">
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
                            <CENTER><h4>Retirement Capital Needed</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="amortization_msg">
                                    <span></span>
                                </div>
                                <?php
                                    if($leftmeta['range_slider_current_market_rate_amortization_retirement_value'] !=0 &&   $leftmeta['range_slider_average_return_amortization_retirement_value'] !=0 && $leftmeta['range_slider_average_tax_rate_amortization_retirement_value'] !=0 && $leftmeta['range_slider_retirement_ageto_amortization_retirement_value'] !=0 && $leftmeta['range_slider_retirement_age_amortization_retirement_value'] !=0 && $leftmeta['range_slider_pmt_amortization_retirement'] !=0 )
                                    { 
                                        $pvrcn = $leftmeta['range_slider_current_market_rate_amortization_retirement_value'];
                                        $ircn = $leftmeta['range_slider_average_return_amortization_retirement_value']/100;
                                        $trcn = $leftmeta['range_slider_average_tax_rate_amortization_retirement_value'];
                                        $yrcn = $leftmeta['range_slider_retirement_ageto_amortization_retirement_value']-$leftmeta['range_slider_retirement_age_amortization_retirement_value'];
                                        $yyrcn = $yrcn/100;
                                        $pmtrcn = $leftmeta['range_slider_pmt_amortization_retirement'];
                                        $interestrcn = $ircn*(1-$yyrcn);
                                        $fpvrcn = "";
                                        for ($i=1; $i <= $yrcn ; $i++) 
                                        { 
                                            if($i ==  1)
                                            {
                                                $fpvrcn = ($pvrcn*(1+$interestrcn))-$pmtrcn;
                                            }
                                            else
                                            {
                                               $fpvrcn = ($fpvrcn*(1+$interestrcn))-$pmtrcn; 
                                            }
                                        }
                                        $finalpvcrn = round($fpvrcn,2);
                                    }
                                ?>
                                <form method="post" name="retirement_scenario_amortization_frm" id="retirement_scenario_amortization_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Retirement Capital Needed:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="retirement_scenario_retirement_capital_needed" id="retirement_scenario_retirement_capital_needed" class="form-control" value="<?= $leftmeta['retirement_scenario_retirement_capital_needed'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-9">
                                                    <div class="available-morgate">
                                                        <label>Invested at Age</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <select id="retirement_scenario_retirement_invested_age" name="retirement_scenario_retirement_invested_age" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=20; $i <=50 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['retirement_scenario_retirement_invested_age']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-current-market-rate-amortization-retirement">
                                                        <label>Desired After-Tax Income</label>
                                                        <input class="range-slider-current-market-rate-amortization-retirement__range" type="range" value="<?= $leftmeta['range_slider_current_market_rate_amortization_retirement_value'] ?>" min="12000" max="500000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-current-market-rate-amortization-retirement-value" id="range-slider-current-market-rate-amortization-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_current_market_rate_amortization_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-pmt-amortization-retirement">
                                                        <label>PMT</label>
                                                        <input class="range-slider-pmt-amortization-retirement__range" type="range" value="<?= $leftmeta['range_slider_pmt_amortization_retirement'] ?>" min="0" max="500000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-pmt-amortization-retirement" id="range-slider-pmt-amortization-retirement" class="form-control" value="<?= $leftmeta['range_slider_pmt_amortization_retirement'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-5">
                                                    <div class="available-morgate">
                                                        <label>Retirement Age</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <select id="range-slider-retirement-age-amortization-retirement-value" name="range-slider-retirement-age-amortization-retirement-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_retirement_age_amortization_retirement_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 7px;">
                                                    To
                                                </div>
                                                <div class="col-lg-3">
                                                    <select  id="range-slider-retirement-ageto-amortization-retirement-value" name="range-slider-retirement-ageto-amortization-retirement-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_retirement_ageto_amortization_retirement_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>   
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-annual-payout-amortization-retirement">
                                                        <label>Index At</label>
                                                        <input class="range-slider-annual-payout-amortization-retirement__range" type="range" value="<?= $leftmeta['range_slider_annual_payout_amortization_retirement_value'] ?>" min="0" max="30">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-annual-payout-amortization-retirement-value" id="range-slider-annual-payout-amortization-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_annual_payout_amortization_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-return-amortization-retirement-value">
                                                        <label>Average Return</label>
                                                        <input class="range-slider-average-return-amortization-retirement-value__range" type="range" value="<?= $leftmeta['range_slider_average_return_amortization_retirement_value'] ?>" min="0" max="20">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-return-amortization-retirement-value" id="range-slider-average-return-amortization-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_average_return_amortization_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-tax-rate-amortization-retirement-value">
                                                        <label>Average Tax Rate</label>
                                                        <input class="range-slider-average-tax-rate-amortization-retirement-value__range" type="range" value="<?= $leftmeta['range_slider_average_tax_rate_amortization_retirement_value'] ?>" min="0" max="50">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-tax-rate-amortization-retirement-value" id="range-slider-average-tax-rate-amortization-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_average_tax_rate_amortization_retirement_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-hello3">Your initial investment of $<strong id="datrcn"><?=$leftmeta['range_slider_current_market_rate_amortization_retirement_value']?></strong> can provide<br> you with an indexed, after-tax retirement income of <br>$<strong id="pvcrn"><?=$finalpvcrn?></strong>.</span>
                                            
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="current_year" id="current_year" value="<?=date('Y')?>">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and return to dashboard">
                                                <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="capitalavailable">
                            <CENTER><h4>Retirement Capital Available</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="capitalavailable_msg">
                                    <span></span>
                                </div>
                                <?php
                                if($leftmeta['range_slider_current_value_amortization_capitalavailable_value'] !=0 &&   $leftmeta['range_slider_average_return_capital_retirement_value'] !=0 && $leftmeta['range_slider_average_tax_rate_capital_retirement_value'] !=0 && $leftmeta['range_slider_retirement_ageto_capital_retirement_value'] !=0 && $leftmeta['range_slider_retirement_age_capital_retirement_value'] !=0 )
                                    { 
                                        $pvrca = $leftmeta['range_slider_current_value_amortization_capitalavailable_value'];
                                        $irca = $leftmeta['range_slider_average_return_capital_retirement_value']/100;
                                        $trca = $leftmeta['range_slider_average_tax_rate_capital_retirement_value']/100;
                                        $interestrca = $irca*(1-$trca);
                                        $nrca = $leftmeta['range_slider_retirement_ageto_capital_retirement_value']-$leftmeta['range_slider_retirement_age_capital_retirement_value'];
                                        $finalfvrca = round($pvrca*(pow(1+$interestrca, $nrca)));
                                        $finalpmtrca = round($finalfvrca/((1-(1/(pow(1+$interestrca, $nrca))))/$interestrca)); 
                                    }      
                                ?>
                                <form method="post" name="retirement_scenario_capitalavailable_frm" id="retirement_scenario_capitalavailable_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-current-value-amortization-capitalavailable">
                                                        <label>Initial Investment</label>
                                                        <input class="range-slider-current-value-amortization-capitalavailable__range" type="range" value="<?= $leftmeta['range_slider_current_value_amortization_capitalavailable_value'] ?>" min="0" max="10000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-current-value-amortization-capitalavailable-value" id="range-slider-current-value-amortization-capitalavailable-value" class="form-control" value="<?= $leftmeta['range_slider_current_value_amortization_capitalavailable_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-9">
                                                    <div class="available-morgate">
                                                        <label>Invested at Age</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <select id="amortization_scenario_retirement_invested_age" name="amortization_scenario_retirement_invested_age" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=20; $i <=50 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['amortization_scenario_retirement_invested_age']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-5">
                                                    <div class="available-morgate">
                                                        <label>Retirement Age</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <select id="range-slider-retirement-age-capital-retirement-value" name="range-slider-retirement-age-capital-retirement-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_retirement_age_capital_retirement_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 7px;">
                                                    To
                                                </div>
                                                <div class="col-lg-3">
                                                    <select  id="range-slider-retirement-ageto-capital-retirement-value" name="range-slider-retirement-ageto-capital-retirement-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_retirement_ageto_capital_retirement_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>  
                                            <!-- <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-annual-payout-capitalavailable">
                                                        <label>Annual Payout</label>
                                                        <input class="range-slider-annual-payout-capitalavailable__range" type="range" value="<?= $leftmeta['range_slider_annual_payout_capitalavailable_value'] ?>" min="0" max="500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-annual-payout-acapitalavailable-value" id="range-slider-annual-payout-capitalavailable-value" class="form-control" value="<?= $leftmeta['range_slider_annual_payout_capitalavailable_value'] ?>">
                                                </div>
                                            </div> -->                                         
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-inflation-rate-capitalavailable">
                                                        <label>Index at</label>
                                                        <input class="range-slider-inflation-rate-capitalavailable__range" type="range" value="<?= $leftmeta['range_slider_inflation_rate_capitalavailable_value'] ?>" min="0" max="30">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-inflation-rate-capitalavailable-value" id="range-slider-inflation-rate-capitalavailable-value" class="form-control" value="<?= $leftmeta['range_slider_inflation_rate_capitalavailable_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-return-capital-retirement-value">
                                                        <label>Average Return</label>
                                                        <input class="range-slider-average-return-capital-retirement-value__range" type="range" value="<?= $leftmeta['range_slider_average_return_capital_retirement_value'] ?>" min="0" max="20">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-return-capital-retirement-value" id="range-slider-average-return-capital-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_average_return_capital_retirement_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-tax-rate-capital-retirement-value">
                                                        <label>Average Tax Rate</label>
                                                        <input class="range-slider-average-tax-rate-capital-retirement-value__range" type="range" value="<?= $leftmeta['range_slider_average_tax_rate_capital_retirement_value'] ?>" min="0" max="50">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-tax-rate-capital-retirement-value" id="range-slider-average-tax-rate-capital-retirement-value" class="form-control" value="<?= $leftmeta['range_slider_average_tax_rate_capital_retirement_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                           <span class="penny-hello3">Your initial investment of $<strong id="datrcn"><?=$leftmeta['range_slider_current_market_rate_amortization_retirement_value']?></strong> can provide you <br>with an indexed, after-tax retirement income of <br>$<strong id="pvcrn"><?=$finalpvcrn?></strong>.</span>
                                           
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="current_year" id="current_year" value="<?=date('Y')?>">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and return to dashboard">
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
<style>
    .penny-hello3{
         font-size: 16px;
    text-align: justify-all;
    }
</style>