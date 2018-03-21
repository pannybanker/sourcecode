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
                                                <h2>Leasing calculator: To buy or lease</h2> 
                                           
                                                <br>
                                                <li class="active" ><input type="text" class="active textbox" style="width:90%;"  name="buyvslease_pricecar"  value="<?php
                                                    if (!empty($buyvslease_pricecar)) {
                                                        echo $buyvslease_pricecar;
													}
												?>"  placeholder="Price of car"></li>
                                                <li class="active" >  <input type="text" class="active textbox" style="width:90%;" name="buyvslease_down_payment" value="<?php
                                                    if (!empty($buyvslease_down_payment)) {
                                                        echo $buyvslease_down_payment;
													}
												?>" placeholder="Down Payment"></li>
                                                <li class="active"> <input type="text" class="active textbox" style="width:90%;" name="buyvslease_monthlypayment_lease" value="<?php
                                                    if (!empty($buyvslease_monthlypayment_lease)) {
                                                        echo $buyvslease_monthlypayment_lease;
													}
												?>" placeholder="Monthly Payment or lease"></li>
													<li class="active" >
															<select name="buyvslease_leaseterm" required="required">
																<option  value="">Select lease Term</option>
																<option <?php if (!empty($buyvslease_leaseterm) && $buyvslease_leaseterm == '12Month') { ?> selected <?php } ?> value="12Month">12Month</option>
																<option <?php if (!empty($buyvslease_leaseterm) && $buyvslease_leaseterm == '24Month') { ?> selected <?php } ?> value="24Month">24Month</option>
																<option <?php if (!empty($buyvslease_leaseterm) && $buyvslease_leaseterm == '36Month') { ?> selected <?php } ?> value="36Month">36Month</option>
																<option <?php if (!empty($buyvslease_leaseterm) && $buyvslease_leaseterm == '48Month') { ?> selected <?php } ?> value="48Month">48Month</option>
																<option <?php if (!empty($buyvslease_leaseterm) && $buyvslease_leaseterm == '60Month') { ?> selected <?php } ?> value="60Month">60Month</option>
																<option <?php if (!empty($buyvslease_leaseterm) && $buyvslease_leaseterm == '72Month') { ?> selected <?php } ?> value="72Month">72Month</option>
															</select>
														</li>
														
													<li class="active" >
															<select name="buyvslease_return_investment_portfolio" required="required">
																<option  value="">Select Rate of return on Investment Portfolio</option>
																<option <?php if (!empty($buyvslease_return_investment_portfolio) && $buyvslease_return_investment_portfolio == '4%') { ?> selected <?php } ?> value="4%">4%</option>
																<option <?php if (!empty($buyvslease_return_investment_portfolio) && $buyvslease_return_investment_portfolio == '8%') { ?> selected <?php } ?> value="8%">8%</option>
																<option <?php if (!empty($buyvslease_return_investment_portfolio) && $buyvslease_return_investment_portfolio == '12%') { ?> selected <?php } ?> value="12%">12%</option>
															</select>
														</li>
														
												<li class="active" > <input type="text" class="active textbox" style="width:90%;" name="buyvslease_valueofcaratlease" value="<?php
                                                    if (!empty($buyvslease_valueofcaratlease)) {
                                                        echo $buyvslease_valueofcaratlease;
													}
												?>" placeholder="Value of Car at the end of lease"></li>
												
												<li class="active" > <input type="text" class="active textbox" style="width:90%;" name="buyvslease_valueofalternative_investment" value="<?php
                                                    if (!empty($buyvslease_valueofalternative_investment)) {
                                                        echo $buyvslease_valueofalternative_investment;
													}
												?>" placeholder="Value of alternative investments at end of lease term"></li>
												<li class="active"> <input type="text" class="active textbox" style="width:90%;" name="buyvslease_youshould" value="<?php
                                                    if (!empty($buyvslease_youshould)) {
                                                        echo $buyvslease_youshould;
													}
												?>" placeholder="You should"></li>
												<li class="active"> <input type="text" class="active textbox" style="width:90%;" name="buyvslease_rateofreturn" value="<?php
                                                    if (!empty($buyvslease_rateofreturn)) {
                                                        echo $buyvslease_rateofreturn;
													}
												?>" placeholder="Rate of return input "></li>
                                                <input type="submit" style="width:95%;" value="Submit">
												<input type="submit" style="width: 95%;" value="Save and return to dashboard">
												</div>
												
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
								