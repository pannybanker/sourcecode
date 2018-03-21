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
                                                <h1>Insurance Coverage</h1> 
                                                Life Coverage
                                                <br>
                                                <li class="active" style="width:49%; float:left;">	<input type="text" class="active textbox" style="width:90%;"  name="life_coverage_policy_type"  value="<?php
                                                    if (!empty($life_coverage_policy_type)) {
                                                        echo $life_coverage_policy_type;
                                                    }
                                                    ?>"  placeholder="Type of Policy"></li>
                                                <li class="active" style="width:49%; float:right;">  <input type="text" class="active textbox" style="width:90%;" name="life_coverage_amount" value="<?php
                                                    if (!empty($life_coverage_amount)) {
                                                        echo $life_coverage_amount;
                                                    }
                                                    ?>" placeholder="Coverage($)"></li>
                                                <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width:90%;" name="life_coverage_benificiary" value="<?php
                                                    if (!empty($life_coverage_benificiary)) {
                                                        echo $life_coverage_benificiary;
                                                    }
                                                    ?>" placeholder="Beneficiary"></li>
                                                <input type="submit" style="width:95%;" value="ADD Policy">

                                            </div>
                                            <div class="form">	
                                                Disability Insurance
                                                <br><br>
                                                <li class="active" style="width:49%; float:left;">	<input type="text" class="active textbox" style="width:90%;" name="disability_insurance_insured" value="<?php
                                                    if (!empty($disability_insurance_insured)) {
                                                        echo $disability_insurance_insured;
                                                    }
                                                    ?>"  placeholder="Insured"></li>
                                                <li class="active" style="width:49%; float:right;">  <input type="text" class="active textbox" style="width:90%;" name="disability_insurance_coverage" value="<?php
                                                    if (!empty($disability_insurance_coverage)) {
                                                        echo $disability_insurance_coverage;
                                                    }
                                                    ?>"  placeholder="Coverage($)"></li>
                                                <li class="active" style="width:49%; float:left;"><input type="text" class="active textbox" style="width:90%;" name="disability_insurance_targetend_date" value="<?php
                                                    if (!empty($disability_insurance_targetend_date)) {
                                                        echo $disability_insurance_targetend_date;
                                                    }
                                                    ?>"  placeholder="Target End Date"></li>
                                                <input type="submit" style="width:95%;" value="ADD Policy">
                                            </div>
                                            <div class="form">	
                                                Critical Illness Insurance
                                                <br><br>
                                                <li class="active" style="width:49%; float:left;"><input type="text" class="active textbox" style="width:90%;" name="critical_illness_insured" value="<?php
                                                    if (!empty($critical_illness_insured)) {
                                                        echo $critical_illness_insured;
                                                    }
                                                    ?>"  placeholder="Insured"></li>
                                                <li class="active" style="width:49%; float:right;"> <input type="text" class="active textbox" style="width:90%;" name="critical_illness_coverage" value="<?php
                                                    if (!empty($critical_illness_coverage)) {
                                                        echo $critical_illness_coverage;
                                                    }
                                                    ?>"  placeholder="Coverage($)"></li>
                                                <li class="active" style="width:49%; float:left;"><input type="text" class="active textbox" style="width:90%;" name="critical_illness_targetend_date" value="<?php
                                                    if (!empty($critical_illness_targetend_date)) {
                                                        echo $critical_illness_targetend_date;
                                                    }
                                                    ?>"  placeholder="Target End Date"></li>
                                                <input type="submit" style="width:95%;" value="ADD Policy">
                                            </div>
                                            <div class="form">	
                                                Long- Term Care
                                                <br><br>
                                                <li class="active" style="width:49%; float:left;">	<input type="text" class="active textbox" style="width:90%;" name="longterm_care_insured" value="<?php
                                                    if (!empty($longterm_care_insured)) {
                                                        echo $longterm_care_insured;
                                                    }
                                                    ?>" placeholder="Insured"></li>
                                                <li class="active" style="width:49%; float:right;"><input type="text" class="active textbox" style="width:90%;" name="longterm_care_coverage" value="<?php
                                                    if (!empty($longterm_care_coverage)) {
                                                        echo $longterm_care_coverage;
                                                    }
                                                    ?>"  placeholder="Coverage($)"></li>
                                                <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width:90%;" name="longterm_care_targetend_date" value="<?php
                                                    if (!empty($longterm_care_targetend_date)) {
                                                        echo $longterm_care_targetend_date;
                                                    }
                                                    ?>" placeholder="Target End Date"></li>
                                                <input type="submit" style="width:95%;" value="ADD Policy">
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
