
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
											<br><h1>Loan comparison tools </h1>
											
											
											<div class="active">
												<button class=" button4"><a href="javascript:void(0)" onclick="showhide(1)">Loan1</a></button>
												<button class=" button4"><a href="javascript:void(0)" onclick="showhide(2)">Loan2</a><button>
													<button class=" button4"><a href="javascript:void(0)" onclick="showhide(3)">Loan3</a><button>
													</div>
													<div class="basic" id="basic_1" style="display:none;">
														
														Payment is $1454.01
														
													</div>
													<div class="basic" id="basic_2" style="display:none;">
														
														Payment is $784.22
														
													</div>
													<div class="basic" id="basic_3" style="display:none;">
														
														Payment is $785.22
														
													</div>
													<br>
													<table>
														<tr>
															<th></th>
															<th>Loan1</th>
															<th>Loan2</th>
															<th>Loan3</th>
														</tr>
														<tr>
															<td>Calculate Comparison</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>Payment Frequency </td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>Compound Frequency</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>Intrest Rate </td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>Term of loan</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>Payment amount</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>Total Payment in years</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td>Total Remaining Intrest</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</table>
													
													<script>
														function showhide(id){
															$('.basic ').hide();
															$('#basic_'+id).show();
														}
													</script>
													
													<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
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
								