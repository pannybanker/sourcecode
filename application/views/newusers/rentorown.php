<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<style>
td {
    padding: 5px 15px;
}
th {
    width: 25%;
}
</style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">RENT or OWN</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    RENT or OWN
                </div>
                <div class="panel-body">
                    <CENTER><h4>Payment</h4></CENTER>
                    <!-- /.panel-body -->
                    <div class="panel-body">
                        <div class="alert hide" id="msg">
                            <span></span>
                        </div>
                        <form method="post" name="rentorown_frm" id="rentorown_frm" action="#">
                            <?php
                                if($leftmeta['rentorown_current_monthly_rent'] != "" && $leftmeta['rentorown_annual_rent_increase'] != "" && $leftmeta['rentorown_anticipated_home_price'] != "" && $leftmeta['rentorown_available_down_payment'] !="" && $leftmeta['rentorown_anticipated_home_increase'] !="" && $leftmeta['rentorown_intrest_rate'] !="" && $leftmeta['rentorown_amoritization'] !="" && $leftmeta['rentorown_comparison_timeframe'] !="")
                                {
                                    $ar = $leftmeta['rentorown_current_monthly_rent']*12;
                                    $ri = $leftmeta['rentorown_annual_rent_increase']/100;
                                    $yr1 = $ar;
                                    $yr2 = round(($yr1*(1+$ri))+$yr1,2);
                                    $yr3 = round(($yr2*(1+$ri))+$yr1,2);
                                    $yr4 = round(($yr3*(1+$ri))+$yr1,2);
                                    $yr5 = round(($yr4*(1+$ri))+$yr1,2);
                                    $yr6 = round(($yr5*(1+$ri))+$yr1,2);
                                    $yr7 = round(($yr6*(1+$ri))+$yr1,2);
                                    $yr8 = round(($yr7*(1+$ri))+$yr1,2);
                                    $yr9 = round(($yr8*(1+$ri))+$yr1,2);
                                    $yr10 = round(($yr9*(1+$ri))+$yr1,2);
                                    $ahp = $leftmeta['rentorown_anticipated_home_price'];
                                    $dp = $leftmeta['rentorown_available_down_payment'];
                                    $pv = $ahp-$dp;
                                    $hvi = $leftmeta['rentorown_anticipated_home_increase'];
                                    $i = $leftmeta['rentorown_intrest_rate'];
                                    $n = $leftmeta['rentorown_amoritization']*12;
                                    $ir = round(($i/12)/100,6);

                                    $pmt = round($pv*($ir*(pow(1+$ir, $n)))/((pow(1+$ir, $n))-1),2);
                                    $ypmt1 = round($pmt*12,2);
                                    $ypmt2 = round(($ypmt1*(1+$ri))+$ypmt1,2);
                                    $ypmt3 = round(($ypmt2*(1+$ri))+$ypmt1,2);
                                    $ypmt4 = round(($ypmt3*(1+$ri))+$ypmt1,2);
                                    $ypmt5 = round(($ypmt4*(1+$ri))+$ypmt1,2);
                                    $ypmt6 = round(($ypmt5*(1+$ri))+$ypmt1,2);
                                    $ypmt7 = round(($ypmt6*(1+$ri))+$ypmt1,2);
                                    $ypmt8 = round(($ypmt7*(1+$ri))+$ypmt1,2);
                                    $ypmt9 = round(($ypmt8*(1+$ri))+$ypmt1,2);
                                    $ypmt10 = round(($ypmt9*(1+$ri))+$ypmt1,2);
                                    $tc = $leftmeta['rentorown_comparison_timeframe'];
                                    $cy = $leftmeta['rentorown_comparison_timeframe']*12;
                                    $m_ammount = 0;
                                    $count = 0;
                                    for ($i=$cy; $i >=1 ; $i--) 
                                    {
                                        $cvalue = 0; 
                                        if($count == 0)
                                        {
                                            $m_ammount = $pv*(pow(1+$ir, $i));
                                        }
                                        else
                                        {
                                            $cvalue = $pmt*(pow(1+$ir, $i));
                                        }
                                        $m_ammount = $m_ammount-$cvalue;
                                        $count++;
                                    }
                                    $mb = round($m_ammount-$pmt,2);
                                    $ei = 0;
                                    if($tc == 1)
                                    {
										$mortgage = round(($yr1 - $ypmt1), 2);
										$ei = round($ahp*(1+$ri)-$mb,2);  
                                    }
                                    if($tc == 2)
                                    {
										$mortgage = round(($yr2 - $ypmt2), 2);
                                        $ei = round($ahp*(pow(1+$ri, 2))-$mb,2);
                                    }
                                    if($tc == 3)
                                    {
										$mortgage = round(($yr3 - $ypmt3), 2);
                                        $ei = round($ahp*(pow(1+$ri, 3))-$mb,2);
                                    }
                                    if($tc == 4)
                                    {
										$mortgage = round(($yr4 - $ypmt4), 2);
                                        $ei = round($ahp*(pow(1+$ri, 4))-$mb,2);
                                    }
                                    if($tc == 5)
                                    {
										$mortgage = round(($yr5 - $ypmt5), 2);
                                        $ei = round($ahp*(pow(1+$ri, 5))-$mb,2);
                                    }
                                    if($tc == 6)
                                    {
										$mortgage = round(($yr6 - $ypmt6), 2);
                                        $ei = round($ahp*(pow(1+$ri, 6))-$mb,2);
                                    }
                                    if($tc == 7)
                                    {
										$mortgage = round(($yr7 - $ypmt7), 2);
                                        $ei = round($ahp*(pow(1+$ri, 7))-$mb,2);
                                    }
                                    if($tc == 8)
                                    {
										$mortgage = round(($yr8 - $ypmt8), 2);
                                        $ei = round($ahp*(pow(1+$ri, 8))-$mb,2);
                                    }
                                    if($tc == 9)
                                    {
										$mortgage = round(($yr9 - $ypmt9), 2);
                                        $ei = round($ahp*(pow(1+$ri, 9))-$mb,2);
                                    }
                                    if($tc == 10)
                                    {
										$mortgage = round(($yr10 - $ypmt10), 2);
                                        $ei = round($ahp*(pow(1+$ri, 10))-$mb,2);
                                    }                                    
                                }
                            ?>
                            <div class="row form">
                                <div class="col-lg-6">
                                    <h4>Enter Your Home Information</h4>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="rentorown_anticipated_home_price">
                                                <label>Anticipated Home Price</label>
                                                <input class="rentorown_anticipated_home_price__range" type="range" value="<?= $leftmeta['rentorown_anticipated_home_price'] ?>" min="5000" max="5000000">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            $
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="rentorown_anticipated_home_price" id="rentorown_anticipated_home_price" class="form-control" value="<?= $leftmeta['rentorown_anticipated_home_price'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="rentorown_available_down_payment">
                                                <label>Available Down Payment</label>
                                                <input class="rentorown_available_down_payment__range" type="range" value="<?= $leftmeta['rentorown_available_down_payment'] ?>" min="250" max="5000000">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            $
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="rentorown_available_down_payment" id="rentorown_available_down_payment" class="form-control" value="<?= $leftmeta['rentorown_available_down_payment'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="rentorown_amoritization">
                                                <label>Amoritization</label>
                                                <input class="rentorown_amoritization__range" type="range" value="<?= $leftmeta['rentorown_amoritization'] ?>" min="1" max="30">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            Year
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="rentorown_amoritization" id="rentorown_amoritization" class="form-control" value="<?= $leftmeta['rentorown_amoritization'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="rentorown_intrest_rate">
                                                <label>Intrest Rate</label>
                                                <input class="rentorown_intrest_rate__range" type="range" value="<?= $leftmeta['rentorown_intrest_rate'] ?>" min="1" max="20">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            %
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="rentorown_intrest_rate" id="rentorown_intrest_rate" class="form-control" value="<?= $leftmeta['rentorown_intrest_rate'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="rentorown_anticipated_home_increase">
                                                <label>Anticipated Home Value Increase</label>
                                                <input class="rentorown_anticipated_home_increase__range" type="range" value="<?= $leftmeta['rentorown_anticipated_home_increase'] ?>" min="0" max="30">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            %
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="rentorown_anticipated_home_increase" id="rentorown_anticipated_home_increase" class="form-control" value="<?= $leftmeta['rentorown_anticipated_home_increase'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h4>Enter Your Rent Information</h4>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="rentorown_current_monthly_rent">
                                                <label>Current monthly Rent</label>
                                                <input class="rentorown_current_monthly_rent__range" type="range" value="<?= $leftmeta['rentorown_current_monthly_rent'] ?>" min="0" max="10000">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            $
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="rentorown_current_monthly_rent" id="rentorown_current_monthly_rent" class="form-control" value="<?= $leftmeta['rentorown_current_monthly_rent'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="rentorown_annual_rent_increase">
                                                <label>Anticipated Annual Rent Increase</label>
                                                <input class="rentorown_annual_rent_increase__range" type="range" value="<?= $leftmeta['rentorown_annual_rent_increase'] ?>" min="0" max="30">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            %
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="rentorown_annual_rent_increase" id="rentorown_annual_rent_increase" class="form-control" value="<?= $leftmeta['rentorown_annual_rent_increase'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <div class="rentorown_comparison_timeframe">
                                                <label>Comparison Timeframe</label>
                                                <input class="rentorown_comparison_timeframe__range" type="range" value="<?= $leftmeta['rentorown_comparison_timeframe'] ?>" min="1" max="10">
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-top: 35px;">
                                            Year
                                        </div>
                                        <div class="col-lg-3" style="padding-top: 28px;">
                                            <input type="text" name="rentorown_comparison_timeframe" id="rentorown_comparison_timeframe" class="form-control" value="<?= $leftmeta['rentorown_comparison_timeframe'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <p>
                                          
										After <strong id="cy"><?=number_format($tc)?></strong> years you will have accumulated $<strong id="ei"><?php echo number_format($ei); ?></strong> equity in your home.  Your mortgage payments will be $<strong id="mb"><?=number_format($mortgage)?></strong> less than your rental payments for the same time period.
										
										</p>
										<br/>
										<br/>
										<br/>
										<a href="javascript:;" class="btn btn-primary" id="get_chart">Chart</a>
										<div id="graph"></div>
                                    </div>
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
			</div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<div class="popupBlocker" style="display: none;height: 100%;width: 100%;position: fixed;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.3);z-index: 9;">
    <div class="view popup help" id="table-popup" role="dialog" style="visibility: visible;display: block;z-index: 200;position: relative;left: 30%;top: 25%;border: 1px solid #e2e2e2;margin-top: 0px;padding: 5px 10px;width: 710px;background-color: #fff;">
        <div class="section" id="section-popupHeader">
            <div id="img-popupIcon"></div>
            <div id="lbl-popupTitle" class="font-medium"></div>
            <input type="button" class="popup-close btn btn-primary" value="X">
        </div>
        <div class="section" id="section-popupMiddle">
            <p id="bdy-popupContent" class="font-small"></p>
            <div class="datagrid">
                <table>
                    <thead>
                        <tr>
                            <th>Period</th>
                            <th>Cumulative Rental Payments</th>
                            <th>Cumulative Mortgage Payments</th>
                            <th>Cumulative Equity</th>
                            <th>Difference</th>
                        </tr>
                    </thead>
                    <tbody id="result-bar-graph"></tbody>
                </table>
            </div>
			
            <p></p>
        </div>
    </div>
</div>
