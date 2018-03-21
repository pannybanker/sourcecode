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
												<h1> DEBT Flow Analysis</h1>
												<br>
												A Detailed PDF of debt payments <li class="active" >	<input type="file" class="active textbox" style="width:90%;"  name="debt_detailedpdf_debt_payment"  value="<?php
													if (!empty($debt_detailedpdf_debt_payment)) {
														echo $debt_detailedpdf_debt_payment;
													}
												?>"  placeholder="A Detailed PDF of debt payments "></li>
												Detailed breakdown of payments connected to each lending facility<li class="active">  <input type="file" class="active textbox" style="width:90%;" name="debt_detailed_breakdown_lending_facility" value="<?php
													if (!empty($debt_detailed_breakdown_lending_facility)) {
														echo $debt_detailed_breakdown_lending_facility;
													}
												?>" placeholder="Detailed breakdown of payments connected to each lending facility"></li>
												Highlight which debts/payments are at highest interest rates and highest % of cash flow <li class="active" > <input type="file" class="active textbox" style="width:90%;" name="debt_highlight_debt_paymenthighrates" value="<?php
													if (!empty($debt_highlight_debt_paymenthighrates)) {
														echo $debt_highlight_debt_paymenthighrates;
													}
												?>" placeholder="Highlight which debts/payments are at highest interest rates and highest % of cash flow "></li>
												Breakdown good debt and bad debt <li class="active" > <input type="file" class="active textbox" style="width:90%;" name="debt_breakdown_good_debt_bad_debt" value="<?php
													if (!empty($debt_breakdown_good_debt_bad_debt)) {
														echo $debt_breakdown_good_debt_bad_debt;
													}
												?>" placeholder="Breakdown good debt and bad debt"></li>
                                                <input type="submit" style="width:95%;" value="ADD Complete">
												<input type="submit" style="width:95%;" value="Save and Return to dashboard">
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
										