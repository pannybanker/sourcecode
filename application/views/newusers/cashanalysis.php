<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } 

$umeta = $usermeta[$_SESSION['user']['user_id']];
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
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cash Flow Analysis </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cash Flow Analysis
                </div>
                <div class="panel-body table-responsive">
				<div class="col-lg-6">
					<div class="form-group">
						<select name="months" id="cash_months" class="form-control">
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
				<ul class="nav nav-tabs">
                        <li class="active"><a href="#income" data-toggle="tab" aria-expanded="true">Detail Monthly Income</a>
                        </li>
                        <li class=""><a href="#expenses" data-toggle="tab" aria-expanded="false">Details Monthly expenses</a>
                        </li>
                    </ul>
				<!-- Tab panes -->
                    <div class="tab-content">
					<div class="tab-pane fade active in" id="income">
                    <table class="table">
                      <thead>
                        <tr>
                            <th colspan="3">
                              <div class="col-md-8">
                                <h2>Current Projected Cash Flow</h2>
                              </div>
                              <div class="col-md-4">
                                <a href="<?=base_url()?>users/income-donloadpdf?months=<?php echo $n ?>" class="btn btn-success btn-lg" target="_blank">
                                  <span class="glyphicon glyphicon-download"></span> Download 
                                </a>
                              </div>
                              
                            </th>
                        </tr>
                      </thead>
                      <tbody> 
                        <tr>
                            <td colspan="3"><span>The following report shows your sources of income in a month.</span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><h3>My Income Sources</h3></td>
                        </tr>
                        <tr style="background-color: #5b9bd5;">
                          <td>Employment Income</td>
                          <td> <?php if (!empty($umeta['employment_income_'.$m])) { echo "$".number_format($umeta['employment_income_'.$m]);} ?></td>
                          <td rowspan="11"><div id="piechart"></div></td>
                        </tr>
                        <tr style="background-color: #5b9bd5;">
                          <td>Pensions</td>
                          <td><?php if (!empty($umeta['pensions_'.$m])) { echo "$".number_format($umeta['pensions_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Investment Earnings</td>
                          <td><?php if (!empty($umeta['investment_earning_'.$m])) { echo "$".number_format($umeta['investment_earning_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Bonuses</td>
                          <td><?php if (!empty($umeta['bonuses_'.$m])) { echo "$".number_format($umeta['bonuses_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #5b9bd5;">
                          <td>Allowances</td>
                          <td><?php if (!empty($umeta['allowances_'.$m])) { echo "$".number_format($umeta['allowances_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #a5a5a5;">
                          <td>Tax & Withholdings</td>
                          <td><?php if (!empty($umeta['taxes_'.$m])) { echo "$".number_format($umeta['taxes_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #5b9bd5;">
                          <td>Business Income</td>
                          <td><?php  if (!empty($umeta['business_income_'.$m])) { echo "$".number_format($umeta['business_income_'.$m]);  } ?></td>
                        </tr>
                        <tr style="background-color: #5b9bd5;">
                          <td>Goverment Benefits</td>
                          <td><?php if (!empty($umeta['government_benefits_'.$m])) { echo "$".number_format($umeta['government_benefits_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #5b9bd5;">
                          <td>Real Esate/Rental</td>
                          <td><?php if (!empty($umeta['realstate_'.$m])) { echo "$".number_format($umeta['realstate_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Student Loan Received</td>
                          <td><?php if (!empty($umeta['student_loan_'.$m])) { echo "$".number_format($umeta['student_loan_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Other Income</td>
                          <td><?php if (!empty($umeta['other_income_'.$m])) { echo "$".number_format($umeta['other_income_'.$m]);  } ?></td>
                        </tr>
                        <tr>
                          <td><h3>Total Income Source</h3></td>
                          <td colspan="2"><h3><?php $tis = $umeta['employment_income_'.$m]+$umeta['pensions_'.$m]+$umeta['investment_earning_'.$m]+$umeta['bonuses_'.$m]+ $umeta['government_benefits_'.$m] + $umeta['allowances_'.$m] + $umeta['government_benefits_'.$m] +$umeta['realstate_'.$m] + $umeta['student_loan_'.$m] + $umeta['other_income_'.$m] - $umeta['taxes_'.$m]; echo "$".number_format($tis); ?></h3></td>
                        </tr> 
                        
                        <tr>
                          <td colspan="3">
                            <center>
                              <a href="<?=base_url()?>users/income-donloadpdf?months=<?php echo $n ?>" class="btn btn-success btn-lg" target="_blank">
                                <span class="glyphicon glyphicon-download"></span> Download 
                              </a>
                            </center>
                            
                          </td>
                        </tr>
                      </tbody>
                    </table>
					</div><div class="tab-pane fade " id="expenses">
                    <table class="table">
                      <thead>
                        <tr>
                            <th colspan="3">
                              <div class="col-md-8">
                                <h2>Current Projected Cash Flow</h2>
                              </div>
                              <div class="col-md-4">
                                <a href="<?=base_url()?>users/expenses-donloadpdf?months=<?php echo $n ?>" class="btn btn-success btn-lg" target="_blank">
                                  <span class="glyphicon glyphicon-download"></span> Download 
                                </a>
                              </div>
                              
                            </th>
                        </tr>
                      </thead> 
                      <tbody>
                        <tr>
                            <td colspan="3"><span>The following report shows your source of expenses in a month.</span></td>
                        </tr>
                        
                        <tr>
                          <td colspan="3"><h2 style="text-align: center;">My Expenses</h2></td>
                        </tr>
                        <tr>
                          <td colspan="3"><h2>Home Expenses</h2></td>
                        </tr>
                        <tr style="background-color: #2f75b5;">
                          <td>Mortgage & Rent</td>
                          <td><?php  if (!empty($umeta['mortgage_rent_'.$m])) {  echo "$".number_format($umeta['mortgage_rent_'.$m]);  } ?></td>
                          <td rowspan="7"><div id="piechart1"></div></td>
                        </tr>
                        <tr style="background-color: #2f75b5;">
                          <td>Property Taxes</td>
                          <td><?php if (!empty($umeta['property_taxes_'.$m])) { echo "$".number_format($umeta['property_taxes_'.$m]);  } ?></td>
                        </tr>
                        <tr style="background-color: #2f75b5;">
                          <td>Insurance</td>
                          <td><?php if (!empty($umeta['insurance_'.$m])) { echo "$".number_format($umeta['insurance_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #2f75b5;">
                          <td>Cable, Internet & Phone</td>
                          <td><?php if (!empty($umeta['cable_internet_phone_'.$m])) { echo "$".number_format($umeta['cable_internet_phone_'.$m]); }  ?></td>
                        </tr>
                        <tr style="background-color: #2f75b5;">
                          <td>Property Fees & Dues</td>
                          <td><?php if (!empty($umeta['property_fees_'.$m])) { echo "$".number_format($umeta['property_fees_'.$m]); }  ?></td>
                        </tr>
                        <tr style="background-color: #2f75b5;">
                          <td>Utilities</td>
                          <td><?php if (!empty($umeta['utilities_'.$m])) { echo "$".number_format($umeta['utilities_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #2f75b5;">
                          <td>Household Items</td>
                          <td><?php if (!empty($umeta['household_items_'.$m])) { echo "$".number_format($umeta['household_items_'.$m]); } ?></td>
                        </tr>
                        <tr>
                          <td><h3>Total Home Expenses</h3></td>
                          <td colspan="2"><h3><?php $the = $umeta['mortgage_rent_'.$m]+$umeta['property_taxes_'.$m]+$umeta['insurance_'.$m]+$umeta['cable_internet_phone_'.$m]+$umeta['property_fees_'.$m]+$umeta['utilities_'.$m]+$umeta['household_items_'.$m];echo "$".number_format($the) ?></h3>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2"><h2>Transportation Expenses</h2></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Fuel</td>
                          <td colspan="2"><?php if (!empty($umeta['fuel_'.$m])) { echo "$".number_format($umeta['fuel_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>License & Registration</td>
                          <td colspan="2"><?php if (!empty($umeta['license_registration_'.$m])) { echo "$".number_format($umeta['license_registration_'.$m]); }  ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Vehicle Financng</td>
                          <td colspan="2"><?php if (!empty($umeta['vehicle_financing_'.$m])) { echo "$".number_format($umeta['vehicle_financing_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Repairs & Maintenance</td>
                          <td colspan="2"><?php if (!empty($umeta['repairs_maintenance_'.$m])) { echo "$".number_format($umeta['repairs_maintenance_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Insurance</td>
                          <td colspan="2"><?php if (!empty($umeta['insurance_'.$m])) { echo "$".number_format($umeta['insurance_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Tolls</td>
                          <td colspan="2"><?php if (!empty($umeta['tolls_'.$m])) { echo "$".number_format($umeta['tolls_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Parking</td>
                          <td colspan="2"><?php if (!empty($umeta['parking_'.$m])) { echo "$".number_format($umeta['parking_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ed7d31;">
                          <td>Transit</td>
                          <td colspan="2"><?php if (!empty($umeta['transit_'.$m])) { echo "$".number_format($umeta['transit_'.$m]); } ?></td>
                        </tr>
                        <tr>
                          <td><h3>Total Transportation Expenses</h3></td>
                          <td colspan="2"><h3><?php $tte = $umeta['fuel_'.$m]+$umeta['license_registration_'.$m]+$umeta['vehicle_financing_'.$m]+$umeta['repairs_maintenance_'.$m]+$umeta['insurance_'.$m]+$umeta['tolls_'.$m]+$umeta['parking_'.$m]+$umeta['transit_'.$m];echo "$".number_format($tte) ?></h3></td>
                        </tr>
                        <tr>
                          <td colspan="3"><h2>Personal  Expenses</h2></td>
                        </tr>
                        <tr style="background-color: #a5a5a5;">
                          <td>Groceries & Meals</td>
                          <td colspan="2"><?php if (!empty($umeta['groceries_meals_'.$m])) { echo "$".number_format($umeta['groceries_meals_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #a5a5a5;">
                          <td>Clothing & Jewelry</td>
                          <td colspan="2"><?php if (!empty($umeta['clothing_jewelwery_'.$m])) { echo "$".number_format($umeta['clothing_jewelwery_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #a5a5a5;">
                          <td>Personal Care & Grooming</td>
                          <td colspan="2"><?php if (!empty($umeta['personal_care_'.$m])) { echo "$".number_format($umeta['personal_care_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #a5a5a5;">
                          <td>Entertainment & Hobbies</td>
                          <td colspan="2"><?php if (!empty($umeta['entertainment_hobbies_'.$m])) { echo "$".number_format($umeta['entertainment_hobbies_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #a5a5a5;">
                          <td>Dinin</td>
                          <td colspan="2"><?php if (!empty($umeta['dinin_'.$m])) { echo "$".number_format($umeta['dinin_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #a5a5a5;">
                          <td>Child Care & Child Activities</td>
                          <td colspan="2"><?php if (!empty($umeta['childcare_'.$m])) { echo "$".number_format($umeta['childcare_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #a5a5a5;">
                          <td>Pet Care</td>
                          <td colspan="2"><?php if (!empty($umeta['petcare_'.$m])) { echo "$".number_format($umeta['petcare_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #a5a5a5;">
                          <td>Memberships & Subscriptions</td>
                          <td colspan="2"><?php if (!empty($umeta['memberships_subscription_'.$m])) { echo "$".number_format($umeta['memberships_subscription_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #a5a5a5;">
                          <td>Vacation Fund</td>
                          <td colspan="2"><?php if (!empty($umeta['vacation_fund_'.$m])) { echo "$".number_format($umeta['vacation_fund_'.$m]); } ?></td>
                        </tr>
                        <tr>
                          <td><h3>Total Personal Expenses</h3></td>
                          <td colspan="2"><h3><?php $tpe = $umeta['groceries_meals_'.$m]+$umeta['clothing_jewelwery_'.$m]+$umeta['personal_care_'.$m]+$umeta['entertainment_hobbies_'.$m]+$umeta['dinin_'.$m]+$umeta['childcare_'.$m]+$umeta['petcare_'.$m]+$umeta['memberships_subscription_'.$m]+$umeta['vacation_fund_'.$m];echo "$".number_format($tpe) ?></h3></td>
                        </tr>
                        <tr>
                          <td colspan="3"><h2>Health & Insurance Expenses</h2></td>
                        </tr>
                        <tr style="background-color: #ffc000;">
                          <td>Health Insurance</td>
                          <td colspan="2"><?php if (!empty($umeta['health_insurance_'.$m])) { echo "$".number_format($umeta['health_insurance_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ffc000;">
                          <td>Life Insurance</td>
                          <td colspan="2"><?php if (!empty($umeta['life_insurance_'.$m])) { echo "$".number_format($umeta['life_insurance_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ffc000;">
                          <td>Disibilty Insurance</td>
                          <td colspan="2"><?php if (!empty($umeta['disability_insurance_'.$m])) { echo "$".number_format($umeta['disability_insurance_'.$m]); }  ?></td>
                        </tr>
                        <tr style="background-color: #ffc000;">
                          <td>Critical Illness Insurance</td>
                          <td colspan="2"><?php if (!empty($umeta['critical_illness_'.$m])) { echo "$".number_format($umeta['critical_illness_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ffc000;">
                          <td>Vision</td>
                          <td colspan="2"><?php if (!empty($umeta['vision_'.$m])) { echo "$".number_format($umeta['vision_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ffc000;">
                          <td>Medical</td>
                          <td colspan="2"><?php if (!empty($umeta['medical_'.$m])) { echo "$".number_format($umeta['medical_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ffc000;">
                          <td>Prescriptions</td>
                          <td colspan="2"><?php if (!empty($umeta['prescriptions_'.$m])) { echo "$".number_format($umeta['prescriptions_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #ffc000;">
                          <td>Dental</td>
                          <td colspan="2"><?php if (!empty($umeta['dental_'.$m])) { echo "$".number_format($umeta['dental_'.$m]); } ?></td>
                        </tr>
                        <tr>
                          <td><h3>Total Health & Insurance Expenses</h3></td>
                          <td colspan="2"><h3><?php $thie = $umeta['health_insurance_'.$m]+$umeta['life_insurance_'.$m]+$umeta['disability_insurance_'.$m]+$umeta['critical_illness_'.$m]+$umeta['vision_'.$m]+$umeta['medical_'.$m]+$umeta['prescriptions_'.$m]+$umeta['dental_'.$m];echo "$".number_format($thie) ?></h3></td>
                        </tr>
                         <tr>
                          <td colspan="3"><h2>Debts Expenses</h2></td>
                        </tr>
                        <tr style="background-color: #8da8d9;">
                          <td>Personal Loans</td>
                          <td colspan="2"><?php if (!empty($umeta['personal_loans_'.$m])) { echo "$".number_format($umeta['personal_loans_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #8da8d9;">
                          <td>Credit cards</td>
                          <td colspan="2"><?php if (!empty($umeta['credit_cards_'.$m])) { echo "$".number_format($umeta['credit_cards_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #8da8d9;">
                          <td>Credit Lines</td>
                          <td colspan="2"><?php if (!empty($umeta['credit_lines_'.$m])) { echo "$".number_format($umeta['credit_lines_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #8da8d9;">
                          <td>Education Loans</td>
                          <td colspan="2"><?php if (!empty($umeta['education_loans_'.$m])) { echo "$".number_format($umeta['education_loans_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #8da8d9;">
                          <td>Business Loans</td>
                          <td colspan="2"><?php if (!empty($umeta['business_loans_'.$m])) { echo "$".number_format($umeta['business_loans_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #8da8d9;">
                          <td>Consolidated Loans</td>
                          <td colspan="2"><?php if (!empty($umeta['consolidated_loans_'.$m])) { echo "$".number_format($umeta['consolidated_loans_'.$m]); } ?></td>
                        </tr>
                        <tr style="background-color: #8da8d9;">
                          <td>Investment Loan</td>
                          <td colspan="2"><?php if (!empty($umeta['investment_loan_'.$m])) { echo "$".number_format($umeta['investment_loan_'.$m]); } ?></td>
                        </tr>
                        <tr>
                          <td><h3>Total Debts Expenses</h3></td>
                          <td colspan="2"><h3><?php $tde = $umeta['personal_loans_'.$m]+$umeta['credit_cards_'.$m]+$umeta['credit_lines_'.$m]+$umeta['education_loans_'.$m]+$umeta['business_loans_'.$m]+$umeta['consolidated_loans_'.$m]+$umeta['investment_loan_'.$m];echo "$".number_format($tde) ?></h3></td>
                        </tr>
						
						<tr>
                          <td><h3>Total Expenses</h3></td>
                          <td colspan="2"><h3><?php $te = $the+$tte+$tpe+$thie+$tde; echo "$".number_format($te); ?></h3></td>
                        </tr>
                        <tr>
                          <td colspan="3">
                            <center>
                              <a href="<?=base_url()?>users/expenses-donloadpdf?months=<?php echo $n ?>" class="btn btn-success btn-lg" target="_blank">
                                <span class="glyphicon glyphicon-download"></span> Download 
                              </a>
                            </center>
                             
                          </td>
                        </tr>
                      </tbody>
                    </table>
					</div>
					</div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<script>
$( document ).ready(function() {
   
	google.charts.setOnLoadCallback(drawChart);
});
</script>
<!-- /#page-wrapper -->