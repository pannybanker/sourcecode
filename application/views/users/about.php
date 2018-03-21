<div class="container">    
    <?php $this->load->view('users/topmenu'); ?>
    <div class="parent no-gutters">        
        <section class="col-xs-12 col-sm-12 col-md-1 "  style="width: 240px;">   
            <?php $this->load->view('users/leftmenu'); ?>           
        </section>     
        <section class="col-xs-12 col-sm-12 col-md-7 white-bg"> 
            <div class="wrap">
                <div class="row">
                    <div class="grid_12 columns">
                        <div class="tab style-1">
                            <ul>

                                <?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
                                    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
                                <?php } ?>
                                <form method="post">
                                    <div class="form">	
                                        <h1>About Us</h1>
                                        <li class="active" style="width:49%; float:left;">
                                            <select name="gender" required="required">
                                                <option  value="">Select Gender</option>
                                                <option <?php if (!empty($gender) && $gender == 'Male') { ?> selected <?php } ?> value="Male">Male</option>
                                                <option <?php if (!empty($gender) && $gender == 'Female') { ?> selected <?php } ?> value="Female">Female</option>
                                            </select>
                                        </li>
                                        <li class="active" style="width:49%; float:right; "> <input type="text" class="textbox" style="width: 90%;" name="citizenship"  value="<?php
                                            if (!empty($citizenship)) {
                                                echo $citizenship;
                                            }
                                            ?>" placeholder="Citizenship"></li>

                                        <li class="active" style="width:49%; float:right;">    <input type="text" class="active textbox" style="width: 90%;"  name="occupation" value="<?php
                                            if (!empty($occupation)) {
                                                echo $occupation;
                                            }
                                            ?>" placeholder="Occupation"></li>
                                        <li class="active" style="width:49%; float:left;">      <input type="text" class="textbox" style="width: 90%;" name="industry" value="<?php
                                            if (!empty($industry)) {
                                                echo $industry;
                                            }
                                            ?>" placeholder="Industry"></li>
                                        <li class="active" style="width:49%; float:right;">      <input type="text" class="textbox" style="width: 90%;" name="family_structure" value="<?php
                                            if (!empty($family_structure)) {
                                                echo $family_structure;
                                            }
                                            ?>" placeholder="Family Structure"></li>
                                        <li class="active" style="width:49%; float:left;">    <input type="text" class="active textbox" style="width: 90%;" name="dependents" value="<?php
                                            if (!empty($dependents)) {
                                                echo $dependents;
                                            }
                                            ?>" placeholder="Number of dependents"></li>
                                        <li class="active" style="width:49%; float:right;">    <input type="text" class="textbox" style="width: 90%;" name="accountant" value="<?php
                                            if (!empty($accountant)) {
                                                echo $accountant;
                                            }
                                            ?>" placeholder="Accountant"></li>
                                        <li class="active" style="width:49%; float:left;">    <input type="text" class="textbox" style="width: 90%;" name="lawyer" value="<?php
                                            if (!empty($lawyer)) {
                                                echo $lawyer;
                                            }
                                            ?>" placeholder="Lawyer"></li>
                                        <li class="active" style="width:49%; float:right;">   <input type="text" class="textbox" style="width: 90%;" name="insurance_agent" value="<?php
                                            if (!empty($insurance_agent)) {
                                                echo $insurance_agent;
                                            }
                                            ?>" placeholder="Insurance Agent"></li>
                                        <li class="active" style="width:49%; float:left;">    <input type="text" class="textbox" style="width: 90%;" name="investment_advisor" value="<?php
                                            if (!empty($investment_advisor)) {
                                                echo $investment_advisor;
                                            }
                                            ?>" placeholder="Investment Advisor"> </li>
                                        <li class="active" style="width:100%;"> 
                                            <select name="wealth">
                                                <option value="Null"> Select Wealth Established By</option>
                                                <option  <?php if (!empty(wealth) && $wealth == 'Inheritance') { ?> selected <?php } ?> value="Inheritance">Inheritance</option>
                                                <option <?php if (!empty(wealth) && $wealth == 'Gift') { ?> selected <?php } ?> value="Gift">Gift</option>
                                                <option <?php if (!empty(wealth) && $wealth == 'Trust') { ?> selected <?php } ?> value="Trust">Trust</option>
                                                <option <?php if (!empty(wealth) && $wealth == 'Employment') { ?> selected <?php } ?> value="Employment">Employment</option>
                                            </select></li>
                                        <li class="active" style="width:100%;"> <input type="date" class="textbox" style="width: 85%; color: black;" name="dob" value="<?php
                                            if (!empty($dob)) {
                                                echo $dob;
                                            }
                                            ?>" placeholder="Date of Birth"></li>
                                        <input type="submit" style="width: 95%;" value="SUBMIT">
                                    </div>
                                </form>

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
