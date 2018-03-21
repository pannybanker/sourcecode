<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
	
<?php 
$umeta = $usermeta[$_SESSION['user']['user_id']];
	}

if(isset($_GET['months'])){
	$n = $_GET['months'];
}else{
	$n = date('n');
}
if(isset($_GET['years'])){
	$y = $_GET['years'];
}else{
	$y = date('Y');
}
$m = $n."_".$y;
 ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Lifestyle</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    My Lifestyle
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
				<div class="col-lg-6">
					<div class="form-group">
						<select name="months" id="months" class="form-control">
							<option value="1" <?php if($n==1) echo 'selected="selected"'; ?>>January</option>
							<option value="2"<?php if($n==2) echo 'selected="selected"'; ?>>February</option>
							<option value="3"<?php if($n==3) echo 'selected="selected"'; ?>>March</option>
							<option value="4"<?php if($n==4) echo 'selected="selected"'; ?>>April</option>
							<option value="5"<?php if($n==5) echo 'selected="selected"'; ?>>May</option>
							<option value="6"<?php if($n==6) echo 'selected="selected"'; ?>>June</option>
							<option value="7"<?php if($n==7) echo 'selected="selected"'; ?>>July</option>
							<option value="8"<?php if($n==8) echo 'selected="selected"'; ?>>August</option>
							<option value="9"<?php if($n==9) echo 'selected="selected"'; ?>>September</option>
							<option value="10"<?php if($n==10) echo 'selected="selected"'; ?>>October</option>
							<option value="11"<?php if($n==11) echo 'selected="selected"'; ?>>November</option>
							<option value="12"<?php if($n==12) echo 'selected="selected"'; ?>>December</option>
						</select>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<input  class="form-control" type="text" name="years" value="<?php echo date("Y"); ?>" readonly>
					</div>
				</div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#inflow" data-toggle="tab" aria-expanded="true">My Income</a>
                        </li>
                        <li class=""><a href="#outflow" data-toggle="tab" aria-expanded="false">Expenses</a>
                        </li>
                        <li class=""><a href="#transportation" data-toggle="tab" aria-expanded="false">Transportation Expenses</a>
                        </li>
                        <li class=""><a href="#personal" data-toggle="tab" aria-expanded="false">Personal Expenses</a>
                        </li>
                        <li class=""><a href="#health" data-toggle="tab" aria-expanded="false">Health & Insurance Expenses</a>
                        </li>
                        <li class=""><a href="#debts" data-toggle="tab" aria-expanded="false">Credit Cards</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="inflow">
                            <CENTER><h4 class="page-header ole tltip" data-tooltip="We’d like to understand your lifestyle. It’s most important to you and we should start with your income, all money coming in to you on a monthly basis. Here are a few ways you can earn money monthly, add more fields if we have missed.">Your Income</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="inflow_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="inflow_frm" id="inflow_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Employment Income</label>
                                                <input type="text" class="form-control" name="employment_income" id="employment_income" value="<?php
                                                    if (!empty($umeta['employment_income_'.$m])) {
                                                        echo $umeta['employment_income_'.$m];
                                                    }
                                                    ?>" placeholder="Employment Income" >
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Pensions</label>
                                                <input type="text" class="form-control"  name="pensions" id="pensions" value="<?php
                                            if (!empty($umeta['pensions_'.$m])) {
                                                echo $umeta['pensions_'.$m];
                                            }
                                            ?>"  placeholder="Pensions">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Investment Earnings</label>
                                                <input type="text" class="form-control" name="investment_earning" id="investment_earning"value="<?php
                                            if (!empty($umeta['investment_earning_'.$m])) {
                                                echo $umeta['investment_earning_'.$m];
                                            }
                                            ?>"  placeholder="Investment Earnings">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Bonuses</label>
                                                <input type="text" class="form-control" name="bonuses" id="bonuses" value="<?php
                                            if (!empty($umeta['bonuses_'.$m])) {
                                                echo $umeta['bonuses_'.$m];
                                            }
                                            ?>"  placeholder="Bonuses">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Allowances</label>
                                                <input type="text" class="form-control" name="allowances" id="allowances" value="<?php
                                            if (!empty($umeta['allowances_'.$m])) {
                                                echo $umeta['allowances_'.$m];
                                            }
                                            ?>"  placeholder="Allowances">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>(Minus)Taxes & With Holdings/Deductions</label>
                                                <input type="text" class="form-control" name="taxes" id="taxes" value="<?php
                                            if (!empty($umeta['taxes_'.$m])) {
                                                echo $umeta['taxes_'.$m];
                                            }
                                            ?>"  placeholder="(Minus)Taxes & With Holdings/Deductions">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Business Income</label>
                                                <input type="text" class="form-control" name="business_income" id="business_income" value="<?php
                                            if (!empty($umeta['business_income_'.$m])) {
                                                echo $umeta['business_income_'.$m];
                                            }
                                            ?>" placeholder="Business Income">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Government Benefits</label>
                                                <input type="text" class="form-control" name="government_benefits" id="government_benefits" value="<?php
                                            if (!empty($umeta['government_benefits_'.$m])) {
                                                echo $umeta['government_benefits_'.$m];
                                            }
                                            ?>"  placeholder="Government Benefits">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Real Estate/ Rental</label>
                                                <input type="text" class="form-control" name="realstate" id="realstate" value="<?php
                                            if (!empty($umeta['realstate_'.$m])) {
                                                echo $umeta['realstate_'.$m];
                                            }
                                            ?>"  placeholder="Real Estate/ Rental">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Student Loans Received</label>
                                                <input type="text" class="form-control" name="student_loan" id="student_loan" value="<?php
                                            if (!empty($umeta['student_loan_'.$m])) {
                                                echo $umeta['student_loan_'.$m];
                                            }
                                            ?>"  placeholder="Student Loans Received">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Other Income</label>
                                                <input type="text" class="form-control" name="other_income" id="other_income" value="<?php
                                            if (!empty($umeta['other_income_'.$m])) {
                                                echo $umeta['other_income_'.$m];
                                            }
                                            ?>" placeholder="Other Income">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <label>Spouse/ Partner Income</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="inflow_spouse" value="NO" onclick="check_spouse('no')" <?php if (!empty($inflow_spouse) && $inflow_spouse == 'NO') { ?> checked="" <?php } ?> >NO
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="inflow_spouse" onclick="check_spouse('yes')" value="YES" <?php if (!empty($inflow_spouse) && $inflow_spouse == 'YES') { ?> checked="" <?php } ?> >YES
                                                </label>
                                            </div>
                                        </div>
                                        <div id="spouse_income_details" <?php if (!empty($inflow_spouse) && $inflow_spouse == 'YES') { ?> class="show" <?php } else { ?> class="hide" <?php } ?> >
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Employment Income</label>
                                                    <input type="text" class="form-control" name="spouse_employment_income" id="spouse_employment_income" value="<?php
                                                        if (!empty($umeta['spouse_employment_income_'.$m])) {
                                                            echo $umeta['spouse_employment_income_'.$m];
                                                        }
                                                        ?>" placeholder="Employment Income" >
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pensions</label>
                                                    <input type="text" class="form-control"  name="spouse_pensions" id="spouse_pensions" value="<?php
                                                if (!empty($umeta['spouse_pensions_'.$m])) {
                                                    echo $umeta['spouse_pensions_'.$m];
                                                }
                                                ?>"  placeholder="Pensions">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Investment Earnings</label>
                                                    <input type="text" class="form-control" name="spouse_investment_earning" id="spouse_investment_earning"value="<?php
                                                if (!empty($umeta['spouse_investment_earning_'.$m])) {
                                                    echo $umeta['spouse_investment_earning_'.$m];
                                                }
                                                ?>"  placeholder="Investment Earnings">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bonuses</label>
                                                    <input type="text" class="form-control" name="spouse_bonuses" id="spouse_bonuses" value="<?php
                                                if (!empty($umeta['spouse_bonuses_'.$m])) {
                                                    echo $umeta['spouse_bonuses_'.$m];
                                                }
                                                ?>"  placeholder="Bonuses">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Allowances</label>
                                                    <input type="text" class="form-control" name="spouse_allowances" id="spouse_allowances" value="<?php
                                                if (!empty($umeta['spouse_allowances_'.$m])) {
                                                    echo $umeta['spouse_allowances_'.$m];
                                                }
                                                ?>"  placeholder="Allowances">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>(Minus)Taxes & With Holdings/Deductions</label>
                                                    <input type="text" class="form-control" name="spouse_taxes" id="spouse_taxes" value="<?php
                                                if (!empty($umeta['spouse_taxes_'.$m])) {
                                                    echo $umeta['spouse_taxes_'.$m];
                                                }
                                                ?>"  placeholder="(Minus)Taxes & With Holdings/Deductions">
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 (nested) -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Business Income</label>
                                                    <input type="text" class="form-control" name="spouse_business_income" id="spouse_business_income" value="<?php
                                                if (!empty($umeta['spouse_business_income_'.$m])) {
                                                    echo $umeta['spouse_business_income_'.$m];
                                                }
                                                ?>" placeholder="Business Income">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Government Benefits</label>
                                                    <input type="text" class="form-control" name="spouse_government_benefits" id="spouse_government_benefits" value="<?php
                                                if (!empty($umeta['spouse_government_benefits_'.$m])) {
                                                    echo $umeta['spouse_government_benefits_'.$m];
                                                }
                                                ?>"  placeholder="Government Benefits">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Realestate/ Rental</label>
                                                    <input type="text" class="form-control" name="spouse_realstate" id="spouse_realstate" value="<?php
                                                if (!empty($umeta['spouse_realstate_'.$m])) {
                                                    echo $umeta['spouse_realstate_'.$m];
                                                }
                                                ?>"  placeholder="Realestate/ Rental">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Student Loans Received</label>
                                                    <input type="text" class="form-control" name="spouse_student_loan" id="spouse_student_loan" value="<?php
                                                if (!empty($umeta['spouse_student_loan_'.$m])) {
                                                    echo $umeta['spouse_student_loan_'.$m];
                                                }
                                                ?>"  placeholder="Student Loans Received">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Other Income</label>
                                                    <input type="text" class="form-control" name="spouse_other_income" id="spouse_other_income" value="<?php
                                                if (!empty($umeta['spouse_other_income_'.$m])) {
                                                    echo $umeta['spouse_other_income_'.$m];
                                                }
                                                ?>" placeholder="Other Income">
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                            <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="outflow">
                            <CENTER><h4 class="page-header ole tltip" data-tooltip="We’d like to understand your lifestyle. It’s important to you and we should look at your expenses, all money being spent on a monthly basis. Here are a few ways you can spend your money monthly, add more fields if we have missed something.">Residence Expenses</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="outflow_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="outflow_frm" id="outflow_frm" action="#">
                                     <div class="row form">
                                       <!-- <div class="col-lg-12">
                                            <div class="form-group">
                                            <label>SPOUSE/ PARTNER INCOME</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="spouse" value="NO" <?php if (!empty($spouse) && $spouse == 'NO') { ?> checked="" <?php } ?> >NO
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="spouse" value="YES" <?php if (!empty($spouse) && $spouse == 'YES') { ?> checked="" <?php } ?> >YES
                                                </label>
                                            </div>
                                        </div> -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Mortgage</label>
                                                <input type="text" class="form-control" name="mortgage_rent" id="mortgage_rent" value="<?php
                                            if (!empty($umeta['mortgage_rent_'.$m])) {
                                                echo $umeta['mortgage_rent_'.$m];
                                            }
                                            ?>" placeholder="Mortgage & Rent">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Property Taxes</label>
                                                <input type="text" class="form-control" name="property_taxes" id="property_taxes" value="<?php
                                            if (!empty($umeta['property_taxes_'.$m])) {
                                                echo $umeta['property_taxes_'.$m];
                                            }
                                            ?>"  placeholder="Property Taxes">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Insurance</label>
                                                <input type="text" class="form-control" name="insurance" id="insurance" value="<?php
                                            if (!empty($umeta['insurance_'.$m])) {
                                                echo $umeta['insurance_'.$m];
                                            }
                                            ?>" placeholder="Insurance">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Cable, Internet & Phone</label>
                                                <input type="text" class="form-control" name="cable_internet_phone" id="cable_internet_phone" value="<?php
                                            if (!empty($umeta['cable_internet_phone_'.$m])) {
                                                echo $umeta['cable_internet_phone_'.$m];
                                            }
                                            ?>" placeholder="Cable, Internet & Phone">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Property Fees & Dues</label>
                                                <input type="text" class="form-control" name="property_fees" id="property_fees" value="<?php
                                            if (!empty($umeta['property_fees_'.$m])) {
                                                echo $umeta['property_fees_'.$m];
                                            }
                                            ?>" placeholder="Property Fees & Dues">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Utilities</label>
                                                <input type="text" class="form-control" name="utilities" id="utilities" value="<?php
                                            if (!empty($umeta['utilities_'.$m])) {
                                                echo $umeta['utilities_'.$m];
                                            }
                                            ?>" placeholder="Utilities">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Household Items</label>
                                                <input type="text" class="form-control" name="household_items" id="household_items" value="<?php
                                            if (!empty($umeta['household_items_'.$m])) {
                                                echo $umeta['household_items_'.$m];
                                            }
                                            ?>" placeholder="Household Items">
                                                <p class="help-block"></p>
                                            </div>
                                             <div class="form-group">
                                                <label>Rent</label>
                                                <input type="text" class="form-control" name="mortgage_rent" id="mortgage_rent" value="<?php
                                            if (!empty($umeta['mortgage_rent_'.$m])) {
                                                echo $umeta['mortgage_rent_'.$m];
                                            }
                                            ?>" placeholder="rent">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <?php
                                            if(!empty($mwrexpenses_field))
                                            {
                                                $mwrexpensesfield = explode(',', $mwrexpenses_field);
                                                $mwrexpensescurrentvalue = explode(',', $mwrexpenses_current_value);
                                                foreach ($mwrexpensesfield as $key => $value) 
                                                {
                                            ?>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwrexpenses_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" class="form-control" name="mwrexpenses_current_value[]" value="<?php
                                                                if (!empty($mwrexpensescurrentvalue[$key])) {
                                                                    echo $mwrexpensescurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Value">
                                                            </div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div id="mwrexpenses" class="row form">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="mwrexpenses_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Expenses</a>
                                        </div>
                                        <div class="col-lg-12">                                        
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="transportation">
                            <CENTER><h4>Transportation Expenses</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="transportation_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="transportation_frm" id="transportation_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Fuel</label>
                                                <input type="text" class="form-control" name="fuel" id="fuel" value="<?php
                                                if (!empty($umeta['fuel_'.$m])) {
                                                    echo $umeta['fuel_'.$m];
                                                }
                                                ?>" placeholder="Fuel">
                                            </div>
                                            <div class="form-group">
                                                <label>License & Registration</label>
                                                <input type="text" class="form-control" name="license_registration" id="license_registration" value="<?php
                                            if (!empty($umeta['license_registration_'.$m])) {
                                                echo $umeta['license_registration_'.$m];
                                            }
                                            ?>" placeholder="License & Registration">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Vehicle Financing</label>
                                                <input type="text" class="form-control" name="vehicle_financing" id="vehicle_financing" value="<?php
                                            if (!empty($umeta['vehicle_financing_'.$m])) {
                                                echo $umeta['vehicle_financing_'.$m];
                                            }
                                            ?>" placeholder="Vehicle Financing">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Repairs & Maintenance</label>
                                                <input type="text" class="form-control" name="repairs_maintenance" id="repairs_maintenance" value="<?php
                                            if (!empty($umeta['repairs_maintenance_'.$m])) {
                                                echo $umeta['repairs_maintenance_'.$m];
                                            }
                                            ?>" placeholder="Repairs & Maintenance">
                                                <p class="help-block"></p>
                                            </div>
                                            
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Insurance</label>
                                                <input type="text" class="form-control" name="transportation_insurance" id="transportation_insurance" value="<?php
                                            if (!empty($umeta['transportation_insurance_'.$m])) {
                                                echo $umeta['transportation_insurance_'.$m];
                                            }
                                            ?>" placeholder="Insurance">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Tolls</label>
                                                <input type="text" class="form-control" name="tolls" id="tolls" value="<?php
                                            if (!empty($umeta['tolls_'.$m])) {
                                                echo $umeta['tolls_'.$m];
                                            }
                                            ?>" placeholder="Tolls">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Parking</label>
                                                <input type="text" class="form-control" name="parking" id="parking" value="<?php
                                            if (!empty($umeta['parking_'.$m])) {
                                                echo $umeta['parking_'.$m];
                                            }
                                            ?>" placeholder="Parking">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Transit</label>
                                                <input type="text" class="form-control"  name="transit" id="transit" value="<?php
                                            if (!empty($umeta['transit_'.$m])) {
                                                echo $umeta['transit_'.$m];
                                            }
                                            ?>" placeholder="Transit">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <?php
                                            if(!empty($mwtexpenses_field))
                                            {
                                                $mwtexpensesfield = explode(',', $mwtexpenses_field);
                                                $mwtexpensescurrentvalue = explode(',', $mwtexpenses_current_value);
                                                foreach ($mwtexpensesfield as $key => $value) 
                                                {
                                            ?>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwtexpenses_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" class="form-control" name="mwtexpenses_current_value[]" value="<?php
                                                                if (!empty($mwtexpensescurrentvalue[$key])) {
                                                                    echo $mwtexpensescurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Value">
                                                            </div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div id="mwtexpenses" class="row form">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="mwtexpenses_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Expenses</a>
                                        </div>
                                        <div class="col-lg-12">                                        
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="personal">
                            <CENTER><h4>Personal Expenses</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="personal_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="personal_frm" id="personal_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Groceries & Meals</label>
                                            <input type="text" class="form-control" name="groceries_meals" id="groceries_meals" value="<?php
                                            if (!empty($umeta['groceries_meals_'.$m])) {
                                                echo $umeta['groceries_meals_'.$m];
                                            }
                                            ?>" placeholder="Groceries & Meals">
                                            </div>
                                            <div class="form-group">
                                                <label>Clothing & Jewelry</label>
                                                <input type="text" class="form-control" name="clothing_jewelwery" id="clothing_jewelwery" value="<?php
                                            if (!empty($umeta['clothing_jewelwery_'.$m])) {
                                                echo $umeta['clothing_jewelwery_'.$m];
                                            }
                                            ?>" placeholder="Clothing & Jewelry">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Personal Care & Grooming</label>
                                                <input type="text" class="form-control" name="personal_care" id="personal_care" value="<?php
                                            if (!empty($umeta['personal_care_'.$m])) {
                                                echo $umeta['personal_care_'.$m];
                                            }
                                            ?>" placeholder="Personal Care & Grooming">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Entertainment & Hobbies</label>
                                                <input type="text" class="form-control" name="entertainment_hobbies" id="entertainment_hobbies" value="<?php
                                            if (!empty($umeta['entertainment_hobbies_'.$m])) {
                                                echo $umeta['entertainment_hobbies_'.$m];
                                            }
                                            ?>" placeholder="Entertainment & Hobbies">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Dining</label>
                                                <input type="text" class="form-control" name="dinin" id="dinin" value="<?php
                                            if (!empty($umeta['dinin_'.$m])) {
                                                echo $umeta['dinin_'.$m];
                                            }
                                            ?>" placeholder="Dining">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Child Care & Child Activities</label>
                                                <input type="text" class="form-control" name="childcare" id="childcare" value="<?php
                                            if (!empty($umeta['childcare_'.$m])) {
                                                echo $umeta['childcare_'.$m];
                                            }
                                            ?>" placeholder="Child Care & Child Activities">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Pet Care</label>
                                                <input type="text" class="form-control" name="petcare" id="petcare"  value="<?php
                                            if (!empty($umeta['petcare_'.$m])) {
                                                echo $umeta['petcare_'.$m];
                                            }
                                            ?>" placeholder="Pet Care">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Memberships & Subscriptions</label>
                                                <input type="text" class="form-control" name="memberships_subscription" id="memberships_subscription"  value="<?php
                                            if (!empty($umeta['memberships_subscription_'.$m])) {
                                                echo $umeta['memberships_subscription_'.$m];
                                            }
                                            ?>" placeholder="Memberships & Subscriptions">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Vacation Fund</label>
                                                <input type="text" class="form-control" name="vacation_fund" id="vacation_fund"  value="<?php
                                            if (!empty($umeta['vacation_fund_'.$m])) {
                                                echo $umeta['vacation_fund_'.$m];
                                            }
                                            ?>" placeholder="Vacation Fund">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <?php
                                            if(!empty($mwpexpenses_field))
                                            {
                                                $mwpexpensesfield = explode(',', $mwpexpenses_field);
                                                $mwpexpensescurrentvalue = explode(',', $mwpexpenses_current_value);
                                                foreach ($mwpexpensesfield as $key => $value) 
                                                {
                                            ?>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwpexpenses_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" class="form-control" name="mwpexpenses_current_value[]" value="<?php
                                                                if (!empty($mwpexpensescurrentvalue[$key])) {
                                                                    echo $mwpexpensescurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Value">
                                                            </div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div id="mwpexpenses" class="row form">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="mwpexpenses_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Expenses</a>
                                        </div>
                                        <div class="col-lg-12">                                        
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="health">
                            <CENTER><h4>Health & Insurance Expenses</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="health_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="health_frm" id="health_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>HEALTH INSURANCE</label>
                                            <input type="text" class="form-control" name="health_insurance" id="health_insurance" value="<?php
                                            if (!empty($umeta['health_insurance_'.$m])) {
                                                echo $umeta['health_insurance_'.$m];
                                            }
                                            ?>" placeholder="HEALTH INSURANCE">
                                            </div>
                                            <div class="form-group">
                                                <label>LIFE INSURANCE</label>
                                                <input type="text" class="form-control" name="life_insurance" id="life_insurance"    value="<?php
                                            if (!empty($umeta['life_insurance_'.$m])) {
                                                echo $umeta['life_insurance_'.$m];
                                            }
                                            ?>" placeholder="LIFE INSURANCE">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>DISABILITY INSURANCE</label>
                                                <input type="text" class="form-control" name="disability_insurance" id="disability_insurance"  value="<?php
                                            if (!empty($umeta['disability_insurance_'.$m])) {
                                                echo $umeta['disability_insurance_'.$m];
                                            }
                                            ?>" placeholder="DISABILITY INSURANCE">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>CRITICAL ILLNESS INSURANCE</label>
                                                <input type="text" class="form-control" name="critical_illness" id="critical_illness"  value="<?php
                                            if (!empty($umeta['critical_illness_'.$m])) {
                                                echo $umeta['critical_illness_'.$m];
                                            }
                                            ?>" placeholder="CRITICAL ILLNESS INSURANCE">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>VISION</label>
                                                <input type="text" class="form-control" name="vision" id="vision" value="<?php
                                            if (!empty($umeta['vision_'.$m])) {
                                                echo $umeta['vision_'.$m];
                                            }
                                            ?>" placeholder="VISION">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>MEDICAL</label>
                                                <input type="text" class="form-control" name="medical" id="medical"   value="<?php
                                            if (!empty($umeta['medical_'.$m])) {
                                                echo $umeta['medical_'.$m];
                                            }
                                            ?>"     placeholder="MEDICAL">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>PRESCRIPTIONS</label>
                                                <input type="text" class="form-control" name="prescriptions" id="prescriptions"  value="<?php
                                            if (!empty($umeta['prescriptions_'.$m])) {
                                                echo $umeta['prescriptions_'.$m];
                                            }
                                            ?>"         placeholder="PRESCRIPTIONS">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>DENTAL</label>
                                                <input type="text" class="form-control"  name="dental" id="dental" value="<?php
                                            if (!empty($umeta['dental_'.$m])) {
                                                echo $umeta['dental_'.$m];
                                            }
                                            ?>" placeholder="DENTAL">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <?php
                                            if(!empty($mwhiexpenses_field))
                                            {
                                                $mwhiexpensesfield = explode(',', $mwhiexpenses_field);
                                                $mwhiexpensescurrentvalue = explode(',', $mwhiexpenses_current_value);
                                                foreach ($mwhiexpensesfield as $key => $value) 
                                                {
                                            ?>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwhiexpenses_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" class="form-control" name="mwhiexpenses_current_value[]" value="<?php
                                                                if (!empty($mwhiexpensescurrentvalue[$key])) {
                                                                    echo $mwhiexpensescurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Value">
                                                            </div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div id="mwhiexpenses" class="row form">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="mwhiexpenses_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Expenses</a>
                                        </div>
                                        <div class="col-lg-12">                                        
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="debts">
                            <CENTER><h4>Debts</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="debts_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="debts_frm" id="debts_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Personal Loans</label>
                                            <input type="text" class="form-control" name="personal_loans" id="personal_loans" value="<?php
                                            if (!empty($umeta['personal_loans_'.$m])) {
                                                echo $umeta['personal_loans_'.$m];
                                            }
                                            ?>" placeholder="Personal Loans">
                                            </div>
                                            <div class="form-group">
                                                <label>Credit cards</label>
                                                <input type="text" class="form-control" name="credit_cards" id="credit_cards" value="<?php
                                            if (!empty($umeta['credit_cards_'.$m])) {
                                                echo $umeta['credit_cards_'.$m];
                                            }
                                            ?>" placeholder="Credit cards">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Credit Lines</label>
                                                <input type="text" class="form-control"          name="credit_lines" id="credit_lines"  value="<?php
                                            if (!empty($umeta['credit_lines_'.$m])) {
                                                echo $umeta['credit_lines_'.$m];
                                            }
                                            ?>" placeholder="Credit Lines">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Education Loans</label>
                                                <input type="text" class="form-control"          name="education_loans" id="education_loans"  value="<?php
                                            if (!empty($umeta['education_loans_'.$m])) {
                                                echo $umeta['education_loans_'.$m];
                                            }
                                            ?>" placeholder="Education Loans">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Business Loans</label>
                                                <input type="text" class="form-control"          name="business_loans" id="business_loans" value="<?php
                                            if (!empty($umeta['business_loans_'.$m])) {
                                                echo $umeta['business_loans_'.$m];
                                            }
                                            ?>" placeholder="Business Loans">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Consolidated Loans</label>
                                                <input type="text" class="form-control"          name="consolidated_loans" id="consolidated_loans" value="<?php
                                            if (!empty($umeta['consolidated_loans_'.$m])) {
                                                echo $umeta['consolidated_loans_'.$m];
                                            }
                                            ?>" placeholder="Consolidated Loans">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Investment Loan</label>
                                                <input type="text" class="form-control"          name="investment_loan" id="investment_loan" value="<?php
                                            if (!empty($umeta['investment_loan_'.$m])) {
                                                echo $umeta['investment_loan_'.$m];
                                            }
                                            ?>"     placeholder="Investment Loan">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <?php
                                            if(!empty($mwdexpenses_field))
                                            {
                                                $mwdexpensesfield = explode(',', $mwdexpenses_field);
                                                $mwdexpensescurrentvalue = explode(',', $mwdexpenses_current_value);
                                                foreach ($mwdexpensesfield as $key => $value) 
                                                {
                                            ?>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwdexpenses_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" class="form-control" name="mwdexpenses_current_value[]" value="<?php
                                                                if (!empty($mwdexpensescurrentvalue[$key])) {
                                                                    echo $mwdexpensescurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Value">
                                                            </div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div id="mwdexpenses" class="row form">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="mwdexpenses_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Expenses</a>
                                        </div>
                                        <div class="col-lg-12">                                        
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
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
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->