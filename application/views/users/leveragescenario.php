
<div class="container">    
    <?php $this->load->view('users/topmenu'); ?>
    <div class="parent no-gutters">        
        <section class="col-xs-12 col-sm-12 col-md-1 "  style="width: 240px;">   
            <?php $this->load->view('users/leftmenu'); ?>           
		</section>     
        <section class="col-xs-12 col-sm-12 col-md-7 white-bg"> 
            <div class="wrap">
                <!-- tab style-1 -->
                <div class="row">
                    <div class="grid_12 columns">
                        <div class="tab style-1">
							
                            <ul>
                                <li class="active">
                                    <?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
                                        <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
									<?php } ?>
                                    <form method="post">
                                        <div class="top-grids">
											<div class="form">	
												<br>
												<li class="active" >
													<select name="leverage_scenario_calculate" required="required">
														<option  value="">What would you like to calculate</option>
														<option <?php if (!empty($leverage_scenario_calculate) && $leverage_scenario_calculate == 'Long term Global ') { ?> selected <?php } ?> value="Long term Global">Long term Global</option>
														
													</select>
												</li>
											</div>
											<br><h1>Leverage vs Savings </h1>
											<div class="active">
												<button class=" button4"><a href="javascript:void(0)" onclick="showhide(1)">Payment indent</a></button>
												<button class=" button4"><a href="javascript:void(0)" onclick="showhide(2)">loan Amount</a><button>
													<button class=" button4"><a href="javascript:void(0)" onclick="showhide(3)">Amoritization</a><button>
													</div>
													
													
													
													
													
													<div class="basic" id="basic_1" style="display:none;">
														<div data-role="rangeslider">
															Loan Amount<input type="range" name="leverage_scenario_loan_amount" id="leverage_scenario_loan_amount" value="200" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															Number of Years<input type="range" name="leverage_scenario_number_of_years" id="leverage_scenario_number_of_years" value="1" min="0" max="100">
														</div>
														<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="leverage_scenario_marginal_taxrate"  value="<?php
															if (!empty($leverage_scenario_marginal_taxrate)) {
																echo $leverage_scenario_marginal_taxrate;
															}
														?>" placeholder="Marginal Tax Rate"></li><br>
														<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="leverage_scenario_portion_intrest_loan"  value="<?php
															if (!empty($leverage_scenario_portion_intrest_loan)) {
																echo $leverage_scenario_portion_intrest_loan;
															}
														?>" placeholder="portion of intrest loan"></li><br>
														<li class="active" >
															<select name="leverage_scenario_payment_frequency" required="required">
																<option  value="">Select payment Frequency</option>
																<option <?php if (!empty($leverage_scenario_payment_frequency) && $leverage_scenario_payment_frequency == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																<option <?php if (!empty($leverage_scenario_payment_frequency) && $leverage_scenario_payment_frequency == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																<option <?php if (!empty($leverage_scenario_payment_frequency) && $leverage_scenario_payment_frequency == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
															</select>
														</li>
														
														
														<li class="active" >
															<select name="leverage_scenario_landingrate" required="required">
																<option  value="">Select landing rate</option>
																<option <?php if (!empty($leverage_scenario_landingrate) && $leverage_scenario_landingrate == 'landing rate') { ?> selected <?php } ?> value="landing rate">landing rate</option>
																
															</select>
														</li>
														<div data-role="rangeslider">
															Desired Return<input type="range" name="leverage_scenario_desired_return" id="leverage_scenario_desired_return" value="200" min="1" max="1000">
														</div>	
														<br><legend>A $_______ loan amount at ___%, ___ year term, your monthly payment will be $________.</legend>
														<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
														<input type="submit" style="width: 95%;" value="Save and return to dashboard">
														</div>
														
														
														
														
														
														
														
														<div class="basic" id="basic_2" style="display:none;">
															<div data-role="rangeslider">
																Payment Amount<input type="range" name="leverage_scenario_payment_amount" id="leverage_scenario_payment_amount" value="200" min="0" max="1000">
															</div>
															<div data-role="rangeslider">
																Term of Loan<input type="range" name="leverage_scenario_termof_loan" id="leverage_scenario_termof_loan" value="1" min="0" max="100">
															</div>
															<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="leverage_scenario_marginal_tax_rate"  value="<?php
																if (!empty($leverage_scenario_marginal_tax_rate)) {
																	echo $leverage_scenario_marginal_tax_rate;
																}
															?>" placeholder="Marginal Tax Rate"></li><br>
															<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="leverage_scenario_portion_intrestloan"  value="<?php
																if (!empty($leverage_scenario_portion_intrestloan)) {
																	echo $leverage_scenario_portion_intrestloan;
																}
															?>" placeholder="portion of intrest loan"></li><br>
															<li class="active" >
																<select name="leverage_scenario_payment_frequencys" required="required">
																	<option  value="">Select payment Frequency</option>
																	<option <?php if (!empty($leverage_scenario_payment_frequencys) && $leverage_scenario_payment_frequencys == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																	<option <?php if (!empty($leverage_scenario_payment_frequencys) && $leverage_scenario_payment_frequencys == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																	<option <?php if (!empty($leverage_scenario_payment_frequencys) && $leverage_scenario_payment_frequencys == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
																</select>
															</li>
															<li class="active" >
																<select name="leverage_scenario_landing_rate" required="required">
																	<option  value="">Select landing rate</option>
																	<option <?php if (!empty($leverage_scenario_landing_rate) && $leverage_scenario_landing_rate == 'landing rate') { ?> selected <?php } ?> value="landing rate">landing rate</option>
																	
																</select>
															</li>
															<div data-role="rangeslider">
																Desired Return<input type="range" name="leverage_scenario_desired_returns" id="leverage_scenario_desired_returns" value="200" min="1" max="1000">
															</div>
															<input type="checkbox" name="Disclaimer" value="Disclaimer">&nbsp;&nbsp;Leveraging strategies have potential risk for negative outcomes. Interest on loan obtained for investment purposes may not be fully deductible for tax purposes. Please consult with a tax professional for review of your own situation. <br>
															<br><legend>“ In ___ years, your investment may be worth $________ net of tax and interest paid.   Regular Savings without leverage in ___ years may be worth $_______ net of tax</legend>
															<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br$>
															<input type="submit" style="width: 95%;" value="Save and return to dashboard">
															</div>
															
															<div class="basic" id="basic_3" style="display:none;">
																<li class="active" >
																	<select name="leverage_scenario_calculate_comparison" required="required">
																		<option  value="">Select Calculate Comparison</option>
																		<option <?php if (!empty($leverage_scenario_calculate_comparison) && $leverage_scenario_calculate_comparison == 'Payment Amount') { ?> selected <?php } ?> value="Payment Amount">Payment Amount</option>
																		<option <?php if (!empty($leverage_scenario_calculate_comparison) && $leverage_scenario_calculate_comparison == 'Total Payment in years') { ?> selected <?php } ?> value="Total Payment in years">Total Payment in years</option>
																		<option <?php if (!empty($leverage_scenario_calculate_comparison) && $leverage_scenario_calculate_comparison == 'Total Remaining Interest') { ?> selected <?php } ?> value="Total Remaining Interest">Total Remaining Interest</option>
																	</select>
																</li>
																<li class="active" >
																	<select name="leverage_scenario_payment_frequencies" required="required">
																		<option  value="">Select payment Frequency</option>
																		<option <?php if (!empty($leverage_scenario_payment_frequencies) && $leverage_scenario_payment_frequencies == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																		<option <?php if (!empty($leverage_scenario_payment_frequencies) && $leverage_scenario_payment_frequencies == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																		<option <?php if (!empty($leverage_scenario_payment_frequencies) && $leverage_scenario_payment_frequencies == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
																	</select>
																</li>
																<li class="active" >
																	<select name="leverage_scenario_compound_frequency" required="required">
																		<option  value="">Select Compound Frequency</option>
																		<option <?php if (!empty($leverage_scenario_compound_frequency) && $leverage_scenario_compound_frequency == 'Annual') { ?> selected <?php } ?> value="Annual">Annual</option>
																		<option <?php if (!empty($leverage_scenario_compound_frequency) && $leverage_scenario_compound_frequency == 'Semi-Annual') { ?> selected <?php } ?> value="Semi-Annual">Semi-Annual</option>
																		<option <?php if (!empty($leverage_scenario_compound_frequency) && $leverage_scenario_compound_frequency == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																	</select>
																</li>
																
																<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="leverage_scenario_payment"  value="<?php
																	if (!empty($leverage_scenario_payment)) {
																		echo $leverage_scenario_payment;
																	}
																?>" placeholder="Payment"></li><br>
																<input type="checkbox" name="Disclaimer" value="Disclaimer"> Calculation results are approximates and for information purposes only and rates quotes are not considered as rate guarantees. The calculations assume all payments are made when due. Calculations assume that the interest rate would remain constant over the entire amortization period, but actual interest rates may vary over the amortization period. Making weekly/bi-weekly payments will have the effect of making an extra monthly payment every year and will shorten your amortization<br>
																
																
																<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
																<input type="submit" style="width: 95%;" value="Save and return to dashboard">
															</div>
															
															
															
															<script>
																function showhide(id){
																	$('.basic ').hide();
																	$('#basic_'+id).show();
																}
															</script>
															
															</section>   
															<section class="col-xs-12 col-sm-12 col-md-4" style="margin-left: 10px;">     
																<?php $this->load->view('users/rightmenu'); ?>       
															</section>    
														</div> 
													</form>
													</div>
												</div>
												</div>
											</div>
										</div>
									</div>
																