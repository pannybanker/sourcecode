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
                                        <h1>About your Business</h1>
                                        <li class="active" style="width:49%; float:left;">
                                            <select name="business_type" required="required">
                                                <option  value="">Type of Business</option>
                                                <option <?php if (!empty($business_type) && $business_type == 'Corporation') { ?> selected <?php } ?> value="Corporation">Corporation</option>
                                                <option <?php if (!empty($business_type) && $business_type == 'Partnership') { ?> selected <?php } ?> value="Partnership">Partnership</option>
                                                <option <?php if (!empty($business_type) && $business_type == ' Personal Holding Company') { ?> selected <?php } ?> value=" Personal Holding Company"> Personal Holding Company</option>
                                                <option <?php if (!empty($business_type) && $business_type == ' Non-Operating Company') { ?> selected <?php } ?> value=" Non-Operating Company"> Non-Operating Company</option>
                                                <option <?php if (!empty($business_type) && $business_type == ' Sole Proprietorship') { ?> selected <?php } ?> value=" Sole Proprietorship"> Sole Proprietorship</option>
                                            </select>
                                        </li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width: 90%;" name="business_ownership" value="<?php
                                            if (!empty($business_ownership)) {
                                                echo $business_ownership;
                                            }
                                            ?>" placeholder=" % of Ownership" ></li>
                                        <li class="active" style="width:49%; float:right;">   <input type="text" class="textbox" style="width: 90%;" name="business_country" value="<?php
                                            if (!empty($business_country)) {
                                                echo $business_country;
                                            }
                                            ?>" placeholder="Country"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="business_desired_years" value="<?php
                                            if (!empty($business_desired_years)) {
                                                echo $business_desired_years;
                                            }
                                            ?>"  placeholder="Number of desired years to remain in operation"></li>
                                        <li class="active" style="width:49%; float:right;">       <input type="text" class="textbox" style="width: 90%;" name="business_accountant" value="<?php
                                            if (!empty($business_accountant)) {
                                                echo $business_accountant;
                                            }
                                            ?>"  placeholder="Accountant"></li>
                                        <li class="active" style="width:49%; float:left;">   <input type="text" class="textbox" style="width: 90%;" name="business_annnual_income" value="<?php
                                            if (!empty($business_annnual_income)) {
                                                echo $business_annnual_income;
                                            }
                                            ?>"  placeholder="Gross Annual Income/Revenue from all sources"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="business_lawyer" value="<?php
                                            if (!empty($business_lawyer)) {
                                                echo $business_lawyer;
                                            }
                                            ?>"  placeholder="Lawyer"></li>
                                        <li class="active" style="width:49%; float:left;">   <input type="text" class="textbox" style="width: 90%;" name="busimess_industry" value="<?php
                                            if (!empty($busimess_industry)) {
                                                echo $busimess_industry;
                                            }
                                            ?>"  placeholder="Industry where Business operates"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="business_insurance_agent" value="<?php
                                            if (!empty($business_insurance_agent)) {
                                                echo $business_insurance_agent;
                                            }
                                            ?>"  placeholder="Insurance Agent"></li>
                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="textbox" style="width: 90%;" name="business_nature" value="<?php
                                            if (!empty($business_nature)) {
                                                echo $business_nature;
                                            }
                                            ?>"  placeholder="Nature of Business"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="business_advisor" value="<?php
                                            if (!empty($business_advisor)) {
                                                echo $business_advisor;
                                            }
                                            ?>" placeholder="Investment Advisor"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="buisness_year_operation" value="<?php
                                            if (!empty($buisness_year_operation)) {
                                                echo $buisness_year_operation;
                                            }
                                            ?>"  placeholder="Number of years in operation"></li>

                                        <li class="active" style="width:49%; float:left;">
                                            <select name="capital" required="required">
                                                <option  value="">Original Capital established by:</option>
                                                <option <?php if (!empty($capital) && $capital == 'Inheritance') { ?> selected <?php } ?> value="Inheritance">Inheritance</option>
                                                <option <?php if (!empty($capital) && $capital == 'Trust') { ?> selected <?php } ?> value="Trust">Trust</option>
                                                <option <?php if (!empty($capital) && $capital == ' Gift') { ?> selected <?php } ?> value=" Gift">Gift</option>
                                            </select>
                                        </li>
                                        <input type="submit" style="width:95%;" value="Add Income">
                                    </div>


                                    <div class="form">	

                                        <h1>Is this partnership a limited partnership?</h1>
                                        <table>
                                            <tr>
                                                <td>Is this partnership a limited partnership?(Yes/No)</td>
                                                <td><input type="radio" name="limited_partnership" <?php if (!empty($limited_partnership) && $limited_partnership == 'YES') { ?> selected <?php } ?> value="YES">Yes</td>
                                                <td><input type="radio" name="limited_partnership" <?php if (!empty($limited_partnership) && $limited_partnership == 'NO') { ?> selected <?php } ?> value="NO">NO</td>
                                            </tr>

                                        </table>

                                        <h1>Is the Business eligible for a waiver of Personal Guarantee? </h1>
                                        <table>
                                            <tr>
                                                <td>Is the Business eligible for a waiver of Personal Guarantee? </td>
                                                <td><input type="radio" name="personal_guarantee" <?php if (!empty($personal_guarantee) && $personal_guarantee == 'YES') { ?> selected <?php } ?> value="YES">Yes</td>
                                                <td><input type="radio" name="personal_guarantee" <?php if (!empty($personal_guarantee) && $personal_guarantee == 'NO') { ?> selected <?php } ?> value="NO">NO</td>
                                            </tr>

                                        </table><h1>Is there a Subsidiary Business? </h1>
                                        <table>
                                            <tr>
                                                <td>Is there a Subsidiary Business? </td>
                                                <td><input type="radio" name="subsidiary_business" <?php if (!empty($subsidiary_business) && $subsidiary_business == 'YES') { ?> selected <?php } ?> value="YES">Yes</td>
                                                <td><input type="radio" name="subsidiary_business" <?php if (!empty($subsidiary_business) && $subsidiary_business == 'NO') { ?> selected <?php } ?> value="NO">NO</td>
                                            </tr>

                                        </table>

                                        <h1>INFLOW</h1>
                                        <CENTER>Your Income</CENTER>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width: 90%;" name="business_revnue_cash_sale" value="<?php
                                            if (!empty($business_revnue_cash_sale)) {
                                                echo $business_revnue_cash_sale;
                                            }
                                            ?>" placeholder="Revenue from Cash Sales" ></li>

                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="business_revnue_receivables" value="<?php
                                            if (!empty($business_revnue_receivables)) {
                                                echo $business_revnue_receivables;
                                            }
                                            ?>"  placeholder="Revenue from Receivables"></li>

                                        <li class="active" style="width:49%; float:left;">   <input type="text" class="textbox" style="width: 90%;" name="business_investment_earning" value="<?php
                                            if (!empty($business_investment_earning)) {
                                                echo $business_investment_earning;
                                            }
                                            ?>"  placeholder="INVESTMENT EARNINGS"></li>

                                        <li class="active" style="width:49%; float:left;">   <input type="text" class="textbox" style="width: 90%;" name="business_loan_proceed" value="<?php
                                            if (!empty($business_loan_proceed)) {
                                                echo $business_loan_proceed;
                                            }
                                            ?>"  placeholder="Loan Proceeds"></li>

                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="textbox" style="width: 90%;" name="business_shareholder_loan" value="<?php
                                            if (!empty($business_shareholder_loan)) {
                                                echo $business_shareholder_loan;
                                            }
                                            ?>"  placeholder="Shareholder Loan"></li>

                                        <input type="submit" style="width:95%;" value="ADD INFLOW">
                                    </div>
                                    <div class="form">	

                                        <h1>Subsidiary information</h1>
                                        <table>
                                            <tr>
                                                <td>Subsidiary information</td>
                                                <td><input type="radio" name="business_subsidiary_information" <?php if (!empty($business_subsidiary_information) && $business_subsidiary_information == 'YES') { ?> selected <?php } ?> value="YES">Yes</td>
                                                <td><input type="radio" name="business_subsidiary_information" <?php if (!empty($business_subsidiary_information) && $business_subsidiary_information == 'NO') { ?> selected <?php } ?> value="NO">NO</td>
                                            </tr>

                                        </table>

                                        <h1>OUTFLOW</h1>
                                        <CENTER>Office Expenses</CENTER>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width: 90%;" name="business_mortgage_rent" value="<?php
                                            if (!empty($business_mortgage_rent)) {
                                                echo $business_mortgage_rent;
                                            }
                                            ?>" placeholder="MORTGAGE & RENT"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="business_property_fees" value="<?php
                                            if (!empty($business_property_fees)) {
                                                echo $business_property_fees;
                                            }
                                            ?>" placeholder="PROPERTY FEES & DUES"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="business_property_taxes" value="<?php
                                            if (!empty($business_property_taxes)) {
                                                echo $business_property_taxes;
                                            }
                                            ?>"  placeholder="PROPERTY TAXES"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="business_repairs_maintenance" value="<?php
                                            if (!empty($business_repairs_maintenance)) {
                                                echo $business_repairs_maintenance;
                                            }
                                            ?>" placeholder="REPAIRS & MAINTENANCE"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="business_insurance" value="<?php
                                            if (!empty($business_insurance)) {
                                                echo $business_insurance;
                                            }
                                            ?>" placeholder="INSURANCE"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="business_utilities" value="<?php
                                            if (!empty($business_utilities)) {
                                                echo $business_utilities;
                                            }
                                            ?>" placeholder="UTILITIES"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="business_internet_phone" value="<?php
                                            if (!empty($business_internet_phone)) {
                                                echo $business_internet_phone;
                                            }
                                            ?>" placeholder="Internet, Phone, Network Support"></li>
                                        <li class="active" style="width:49%; float:right;"><input type="text" class="textbox" style="width: 90%;" name="business_office" value="<?php
                                            if (!empty($business_office)) {
                                                echo $business_office;
                                            }
                                            ?>" placeholder="Office Supplies"></li>
                                        <input type="submit" style="width:95%;" value="ADD EXPENSE">
                                    </div>



                                    <div class="form">		
                                        <h1>TRANSPORTATION EXPENSES</h1>
                                        <CENTER></CENTER>
                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="active textbox" style="width: 90%;" name="business_fuel" value="<?php
                                            if (!empty($business_fuel)) {
                                                echo $business_fuel;
                                            }
                                            ?>" placeholder="FUEL"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="business_license_registration" value="<?php
                                            if (!empty($business_license_registration)) {
                                                echo $business_license_registration;
                                            }
                                            ?>" placeholder="LICENSE & REGISTRATION"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="business_vehicle_financing" value="<?php
                                            if (!empty($business_vehicle_financing)) {
                                                echo $business_vehicle_financing;
                                            }
                                            ?>" placeholder="VEHICLE FINANCING"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="business_repairs_maintenance" value="<?php
                                            if (!empty($business_repairs_maintenance)) {
                                                echo $business_repairs_maintenance;
                                            }
                                            ?>" placeholder="REPAIRS & MAINTENANCE"></li>
                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="textbox" style="width: 90%;" name="business_insurance" value="<?php
                                            if (!empty($business_insurance)) {
                                                echo $business_insurance;
                                            }
                                            ?>" placeholder="INSURANCE"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="business_tolls" value="<?php
                                            if (!empty($business_tolls)) {
                                                echo $business_tolls;
                                            }
                                            ?>" placeholder="TOLLS"></li>
                                        <li class="active" style="width:49%; float:left;"><input type="text" class="textbox" style="width: 90%;" name="business_parking" value="<?php
                                            if (!empty($business_parking)) {
                                                echo $business_parking;
                                            }
                                            ?>" placeholder="PARKING"></li>
                                        <li class="active" style="width:49%; float:right;"><input type="text" class="textbox" style="width: 90%;" name="business_transit" value="<?php
                                            if (!empty($business_transit)) {
                                                echo $business_transit;
                                            }
                                            ?>" placeholder="TRANSIT"></li>
                                        <input type="submit" style="width:95%;" value="ADD EXPENSE">
                                    </div>
                                    <div class="form">		
                                        <h1>Goods/Services Produced</h1>	

                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width: 90%;" name="business_supplies" value="<?php
                                            if (!empty($business_supplies)) {
                                                echo $business_supplies;
                                            }
                                            ?>" placeholder="Supplies/Materials"></li>
                                        <li class="active" style="width:49%; float:right;">  <input type="text" class="textbox" style="width: 90%;" name="business_wages" value="<?php
                                            if (!empty($business_wages)) {
                                                echo $business_wages;
                                            }
                                            ?>" placeholder="Wages"></li>
                                        <li class="active" style="width:49%; float:left;"><input type="text" class="textbox" style="width: 90%;" name="business_salary" value="<?php
                                            if (!empty($business_salary)) {
                                                echo $business_salary;
                                            }
                                            ?>" placeholder="Salaries"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="Business_tax" value="<?php
                                            if (!empty($Business_tax)) {
                                                echo $Business_tax;
                                            }
                                            ?>" placeholder="Taxes"></li>
                                        <li class="active" style="width:49%; float:left;"><input type="text" class="textbox" style="width: 90%;" name="Business_marketing_materials" value="<?php
                                            if (!empty($Business_marketing_materials)) {
                                                echo $Business_marketing_materials;
                                            }
                                            ?>" placeholder="Marketing Materials"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="business_marketing_services" value="<?php
                                            if (!empty($business_marketing_services)) {
                                                echo $business_marketing_services;
                                            }
                                            ?>" placeholder="Marketing Services"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="business_seminars"  value="<?php
                                            if (!empty($business_seminars)) {
                                                echo $business_seminars;
                                            }
                                            ?>" placeholder="Conferences/Seminars"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="business_professional_fees"  value="<?php
                                            if (!empty($business_professional_fees)) {
                                                echo $business_professional_fees;
                                            }
                                            ?>" placeholder="Professional Fees"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="business_vacation_fund"  value="<?php
                                            if (!empty($business_vacation_fund)) {
                                                echo $business_vacation_fund;
                                            }
                                            ?>" placeholder="VACATION FUND"></li>
                                        <input type="submit" style="width:95%;" value="ADD EXPENSE">
                                    </div>
                                    <div class="form">		
                                        <h1>Health & Insurance Expenses</h1>

                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="active textbox" style="width: 90%;" name="business_health_insurance" value="<?php
                                            if (!empty($business_health_insurance)) {
                                                echo $business_health_insurance;
                                            }
                                            ?>"placeholder="HEALTH INSURANCE"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="business_life_insurance" 	value="<?php
                                            if (!empty($business_life_insurance)) {
                                                echo $business_life_insurance;
                                            }
                                            ?>" 		placeholder="LIFE INSURANCE"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;" name="business_disability_insurance" 	value="<?php
                                            if (!empty($business_disability_insurance)) {
                                                echo $business_disability_insurance;
                                            }
                                            ?>" 		placeholder="DISABILITY INSURANCE"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" style="width: 90%;" name="business_critical_illness" 	value="<?php
                                            if (!empty($business_critical_illness)) {
                                                echo $business_critical_illness;
                                            }
                                            ?>" 		placeholder="CRITICAL ILLNESS INSURANCE"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" style="width: 90%;"	name="business_keyman_insurance" value="<?php
                                            if (!empty($business_keyman_insurance)) {
                                                echo $business_keyman_insurance;
                                            }
                                            ?>" 		placeholder="Key Man Insurance"></li>
                                        <input type="submit" style="width:95%;" value="ADD EXPENSE">
                                    </div>
                                    <div class="form">	
                                        <h1>Leverage/Financing</h1>											
                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="active textbox" name="business_operating_lines"  style="width: 90%;" value="<?php
                                            if (!empty($business_operating_lines)) {
                                                echo $business_operating_lines;
                                            }
                                            ?>" placeholder="Operating Lines"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" 			name="business_credit_cards"  style="width: 90%;" value="<?php
                                            if (!empty($business_credit_cards)) {
                                                echo $business_credit_cards;
                                            }
                                            ?>" placeholder="Credit cards"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" 			name="business_invoice_payable"  style="width: 90%;" value="<?php
                                            if (!empty($business_invoice_payable)) {
                                                echo $business_invoice_payable;
                                            }
                                            ?>" placeholder="Invoice Payables"></li>
                                        <li class="active" style="width:49%; float:right;"> <input type="text" class="textbox" 			name="business_mortgage"  style="width: 90%;" value="<?php
                                            if (!empty($education_loans)) {
                                                echo $education_loans;
                                            }
                                            ?>" placeholder="business_mortgage"></li>
                                        <li class="active" style="width:49%; float:left;"> <input type="text" class="textbox" 			name="business_business_loans"  style="width: 90%;" value="<?php
                                            if (!empty($business_business_loans)) {
                                                echo $business_business_loans;
                                            }
                                            ?>" placeholder="Business Loans"></li>
                                        <li class="active" style="width:49%; float:left;">  <input type="text" class="textbox" 			name="business_investment_loan"  style="width: 90%;" value="<?php
                                            if (!empty($business_investment_loan)) {
                                                echo $business_investment_loan;
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
