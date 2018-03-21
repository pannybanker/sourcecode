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
                                                <h2>Enter your home information</h2> 
                                                <br>
												<div data-role="rangeslider">
															Anticipated Home price<input type="range" name="rentorown_anticipatedhome_price" id="rentorown_anticipatedhome_price" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Available Down Payment<input type="range" name="rentorown_available_down_payment" id="rentorown_available_down_payment" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															amoritization<input type="range" name="rentorown_amoritization" id="rentorown_amoritization" value="1" min="0" max="100">
														</div>
														PRODUCT
													<li class="active" >
															<select name="rentorown_product" required="required">
																<option  value="">Select Options </option>
																<option <?php if (!empty($rentorown_product) && $rentorown_product == '12Month') { ?> selected <?php } ?> value="12Month">12Month</option>
																<option <?php if (!empty($rentorown_product) && $rentorown_product == '24Month') { ?> selected <?php } ?> value="24Month">24Month</option>
																<option <?php if (!empty($rentorown_product) && $rentorown_product == '36Month') { ?> selected <?php } ?> value="36Month">36Month</option>
															</select>
														</li>
														<div data-role="rangeslider">
															Intrest Rate<input type="range" name="rentorown_intrestrate" id="rentorown_intrestrate" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Anticipated Home Value increase<input type="range" name="rentorown_anticipatedhomevalue_increase" id="rentorown_anticipatedhomevalue_increase" value="1" min="0" max="100">
														</div>
												</div>
												
												<div class="form">	
                                                <h2>Enter your Rent information</h2> 
                                                <br>
												<div data-role="rangeslider">
															Current monthly Rent<input type="range" name="rentorown_current_monthlyrent" id="rentorown_current_monthlyrent" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Anticipated Annual Rent Increase<input type="range" name="rentorown_anticipatedannualrent_increase" id="rentorown_anticipatedannualrent_increase" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Comparison Timeframe<input type="range" name="rentorown_comparison_timeframe" id="rentorown_comparison_timeframe" value="1" min="0" max="100">
														</div>
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
								