<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Capital Scenario Tool</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Capital Scenario Tool
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#payment" data-toggle="tab" aria-expanded="true">Capital Growth</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Capital Savings</a>
                        </li>
                        <li class=""><a href="#amortization " data-toggle="tab" aria-expanded="false">Capital Longevity</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="payment">
                            <CENTER><h4>Capital Growth</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="payment_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="capital_scenario_payment_frm" id="capital_scenario_payment_frm" action="#">
                                    <?php
                                    if($leftmeta['range_slider_average_return_value'] !=0 &&   $leftmeta['range_slider_average_tax_capital_value'] !=0 && $leftmeta['range_slider_inflation_rate_capital_value'] !=0 && $leftmeta['range_slider_market_value_capital_value'] !=0  )
                                    { 
                                        $i = $leftmeta['range_slider_average_return_value']/100;
                                        $t = $leftmeta['range_slider_average_tax_capital_value']/100;
                                        $inf = $leftmeta['range_slider_inflation_rate_capital_value']/100;
                                        $pv = "";
                                        if ($leftmeta['range_slider_market_value_capital_value'] != "")
                                        { 
                                            $pv = $leftmeta['range_slider_market_value_capital_value'];
                                        } 
                                        else 
                                        { 
                                            $pv =  $taxable_investment; 
                                        }
                                        $n = $leftmeta['years_capital'];
                                        $r = ($i*(1-$t))-$inf;
                                        $fvn = round($pv*(pow(1+$i, $n)),2);
                                        $fvrt = round($pv*(pow(1+$r, $n)));
                                    }
                                    ?>
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Capital Growth Purpose:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="capital_scenario_growth_purpose" id="capital_scenario_growth_purpose" class="form-control" value="<?= $leftmeta['capital_scenario_growth_purpose'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-market-value-capital">
                                                        <label>Current Market Value</label>
                                                        <input class="range-slider-market-value-capital__range" type="range" value="<?= $leftmeta['range_slider_market_value_capital_value'] ?>" min="0" max="10000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-market-value-capital-value" id="range-slider-market-value-capital-value" class="form-control" value="<?php if ($leftmeta['range_slider_market_value_capital_value'] != "") { echo $leftmeta['range_slider_market_value_capital_value']; } else { echo  $taxable_investment; } ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-tax-capital">
                                                        <label>Average Tax Rate</label>
                                                        <input class="range-slider-average-tax-capital__range" type="range" value="<?= $leftmeta['range_slider_average_tax_capital_value'] ?>" min="0" max="50">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-tax-capital-value" id="range-slider-average-tax-capital-value" class="form-control" value="<?= $leftmeta['range_slider_average_tax_capital_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-return">
                                                        <label>Average Return</label>
                                                        <input class="range-slider-average-return__range" type="range" value="<?= $leftmeta['range_slider_average_return_value'] ?>" min="0" max="20">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-return-value" id="range-slider-average-return-value" class="form-control" value="<?= $leftmeta['range_slider_average_return_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-9">
                                                    <div class="range-slider-average-return">
                                                        <label>Number of Years</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="number" name="years-capital" id="years-capital" class="form-control" value="<?= $leftmeta['years_capital'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-inflation-rate-capital">
                                                        <label>Inflation Rate</label>
                                                        <input class="range-slider-inflation-rate-capital__range" type="range" value="<?= $leftmeta['range_slider_inflation_rate_capital_value'] ?>" min="0" max="30">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-inflation-rate-capital-value" id="range-slider-inflation-rate-capital-value" class="form-control" value="<?= $leftmeta['range_slider_inflation_rate_capital_value'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-hello3">In <strong id="cpry"><?=$n?></strong> years, the $<strong id="cprpv"><?=$pv?></strong> you invested<br> will be worth $<strong id="cprfvn"><?=$fvn?></strong>, or $<strong id="cprfvrt"><?=$fvrt?></strong> after tax<br> and inflation.</span>
                                      

                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
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
                            <CENTER><h4>Capital Savings</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="mortgage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="capital_scenario_mortgage_frm" id="capital_scenario_mortgage_frm" action="#">
                                    <?php
                                    if( $leftmeta['range_slider_currmarket_morgate_capital_value'] !=0 && $leftmeta['range_slider_regular_saving_capital_value'] !=0 && $leftmeta['average_tax_rate_morgate_capital'] !=0 &&  $leftmeta['range_slider_inflation_rate_morgate_capital_value'] !=0 && $leftmeta['range_slider_required_return_morgate_capital_value'] != 0 )
                                    { 
                                        $terms='';
                                        if($leftmeta['frequency_morgate_capital']=='Weekly'){$terms = 52;}
                                        if($leftmeta['frequency_morgate_capital']=='Biweekly'){$terms = 26;}
                                        if($leftmeta['frequency_morgate_capital']=='Monthly'){$terms = 12;}
                                        $spv = $leftmeta['range_slider_currmarket_morgate_capital_value'];
                                        $pmt = $leftmeta['range_slider_regular_saving_capital_value'];
                                        $st = $leftmeta['average_tax_rate_morgate_capital']/100;
                                        $sinf = $leftmeta['range_slider_inflation_rate_morgate_capital_value']/100;
                                        $sia = $leftmeta['range_slider_required_return_morgate_capital_value']/100;
                                        $total_pmt = "";
                                        for ($j=1; $j <= $sn ; $j++) 
                                        { 
                                            $total_pmt = $total_pmt + ($pmt*round((pow(1+$si, $j)),3));
                                        }
                                        $fvna = round($total_pmt + ($spv*(pow(1+$si, $sn))),2);
                                        if($terms != "")
                                        {
                                            $si = round(($leftmeta['range_slider_required_return_morgate_capital_value']/100)/$terms,6);
                                            $sn = $leftmeta['years_capital_morgate_capital']*$terms;
                                            $r = round((($sia*(1-$st))-$sinf)/$terms,6);
                                        }
                                        $total_pmt_rt = "";
                                        for ($k=1; $k <= $sn ; $k++) 
                                        { 
                                            $total_pmt_rt = $total_pmt_rt + ($pmt*(pow(1+$r, $k)));
                                        }
                                        $fvrt = round($total_pmt_rt + ($spv*(pow(1+$r, $sn))),2);
                                    }
                                    ?>
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Capital Savings Purpose:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="capital_scenario_saving_purpose" id="capital_scenario_saving_purpose" class="form-control" value="<?= $leftmeta['capital_scenario_saving_purpose'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-currmarket-morgate-capital">
                                                        <label>Current Market Value</label>
                                                        <input class="range-slider-currmarket-morgate-capital__range" type="range" value="<?= $leftmeta['range_slider_currmarket_morgate_capital_value'] ?>" min="0" max="10000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-currmarket-morgate-capital-value" id="range-slider-currmarket-morgate-capital-value" class="form-control" value="<?= $leftmeta['range_slider_currmarket_morgate_capital_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-regular-saving-morgate-capital">
                                                        <label>Regular Savings</label>
                                                        <input class="range-slider-regular-saving-morgate-capital__range" type="range" value="<?= $leftmeta['range_slider_regular_saving_morgate_capital_value'] ?>" min="0" max="96500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-regular-saving-morgate-capital-value" id="range-slider-regular-saving-morgate-capital-value" class="form-control" value="<?= $leftmeta['range_slider_regular_saving_capital_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Payment Frequency</label>
                                                    <select class="form-control" name="frequency-morgate-capital" id="frequency-morgate-capital">
                                                        <option value="">Payment Frequency</option>
                                                        <option value="Monthly" <?php if($leftmeta['frequency_morgate_capital'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Biweekly" <?php if($leftmeta['frequency_morgate_capital'] == 'Biweekly'){ ?> selected <?php } ?> >Biweekly</option>
                                                        <option value="Weekly" <?php if($leftmeta['frequency_morgate_capital'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="average_tax_rate_morgate_capital">
                                                        <label>Average Tax Return</label>
                                                        <input class="average_tax_rate_morgate_capital__range" type="range" value="<?= $leftmeta['average_tax_rate_morgate_capital'] ?>" min="0" max="50">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="average_tax_rate_morgate_capital" id="average_tax_rate_morgate_capital" class="form-control" value="<?= $leftmeta['average_tax_rate_morgate_capital'] ?>">
                                                </div>
                                            </div>
                                                                                 
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-inflation-rate-morgate-capital">
                                                        <label>Inflation Rate</label>
                                                        <input class="range-slider-inflation-rate-morgate-capital__range" type="range" value="<?= $leftmeta['range_slider_inflation_rate_morgate_capital_value'] ?>" min="0" max="30">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-inflation-rate-morgate-capital-value" id="range-slider-inflation-rate-morgate-capital-value" class="form-control" value="<?= $leftmeta['range_slider_inflation_rate_morgate_capital_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-required-return-morgate-capital">
                                                        <label>Required Return</label>
                                                        <input class="range-slider-required-return-morgate-capital__range" type="range" value="<?= $leftmeta['range_slider_required_return_morgate_capital_value'] ?>" min="0" max="20">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-required-return-morgate-capital" id="range-slider-required-return-morgate-capital" class="form-control" value="<?= $leftmeta['range_slider_required_return_morgate_capital_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-9">
                                                    <div>
                                                        <label>Number of Years</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="number" name="years_capital_morgate_capital" id="years_capital_morgate_capital" class="form-control" value="<?= $leftmeta['years_capital_morgate_capital'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-hello3">In <strong id="csy"><?= $leftmeta['years_capital_morgate_capital'] ?></strong> years, you will have $<strong id="csna"><?=$fvna?></strong> from your <br>investment and $<strong id="csrt"><?=$fvrt?></strong> after <br>taxes and less inflation.</span>
                                         
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
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
                            <?php
                            if( $leftmeta['range_slider_average_rate_amortization_capital_value'] !=0 && $leftmeta['range_slider_inflation_rate_amortization_capital_value'] !=0 && $leftmeta['range_slider_current_market_rate_amortization_value'] !=0 &&  $leftmeta['range_slider_annual_payout_amortization_value'] !=0 && $leftmeta['frequency_amortization_start_year'] != 0 )
                            {
                                $icl = $leftmeta['range_slider_average_rate_amortization_capital_value']/100;
                                $tcl = $leftmeta['range_slider_inflation_rate_amortization_capital_value']/100;
                                $pvcl = $leftmeta['range_slider_current_market_rate_amortization_value'];
                                $pmt = $leftmeta['range_slider_annual_payout_amortization_value'];
                                $interest = $icl*(1-$tcl);
                                $pvy = "";
                                $ncl = $leftmeta['frequency_amortization_start_year']-(date('Y')+1);
                                for ($i=1; $i <= $ncl ; $i++) 
                                { 
                                    if($i == 1)
                                    {
                                        $pvy = ($pvcl*(1+$interest))-$pmt;
                                    }
                                    else
                                    {
                                        $pvy = ($pvy*(1+$interest))-$pmt;
                                    }
                                }
                                $pvy = round($pvy);
                                $pvay = "";
                                for ($i=1; $i <= $ncl ; $i++) 
                                { 
                                    if($i == 1)
                                    {
                                        $pvay = (round($pvcl*(pow((1+$interest), $ncl))*(1+$interest)))-$pmt;
                                    }
                                    else
                                    {
                                        $pvay = (round($pvay*(pow((1+$interest), $ncl))*(1+$interest)))-$pmt;
                                    }
                                }
                            }
                            ?>
                            <CENTER><h4>Capital Longevity</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="amortization_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="capital_scenario_amortization_frm" id="capital_scenario_amortization_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Capital Depletion Purpose:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="capital_scenario_depletion_purpose" id="capital_scenario_depletion_purpose" class="form-control" value="<?= $leftmeta['capital_scenario_depletion_purpose'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-current-market-rate-amortization">
                                                        <label>Current Market Value</label>
                                                        <input class="range-slider-current-market-rate-amortization__range" type="range" value="<?= $leftmeta['range_slider_current_market_rate_amortization_value'] ?>" min="0" max="10000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-current-market-rate-amortization-value" id="range-slider-current-market-rate-amortization-value" class="form-control" value="<?= $leftmeta['range_slider_current_market_rate_amortization_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-annual-payout-amortization">
                                                        <label>Annual Payout</label>
                                                        <input class="range-slider-annual-payout-amortization__range" type="range" value="<?= $leftmeta['range_slider_annual_payout_amortization_value'] ?>" min="12000" max="500000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-annual-payout-amortization-value" id="range-slider-annual-payout-amortization-value" class="form-control" value="<?= $leftmeta['range_slider_annual_payout_amortization_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Payment Frequency</label>
                                                    <select class="form-control" name="frequency-amortization-capital" id="frequency-amortization-capital">
                                                        <option value="" >Savings Frequency</option>
                                                        <option value="Yearly" <?php if($leftmeta['frequency_amortization_capital'] == 'Yearly'){ ?> selected <?php } ?> >Yearly</option>
                                                        <option value="Monthly" <?php if($leftmeta['frequency_amortization_capital'] == 'Monthly'){ ?> selected <?php } ?>>Monthly</option>
                                                        <option value="Weekly" <?php if($leftmeta['frequency_amortization_capital'] == 'Weekly'){ ?> selected <?php } ?> >Weekly</option>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="average-tax-rate-amortization-capital">
                                                        <label>Average Tax Rate</label>
                                                        <input class="average-tax-rate-amortization-capital__range" type="range" value="<?= $leftmeta['average_tax_rate_amortization_capital'] ?>" min="0" max="50">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="average-tax-rate-amortization-capital" id="average-tax-rate-amortization-capital" class="form-control" value="<?= $leftmeta['average_tax_rate_amortization_capital'] ?>">
                                                </div>
                                            </div>                                            
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-inflation-rate-amortization-capital">
                                                        <label>Inflation Rate</label>
                                                        <input class="range-slider-inflation-rate-amortization-capital__range" type="range" value="<?= $leftmeta['range_slider_inflation_rate_amortization_capital_value'] ?>" min="0" max="30">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-inflation-rate-amortization-capital-value" id="range-slider-inflation-rate-amortization-capital-value" class="form-control" value="<?= $leftmeta['range_slider_inflation_rate_amortization_capital_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-average-rate-amortization-capital">
                                                        <label>Average Rate</label>
                                                        <input class="range-slider-average-rate-amortization-capital__range" type="range" value="<?= $leftmeta['range_slider_average_rate_amortization_capital_value'] ?>" min="0" max="20">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-average-rate-amortization-capital-value" id="range-slider-average-rate-amortization-capital-value" class="form-control" value="<?= $leftmeta['range_slider_average_rate_amortization_capital_value'] ?>">
                                                </div>
                                            </div>
                                            <?php
                                                $year = date('Y')+1;
                                            ?>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Start Year</label>
                                                    <select class="form-control" name="frequency-amortization-start-year" id="frequency-amortization-start-year">
                                                        <option value="" >Start Year</option>
                                                        <?php
                                                            for ($i=0; $i <= 50 ; $i++) 
                                                            { 
                                                        ?>
                                                                <option value="<?=$year?>" <?php if($leftmeta['frequency_amortization_start_year'] == $year){ ?> selected <?php } ?> ><?=$year?></option>
                                                        <?php
                                                                $year++;
                                                            }
                                                        ?>
                                                    </select>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-hello3">Your investment of $<strong id="cspvy"><?=$pvy?></strong> can provide you <br>with an indexed, after-tax income of<br> $<strong id="cspvay"><?=$pvay?></strong> for <strong id="cspncl"><?=$ncl?></strong> years</span><br>
                                          
                                
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
<style type="text/css">
    .penny-hello3{
        font-size: 16px;
    text-align: justify-all;
    }
</style>