
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
											
											<br><h1> Mortgage free faster</h1>
											<div class="active">
												<button class=" button4"><a href="javascript:void(0)" onclick="showhide(1)">Start here</a></button>
												<button class=" button4"><a href="javascript:void(0)" onclick="showhide(2)">Small changes </a><button>
													<button class=" button4"><a href="javascript:void(0)" onclick="showhide(3)">Diversity your Mortgage</a><button>
														
													</div>
													
													
													
													
													<div class="basic" id="basic_1" style="display:none;">
														<legend>Choose your gender:</legend>
														<label for="payment">payment</label>
														<input type="radio" name="gender" id="payment" value="payment">
														<label for="amortization">amortization</label>
														<input type="radio" name="gender" id="amortization" value="amortization">
														
														<li class="active" >
															<select name="gender" required="required">
																<option  value="">Select start month </option>
																<option <?php if (!empty($gender) && $gender == 'january   ') { ?> selected <?php } ?> value="january   ">january  </option>
																<option <?php if (!empty($gender) && $gender == 'Ferbuary  ') { ?> selected <?php } ?> value="Ferbuary  ">Ferbuary </option>
																<option <?php if (!empty($gender) && $gender == 'march     ') { ?> selected <?php } ?> value="march     ">march    </option>
																<option <?php if (!empty($gender) && $gender == 'april     ') { ?> selected <?php } ?> value="april     ">april    </option>
																<option <?php if (!empty($gender) && $gender == 'may       ') { ?> selected <?php } ?> value="may       ">may      </option>
																<option <?php if (!empty($gender) && $gender == 'june      ') { ?> selected <?php } ?> value="june      ">june     </option>
																<option <?php if (!empty($gender) && $gender == 'july      ') { ?> selected <?php } ?> value="july      ">july     </option>
																<option <?php if (!empty($gender) && $gender == 'august    ') { ?> selected <?php } ?> value="august    ">august   </option>
																<option <?php if (!empty($gender) && $gender == 'september ') { ?> selected <?php } ?> value="september ">september</option>
																<option <?php if (!empty($gender) && $gender == 'october   ') { ?> selected <?php } ?> value="october   ">october  </option>
																<option <?php if (!empty($gender) && $gender == 'november  ') { ?> selected <?php } ?> value="november  ">november </option>
																<option <?php if (!empty($gender) && $gender == 'december ') { ?> selected <?php } ?> value="december   ">december </option>
																
															</select>
														</li>		
														<div data-role="rangeslider">
															Anticipated Home price<input type="range" name="price-min" id="price-min" value="300" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															Available down Payment<input type="range" name="price-min" id="price-min" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Anticipated Annual Home Value Increase<input type="range" name="price-min" id="price-min" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															% Intrest Rate<input type="range" name="price-min" id="price-min" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															% Amortization<input type="range" name="price-min" id="price-min" value="1" min="0" max="100">
														</div>
														<div data-role="rangeslider">
															Years Payment Amount<input type="range" name="price-min" id="price-min" value="1" min="0" max="100">
														</div>
														<li class="active" >
															<select name="gender" required="required">
																<option  value="">Select payment Frequency</option>
																<option <?php if (!empty($gender) && $gender == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																
															</select>
														</li>
														<li class="active" >
															<select name="gender" required="required">
																<option  value="">Select Product</option>
																<option <?php if (!empty($gender) && $gender == '5 year Closed') { ?> selected <?php } ?> value="5 year Closed">5 year Closed</option>
															</select>
														</li>
														<input type="checkbox" name="Disclaimer" value="Disclaimer">&nbsp;&nbsp; Calculation results are approximates and for information purposes only and rates quotes are not considered as rate guarantees. The calculations assume all payments are made when due. Calculations assume that the interest rate would remain constant over the entire amortization period, but actual interest rates may vary over the amortization period. Making weekly/bi-weekly payments will have the effect of making an extra monthly payment every year and will shorten your amortization<br>
														<br><legend>Mortage 1 :- Monthly payment is ________</legend>
														<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
														<input type="submit" style="width: 95%;" value="Save and return to dashboard">
													</div>
													
													<div class="basic" id="basic_2" style="display:none;">
														<h2>Option 1: Payment Frequency</h2>
														<li class="active" >
															<select name="gender" required="required">
																<option  value="">Select payment Frequency</option>
																<option <?php if (!empty($gender) && $gender == 'Monthly') { ?> selected <?php } ?> value="Monthly">Monthly</option>
																<option <?php if (!empty($gender) && $gender == 'Biweekly') { ?> selected <?php } ?> value="Biweekly">Biweekly</option>
																<option <?php if (!empty($gender) && $gender == 'Weekly') { ?> selected <?php } ?> value="Weekly">Weekly</option>
															</select>
														</li>
														<h2>Option 2:Lump sum payment </h2>
														<div data-role="rangeslider">
															Payment to be applied<input type="range" name="price-min" id="price-min" value="0" min="0" max="1000">
														</div>
														<div data-role="rangeslider">
															Amoritization<input type="range" name="price-min" id="price-min" value="1" min="0" max="100">
														</div>
														
														<li class="active" >
															<select name="gender" required="required">
																<option  value="">Select Prepayment Frequency</option>
																<option <?php if (!empty($gender) && $gender == 'january   ') { ?> selected <?php } ?> value="january   ">january  </option>
																<option <?php if (!empty($gender) && $gender == 'Ferbuary  ') { ?> selected <?php } ?> value="Ferbuary  ">Ferbuary </option>
																<option <?php if (!empty($gender) && $gender == 'march     ') { ?> selected <?php } ?> value="march     ">march    </option>
																<option <?php if (!empty($gender) && $gender == 'april     ') { ?> selected <?php } ?> value="april     ">april    </option>
																<option <?php if (!empty($gender) && $gender == 'may       ') { ?> selected <?php } ?> value="may       ">may      </option>
																<option <?php if (!empty($gender) && $gender == 'june      ') { ?> selected <?php } ?> value="june      ">june     </option>
																<option <?php if (!empty($gender) && $gender == 'july      ') { ?> selected <?php } ?> value="july      ">july     </option>
																<option <?php if (!empty($gender) && $gender == 'august    ') { ?> selected <?php } ?> value="august    ">august   </option>
																<option <?php if (!empty($gender) && $gender == 'september ') { ?> selected <?php } ?> value="september ">september</option>
																<option <?php if (!empty($gender) && $gender == 'october   ') { ?> selected <?php } ?> value="october   ">october  </option>
																<option <?php if (!empty($gender) && $gender == 'november  ') { ?> selected <?php } ?> value="november  ">november </option>
																<option <?php if (!empty($gender) && $gender == 'december ') { ?> selected <?php } ?> value="december   ">december </option>
																
															</select>
															</li>
																
														<li class="active" >
															<select name="gender" required="required">
																<option  value="">Select All year</option>
																<option <?php if (!empty($gender) && $gender == '1990   ') { ?> selected <?php } ?> value="1990 ">1990</option>
																<option <?php if (!empty($gender) && $gender == '1991 ') { ?> selected <?php } ?>   value="1991 ">1991</option>
																<option <?php if (!empty($gender) && $gender == '1992 ') { ?> selected <?php } ?>   value="1992 ">1992</option>
																<option <?php if (!empty($gender) && $gender == '1993 ') { ?> selected <?php } ?>   value="1993 ">1993</option>
																<option <?php if (!empty($gender) && $gender == '1994 ') { ?> selected <?php } ?>   value="1994 ">1994</option>
																<option <?php if (!empty($gender) && $gender == '1995 ') { ?> selected <?php } ?>   value="1995 ">1995</option>
																<option <?php if (!empty($gender) && $gender == '1996 ') { ?> selected <?php } ?>   value="1996 ">1996</option>
																<option <?php if (!empty($gender) && $gender == '1997 ') { ?> selected <?php } ?>   value="1997 ">1997</option>
																<option <?php if (!empty($gender) && $gender == '1998 ') { ?> selected <?php } ?>   value="1998 ">1998</option>
																<option <?php if (!empty($gender) && $gender == '1998 ') { ?> selected <?php } ?>   value="1998 ">1998</option>
																<option <?php if (!empty($gender) && $gender == '2000 ') { ?> selected <?php } ?>   value="2000 ">2000</option>
																<option <?php if (!empty($gender) && $gender == '2001') { ?> selected <?php } ?>    value="2001 ">2001</option>
																<option <?php if (!empty($gender) && $gender == '2002') { ?> selected <?php } ?>    value="2002 ">2002</option>
																<option <?php if (!empty($gender) && $gender == '2003') { ?> selected <?php } ?>    value="2003 ">2003</option>
																<option <?php if (!empty($gender) && $gender == '2004') { ?> selected <?php } ?>    value="2004 ">2004</option>
																<option <?php if (!empty($gender) && $gender == '2005') { ?> selected <?php } ?>    value="2005 ">2005</option>
																<option <?php if (!empty($gender) && $gender == '2006') { ?> selected <?php } ?>    value="2006 ">2006</option>
																<option <?php if (!empty($gender) && $gender == '2007') { ?> selected <?php } ?>    value="2007 ">2007</option>
																<option <?php if (!empty($gender) && $gender == '2008') { ?> selected <?php } ?>    value="2008 ">2008</option>
																<option <?php if (!empty($gender) && $gender == '2009') { ?> selected <?php } ?>    value="2009 ">2009</option>
																<option <?php if (!empty($gender) && $gender == '2010') { ?> selected <?php } ?>    value="2010 ">2010</option>
																<option <?php if (!empty($gender) && $gender == '2011') { ?> selected <?php } ?>    value="2011 ">2011</option>
																<option <?php if (!empty($gender) && $gender == '2012') { ?> selected <?php } ?>    value="2012 ">2012</option>
																<option <?php if (!empty($gender) && $gender == '2013') { ?> selected <?php } ?>    value="2013 ">2013</option>
																<option <?php if (!empty($gender) && $gender == '2014') { ?> selected <?php } ?>    value="2014 ">2014</option>
																<option <?php if (!empty($gender) && $gender == '2015') { ?> selected <?php } ?>    value="2015 ">2015</option>
																<option <?php if (!empty($gender) && $gender == '2016') { ?> selected <?php } ?>    value="2016 ">2016</option>
																<option <?php if (!empty($gender) && $gender == '2017') { ?> selected <?php } ?>    value="2017 ">2017</option>
																
															</select>
															</li>
															<h2>Option 3: Incresed Payment</h2>
															<div data-role="rangeslider">
															Payment increased to be applied<input type="range" name="price-min" id="price-min" value="0" min="1" max="1000">
															</div>
															<li class="active" >
															<select name="gender" required="required">
																<option  value="">Select Prepayment Frequency</option>
																<option <?php if (!empty($gender) && $gender == 'january   ') { ?> selected <?php } ?> value="january   ">january  </option>
																<option <?php if (!empty($gender) && $gender == 'Ferbuary  ') { ?> selected <?php } ?> value="Ferbuary  ">Ferbuary </option>
																<option <?php if (!empty($gender) && $gender == 'march     ') { ?> selected <?php } ?> value="march     ">march    </option>
																<option <?php if (!empty($gender) && $gender == 'april     ') { ?> selected <?php } ?> value="april     ">april    </option>
																<option <?php if (!empty($gender) && $gender == 'may       ') { ?> selected <?php } ?> value="may       ">may      </option>
																<option <?php if (!empty($gender) && $gender == 'june      ') { ?> selected <?php } ?> value="june      ">june     </option>
																<option <?php if (!empty($gender) && $gender == 'july      ') { ?> selected <?php } ?> value="july      ">july     </option>
																<option <?php if (!empty($gender) && $gender == 'august    ') { ?> selected <?php } ?> value="august    ">august   </option>
																<option <?php if (!empty($gender) && $gender == 'september ') { ?> selected <?php } ?> value="september ">september</option>
																<option <?php if (!empty($gender) && $gender == 'october   ') { ?> selected <?php } ?> value="october   ">october  </option>
																<option <?php if (!empty($gender) && $gender == 'november  ') { ?> selected <?php } ?> value="november  ">november </option>
																<option <?php if (!empty($gender) && $gender == 'december ') { ?> selected <?php } ?> value="december   ">december </option>
																
															</select>
															</li>
																
														<li class="active" >
															<select name="gender" required="required">
																<option  value="">Select All year</option>
																<option <?php if (!empty($gender) && $gender == '1990   ') { ?> selected <?php } ?> value="1990 ">1990</option>
																<option <?php if (!empty($gender) && $gender == '1991 ') { ?> selected <?php } ?>   value="1991 ">1991</option>
																<option <?php if (!empty($gender) && $gender == '1992 ') { ?> selected <?php } ?>   value="1992 ">1992</option>
																<option <?php if (!empty($gender) && $gender == '1993 ') { ?> selected <?php } ?>   value="1993 ">1993</option>
																<option <?php if (!empty($gender) && $gender == '1994 ') { ?> selected <?php } ?>   value="1994 ">1994</option>
																<option <?php if (!empty($gender) && $gender == '1995 ') { ?> selected <?php } ?>   value="1995 ">1995</option>
																<option <?php if (!empty($gender) && $gender == '1996 ') { ?> selected <?php } ?>   value="1996 ">1996</option>
																<option <?php if (!empty($gender) && $gender == '1997 ') { ?> selected <?php } ?>   value="1997 ">1997</option>
																<option <?php if (!empty($gender) && $gender == '1998 ') { ?> selected <?php } ?>   value="1998 ">1998</option>
																<option <?php if (!empty($gender) && $gender == '1998 ') { ?> selected <?php } ?>   value="1998 ">1998</option>
																<option <?php if (!empty($gender) && $gender == '2000 ') { ?> selected <?php } ?>   value="2000 ">2000</option>
																<option <?php if (!empty($gender) && $gender == '2001') { ?> selected <?php } ?>    value="2001 ">2001</option>
																<option <?php if (!empty($gender) && $gender == '2002') { ?> selected <?php } ?>    value="2002 ">2002</option>
																<option <?php if (!empty($gender) && $gender == '2003') { ?> selected <?php } ?>    value="2003 ">2003</option>
																<option <?php if (!empty($gender) && $gender == '2004') { ?> selected <?php } ?>    value="2004 ">2004</option>
																<option <?php if (!empty($gender) && $gender == '2005') { ?> selected <?php } ?>    value="2005 ">2005</option>
																<option <?php if (!empty($gender) && $gender == '2006') { ?> selected <?php } ?>    value="2006 ">2006</option>
																<option <?php if (!empty($gender) && $gender == '2007') { ?> selected <?php } ?>    value="2007 ">2007</option>
																<option <?php if (!empty($gender) && $gender == '2008') { ?> selected <?php } ?>    value="2008 ">2008</option>
																<option <?php if (!empty($gender) && $gender == '2009') { ?> selected <?php } ?>    value="2009 ">2009</option>
																<option <?php if (!empty($gender) && $gender == '2010') { ?> selected <?php } ?>    value="2010 ">2010</option>
																<option <?php if (!empty($gender) && $gender == '2011') { ?> selected <?php } ?>    value="2011 ">2011</option>
																<option <?php if (!empty($gender) && $gender == '2012') { ?> selected <?php } ?>    value="2012 ">2012</option>
																<option <?php if (!empty($gender) && $gender == '2013') { ?> selected <?php } ?>    value="2013 ">2013</option>
																<option <?php if (!empty($gender) && $gender == '2014') { ?> selected <?php } ?>    value="2014 ">2014</option>
																<option <?php if (!empty($gender) && $gender == '2015') { ?> selected <?php } ?>    value="2015 ">2015</option>
																<option <?php if (!empty($gender) && $gender == '2016') { ?> selected <?php } ?>    value="2016 ">2016</option>
																<option <?php if (!empty($gender) && $gender == '2017') { ?> selected <?php } ?>    value="2017 ">2017</option>
																
															</select>
															</li>
															<input type="checkbox" name="Disclaimer" value="Disclaimer">&nbsp;&nbsp;” Calculation results are approximates and for information purposes only and rates quotes are not considered as rate guarantees. The calculations assume all payments are made when due. Calculations assume that the interest rate would remain constant over the entire amortization period, but actual interest rates may vary over the amortization period. Making weekly/bi-weekly payments will have the effect of making an extra monthly payment every year and will shorten your amortization<br>
															
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
																														