<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Life Insurance Scenario Tool </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Life Insurance Scenario Tool
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#payment" data-toggle="tab" aria-expanded="true">Life Coverage</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Income Coverage</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="payment">
                            <CENTER><h4>Life Coverage</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="payment_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="lifeinsurance_scenario_amortization_frm" id="lifeinsurance_scenario_amortization_frm" action="#">
                                    <?php
                                        $finalvalue = "";
                                        if($leftmeta['currdebts_payment'] =="" && $leftmeta['range_slider_saving_payment_value'] =="" && $leftmeta['range_slider_insurance_payment_value'] =="")
                                        {
                                            $finalvalue = ($life_coverage_amount+$saving_accounts+$taxable_investment)-($mastercard+$american_express+$visa+$retail+$personal_loan+$student_loan+$car_loan+$investment_loan+$business_loan+$consolidation_loan);
                                        }
                                        else
                                        {
                                            $finalvalue = ($leftmeta['range_slider_insurance_payment_value']+$leftmeta['range_slider_saving_payment_value'])-$leftmeta['currdebts_payment'];
                                        }
                                        
                                    ?>
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <!--<div class="col-lg-8">
                                                	<div class="range-slider-insurance-payment">
                                                    <label>Life Insurance Coverage Purpose:</label></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="lifeinsurance_scenario_coverage_purpose" id="lifeinsurance_scenario_coverage_purpose" class="form-control " value="<?= $leftmeta//['lifeinsurance_scenario_coverage_purpose'] ?>" min="0" max="10000000">
                                                </div>-->
                                                  <div class="col-lg-8">
                                                    <div class="range-slider-life-insurance_coverage_purpose">
                                                        <label>Life Insurance Coverage Purpose:</label>
                                                        <input class="range-slider-life-insurance_coverage_purpose__range" type="range" value="<?php if ($leftmeta['range-slider-life-insurance_coverage_purpose_value'] !="") { echo $leftmeta['range-slider-life-insurance_coverage_purpose_value']; }else{ echo $life_coverage_amount; } ?>" min="0" max="10000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="lifeinsurance-scenario-coverage-purpose" id="lifeinsurance-scenario-coverage-purpose-value" class="form-control" value="<?php if ($leftmeta['lifeinsurance_scenario_coverage_purpose'] !="") { echo $leftmeta['range_slider_insurance_payment_value']; }else{ echo $life_coverage_amount; } ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-insurance-payment">
                                                        <label>Current Insurance Coverage</label>
                                                        <input class="range-slider-insurance-payment__range" type="range" value="<?php if ($leftmeta['range_slider_insurance_payment_value'] !="") { echo $leftmeta['range_slider_insurance_payment_value']; }else{ echo $life_coverage_amount; } ?>" min="0" max="10000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-insurance-payment-value" id="range-slider-insurance-payment-value" class="form-control" value="<?php if ($leftmeta['range_slider_insurance_payment_value'] !="") { echo $leftmeta['range_slider_insurance_payment_value']; }else{ echo $life_coverage_amount; } ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-saving-payment">
                                                        <label>My Savings & Investments</label>
                                                        <input class="range-slider-saving-payment__range" type="range" value="<?php if ($leftmeta['range_slider_saving_payment_value'] !="") { echo $leftmeta['range_slider_saving_payment_value']; }else{ echo $saving_accounts+$taxable_investment; } ?>" min="0" max="5000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-saving-payment-value" id="range-slider-saving-payment-value" class="form-control" value="<?php if ($leftmeta['range_slider_saving_payment_value'] !="") { echo $leftmeta['range_slider_saving_payment_value']; }else{ echo $saving_accounts+$taxable_investment; } ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="currdebts-payment">
                                                        <label>My Current Debts</label>
                                                        <input class="currdebts-payment__range" type="range" value="<?php if ($leftmeta['currdebts_payment'] !="") { echo $leftmeta['currdebts_payment']; }else{ echo $mastercard+$american_express+$visa+$retail+$personal_loan+$student_loan+$car_loan+$investment_loan+$business_loan+$consolidation_loan; } ?>" min="0" max="5000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="currdebts-payment" id="currdebts-payment" class="form-control" value="<?php if ($leftmeta['currdebts_payment'] !="") { echo $leftmeta['currdebts_payment']; }else{ echo $mastercard+$american_express+$visa+$retail+$personal_loan+$student_loan+$car_loan+$investment_loan+$business_loan+$consolidation_loan; } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-hello2">Amount your beneficiary or family would have<br> to meet goals and maintain lifestyle<br> $<strong id="isslc"><?=$finalvalue?></strong></span>
                                           
                                           
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
                        <div class="tab-pane fade" id="mortgage">
                            <CENTER><h4>Income Coverage</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="mortgage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="lifeinsurance_scenario_mortgage_frm" id="lifeinsurance_scenario_mortgage_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <label>Income Insurance Coverage Purpose:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="lifeinsurance_scenario_income_coverage_purpose" id="lifeinsurance_scenario_income_coverage_purpose" class="form-control" value="<?= $leftmeta['lifeinsurance_scenario_income_coverage_purpose'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-gross-morgate">
                                                        <label>Gross Monthly Income</label>
                                                        <input class="range-slider-gross-morgate__range" type="range" value="<?php if($leftmeta['range_slider_gross_morgate_value'] != ""){ echo $leftmeta['range_slider_gross_morgate_value']; }else { echo $employment_income; } ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-gross-morgate-value" id="range-slider-gross-morgate-value" class="form-control" value="<?php if($leftmeta['range_slider_gross_morgate_value'] != ""){ echo $leftmeta['range_slider_gross_morgate_value']; }else { echo $employment_income; } ?>">
                                                </div>
                                            </div>                                           
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-benefit-morgate">
                                                        <label>Existing Disability Benefit</label>
                                                        <input class="range-slider-benefit-morgate__range" type="range" value="<?php if($leftmeta['range_slider_benefit_morgate_value'] != ""){ echo $leftmeta['range_slider_benefit_morgate_value']; }else { echo $disability_insurance_coverage; } ?>" min="0" max="75">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-benefit-morgate-value" id="range-slider-benefit-morgate-value" class="form-control" value="<?php if($leftmeta['range_slider_benefit_morgate_value'] != ""){ echo $leftmeta['range_slider_benefit_morgate_value']; }else { echo $disability_insurance_coverage; } ?>">
                                                </div>
                                            </div>
                                            <?php
                                                $availableincome = "";
                                                $decreaseincome = "";
                                                if($leftmeta['range_slider_gross_morgate_value'] == "" && $leftmeta['range_slider_benefit_morgate_value']=="")
                                                {
                                                    $availableincome = ($employment_income*$disability_insurance_coverage)/100;
                                                    $decreaseincome = $employment_income-$availableincome;
                                                }
                                                else
                                                {
                                                    $availableincome = ($leftmeta['range_slider_gross_morgate_value']*$leftmeta['range_slider_benefit_morgate_value'])/100;
                                                    $decreaseincome = $leftmeta['range_slider_gross_morgate_value']-$availableincome;
                                                }
                                            ?>
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-8">
                                                    <div class="available-morgate">
                                                        <label>Available Income</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" >
                                                    <input type="text" name="available-morgate" id="available-morgate" class="form-control" value="<?= $availableincome ?>" readonly>
                                                </div>
                                            </div> 
                                            <div class="col-lg-12">
                                                <br>
                                                <div class="col-lg-8">
                                                    <div class="decrease-morgate">
                                                        <label>Decrease in Monthly Income</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" >
                                                    <input type="text" name="decrease-morgate" id="decrease-morgate" class="form-control" value="<?= $decreaseincome ?>" readonly>
                                                </div>
                                            </div>  
                                            <!-- <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="decrease-morgate">
                                                        <label>Decrease in Monthly Income</label>
                                                        <input class="decrease-morgate__range" type="range" value="<?= $leftmeta['decrease_morgate'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="decrease-morgate" id="decrease-morgate" class="form-control" value="<?= $leftmeta['decrease_morgate'] ?>">
                                                </div>
                                            </div>   -->
                                            <?php
                                                $expense = $mortgage_rent+$property_taxes+$insurance+$cable_internet_phone+$property_fees+$utilities+$household_items+$fuel+$license_registration+$vehicle_financing+$repairs_maintenance+$transportation_insurance+$tolls+$parking+$transit+$groceries_meals+$clothing_jewelwery+$personal_care+$entertainment_hobbies+$dinin+$childcare+$petcare+$memberships_subscription+$vacation_fund+$health_insurance+$life_insurance+$disability_insurance+$critical_illness+$vision+$medical+$prescriptions+$dental;
                                                $fexpenses="";
                                                if($leftmeta['range_slider_lifestyle_morgate_value'] != "")
                                                { 
                                                    $fexpenses = $availableincome - $leftmeta['range_slider_lifestyle_morgate_value'];
                                                }
                                                else 
                                                { 
                                                    $fexpenses = $availableincome - $expense; 
                                                }
                                            ?>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="range-slider-lifestyle-morgate">
                                                        <label>Monthly Lifestyle Expenses</label>
                                                        <input class="range-slider-lifestyle-morgate__range" type="range" value="<?php if($leftmeta['range_slider_lifestyle_morgate_value'] != ""){ echo $leftmeta['range_slider_lifestyle_morgate_value']; }else { echo $expense; } ?>" min="0" max="1000000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="range-slider-lifestyle-morgate-value" id="range-slider-lifestyle-morgate-value" class="form-control" value="<?php if($leftmeta['range_slider_lifestyle_morgate_value'] != ""){ echo $leftmeta['range_slider_lifestyle_morgate_value']; }else { echo $expense; } ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="penny-hello2">Amount your beneficiary or family would <br>have to meet goals and maintain lifestyle<br> (Insert Solved Amount)$<strong id="totalexpenses"><?=$fexpenses?></strong></span>
                                            
                                           
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
                </div>
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
<script>
var slider = document.getElementById("lifeinsurance_scenario_coverage_purpose");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
<style>
    
    .penny-hello2{
   
    font-size: 16px;
    text-align: justify-all;}

</style>