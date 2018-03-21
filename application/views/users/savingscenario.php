
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
													<select name="savingscenariotools" required="required">
														<option  value="">Select Saving Scenario Tools</option>
														<option <?php if (!empty($savingscenariotools) && $savingscenariotools == 'Required Savings') { ?> selected <?php } ?> value="Required Savings">Required Savings</option>
														<option <?php if (!empty($savingscenariotools) && $savingscenariotools == 'Life Insurance Coverage Purpose') { ?> selected <?php } ?> value="Life Insurance Coverage Purpose">Life Insurance Coverage Purpose</option>
														<option <?php if (!empty($savingscenariotools) && $savingscenariotools == 'Income Insurance Coverage Purpose') { ?> selected <?php } ?> value="Income Insurance Coverage Purpose">Income Insurance Coverage Purpose</option>
														<option <?php if (!empty($savingscenariotools) && $savingscenariotools == 'Capital Growth Purpose') { ?> selected <?php } ?> value="Capital Growth Purpose">Capital Growth Purpose</option>
														<option <?php if (!empty($savingscenariotools) && $savingscenariotools == 'Capital Savings Purpose') { ?> selected <?php } ?> value="Capital Savings Purpose">Capital Savings Purpose</option>
														<option <?php if (!empty($savingscenariotools) && $savingscenariotools == 'Required Savings for Retirement') { ?> selected <?php } ?> value="Required Savings for Retirement">Required Savings for Retirement</option>
														<option <?php if (!empty($savingscenariotools) && $savingscenariotools == 'Available Savings for Retirement') { ?> selected <?php } ?> value="Required Savings for Retirement">Available Savings for Retirement</option>
													</select>
												</li>
											</div>
											<br><h1>Required Savings</h1>
											<div class="active">
												<button class=" button4"><a href="javascript:void(0)" onclick="showhide(1)">Payment</a></button>
												<button class=" button4"><a href="javascript:void(0)" onclick="showhide(2)">Savings Amount</a><button>
													<button class=" button4"><a href="javascript:void(0)" onclick="showhide(3)">Years to Save</a><button>
													</div>
													<div class="basic" id="basic_1" style="display:none;">
														
														<div data-role="rangeslider">
															Savings Goal Amount<input type="range" name="saving_scenario_savingsgoalamount" id="saving_scenario_savingsgoalamount" value="0" min="0" max="10000">
														</div>
														<div data-role="rangeslider">
															Years to Save<input type="range" name="saving_scenario_yearstosave" id="saving_scenario_yearstosave" value="1" min="0" max="100">
														</div>
														<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="saving_scenario_currentsavings"  value="<?php
															if (!empty($saving_scenario_currentsavings)) {
																echo $saving_scenario_currentsavings;
															}
														?>" placeholder="Current Savings"></li><br>
														<li class="active" >
															<select name="savingfrequency" required="required">
																<option  value="">Select Savings Frequency</option>
																<option <?php if (!empty($savingfrequency) && $savingfrequency == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																<option <?php if (!empty($savingfrequency) && $savingfrequency == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																<option <?php if (!empty($savingfrequency) && $savingfrequency == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
															</select>
														</li>
														<div data-role="rangeslider">
															Interest Rate<input type="range" name="saving_scenario_intrestrate" id="saving_scenario_intrestrate" value="0" min="1" max="1000">
														</div>	
														<br><input type="submit" style="width: 95%;" value="Add Additional Lump Sum"><br>
														<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
														<input type="submit" style="width: 95%;" value="Save and return to dashboard">
													</div>
													
													<div class="basic" id="basic_2" style="display:none">
														<div data-role="rangeslider">
															My saving amount<input type="range" name="saving_scenario_mysavingamount" id="saving_scenario_mysavingamount" value="200" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															Years to Save<input type="range" name="saving_scenario_yearstosave" id="saving_scenario_yearstosave" value="1" min="0" max="100">
														</div>
														<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="saving_scenario_currentsaving"  value="<?php
															if (!empty($saving_scenario_currentsaving)) {
																echo $saving_scenario_currentsaving;
															}
														?>" placeholder="Current Savings"></li><br>
														<li class="active" >
															<select name="saving_scenario_savingfrequency" required="required">
																<option  value="">Select Savings Frequency</option>
																<option <?php if (!empty($saving_scenario_savingfrequency) && $saving_scenario_savingfrequency == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																<option <?php if (!empty($saving_scenario_savingfrequency) && $saving_scenario_savingfrequency == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																<option <?php if (!empty($saving_scenario_savingfrequency) && $saving_scenario_savingfrequency == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
															</select>
														</li>
														<div data-role="rangeslider">
															Interest Rate<input type="range" name="saving_scenario_intrestrate1" id="saving_scenario_intrestrate1" value="0" min="1" max="1000">
														</div>	
														<br><legend>	 With a $_____(frequency) savings plan, at ___% for ____(#years), your total savings amount will be $____________</legend>
														<br><input type="submit" style="width: 95%;" value="Add Additional Lump Sum"><br>
														<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
														<input type="submit" style="width: 95%;" value="Save and return to dashboard">
													</div>
													
													
													
													<div class="basic" id="basic_3" style="display:none">
														
														<div data-role="rangeslider">
															Savings Goal Amount<input type="range" name="saving_scenario_savingsgoalamount1" id="saving_scenario_savingsgoalamount1" value="0" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															My savings amount<input type="range" name="saving_scenario_mysavingamount1" id="saving_scenario_mysavingamount1" value="0" min="0" max="1000">
														</div>
														<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="saving_scenario_currentsaving2"  value="<?php
															if (!empty($saving_scenario_currentsaving2)) {
																echo $saving_scenario_currentsaving2;
															}
														?>" placeholder="Current Savings"></li><br>
														<li class="active" >
															<select name="savingfrequency3" required="required">
																<option  value="">Select Savings Frequency</option>
																<option <?php if (!empty($savingfrequency3) && $savingfrequency3 == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																<option <?php if (!empty($savingfrequency3) && $savingfrequency3 == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																<option <?php if (!empty($savingfrequency3) && $savingfrequency3 == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
															</select>
														</li>
														<div data-role="rangeslider">
															Interest Rate<input type="range" name="saving_scenario_intrestrate3" id="saving_scenario_intrestrate3" value="200" min="1" max="1000">
														</div>	
														<br><input type="submit" style="width: 95%;" value="Add Additional Lump Sum"><br>
														<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
														<input type="submit" style="width: 95%;" value="Save and return to dashboard">	
													</div>
													
													<br><h1>Life Insurance Coverage Purpose</h1>
													<div class="active">
														<button class=" button4"><a href="javascript:void(0)" onclick="showhideinsurance(4)">Life Coverage</a></button>
													</div>
													
													<div class="insurance" id="insurance_4" style="display:none;">
														
														<div data-role="rangeslider">
															Current Insurance Coverage<input type="range" name="life_insurance_currentinsurancecoverage" id="life_insurance_currentinsurancecoverage" value="0" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															My Savings & Investments<input type="range" name="life_insurance_mysaving_investment" id="life_insurance_mysaving_investment" value="0" min="0" max="100">
														</div>
														<br>
														<li class="active" >
															<select name="life_insurance_currentdebt" required="required">
																<option  value="">Select Current Debts</option>
																<option <?php if (!empty($life_insurance_currentdebt) && $life_insurance_currentdebt == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																<option <?php if (!empty($life_insurance_currentdebt) && $life_insurance_currentdebt == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																<option <?php if (!empty($life_insurance_currentdebt) && $life_insurance_currentdebt == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
															</select>
														</li>
														
														<br><legend>Amount your beneficiary or family would have to meet goals and maintain lifestyle $____________</legend>
														<br><input type="submit" style="width: 95%;" value="Add Additional Lump Sum"><br>
														<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
														<input type="submit" style="width: 95%;" value="Save and return to dashboard">
													</div>
													
													
													<br><h1>Income Insurance Coverage Purpose</h1>
													<div class="active">
														<button class=" button4"><a href="javascript:void(0)" onclick="showhideincome(1)">Income Coverage</a></button>
													</div>
													
													<div class="income" id="income_1" style="display:none">
														<div data-role="rangeslider">
															Gross monthly income<input type="range" name="income_insurance_gross_monthlyincome" id="income_insurance_gross_monthlyincome" value="200" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															Existing Disability Benefit<input type="range" name="income_insurance_existing_disability_benifit" id="income_insurance_existing_disability_benifit" value="1" min="0" max="100">
														</div>
														<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="income_insurance_available_income"  value="<?php
															if (!empty($income_insurance_available_income)) {
																echo $income_insurance_available_income;
															}
														?>" placeholder="Available Income"></li><br>
														<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="income_insurance_decrease_monthly_income"  value="<?php
															if (!empty($income_insurance_decrease_monthly_income)) {
																echo $income_insurance_decrease_monthly_income;
															}
														?>" placeholder="Decrease in Monthly Income"></li><br>
														<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="income_insurance_monthly_lifestyle_expenses"  value="<?php
															if (!empty($income_insurance_monthly_lifestyle_expenses)) {
																echo $income_insurance_monthly_lifestyle_expenses;
															}
														?>" placeholder="Monthly Lifestyle Expenses"></li><br>
														<br><legend>Amount needed to meet lifestyle expenses and needs $__________</legend>
														<br><input type="submit" style="width: 95%;" value="Add Additional Lump Sum"><br>
														<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
														<input type="submit" style="width: 95%;" value="Save and return to dashboard">
													</div>
													
													<br><h1>Capital Growth Purpose</h1>
													<div class="active">
														<button class=" button4"><a href="javascript:void(0)" onclick="showhidecapitalgrowth(1)">Capital Growth</a></button>
													</div>
													<div class="capital" id="capital_1" style="display:none;">
														
														<div data-role="rangeslider">
															Current Market Value<input type="range" name="capital_growth_current_marketvalue" id="capital_growth_current_marketvalue" value="0" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															Average Tax Rate” %<input type="range" name="capital_growth_averagetax_rate" id="capital_growth_averagetax_rate" value="0" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															Average Return<input type="range" name="capital_growth_average_return" id="capital_growth_average_return" value="0" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															Number of Years<input type="range" name="capital_growth_numberof_years" id="capital_growth_numberof_years" value="0" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Inflation Rate <input type="range" name="capital_growth_inflation_rate" id="capital_growth_inflation_rate" value="0" min="1" max="1000">
														</div>
														<br><legend>” In ____years, the $_______ you invested will be worth $________, or $__________ after tax and inflation</legend>
														<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
														<input type="submit" style="width: 95%;" value="Save and return to dashboard">
													</div>
													
													<br><h1>Capital Savings Purpose:</h1>
													<div class="active">
														<button class=" button4"><a href="javascript:void(0)" onclick="showhidecapitalsaving(1)">Capital Savings Plans</a><button>
															<button class=" button4"><a href="javascript:void(0)" onclick="showhidecapitalsaving(2)">Capital Depletion</a><button>
															</div>
															<div class="capitalsaving" id="capitalsaving_1" style="display:none;">
																
																<div data-role="rangeslider">
																	Regular Savings<input type="range" name="capital_saving_purpose_regular_savings" id="capital_saving_purpose_regular_savings" value="200" min="0" max="1000">
																</div>
																<div data-role="rangeslider">
																	Current Market Value<input type="range" name="capital_saving_purpose_currentmarket_value" id="capital_saving_purpose_currentmarket_value" value="1" min="0" max="100">
																</div>
																<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="capital_saving_purpose_currentsavings"  value="<?php
																	if (!empty($capital_saving_purpose_currentsavings)) {
																		echo $capital_saving_purpose_currentsavings;
																	}
																?>" placeholder="Current Savings"></li><br>
																<li class="active" >
																	<select name="capital_saving_purpose_payment_frequency" required="required">
																		<option  value="">Select Payment Frequency</option>
																		<option <?php if (!empty($capital_saving_purpose_payment_frequency) && $capital_saving_purpose_payment_frequency == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																		<option <?php if (!empty($capital_saving_purpose_payment_frequency) && $capital_saving_purpose_payment_frequency == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																		<option <?php if (!empty($capital_saving_purpose_payment_frequency) && $capital_saving_purpose_payment_frequency == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
																	</select>
																</li>
																<div data-role="rangeslider">
																	Average Tax Rate<input type="range" name="capital_saving_purpose_averagetax_rate" id="capital_saving_purpose_averagetax_rate" value="200" min="1" max="1000">
																</div>	
																<div data-role="rangeslider">
																	Inflation Rate<input type="range" name="capital_saving_purpose_inflation_rate" id="capital_saving_purpose_inflation_rate" value="200" min="1" max="1000">
																</div>	
																<div data-role="rangeslider">
																	Required Return<input type="range" name="capital_saving_purpose_required_return" id="capital_saving_purpose_required_return" value="200" min="1" max="1000">
																</div>
																<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="capital_saving_purpose_number_years"  value="<?php
																	if (!empty($capital_saving_purpose_number_years)) {
																		echo $capital_saving_purpose_number_years;
																	}
																?>" placeholder="Number of Years"></li><br>
																<br><legend>”In _____ years, you will have earned $________ from your investment after taxes.</legend>
																<br>
																<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
																<input type="submit" style="width: 95%;" value="Save and return to dashboard">
															</div>
															
															<div class="capitalsaving" id="capitalsaving_2" style="display:none;">
																
																<div data-role="rangeslider">
																	Regular Savings<input type="range" name="capital_depletion_regular_savings" id="capital_depletion_regular_savings" value="200" min="0" max="1000">
																</div>
																<div data-role="rangeslider">
																	Annual Payout<input type="range" name="capital_depletion_annual_payout" id="capital_depletion_annual_payout" value="1" min="0" max="100">
																</div>
																<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="capital_depletion_current_savings"  value="<?php
																	if (!empty($capital_depletion_current_savings)) {
																		echo $capital_depletion_current_savings;
																	}
																?>" placeholder="Current Savings"></li><br>
																<li class="active" >
																	<select name="capital_depletion_payment_frequency" required="required">
																		<option  value="">Select Payment Frequency</option>
																		<option <?php if (!empty($capital_depletion_payment_frequency) && $capital_depletion_payment_frequency == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																		<option <?php if (!empty($capital_depletion_payment_frequency) && $capital_depletion_payment_frequency== 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																		<option <?php if (!empty($capital_depletion_payment_frequency) && $capital_depletion_payment_frequency== 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
																	</select>
																</li>
																<div data-role="rangeslider">
																	Average Tax Rate<input type="range" name="capital_depletion_averagetax_rate" id="capital_depletion_averagetax_rate" value="0" min="1" max="1000">
																</div>	
																<div data-role="rangeslider">
																	Inflation Rate<input type="range" name="capital_depletion_inflation_rate" id="capital_depletion_inflation_rate" value="0" min="1" max="1000">
																</div>	
																<div data-role="rangeslider">
																	Average Return<input type="range" name="capital_depletion_average_return" id="capital_depletion_average_return" value="0" min="1" max="1000">
																</div>
																<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="capital_depletion_start_years"  value="<?php
																	if (!empty($capital_depletion_start_years)) {
																		echo $capital_depletion_start_years;
																	}
																?>" placeholder="Start Years"></li><br>
																<br><legend>Your investment of $__________ can provide you with an indexed, after-tax income of $________ for ______ years.</legend>
																<br>
																<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
																<input type="submit" style="width: 95%;" value="Save and return to dashboard">
															</div>	
															
															<br><h1>Required Savings for Retirement</h1>
															<div class="active">
																<button class=" button4"><a href="javascript:void(0)" onclick="showhideretirementsaving(1)">Required Savings</a><button>
																	<button class=" button4"><a href="javascript:void(0)" onclick="showhideretirementsaving(2)">Invested at Age</a><button>
																		
																	</div>
																	<div class="retirementsaving" id="retirementsaving_1" style="display:none;">
																		
																		<div data-role="rangeslider">
																			Desired Annual Income( after tax)<input type="range" name="required_savings_desiredannual_income" id="required_savings_desiredannual_income" value="200" min="0" max="1000">
																		</div>
																		<br><legend>Start payment Age ____ to Age______</legend>
																		<br>
																		<div data-role="rangeslider">
																			Current Market Value<input type="range" name="required_savings_current_marketvalue" id="required_savings_current_marketvalue" value="1" min="0" max="100">
																		</div>
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="required_savings_todaydollar"  value="<?php
																			if (!empty($required_savings_todaydollar)) {
																				echo $required_savings_todaydollar;
																			}
																		?>" placeholder="Today’s Dollars"></li><br>
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="required_savings_initial_investment"  value="<?php
																			if (!empty($required_savings_initial_investment)) {
																				echo $required_savings_initial_investment;
																			}
																		?>" placeholder="Initial Investment"></li><br>
																		<li class="active" >
																			<select name="required_savings_index_at" required="required">
																				<option  value="">Select Indexed at</option>
																				<option <?php if (!empty($required_savings_index_at) && $required_savings_index_at == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																				<option <?php if (!empty($required_savings_index_at) && $required_savings_index_at == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																				<option <?php if (!empty($required_savings_index_at) && $required_savings_index_at == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
																			</select>
																		</li>
																		<div data-role="rangeslider">
																			Average return<input type="range" name="required_savings_average_return" id="required_savings_average_return" value="200" min="1" max="1000">
																		</div>	
																		
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="required_savings_average_taxrate"  value="<?php
																			if (!empty($required_savings_average_taxrate)) {
																				echo $required_savings_average_taxrate;
																			}
																		?>" placeholder="“Average Tax Rate”"></li><br>
																		
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="required_savings_indexed_required_monthlysaving"  value="<?php
																			if (!empty($required_savings_indexed_required_monthlysaving)) {
																				echo $required_savings_indexed_required_monthlysaving;
																			}
																		?>" placeholder="indexed Required Monthly Savings"></li><br>
																		<br><legend>”You need to save $______ per month to a taxable savings account from age _____ to _____. As of age (start payment age), the value will be $___________ </legend>
																		<br>
																		<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
																		<input type="submit" style="width: 95%;" value="Save and return to dashboard">
																	</div>
																	
																	<div class="retirementsaving" id="retirementsaving_2" style="display:none;">
																		
																		<div data-role="rangeslider">
																			Desired After-Tax Income<input type="range" name="available_savings_desiredaftertax_income" id="available_savings_desiredaftertax_income" value="0" min="0" max="1000">
																		</div>
																		<div data-role="rangeslider">
																			Capital Needed<input type="range" name="available_savings_capital_needed" id="available_savings_capital_needed" value="0" min="0" max="1000">
																		</div>
																		<br><legend>Retirement Age ____ to _____</legend>
																		<br>
																		<div data-role="rangeslider">
																			Indexed at<input type="range" name="available_savings_indexedat" id="available_savings_indexedat" value="0" min="0" max="100">
																		</div>
																		
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="available_savings_averagereturn"  value="<?php
																			if (!empty($available_savings_averagereturn)) {
																				echo $available_savings_averagereturn;
																			}
																		?>" placeholder="Average Return"></li><br>
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="available_savings_averagetaxrate"  value="<?php
																			if (!empty($available_savings_averagetaxrate)) {
																				echo $available_savings_averagetaxrate;
																			}
																		?>" placeholder="Average Tax Rate"></li><br>
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="available_savings_required_monthly_savings"  value="<?php
																			if (!empty($available_savings_required_monthly_savings)) {
																				echo $available_savings_required_monthly_savings;
																			}
																		?>" placeholder="indexed Required Monthly Savings"></li><br>
																		<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
																		<input type="submit" style="width: 95%;" value="Save and return to dashboard">
																	</div>
																	
																	
																	<!-- <div class="retirementsaving" id="retirementsaving_3" style="display:none;">
																		
																		<div data-role="rangeslider">
																		Initial Investment<input type="range" name="saving_scenario_" id="saving_scenario_" value="200" min="0" max="1000">
																		</div>
																		<br><legend>Start savings Age ____ to Age_____</legend>
																		<br>
																		<div data-role="rangeslider">
																		Savings amount<input type="range" name="saving_scenario_" id="saving_scenario_" value="1" min="0" max="100">
																		</div>
																		<div data-role="rangeslider">
																		Indexed at<input type="range" name="saving_scenario_" id="saving_scenario_" value="1" min="0" max="100">
																		</div>
																		<div data-role="rangeslider">
																		Income start Age <input type="range" name="saving_scenario_" id="saving_scenario_" value="1" min="0" max="100">
																		</div>
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="citizenship"  value="<?php
																			if (!empty($citizenship)) {
																				echo $citizenship;
																			}
																		?>" placeholder="Average Return"></li><br>
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="citizenship"  value="<?php
																			if (!empty($citizenship)) {
																				echo $citizenship;
																			}
																		?>" placeholder="Average Tax Rate"></li><br>
																		<li class="active" >
																		<select name="gender" required="required">
																		<option  value="">Select Savings Frequency </option>
																		<option <?php if (!empty($gender) && $gender == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																		<option <?php if (!empty($gender) && $gender == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																		<option <?php if (!empty($gender) && $gender == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
																		</select>
																		</li>
																		<div data-role="rangeslider">
																		Average return<input type="range" name="saving_scenario_" id="saving_scenario_" value="200" min="1" max="1000">
																		</div>	
																		
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="citizenship"  value="<?php
																			if (!empty($citizenship)) {
																				echo $citizenship;
																			}
																		?>" placeholder="“Average Tax Rate”"></li><br>
																		
																		<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="citizenship"  value="<?php
																			if (!empty($citizenship)) {
																				echo $citizenship;
																			}
																		?>" placeholder="indexed Required Monthly Savings"></li><br>
																		<br><legend>” Based on your current savings strategy, you may be able to attain a retirement income of $________. As of Age ___(retirement age selected), The Value of investment will be $__________.</legend>
																		<br>
																		<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
																		<input type="submit" style="width: 95%;" value="Save and return to dashboard">
																	</div> -->
																	
																	<br><h1>Available Savings for Retirement</h1>
																	<div class="active">
																		
																		<button class=" button4"><a href="javascript:void(0)" onclick="showhideavailablesaving(1)">Available Savings</a><button>
																		</div>
																		<div class="availablesaving" id="availablesaving_1" style="display:none;">
																			
																			<div data-role="rangeslider">
																				Initial Investment<input type="range" name="available_savings_initial_investment" id="available_savings_initial_investment" value="200" min="0" max="1000">
																			</div>
																			<br><legend>Start savings Age ____ to Age_____</legend>
																			<br>
																			<div data-role="rangeslider">
																				Savings amount<input type="range" name="available_savings_amount" id="available_savings_amount" value="1" min="0" max="100">
																			</div>
																			<div data-role="rangeslider">
																				Indexed at<input type="range" name="available_savings_indexed_at" id="available_savings_indexed_at" value="1" min="0" max="100">
																			</div>
																			<div data-role="rangeslider">
																				Income start Age <input type="range" name="available_savings_incomestart_age" id="available_savings_incomestart_age" value="1" min="0" max="100">
																			</div>
																			<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="available_savings_average_return"  value="<?php
																				if (!empty($available_savings_average_return)) {
																					echo $available_savings_average_return;
																				}
																			?>" placeholder="Average Return"></li><br>
																			<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="available_savings_average_taxrate"  value="<?php
																				if (!empty($available_savings_average_taxrate)) {
																					echo $available_savings_average_taxrate;
																				}
																			?>" placeholder="Average Tax Rate"></li><br>
																			<li class="active" >
																				<select name="available_savings_frequency" required="required">
																					<option  value="">Select Savings Frequency </option>
																					<option <?php if (!empty($available_savings_frequency) && $available_savings_frequency == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																					<option <?php if (!empty($available_savings_frequency) && $available_savings_frequency == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																					<option <?php if (!empty($available_savings_frequency) && $available_savings_frequency == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
																				</select>
																			</li>
																			<div data-role="rangeslider">
																				Average return<input type="range" name="available_savings_average_return1" id="available_savings_average_return1" value="200" min="1" max="1000">
																			</div>	
																			
																			<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="available_savings_average_taxrate1"  value="<?php
																				if (!empty($available_savings_average_taxrate1)) {
																					echo $available_savings_average_taxrate1;
																				}
																			?>" placeholder="“Average Tax Rate”"></li><br>
																			
																			<br> <li class="active"> <input type="text" class="textbox" style="width: 90%;" name="available_savings_indexed_required_monthlysaving"  value="<?php
																				if (!empty($available_savings_indexed_required_monthlysaving)) {
																					echo $available_savings_indexed_required_monthlysaving;
																				}
																			?>" placeholder="indexed Required Monthly Savings"></li><br>
																			<br><legend>” Based on your current savings strategy, you may be able to attain a retirement income of $________. As of Age ___(retirement age selected), The Value of investment will be $__________.</legend>
																			<br>
																			<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
																			<input type="submit" style="width: 95%;" value="Save and return to dashboard">
																		</div>
																		<script>
																			function showhide(id){
																				$('.basic ').hide();
																				$('#basic_'+id).show();
																			}
																		</script>
																		<script>
																			function showhideinsurance(id){
																				$('.insurance').hide();
																				$('#insurance_'+id).show();
																			}
																		</script>
																		<script>
																			function showhideincome(id){
																				$('.income').hide();
																				$('#income_'+id).show();
																			}
																		</script>
																		<script>
																			function showhidecapitalgrowth(id){
																				$('.capital').hide();
																				$('#capital_'+id).show();
																			}
																		</script>
																		<script>
																			function showhidecapitalsaving(id){
																				$('.capitalsaving').hide();
																				$('#capitalsaving_'+id).show();
																			}
																		</script>
																		<script>
																			function showhideretirementsaving(id){
																				$('.retirementsaving').hide();
																				$('#retirementsaving_'+id).show();
																			}
																		</script>
																		<script>
																			function showhideavailablesaving(id){
																				$('.availablesavingavailablesaving').hide();
																				$('#availablesaving_'+id).show();
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
																										