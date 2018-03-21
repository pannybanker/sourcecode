<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Payout Scenario Tools</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Payout Scenario Tools
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#payment" data-toggle="tab" aria-expanded="true">Indexed Payout</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Life Annuity Payout</a>
                        </li>
                        <li class=""><a href="#amortization " data-toggle="tab" aria-expanded="false">Term Annuity Payout</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="payment">
                            <CENTER><h4>Indexed Payout</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="payment_msg">
                                    <span></span>
                                </div>
                                <?php
                                    if($leftmeta['range_slider_initial_investment_payout_value'] !=0 &&   $leftmeta['range_slider_average_return_payout_value'] !=0 && $leftmeta['range_slider_average_tax_rate_payout_value'] !=0 && $leftmeta['range_slider_retirement_age_payout_value'] !=0 && $leftmeta['range_slider_retirement_ageto_payout_value'] !=0 && $leftmeta['range_slider_interest_payout_value'] !=0 )
                                    { 
                                        $pvip = $leftmeta['range_slider_initial_investment_payout_value'];
                                        $iip = $leftmeta['range_slider_average_return_payout_value']/100;
                                        $tip = $leftmeta['range_slider_average_tax_rate_payout_value']/100;
                                        $interestip = $iip*(1-$tip);
                                        $age = $leftmeta['range_slider_retirement_age_payout_value'];
                                        $age2 = $leftmeta['range_slider_retirement_ageto_payout_value'];
                                        $infip = $leftmeta['range_slider_interest_payout_value']/100;
                                        $nip = $age2-$age;
                                        $fvip = round($pvip*(pow(1+$interestip, $nip)),2);
                                        $iitip = round((((1+$iip)*(1+$infip))-1)*(1-$tip),3);
                                        $pmtip = round($fvip/((1-(1/(pow(1+$iitip, $nip))))/$iitip),2);
                                    }
                                ?>
                                <form method="post" name="payout_scenario_payment_frm" id="payout_scenario_payment_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Payout purpose:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="payout_scenario_payout_purpose" id="payout_scenario_payout_purpose" class="form-control" value="<?= $leftmeta['payout_scenario_payout_purpose'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-initial-investment-payout">
                                                        <label>Current Value</label>
                                                        <input class="range-slider-initial-investment-payout__range" type="range" value="<?= $leftmeta['range_slider_initial_investment_payout_value'] ?>" min="0" max="10000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-initial-investment-payout-value" id="range-slider-initial-investment-payout-value" class="form-control" value="<?= $leftmeta['range_slider_initial_investment_payout_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-5">
                                                    <div class="available-morgate">
                                                        <label>Payout Period</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <select id="range-slider-retirement-age-payout-value" name="range-slider-retirement-age-payout-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_retirement_age_payout_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 7px;">
                                                    To
                                                </div>
                                                <div class="col-lg-3">
                                                    <select  id="range-slider-retirement-ageto-payout-value" name="range-slider-retirement-ageto-payout-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_retirement_ageto_payout_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>  
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Payment Frequency</label>
                                                    <select class="form-control" name="paymentfrequency -payout" id="paymentfrequency-payout">
                                                        <option value="">Payment Frequency</option>
                                                        <option value="Yearly" <?php if($leftmeta['paymentfrequency_payout'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['paymentfrequency_payout'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['paymentfrequency_payout'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-interest-payout">
                                                        <label>Index at</label>
                                                        <input class="range-slider-interest-payout__range" type="range" value="<?= $leftmeta['range_slider_interest_payout_value'] ?>" min="0" max="30">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-interest-payout-value" id="range-slider-interest-payout-value" class="form-control" value="<?= $leftmeta['range_slider_interest_payout_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-return-payout-value">
                                                        <label>Average Return</label>
                                                        <input class="range-slider-average-return-payout-value__range" type="range" value="<?= $leftmeta['range_slider_average_return_payout_value'] ?>" min="0" max="20">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-return-payout-value" id="range-slider-average-return-payout-value" class="form-control" value="<?= $leftmeta['range_slider_average_return_payout_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-tax-rate-payout-value">
                                                        <label>Average Tax Rate</label>
                                                        <input class="range-slider-average-tax-rate-payout-value__range" type="range" value="<?= $leftmeta['range_slider_average_tax_rate_payout_value'] ?>" min="0" max="50">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-tax-rate-payout-value" id="range-slider-average-tax-rate-payout-value" class="form-control" value="<?= $leftmeta['range_slider_average_tax_rate_payout_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-hello3">Your investment of $<strong id="pvip"><?=$leftmeta['range_slider_initial_investment_payout_value']?></strong> can provide an indexed,<br> annual after-tax payout of $<strong id="pmtip"><?=$pmtip?></strong> for <br><strong id="ageip"><?=$leftmeta['range_slider_retirement_age_payout_value']?></strong> years.</span>
                                            

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
                            <CENTER><h4>Life Annuity Payout</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="mortgage_msg">
                                    <span></span>
                                </div>
                                <?php
                                    if($leftmeta['range_slider_initial_investment_mortgage_payout_value'] !=0 &&   $leftmeta['range_slider_interest_mortgage_payout_value'] !=0 && $leftmeta['range_slider_mortgag_ageto_payout_value'] !=0 && $leftmeta['range_slider_mortgag_age_payout_value'] !=0 )
                                    { 
                                        $lappv = $leftmeta['range_slider_initial_investment_mortgage_payout_value'];
                                        $lapi = $leftmeta['range_slider_interest_mortgage_payout_value']/100;
                                        $lapn =  $leftmeta['range_slider_mortgag_ageto_payout_value']-$leftmeta['range_slider_mortgag_age_payout_value'];
                                        $lappmt = round($lappv/((1-(1/(pow(1+$lapi, $lapn)))/$lapi)),2); 
                                    }
                                ?>
                                <form method="post" name="payout_scenario_mortgage_frm" id="payout_scenario_mortgage_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Life Annuity Funding:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="payout_scenario_life_annuity_funding" id="payout_scenario_life_annuity_funding" class="form-control" value="<?= $leftmeta['payout_scenario_life_annuity_funding'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-initial-investment-mortgage-payout">
                                                        <label>Initial Investment</label>
                                                        <input class="range-slider-initial-investment-mortgage-payout__range" type="range" value="<?= $leftmeta['range_slider_initial_investment_mortgage_payout_value'] ?>" min="0" max="10000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-initial-investment-mortgage-payout-value" id="range-slider-initial-investment-mortgage-payout-value" class="form-control" value="<?= $leftmeta['range_slider_initial_investment_mortgage_payout_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Payment Frequency</label>
                                                    <select class="form-control" name="paymentfrequency-mortgage-payout" id="paymentfrequency-mortgage-payout">
                                                        <option value="">Payment Frequency</option>
                                                        <option value="Monthly" <?php if($leftmeta['paymentfrequency_mortgage_payout'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Quarterly" <?php if($leftmeta['paymentfrequency_mortgage_payout'] == 'Quarterly'){ ?> selected <?php } ?> >Quarterly</option>
                                                        <option value="Semi-Annual" <?php if($leftmeta['paymentfrequency_mortgage_payout'] == 'Semi-Annual'){ ?> selected <?php } ?> >Semi-Annual</option>

                                                        <option value="Annual" <?php if($leftmeta['paymentfrequency_mortgage_payout'] == 'Annual'){ ?> selected <?php } ?> >Annual</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                             <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-5">
                                                    <div class="available-morgate">
                                                        <label>Age Option</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <select id="range-slider-mortgag-age-payout-value" name="range-slider-mortgag-age-payout-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_mortgag_age_payout_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 7px;">
                                                    To
                                                </div>
                                                <div class="col-lg-3">
                                                    <select  id="range-slider-mortgag-ageto-payout-value" name="range-slider-mortgag-ageto-payout-value" class="form-control">
                                                        <option value="">Age</option>
                                                        <?php
                                                            for ($i=50; $i <=100 ; $i++) 
                                                            { 
                                                       ?>
                                                                <option value="<?=$i?>" <?php if($leftmeta['range_slider_mortgag_ageto_payout_value']==$i){ echo 'selected'; } ?>><?=$i?></option>
                                                       <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>  
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-interest-mortgage-payout">
                                                        <label>Interest Rate</label>
                                                        <input class="range-slider-interest-mortgage-payout__range" type="range" value="<?= $leftmeta['range_slider_interest_mortgage_payout_value'] ?>" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-interest-mortgage-payout-value" id="range-slider-interest-mortgage-payout-value" class="form-control" value="<?= $leftmeta['range_slider_interest_mortgage_payout_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-tax-rate-mortgage-payout">
                                                        <label>Average Tax Rate</label>
                                                        <input class="range-slider-average-tax-rate-mortgage-payout__range" type="range" value="<?= $leftmeta['range_slider_average_tax_rate_mortgage_payout'] ?>" min="0" max="50">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-tax-rate-mortgage-payout" id="range-slider-average-tax-rate-mortgage-payout" class="form-control" value="<?= $leftmeta['range_slider_average_tax_rate_mortgage_payout'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-hello3">Your annuity worth $<strong id="lappv"><?=$lappv?></strong> can provide <br>a maximum life-time payout of<br> $<strong id="lappmt"><?=$lappmt?></strong> per year</span>
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
                            <CENTER><h4>Term Annuity Payout</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="amortization_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="payout_scenario_amortization_frm" id="payout_scenario_amortization_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Term Annuity Funding:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="payout_scenario_term_annuity_funding" id="payout_scenario_term_annuity_funding" class="form-control" value="<?= $leftmeta['payout_scenario_term_annuity_funding'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-initial-investment-amortization-payout">
                                                        <label>Initial Investment</label>
                                                        <input class="range-slider-initial-investment-amortization-payout__range" type="range" value="<?= $leftmeta['range_slider_initial_investment_amortization_payout_value'] ?>" min="0" max="500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-initial-investment-amortization-payout-value" id="range-slider-initial-investment-amortization-payout-value" class="form-control" value="<?= $leftmeta['range_slider_initial_investment_amortization_payout_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Payment Frequency</label>
                                                    <select class="form-control" name="paymentfrequency-amortization-payout" id="paymentfrequency-amortization-payout">
                                                        <option value="">Payment Frequency</option>
                                                        <option value="Yearly" <?php if($leftmeta['paymentfrequency_amortization_payout'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['paymentfrequency_amortization_payout'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['paymentfrequency_amortization_payout'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-interest-amortization-payout">
                                                        <label>Interest Rate</label>
                                                        <input class="range-slider-interest-amortization-payout__range" type="range" value="<?= $leftmeta['range_slider_interest_amortization_payout_value'] ?>" min="0" max="100">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-interest-amortization-payout-value" id="range-slider-interest-amortization-payout-value" class="form-control" value="<?= $leftmeta['range_slider_interest_amortization_payout_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-hello3">Your annuity worth $_______(reference Initial investment) can provide<br> a maximum life-time payout of<br> $_________ per year</span>


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