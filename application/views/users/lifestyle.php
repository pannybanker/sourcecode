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

                                <?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
                                    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
                                <?php } ?>
                                <form method="post">
                                    <div class="form">	
                                        <h1>INFLOW</h1>
                                        <CENTER>My Income</CENTER>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width: 90%;" name="employment_income" value="<?php
                                            if (!empty($employment_income)) {
                                                echo $employment_income;
                                            }
                                            ?>" placeholder="EMPLOYMENT INCOME" ></li>
                                        <li class="active" style="width:49%; float:right;">   <input type="text" class="textbox" style="width: 90%;" name="business_income" value="<?php
                                            if (!empty($business_income)) {
                                                echo $business_income;
                                            }
                                            ?>" placeholder="BUSINESS INCOME"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="pensions" value="<?php
                                            if (!empty($pensions)) {
                                                echo $pensions;
                                            }
                                            ?>"  placeholder="PENSIONS"></li>
                                        <li class="active" style="width:49%; float:right;">       <input type="text" class="textbox" style="width: 90%;" name="government_benefits" value="<?php
                                            if (!empty($government_benefits)) {
                                                echo $government_benefits;
                                            }
                                            ?>"  placeholder="GOVERNMENT BENEFITS"></li>
                                        <li class="active" style="width:49%; float:left;">   <input type="text" class="textbox" style="width: 90%;" name="investment_earning" value="<?php
                                            if (!empty($investment_earning)) {
                                                echo $investment_earning;
                                            }
                                            ?>"  placeholder="INVESTMENT EARNINGS"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="realstate" value="<?php
                                            if (!empty($realstate)) {
                                                echo $realstate;
                                            }
                                            ?>"  placeholder="REALESTATE/ RENTAL"></li>
                                        <li class="active" style="width:49%; float:left;">   <input type="text" class="textbox" style="width: 90%;" name="bonuses" value="<?php
                                            if (!empty($bonuses)) {
                                                echo $bonuses;
                                            }
                                            ?>"  placeholder="BONUSES"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="student_loan" value="<?php
                                            if (!empty($student_loan)) {
                                                echo $student_loan;
                                            }
                                            ?>"  placeholder="STUDENT LOANS RECEIVED"></li>
                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="textbox" style="width: 90%;" name="allowances" value="<?php
                                            if (!empty($allowances)) {
                                                echo $allowances;
                                            }
                                            ?>"  placeholder="ALLOWANCES"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="other_income" value="<?php
                                            if (!empty($other_income)) {
                                                echo $other_income;
                                            }
                                            ?>" placeholder="OTHER INCOME"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="taxes" value="<?php
                                            if (!empty($taxes)) {
                                                echo $taxes;
                                            }
                                            ?>"  placeholder="(MINUS)TAXES & WITH HOLDINGS/DEDUCTIONS"></li>
                                        <input type="submit" style="width:95%;" value="Add Income">
                                    </div>


                                    <div class="form">	

                                        <h1>SPOUSE/ PARTNER INCOME</h1>
                                        <table>
                                            <tr>
                                                <td>SPOUSE/ PARTNER INCOME</td>
                                                <td><input type="radio" name="spouse" <?php if (!empty($spouse) && $spouse == 'YES') { ?> selected <?php } ?> value="YES">Yes</td>
                                                <td><input type="radio" name="spouse" <?php if (!empty($spouse) && $spouse == 'NO') { ?> selected <?php } ?> value="NO">NO</td>
                                            </tr>

                                        </table>

                                        <h1>OUTFLOW</h1>
                                        <CENTER>RESIDENCE EXPENSES</CENTER>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width: 90%;" name="mortgage_rent" value="<?php
                                            if (!empty($mortgage_rent)) {
                                                echo $mortgage_rent;
                                            }
                                            ?>" placeholder="MORTGAGE & RENT"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="property_fees" value="<?php
                                            if (!empty($property_fees)) {
                                                echo $property_fees;
                                            }
                                            ?>" placeholder="PROPERTY FEES & DUES"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="property_taxes" value="<?php
                                            if (!empty($property_taxes)) {
                                                echo $property_taxes;
                                            }
                                            ?>"  placeholder="PROPERTY TAXES"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="repairs_maintenance" value="<?php
                                            if (!empty($repairs_maintenance)) {
                                                echo $repairs_maintenance;
                                            }
                                            ?>" placeholder="REPAIRS & MAINTENANCE"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="insurance" value="<?php
                                            if (!empty($insurance)) {
                                                echo $insurance;
                                            }
                                            ?>" placeholder="INSURANCE"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="utilities" value="<?php
                                            if (!empty($utilities)) {
                                                echo $utilities;
                                            }
                                            ?>" placeholder="UTILITIES"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="cable_internet_phone" value="<?php
                                            if (!empty($cable_internet_phone)) {
                                                echo $cable_internet_phone;
                                            }
                                            ?>" placeholder="CABLE,INTERNET& PHONE"></li>
                                        <li class="active" style="width:49%; float:right;"><input type="text" class="textbox" style="width: 90%;" name="household_items" value="<?php
                                            if (!empty($household_items)) {
                                                echo $household_items;
                                            }
                                            ?>" placeholder="HOUSEHOLD ITEMS"></li>
                                        <input type="submit" style="width:95%;" value="ADD EXPENSE">
                                    </div>
                                    <div class="form">		
                                        <h1>TRANSPORTATION EXPENSES</h1>
                                        <CENTER></CENTER>
                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="active textbox" style="width: 90%;" name="fuel" value="<?php
                                            if (!empty($fuel)) {
                                                echo $fuel;
                                            }
                                            ?>" placeholder="FUEL"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="license_registration" value="<?php
                                            if (!empty($license_registration)) {
                                                echo $license_registration;
                                            }
                                            ?>" placeholder="LICENSE & REGISTRATION"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="vehicle_financing" value="<?php
                                            if (!empty($vehicle_financing)) {
                                                echo $vehicle_financing;
                                            }
                                            ?>" placeholder="VEHICLE FINANCING"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="repairs_maintenance" value="<?php
                                            if (!empty($repairs_maintenance)) {
                                                echo $repairs_maintenance;
                                            }
                                            ?>" placeholder="REPAIRS & MAINTENANCE"></li>
                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="textbox" style="width: 90%;" name="insurance" value="<?php
                                            if (!empty($insurance)) {
                                                echo $insurance;
                                            }
                                            ?>" placeholder="INSURANCE"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="tolls" value="<?php
                                            if (!empty($tolls)) {
                                                echo $tolls;
                                            }
                                            ?>" placeholder="TOLLS"></li>
                                        <li class="active" style="width:49%; float:left;"><input type="text" class="textbox" style="width: 90%;" name="parking" value="<?php
                                            if (!empty($parking)) {
                                                echo $parking;
                                            }
                                            ?>" placeholder="PARKING"></li>
                                        <li class="active" style="width:49%; float:right;"><input type="text" class="textbox" style="width: 90%;" name="transit" value="<?php
                                            if (!empty($transit)) {
                                                echo $transit;
                                            }
                                            ?>" placeholder="TRANSIT"></li>
                                        <input type="submit" style="width:95%;" value="ADD EXPENSE">
                                    </div>
                                    <div class="form">		
                                        <h1>PERSONAL EXPENSE</h1>	

                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width: 90%;" name="groceries_meals" value="<?php
                                            if (!empty($groceries_meals)) {
                                                echo $groceries_meals;
                                            }
                                            ?>" placeholder="GROCERIES & MEALS"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="clothing_jewelwery" value="<?php
                                            if (!empty($clothing_jewelwery)) {
                                                echo $clothing_jewelwery;
                                            }
                                            ?>" placeholder="CLOTHING & JEWELRY"></li>
                                        <li class="active" style="width:49%; float:left;"><input type="text" class="textbox" style="width: 90%;" name="personal_care" value="<?php
                                            if (!empty($personal_care)) {
                                                echo $personal_care;
                                            }
                                            ?>" placeholder="PERSONAL CARE & GROOMING"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="entertainment_hobbies" value="<?php
                                            if (!empty($entertainment_hobbies)) {
                                                echo $entertainment_hobbies;
                                            }
                                            ?>" placeholder="ENTERTAINMENT & HOBBIES"></li>
                                        <li class="active" style="width:49%; float:left;"><input type="text" class="textbox" style="width: 90%;" name="dinin" value="<?php
                                            if (!empty($dinin)) {
                                                echo $dinin;
                                            }
                                            ?>" placeholder="DININ"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="childcare" value="<?php
                                            if (!empty($childcare)) {
                                                echo $childcare;
                                            }
                                            ?>" placeholder="CHILD CARE& CHILD ACTIVITIES"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="petcare"  value="<?php
                                            if (!empty($petcare)) {
                                                echo $petcare;
                                            }
                                            ?>" placeholder="PET CARE"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="memberships_subscription"  value="<?php
                                            if (!empty($memberships_subscription)) {
                                                echo $memberships_subscription;
                                            }
                                            ?>" placeholder="MEMBERSHIPS & SUBSCRIPTIONS"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="vacation_fund"  value="<?php
                                            if (!empty($vacation_fund)) {
                                                echo $vacation_fund;
                                            }
                                            ?>" placeholder="VACATION FUND"></li>
                                        <input type="submit" style="width:95%;" value="ADD EXPENSE">
                                    </div>
                                    <div class="form">		
                                        <h1>Health & Insurance Expenses</h1>

                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width: 90%;" name="health_insurance" value="<?php
                                            if (!empty($health_insurance)) {
                                                echo $health_insurance;
                                            }
                                            ?>"placeholder="HEALTH INSURANCE"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="life_insurance" 	value="<?php
                                            if (!empty($life_insurance)) {
                                                echo $life_insurance;
                                            }
                                            ?>" 		placeholder="LIFE INSURANCE"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="disability_insurance" 	value="<?php
                                            if (!empty($disability_insurance)) {
                                                echo $disability_insurance;
                                            }
                                            ?>" 		placeholder="DISABILITY INSURANCE"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="critical_illness" 	value="<?php
                                            if (!empty($critical_illness)) {
                                                echo $critical_illness;
                                            }
                                            ?>" 		placeholder="CRITICAL ILLNESS INSURANCE"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;"	name="dental" value="<?php
                                            if (!empty($dental)) {
                                                echo $dental;
                                            }
                                            ?>" 		placeholder="DENTAL"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;"	name="vision" value="<?php
                                            if (!empty($vision)) {
                                                echo $vision;
                                            }
                                            ?>" 		placeholder="VISION"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="medical" 	value="<?php
                                            if (!empty($medical)) {
                                                echo $medical;
                                            }
                                            ?>"		placeholder="MEDICAL"></li>
                                        <li class="active" style="width:49%; float:right;"><input type="text" class="textbox" style="width: 90%;" name="prescriptions" 	value="<?php
                                            if (!empty($prescriptions)) {
                                                echo $prescriptions;
                                            }
                                            ?>" 		placeholder="PRESCRIPTIONS"></li>

                                        <input type="submit" style="width:95%;" value="ADD EXPENSE">
                                    </div>
                                    <div class="form">	
                                        <h1>Debts</h1>											
                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="active textbox" name="personal_loans"  style="width: 90%;" value="<?php
                                            if (!empty($personal_loans)) {
                                                echo $personal_loans;
                                            }
                                            ?>" placeholder="Personal Loans"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" 			name="credit_cards"  style="width: 90%;" value="<?php
                                            if (!empty($credit_cards)) {
                                                echo $credit_cards;
                                            }
                                            ?>" placeholder="Credit cards"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" 			name="credit_lines"  style="width: 90%;" value="<?php
                                            if (!empty($credit_lines)) {
                                                echo $credit_lines;
                                            }
                                            ?>" placeholder="Credit Lines"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" 			name="education_loans"  style="width: 90%;" value="<?php
                                            if (!empty($education_loans)) {
                                                echo $education_loans;
                                            }
                                            ?>" placeholder="Education Loans"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" 			name="business_loans"  style="width: 90%;" value="<?php
                                            if (!empty($business_loans)) {
                                                echo $business_loans;
                                            }
                                            ?>" placeholder="Business Loans"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" 			name="consolidated_loans"  style="width: 90%;" value="<?php
                                            if (!empty($consolidated_loans)) {
                                                echo $consolidated_loans;
                                            }
                                            ?>" placeholder="Consolidated Loans"></li>
                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="textbox" 			name="investment_loan"  style="width: 90%;" value="<?php
                                            if (!empty($investment_loan)) {
                                                echo $investment_loan;
                                            }
                                            ?>"		placeholder="Investment Loan"></li>
                                        <input type="submit" style="width:95%;" value="Add Debts">
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
</div>											