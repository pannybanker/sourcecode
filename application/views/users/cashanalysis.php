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
                        <div class="tab style-1">
                            <ul>
                                <li class="active">
									<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
                                        <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
									<?php } ?>
                                    <form method="post">
                                        <div class="top-grids">
                                            <div class="form">	
												<h1> Cash Flow Analysis </h1>
												<br>
												A detailed PDF of Cash inflows and outflows projecting 5 years out<li class="active" >	<input type="file" class="active textbox" style="width:90%;"  name="cash_cashinflows_outflows"  value="<?php
													if (!empty($cash_cashinflows_outflows)) {
														echo $cash_cashinflows_outflows;
													}
												?>"  placeholder="A detailed PDF of Cash inflows and outflows projecting 5 years out"></li>
												Detailed breakdown of Inflow Items<li class="active">  <input type="file" class="active textbox" style="width:90%;" name="cash_detailed_breakdown_inflowitems" value="<?php
													if (!empty($cash_detailed_breakdown_inflowitems)) {
														echo $cash_detailed_breakdown_inflowitems;
													}
												?>" placeholder="Detailed breakdown of Inflow Items"></li>
												Detailed Breakdown of Outflow Items <li class="active" > <input type="file" class="active textbox" style="width:90%;" name="cash_detailed_breakdown_outflowitems" value="<?php
													if (!empty($cash_detailed_breakdown_outflowitems)) {
														echo $cash_detailed_breakdown_outflowitems;
													}
												?>" placeholder="Detailed Breakdown of Outflow Items"></li>
												Highlight Cash Surplus or Deficit <li class="active" > <input type="file" class="active textbox" style="width:90%;" name="cash_highlight_cash_surplus_deficit" value="<?php
													if (!empty($cash_highlight_cash_surplus_deficit)) {
														echo $cash_highlight_cash_surplus_deficit;
													}
												?>" placeholder="Highlight Cash Surplus or Deficit"></li>
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
				