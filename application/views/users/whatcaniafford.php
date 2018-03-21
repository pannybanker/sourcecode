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
												<div data-role="rangeslider">
															Gross Income<input type="range" name="whatcaniafford_gross_income" id="whatcaniafford_gross_income" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Property Taxes<input type="range" name="whatcaniafford_propertytax" id="whatcaniafford_propertytax" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Condominium Fees<input type="range" name="whatcaniafford_condominiumfees" id="whatcaniafford_condominiumfees" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Healing Costs<input type="range" name="whatcaniafford_healingcost" id="whatcaniafford_healingcost" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Borrowing Payments<input type="range" name="whatcaniafford_borrowing_payment" id="whatcaniafford_borrowing_payment" value="1" min="0" max="100">
														</div>
															
													PRODUCT
													<li class="active" >
															<select name="whatcaniafford_product" required="required">
																<option  value="">Select Options </option>
																<option <?php if (!empty($whatcaniafford_product) && $whatcaniafford_product == '12Month') { ?> selected <?php } ?> value="12Month">12Month</option>
															</select>
														</li>
														
														<div data-role="rangeslider">
															Intrest Rate<input type="range" name="whatcaniafford_intrestrate" id="whatcaniafford_intrestrate" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Amoritization<input type="range" name="whatcaniafford_amoritization" id="whatcaniafford_amoritization" value="1" min="0" max="100">
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
								