
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
                                        <div class="form">	
                                            <h1>PROPERTY ASSETS</h1>
                                            Personal Residence
											<br>
											<li class="active" style="width:49%; float:left;"><input type="text" class="active textbox" style="width:90%;" name="current_value_personal_residence" value="<?php
												if (!empty($current_value_personal_residence)) {
													echo $current_value_personal_residence;
												}
											?>" placeholder="Current Value"></li>
											<li class="active" style="width:49%; float:right;"> <input type="text" class="active textbox" style="width:90%;" name="personal_cost" value="<?php
												if (!empty($personal_cost)) {
													echo $personal_cost;
												}
											?>" placeholder="Cost"></li>
											<br>
                                            Recreation Property
											
											<br>
											<li class="active" style="width:49%; float:left;">
												<input type="text" class="textbox" style="width:90%;" name="current_value_recreation_property" value="<?php
													if (!empty($current_value_recreation_property)) {
														echo $current_value_recreation_property;
													}
												?>" placeholder="Current Value"></li>
												<li class="active" style="width:49%; float:right;"> <input type="text" class="active textbox" style="width:90%;" name="recreation_cost" value="<?php
													if (!empty($recreation_cost)) {
														echo $recreation_cost;
													}
												?>" placeholder="Cost"></li>
												
												<br>
												Real Estate Investment
												<br>
												<li class="active" style="width:49%; float:left;">   <input type="text" class="textbox" style="width:90%;" name="current_value_realestate" value="<?php
													if (!empty($current_value_realestate)) {
														echo $current_value_realestate;
													}
												?>" placeholder="Current Value"></li>
												<li class="active" style="width:49%; float:right;">  <input type="text" class="active textbox" style="width:90%;" name="realestate_cost" value="<?php
													if (!empty($realestate_cost)) {
														echo $realestate_cost;
													}
												?>" placeholder="Cost"></li>
												<br> 
												
												Art & Collectables
												<br> 
												<li class="active" style="width:49%; float:left;"> 	<input type="text" class="active textbox" style="width:90%;" name="current_value_art" value="<?php
													if (!empty($current_value_art)) {
														echo $current_value_art;
													}
												?>" placeholder="Current Value"></li>
												<li class="active" style="width:49%; float:right;"> <input type="text" class="active textbox" style="width:90%;" name="art_cost" value="<?php
													if (!empty($art_cost)) {
														echo $art_cost;
													}
												?>" placeholder="Cost"></li>
												<br>	
												Vehicles
												<br>
												
												<li class="active" style="width:49%; float:left;">	<input type="text" class="active textbox" style="width:90%;" name="current_value_vehicles" value="<?php
													if (!empty($current_value_vehicles)) {
														echo $current_value_vehicles;
													}
												?>" placeholder="Current Value"></li>
												<li class="active" style="width:49%; float:right;">  <input type="text" class="active textbox" style="width:90%;" name="vehicles_cost" value="<?php
													if (!empty($vehicles_cost)) {
														echo $vehicles_cost;
													}
												?>" placeholder="Cost"></li>
												<br>
												
												Jewellery
												<br>
												
												<li class="active" style="width:49%; float:left;">	<input type="text" class="active textbox" style="width:90%;" name="current_value_jewellery" value="<?php
													if (!empty($current_value_jewellery)) {
														echo $current_value_jewellery;
													}
												?>" placeholder="Current Value"></li>
												<li class="active" style="width:49%; float:right;"> <input type="text" class="active textbox" style="width:90%;"name="jewellery_cost" value="<?php
													if (!empty($jewellery_cost)) {
														echo $jewellery_cost;
													}
												?>" placeholder="Cost"></li>
												<br>
												
												<input type="submit" style="width:95%;" value="ADD ASSETS">
												</div>
												
												
												<div class="form">	
													<H1>MORTGAGES	</H1>								
													<li class="active" style="width:49%; float:left;">	 <input type="text" class="active textbox" style="width:90%;"  name="personal_resisdence" value="<?php
														if (!empty($personal_resisdence)) {
															echo $personal_resisdence;
														}
													?>" placeholder="PERSONAL RESIDENCE MORTGAGE"></li>
													<li class="active" style="width:49%; float:right;">	 <input type="text" class="textbox" style="width:90%;" name="recreation_property"  value="<?php
														if (!empty($recreation_property)) {
															echo $recreation_property;
														}
													?>" placeholder="RECREATION PROPERTY MORTGAGES"></li>
													<li class="active" style="width:49%; float:left;">	  <input type="text" class="textbox" style="width:90%;" name="investment_property" value="<?php
														if (!empty($investment_property)) {
															echo $investment_property;
														}
													?>" placeholder="INVESTMENT PROPERTY MORTGAGES"></li>
													<input type="submit" style="width:95%;" value="ADD DEBT">
													</div>
													<div class="form">	
														<H1>	LINE OF CREDIT 	</H1>							
														<li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width:90%;"  name="equity_secured" value="<?php
															if (!empty($equity_secured)) {
																echo $equity_secured;
															}
														?>" placeholder="EQUITY SECURED"></li>
														<li class="active" style="width:49%; float:right;"><input type="text" class="textbox" style="width:90%;" name="unsecured" value="<?php
															if (!empty($unsecured)) {
																echo $unsecured;
															}
														?>" placeholder="UNSECURED"></li>
														<input type="submit" style="width:95%;"  value="ADD DEBT">
														</div>
														<div class="form">	
															<H1>Investable Assets</H1>									
															<li class="active" style="width:49%; float:left;">  <input type="text" class="active textbox" style="width:90%;" name="checking_accounts" value="<?php
																if (!empty($checking_accounts)) {
																	echo $checking_accounts;
																}
															?>" placeholder="Checking Accounts"></li>
															<li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width:90%;" name="saving_accounts" value="<?php
																if (!empty($saving_accounts)) {
																	echo $saving_accounts;
																}
															?>" placeholder="Savings Accounts"></li>
															<li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width:90%;" name="health_saving" value="<?php
																if (!empty($health_saving)) {
																	echo $health_saving;
																}
															?>" placeholder="Health Savings Account"></li>
															<li class="active" style="width:49%; float:right;"><input type="text" class="textbox" style="width:90%;" name="taxable_investment" value="<?php
																if (!empty($taxable_investment)) {
																	echo $taxable_investment;
																}
															?>" placeholder="Taxable Investments"></li>
															<li class="active" style="width:49%; float:left;">  <input type="text" class="textbox" style="width:90%;" name="education_saving" value="<?php
																if (!empty($education_saving)) {
																	echo $education_saving;
																}
															?>" placeholder="Education Savings Plan"></li>
															<li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width:90%;" name="life_insurance" value="<?php
																if (!empty($life_insurance)) {
																	echo $life_insurance;
																}
															?>" placeholder="Life Insurance Cash Value"></li>
															<li class="active" style="width:49%; float:left;"><input type="text" class="textbox" style="width:90%;" name="dpsp" value="<?php
																if (!empty($dpsp)) {
																	echo $dpsp;
																}
															?>" placeholder="401(k)/DPSP"></li>
															<li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width:90%;" name="lira" value="<?php
																if (!empty($lira)) {
																	echo $lira;
																}
															?>" placeholder="403(b)/LIRA"></li>
															<li class="active" style="width:49%; float:left;"><input type="text" class="textbox" style="width:90%;" name="rrsp" value="<?php
																if (!empty($rrsp)) {
																	echo $rrsp;
																}
															?>" placeholder="IRA/RRSP"></li>
															<li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width:90%;" name="ipp" value="<?php
																if (!empty($ipp)) {
																	echo $ipp;
																}
															?>" placeholder="SEP/IRA/IPP"></li>
															<input type="submit" style="width:95%;"  value="Add Asset">
														</div>
														<div class="form">	
															<H1>LIABILITIES	</H1><BR>
															CREDIT CARDS
															<br>
															<li class="active" style="width:49%; float:left;">   <input type="text" class="active textbox" style="width:90%;"  name="mastercard" value="<?php
																if (!empty($mastercard)) {
																	echo $mastercard;
																}
															?>" placeholder="MASTERCARD"></li>
															<li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width:90%;"  name="american_express" value="<?php
																if (!empty($american_express)) {
																	echo $american_express;
																}
															?>" placeholder="AMERICAN EXPRESS"></li>
															<li class="active" style="width:49%; float:left;">  <input type="text" class="textbox" style="width:90%;" name="visa" value="<?php
																if (!empty($visa)) {
																	echo $visa;
																}
															?>" placeholder="VISA"></li>
															<li class="active" style="width:49%; float:right;">   <input type="text" class="textbox" style="width:90%;" name="retail" value="<?php
																if (!empty($retail)) {
																	echo $retail;
																}
															?>" placeholder="RETAIL"></li>
															<input type="submit" style="width:95%;"  value="ADD DEBT">
														</div>
														<div class="form">	
															<H1>LOANS	</H1><BR>
															
															<li class="active" style="width:49%; float:left;">  <input type="text" class="active textbox" style="width:90%;" name="personal_loan" value="<?php
																if (!empty($personal_loan)) {
																	echo $personal_loan;
																}
															?>" placeholder="PERSONAL LOANS"></li>
															<li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width:90%;" name="student_loan" value="<?php
																if (!empty($student_loan)) {
																	echo $student_loan;
																}
															?>" placeholder="STUDENT LOANS"></li>
															<li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width:90%;" name="car_loan" value="<?php
																if (!empty($car_loan)) {
																	echo $car_loan;
																}
															?>" placeholder="CAR LOANS"></li>
															<li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width:90%;" name="consolidation_loan" value="<?php
																if (!empty($consolidation_loan)) {
																	echo $consolidation_loan;
																}
															?>" placeholder="CONSOLIDATION LOANS"></li>
															<li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width:90%;" name="investment_loan" value="<?php
																if (!empty($investment_loan)) {
																	echo $investment_loan;
																}
															?>" placeholder="INVESTMENT LOANS"></li>
															<li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width:90%;" name="business_loan" value="<?php
																if (!empty($business_loan)) {
																	echo $business_loan;
																}
																?>" placeholder="BUSINESS LOANS"></li>
																<input type="submit" style="width:95%;" value="Complete ">
																<input type="submit" style="width:95%;" value="Save return to Dashboard ">
																</div> 
																</form>
																</li>
																</ul>
															</div> 
															</div> 
														</div> 
													</div>
													
													
													</section>   
													
													<section class="col-xs-12 col-sm-12 col-md-4" style="margin-left: 10px;">     
													<?php $this->load->view('users/rightmenu'); ?>       
													</section>    
													</div>   
													</div>
													</div>
																										