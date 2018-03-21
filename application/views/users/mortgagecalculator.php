
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
										
											<br><h1> Mortgage Payment Calculator </h1>
											<div class="active">
												<button class=" button4"><a href="javascript:void(0)" onclick="showhide(1)">Payment </a></button>
												<button class=" button4"><a href="javascript:void(0)" onclick="showhide(2)">Mortgage Amount</a><button>
													<button class=" button4"><a href="javascript:void(0)" onclick="showhide(3)">Amoritization</a><button>
													</div>
												
													<div class="basic" id="basic_1" style="display:none;">
														<div data-role="rangeslider">
															Mortgage Amount<input type="range" name="mortgage_" id="mortgage_" value="200" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															Amoritization<input type="range" name="mortgage_" id="mortgage_" value="1" min="0" max="100">
														</div>
														
														<li class="active" >
															<select name="gender" required="required">
																<option  value="">Select payment Frequency</option>
																<option <?php if (!empty($gender) && $gender == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																<option <?php if (!empty($gender) && $gender == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																<option <?php if (!empty($gender) && $gender == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
															</select>
														</li>
														<li class="active" >
															<select name="gender" required="required">
																<option  value="">Select Product</option>
																<option <?php if (!empty($gender) && $gender == 'Custom rate') { ?> selected <?php } ?> value="Custom rate">Custom rate</option>
																
															</select>
														</li>
											
														<div data-role="rangeslider">
															Intrest Rate<input type="range" name="mortgage_" id="mortgage_" value="200" min="1" max="1000">
														</div>	
														<input type="checkbox" name="Disclaimer" value="Disclaimer">&nbsp;&nbsp;” Legal: Calculation results are approximations and for information purposes only and rates quoted are not considered as rate guarantees. The calculations assume all payments are made when due. Calculations assume that the interest rate would remain constant over the entire amortization period, but actual interest rates may vary over the amortization period. Making weekly/bi-weekly payments will have the effect of making an extra monthly payment every year and will shorten your amortization. <br>
														<br><legend>For a $ _______ mortgage at ___%, ___ year amortization, your monthly payment will be $________.</legend>
														<br><input type="submit" style="width: 95%;" value="Add Additional Lump sum Prepayments"><br><br>
														<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
														<input type="submit" style="width: 95%;" value="Save and return to dashboard">
														</div>
														
														
														
														
														
														
														
														<div class="basic" id="basic_2" style="display:none;">
															<div data-role="rangeslider">
																amortization<input type="range" name="mortgage_" id="mortgage_" value="200" min="0" max="1000">
															</div>
															<div data-role="rangeslider">
																payment<input type="range" name="mortgage_" id="mortgage_" value="1" min="0" max="100">
															</div>
															
															<li class="active" >
																<select name="gender" required="required">
																	<option  value="">Select payment Frequency</option>
																	<option <?php if (!empty($gender) && $gender == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																	<option <?php if (!empty($gender) && $gender == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																	<option <?php if (!empty($gender) && $gender == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
																</select>
															</li>
															<li class="active" >
																<select name="gender" required="required">
																	<option  value="">Select Product rate</option>
																	<option <?php if (!empty($gender) && $gender == 'Custom rate') { ?> selected <?php } ?> value="Custom rate">Custom rate</option>
																	
																</select>
															</li>
															<div data-role="rangeslider">
																Intrest Rate<input type="range" name="mortgage_" id="mortgage_" value="200" min="1" max="1000">
															</div>
															<input type="checkbox" name="Disclaimer" value="Disclaimer">&nbsp;&nbsp;” Legal: Calculation results are approximations and for information purposes only and rates quoted are not considered as rate guarantees. The calculations assume all payments are made when due. Calculations assume that the interest rate would remain constant over the entire amortization period, but actual interest rates may vary over the amortization period. Making weekly/bi-weekly payments will have the effect of making an extra monthly payment every year and will shorten your amortization. <br>
															<br><legend>“ With a ___ monthly payment at ____ . ____ years amortization,your mortgage amount will be ________</legend>
																<br><input type="submit" style="width: 95%;" value="Add Additional Lump sum Prepayments"><br><br>
															<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
															<input type="submit" style="width: 95%;" value="Save and return to dashboard">
															</div>
															
															<div class="basic" id="basic_3" style="display:none;">
															<div data-role="rangeslider">
																Mortgage amount<input type="range" name="mortgage_" id="mortgage_" value="200" min="0" max="1000">
															</div>
															<div data-role="rangeslider">
																Payment<input type="range" name="mortgage_" id="mortgage_" value="1" min="0" max="100">
															</div>
															
															<li class="active" >
																<select name="gender" required="required">
																	<option  value="">Select payment Frequency</option>
																	<option <?php if (!empty($gender) && $gender == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																	<option <?php if (!empty($gender) && $gender == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																	<option <?php if (!empty($gender) && $gender == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
																</select>
															</li>
															<li class="active" >
																<select name="gender" required="required">
																	<option  value="">Select Product rate</option>
																	<option <?php if (!empty($gender) && $gender == 'Custom rate') { ?> selected <?php } ?> value="Custom rate">Custom rate</option>
																	
																</select>
															</li>
															<div data-role="rangeslider">
																Intrest Rate<input type="range" name="mortgage_" id="mortgage_" value="200" min="1" max="1000">
															</div>
															<input type="checkbox" name="Disclaimer" value="Disclaimer">&nbsp;&nbsp;” Legal: Calculation results are approximations and for information purposes only and rates quoted are not considered as rate guarantees. The calculations assume all payments are made when due. Calculations assume that the interest rate would remain constant over the entire amortization period, but actual interest rates may vary over the amortization period. Making weekly/bi-weekly payments will have the effect of making an extra monthly payment every year and will shorten your amortization. <br>
															<br><legend>For a $ _______ mortgage With a ___ monthly payment at $________ your amortization will be ________</legend>
																<br><input type="submit" style="width: 95%;" value="Add Additional Lump sum Prepayments"><br><br>
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
																