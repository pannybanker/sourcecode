<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Business Plus</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    My Business Plus
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#about" data-toggle="tab" aria-expanded="true">About</a>
                        </li>
                        <li class=""><a href="#inflow" data-toggle="tab" aria-expanded="false">INFLOW</a>
                        </li>
                        <li class=""><a href="#outflow" data-toggle="tab" aria-expanded="false">OUTFLOW</a>
                        </li>
                        <li class=""><a href="#transportation" data-toggle="tab" aria-expanded="false">TRANSPORTATION</a>
                        </li>
                        <li class=""><a href="#goodsproduct" data-toggle="tab" aria-expanded="false">Goods/Services Produced</a>
                        </li>
                        <li class=""><a href="#health" data-toggle="tab" aria-expanded="false">Health & Insurance Expenses</a>
                        </li>
                        <li class=""><a href="#leverage" data-toggle="tab" aria-expanded="false">Leverage/Financing</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="about">
                            <CENTER><h4 class="page-header ole tltip" data-tooltip="Whether a Solopreneur or Entrepreneur, understanding your wealth in business starts here. ">About Your Business</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="businessabout_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="businessabout_frm" id="businessabout_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Business Type</label>
                                                <select name="business_type" id="business_type" required="required" class="form-control">
                                                    <option  value="">Type of Business</option>
                                                    <option <?php if (!empty($business_type) && $business_type == 'Corporation') { ?> selected <?php } ?> value="Corporation">Corporation</option>
                                                    <option <?php if (!empty($business_type) && $business_type == 'Partnership') { ?> selected <?php } ?> value="Partnership">Partnership</option>
                                                    <option <?php if (!empty($business_type) && $business_type == ' Personal Holding Company') { ?> selected <?php } ?> value=" Personal Holding Company"> Personal Holding Company</option>
                                                    <option <?php if (!empty($business_type) && $business_type == ' Non-Operating Company') { ?> selected <?php } ?> value=" Non-Operating Company"> Non-Operating Company</option>
                                                    <option <?php if (!empty($business_type) && $business_type == ' Sole Proprietorship') { ?> selected <?php } ?> value=" Sole Proprietorship"> Sole Proprietorship</option>
                                                </select>
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" name="business_country" id="business_country" value="<?php
                                            if (!empty($business_country)) {
                                                echo $business_country;
                                            }
                                            ?>" placeholder="Country">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Number of desired years to remain in operation</label>
                                                <input type="text" class="form-control" name="business_desired_years" id="business_desired_years" value="<?php
                                            if (!empty($business_desired_years)) {
                                                echo $business_desired_years;
                                            }
                                            ?>"  placeholder="Number of desired years to remain in operation">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Accountant</label>
                                                <input type="text" class="form-control" name="business_accountant" id="business_accountant" value="<?php
                                            if (!empty($business_accountant)) {
                                                echo $business_accountant;
                                            }
                                            ?>"  placeholder="Accountant">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Gross Annual Income/Revenue from all sources</label>
                                                <input type="text" class="form-control" name="business_annnual_income" id="business_annnual_income" value="<?php
                                            if (!empty($business_annnual_income)) {
                                                echo $business_annnual_income;
                                            }
                                            ?>"  placeholder="Gross Annual Income/Revenue from all sources">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Lawyer</label>
                                                <input type="text" class="form-control" name="business_lawyer" id="business_lawyer" value="<?php
                                            if (!empty($business_lawyer)) {
                                                echo $business_lawyer;
                                            }
                                            ?>"  placeholder="Lawyer">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group"> 
                                                <label>Original Capital established by</label>   
                                                <select name="capital" id="capital" required="required" class="form-control">
                                                    <option  value="">Original Capital established by:</option>
                                                    <option <?php if (!empty($capital) && $capital == 'Inheritance') { ?> selected <?php } ?> value="Inheritance">Inheritance</option>
                                                    <option <?php if (!empty($capital) && $capital == 'Trust') { ?> selected <?php } ?> value="Trust">Trust</option>
                                                    <option <?php if (!empty($capital) && $capital == ' Gift') { ?> selected <?php } ?> value=" Gift">Gift</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Ownership</label>
                                                <input type="text" class="form-control" name="business_ownership" id="business_ownership" value="<?php
                                            if (!empty($business_ownership)) {
                                                echo $business_ownership;
                                            }
                                            ?>" placeholder=" % of Ownership" >
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Industry where Business operates</label>
                                               <input type="text" class="form-control" name="busimess_industry" id="busimess_industry" value="<?php
                                            if (!empty($busimess_industry)) {
                                                echo $busimess_industry;
                                            }
                                            ?>"  placeholder="Industry where Business operates">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Insurance Agent</label>
                                                <input type="text" class="form-control" name="business_insurance_agent" id="business_insurance_agent" value="<?php
                                            if (!empty($business_insurance_agent)) {
                                                echo $business_insurance_agent;
                                            }
                                            ?>"  placeholder="Insurance Agent">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Nature of Business</label>
                                                <input type="text" class="form-control" name="business_nature" id="business_nature" value="<?php
                                            if (!empty($business_nature)) {
                                                echo $business_nature;
                                            }
                                            ?>"  placeholder="Nature of Business">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Investment Advisor</label>
                                                <input type="text" class="form-control" name="business_advisor" id="business_advisor" value="<?php
                                            if (!empty($business_advisor)) {
                                                echo $business_advisor;
                                            }
                                            ?>" placeholder="Investment Advisor">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Number of years in operation</label>
                                                <input type="text" class="form-control" name="buisness_year_operation" id="buisness_year_operation" value="<?php
                                                if (!empty($buisness_year_operation)) {
                                                    echo $buisness_year_operation;
                                                }
                                                ?>"  placeholder="Number of years in operation">
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                            <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="inflow">
                            <CENTER><h4>INFLOW</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="businessinflow_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="businessinflow_frm" id="businessinflow_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <label>Is this partnership a limited partnership?(Yes/No)</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="limited_partnership" <?php if (!empty($limited_partnership) && $limited_partnership == 'YES') { ?> checked <?php } ?> value="YES">Yes
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="limited_partnership" <?php if (!empty($limited_partnership) && $limited_partnership == 'NO') { ?> checked <?php } ?> value="NO">NO
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <label>Is the Business eligible for a waiver of Personal Guarantee?</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="personal_guarantee" <?php if (!empty($personal_guarantee) && $personal_guarantee == 'YES') { ?> checked <?php } ?> value="YES">Yes
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="personal_guarantee" <?php if (!empty($personal_guarantee) && $personal_guarantee == 'NO') { ?> checked <?php } ?> value="NO">NO
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <label>Is there a Subsidiary Business?</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="subsidiary_business" <?php if (!empty($subsidiary_business) && $subsidiary_business == 'YES') { ?> checked <?php } ?> value="YES">Yes
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="subsidiary_business" <?php if (!empty($subsidiary_business) && $subsidiary_business == 'NO') { ?> checked <?php } ?> value="NO">NO
                                                </label>
                                            </div>
                                        </div>
                                        <center><h4>Your Income</h4></center>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Revenue from Cash Sales</label>
                                                <input type="text" class="form-control" name="business_revnue_cash_sale" id="business_revnue_cash_sale" value="<?php
                                            if (!empty($business_revnue_cash_sale)) {
                                                echo $business_revnue_cash_sale;
                                            }
                                            ?>" placeholder="Revenue from Cash Sales" >
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Revenue from Receivables</label>
                                                <input type="text" class="form-control" name="business_revnue_receivables" id="business_revnue_receivables" value="<?php
                                            if (!empty($business_revnue_receivables)) {
                                                echo $business_revnue_receivables;
                                            }
                                            ?>"  placeholder="Revenue from Receivables">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>INVESTMENT EARNINGS</label>
                                                <input type="text" class="form-control" name="business_investment_earning" id="business_investment_earning" value="<?php
                                            if (!empty($business_investment_earning)) {
                                                echo $business_investment_earning;
                                            }
                                            ?>"  placeholder="INVESTMENT EARNINGS">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Shareholder Loan</label>
                                                <input type="text" class="form-control" name="business_shareholder_loan" id="business_shareholder_loan" value="<?php
                                            if (!empty($business_shareholder_loan)) {
                                                echo $business_shareholder_loan;
                                            }
                                            ?>"  placeholder="Shareholder Loan">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Loan Proceeds</label>
                                                <input type="text" class="form-control" name="business_loan_proceed" id="business_loan_proceed" value="<?php
                                            if (!empty($business_loan_proceed)) {
                                                echo $business_loan_proceed;
                                            }
                                            ?>"  placeholder="Loan Proceeds">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="outflow">
                            <CENTER><h4>Subsidiary information</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="businessoutflow_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="businessoutflow_frm" id="businessoutflow_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <label>Subsidiary information</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="business_subsidiary_information" <?php if (!empty($business_subsidiary_information) && $business_subsidiary_information == 'YES') { ?> checked <?php } ?> value="YES">Yes
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="business_subsidiary_information" <?php if (!empty($business_subsidiary_information) && $business_subsidiary_information == 'NO') { ?> checked <?php } ?> value="NO">NO
                                                </label>
                                            </div>
                                        </div>
                                        <center><h4>Office Expenses</h4></center>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>MORTGAGE & RENT</label>
                                                <input type="text" class="form-control" name="business_mortgage_rent" id="business_mortgage_rent" value="<?php
                                            if (!empty($business_mortgage_rent)) {
                                                echo $business_mortgage_rent;
                                            }
                                            ?>" placeholder="MORTGAGE & RENT">
                                            </div>
                                            <div class="form-group">
                                                <label>PROPERTY FEES & DUES</label>
                                                <input type="text" class="form-control" name="business_property_fees" id="business_property_fees" value="<?php
                                            if (!empty($business_property_fees)) {
                                                echo $business_property_fees;
                                            }
                                            ?>" placeholder="PROPERTY FEES & DUES">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>PROPERTY TAXES</label>
                                                <input type="text" class="form-control" name="business_property_taxes" id="business_property_taxes" value="<?php
                                            if (!empty($business_property_taxes)) {
                                                echo $business_property_taxes;
                                            }
                                            ?>"  placeholder="PROPERTY TAXES">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>REPAIRS & MAINTENANCE</label>
                                                <input type="text" class="form-control" name="repairs_maintenance" id="repairs_maintenance" value="<?php
                                            if (!empty($repairs_maintenance)) {
                                                echo $repairs_maintenance;
                                            }
                                            ?>" placeholder="REPAIRS & MAINTENANCE">
                                                <p class="help-block"></p>
                                            </div>
                                            
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>INSURANCE</label>
                                                <input type="text" class="form-control" name="business_insurance" id="business_insurance" value="<?php
                                            if (!empty($business_insurance)) {
                                                echo $business_insurance;
                                            }
                                            ?>" placeholder="INSURANCE">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>UTILITIES</label>
                                                <input type="text" class="form-control" name="business_utilities" id="business_utilities" value="<?php
                                            if (!empty($business_utilities)) {
                                                echo $business_utilities;
                                            }
                                            ?>" placeholder="UTILITIES">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Internet, Phone, Network Support</label>
                                                <input type="text" class="form-control" name="business_internet_phone" id="business_internet_phone" value="<?php
                                            if (!empty($business_internet_phone)) {
                                                echo $business_internet_phone;
                                            }
                                            ?>" placeholder="Internet, Phone, Network Support">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Office Supplies</label>
                                                <input type="text" class="form-control" name="business_office" id="business_office" value="<?php
                                            if (!empty($business_office)) {
                                                echo $business_office;
                                            }
                                            ?>" placeholder="Office Supplies">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="transportation">
                            <CENTER><h4>TRANSPORTATION EXPENSES</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="businesstransportation_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="businesstransportation_frm" id="businesstransportation_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>FUEL</label>
                                            <input type="text" class="form-control" name="business_fuel" id="business_fuel" value="<?php
                                            if (!empty($business_fuel)) {
                                                echo $business_fuel;
                                            }
                                            ?>" placeholder="FUEL">
                                            </div>
                                            <div class="form-group">
                                                <label>LICENSE & REGISTRATION</label>
                                                <input type="text" class="form-control" name="business_license_registration" id="business_license_registration" value="<?php
                                            if (!empty($business_license_registration)) {
                                                echo $business_license_registration;
                                            }
                                            ?>" placeholder="LICENSE & REGISTRATION">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>VEHICLE FINANCING</label>
                                                <input type="text" class="form-control" name="business_vehicle_financing" id="business_vehicle_financing" value="<?php
                                            if (!empty($business_vehicle_financing)) {
                                                echo $business_vehicle_financing;
                                            }
                                            ?>" placeholder="VEHICLE FINANCING">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>REPAIRS & MAINTENANC</label>
                                                <input type="text" class="form-control" name="business_repairs_maintenance" id="business_repairs_maintenance" value="<?php
                                            if (!empty($business_repairs_maintenance)) {
                                                echo $business_repairs_maintenance;
                                            }
                                            ?>" placeholder="REPAIRS & MAINTENANCE">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>TOLLS</label>
                                                <input type="text" class="form-control" name="business_tolls" id="business_tolls" value="<?php
                                            if (!empty($business_tolls)) {
                                                echo $business_tolls;
                                            }
                                            ?>" placeholder="TOLLS">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>PARKING</label>
                                                <input type="text" class="form-control" name="business_parking" id="business_parking" value="<?php
                                            if (!empty($business_parking)) {
                                                echo $business_parking;
                                            }
                                            ?>" placeholder="PARKING">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>TRANSIT</label>
                                                <input type="text" class="form-control" name="business_transit" id="business_transit" value="<?php
                                            if (!empty($business_transit)) {
                                                echo $business_transit;
                                            }
                                            ?>" placeholder="TRANSIT">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>INSURANCE</label>
                                                <input type="text" class="form-control" name="business_insurance" value="<?php
                                            if (!empty($business_insurance)) {
                                                echo $business_insurance;
                                            }
                                            ?>" placeholder="INSURANCE">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="goodsproduct">
                            <CENTER><h4>Goods/Services Produced</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="businessgoodsproduct_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="businessgoodsproduct_frm" id="businessgoodsproduct_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Supplies/Materials</label>
                                            <input type="text" class="form-control" name="business_supplies" id="business_supplies" value="<?php
                                            if (!empty($business_supplies)) {
                                                echo $business_supplies;
                                            }
                                            ?>" placeholder="Supplies/Materials">
                                            </div>
                                            <div class="form-group">
                                                <label>Wages</label>
                                                <input type="text" class="form-control" name="business_wages" id="business_wages" value="<?php
                                            if (!empty($business_wages)) {
                                                echo $business_wages;
                                            }
                                            ?>" placeholder="Wages">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Salaries</label>
                                                <input type="text" class="form-control" name="business_salary" id="business_salary" value="<?php
                                            if (!empty($business_salary)) {
                                                echo $business_salary;
                                            }
                                            ?>" placeholder="Salaries">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Taxes</label>
                                                <input type="text" class="form-control" name="business_tax" id="business_tax" value="<?php
                                            if (!empty($business_tax)) {
                                                echo $business_tax;
                                            }
                                            ?>" placeholder="Taxes">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>VACATION FUND</label>
                                                <input type="text" class="form-control" name="business_vacation_fund" id="business_vacation_fund"  value="<?php
                                                if (!empty($business_vacation_fund)) {
                                                    echo $business_vacation_fund;
                                                }
                                                ?>" placeholder="VACATION FUND">
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Marketing Materials</label>
                                                <input type="text" class="form-control" name="business_marketing_materials" id="business_marketing_materials" value="<?php
                                            if (!empty($business_marketing_materials)) {
                                                echo $business_marketing_materials;
                                            }
                                            ?>" placeholder="Marketing Materials">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Marketing Services</label>
                                                <input type="text" class="form-control" name="business_marketing_services" id="business_marketing_services" value="<?php
                                            if (!empty($business_marketing_services)) {
                                                echo $business_marketing_services;
                                            }
                                            ?>" placeholder="Marketing Services">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Conferences/Seminars</label>
                                                <input type="text" class="form-control" name="business_seminars" id="business_seminars"  value="<?php
                                            if (!empty($business_seminars)) {
                                                echo $business_seminars;
                                            }
                                            ?>" placeholder="Conferences/Seminars">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Professional Fees</label>
                                                <input type="text" class="form-control" name="business_professional_fees" id="business_professional_fees"  value="<?php
                                            if (!empty($business_professional_fees)) {
                                                echo $business_professional_fees;
                                            }
                                            ?>" placeholder="Professional Fees">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="health">
                            <CENTER><h4>Health & Insurance Expenses</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="businesshealth_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="businesshealth_frm" id="businesshealth_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>HEALTH INSURANCE</label>
                                            <input type="text" class="form-control" name="business_health_insurance" id="business_health_insurance" value="<?php
                                            if (!empty($business_health_insurance)) {
                                                echo $business_health_insurance;
                                            }
                                            ?>" placeholder="HEALTH INSURANCE">
                                            </div>
                                            <div class="form-group">
                                                <label>LIFE INSURANCE</label>
                                                <input type="text" class="form-control" name="business_life_insurance" id="business_life_insurance"  value="<?php
                                            if (!empty($business_life_insurance)) {
                                                echo $business_life_insurance;
                                            }
                                            ?>"         placeholder="LIFE INSURANCE">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>DISABILITY INSURANCE</label>
                                                <input type="text" class="form-control" name="business_disability_insurance" id="business_disability_insurance"     value="<?php
                                            if (!empty($business_disability_insurance)) {
                                                echo $business_disability_insurance;
                                            }
                                            ?>"         placeholder="DISABILITY INSURANCE">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>CRITICAL ILLNESS INSURANCE</label>
                                                <input type="text" class="form-control" name="business_critical_illness" id="business_critical_illness"     value="<?php
                                            if (!empty($business_critical_illness)) {
                                                echo $business_critical_illness;
                                            }
                                            ?>"         placeholder="CRITICAL ILLNESS INSURANCE">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Key Man Insurance</label>
                                                <input type="text" class="form-control" name="business_keyman_insurance" id="business_keyman_insurance" value="<?php
                                            if (!empty($business_keyman_insurance)) {
                                                echo $business_keyman_insurance;
                                            }
                                            ?>"         placeholder="Key Man Insurance">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="leverage">
                            <CENTER><h4>Leverage/Financing</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="businessleverage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="businessleverage_frm" id="businessleverage_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Operating Lines</label>
                                            <input type="text" class="form-control" name="business_operating_lines" id="business_operating_lines" value="<?php
                                            if (!empty($business_operating_lines)) {
                                                echo $business_operating_lines;
                                            }
                                            ?>" placeholder="Operating Lines">
                                            </div>
                                            <div class="form-group">
                                                <label>Credit cards</label>
                                                <input type="text" class="form-control"          name="business_credit_cards" id="business_credit_cards"  value="<?php
                                            if (!empty($business_credit_cards)) {
                                                echo $business_credit_cards;
                                            }
                                            ?>" placeholder="Credit cards">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Invoice Payables</label>
                                                <input type="text" class="form-control"          name="business_invoice_payable" id="business_invoice_payable"  value="<?php
                                            if (!empty($business_invoice_payable)) {
                                                echo $business_invoice_payable;
                                            }
                                            ?>" placeholder="Invoice Payables">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Business Mortgage</label>
                                                <input type="text" class="form-control"          name="business_mortgage" id="business_mortgage" value="<?php
                                            if (!empty($education_loans)) {
                                                echo $education_loans;
                                            }
                                            ?>" placeholder="business_mortgage">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Business Loans</label>
                                                <input type="text" class="form-control"          name="business_business_loans" id="business_business_loans"  value="<?php
                                            if (!empty($business_business_loans)) {
                                                echo $business_business_loans;
                                            }
                                            ?>" placeholder="Business Loans">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Investment Loans</label>
                                                <input type="text" class="form-control"          name="business_investment_loan" id="business_investment_loan"  value="<?php
                                            if (!empty($business_investment_loan)) {
                                                echo $business_investment_loan;
                                            }
                                            ?>"     placeholder="Investment Loan">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->