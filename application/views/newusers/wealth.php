<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Wealth</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    My Wealth
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->       
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#property" data-toggle="tab" aria-expanded="true">Property Assets</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Mortgages</a>
                        </li>
                        <li class=""><a href="#linecredit" data-toggle="tab" aria-expanded="false">Line Of Credit</a>
                        </li>
                        <li class=""><a href="#investable" data-toggle="tab" aria-expanded="false">Investable Assets</a>
                        </li>
                        <li class=""><a href="#liabilities" data-toggle="tab" aria-expanded="false">Credit Cards</a>
                        </li>
                        <li class=""><a href="#loans" data-toggle="tab" aria-expanded="false">Loans</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="property">
                            <CENTER><h4 class="page-header ole tltip" data-tooltip="It’s important we capture the foundation of your success. Your Assets are a good place to start.  The values of assets are based on the closest estimations provided by you. Add more fields if we have missed anything.">PROPERTY ASSETS</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="property_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="property_frm" id="property_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <center><label>Personal Residence  </label></center>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="current_value_personal_residence" id="current_value_personal_residence" value="<?php
                                                    if (!empty($current_value_personal_residence)) {
                                                        echo $current_value_personal_residence;
                                                    }
                                                ?>" placeholder="Current Value">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="personal_cost" id="personal_cost" value="<?php
                                                    if (!empty($personal_cost)) {
                                                        echo $personal_cost;
                                                    }
                                                ?>" placeholder="Cost">
                                                </div>
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <center><label>Real Estate Investment</label></center>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="current_value_realestate" id="current_value_realestate" value="<?php
                                                    if (!empty($current_value_realestate)) {
                                                        echo $current_value_realestate;
                                                    }
                                                ?>" placeholder="Current Value">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="realestate_cost" id="realestate_cost" value="<?php
                                                    if (!empty($realestate_cost)) {
                                                        echo $realestate_cost;
                                                    }
                                                ?>" placeholder="Cost">
                                                </div>
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <center><label>Art & Collectables</label></center>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="current_value_art" id="current_value_art" value="<?php
                                                    if (!empty($current_value_art)) {
                                                        echo $current_value_art;
                                                    }
                                                ?>" placeholder="Current Value">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="art_cost" id="art_cost" value="<?php
                                                    if (!empty($art_cost)) {
                                                        echo $art_cost;
                                                    }
                                                ?>" placeholder="Cost">
                                                </div>
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <center><label>Recreation Property</label></center>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="current_value_recreation_property" id="current_value_recreation_property" value="<?php
                                                    if (!empty($current_value_recreation_property)) {
                                                        echo $current_value_recreation_property;
                                                    }
                                                ?>" placeholder="Current Value">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="recreation_cost" id="recreation_cost" value="<?php
                                                    if (!empty($recreation_cost)) {
                                                        echo $recreation_cost;
                                                    }
                                                ?>" placeholder="Cost">
                                                </div>
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <center><label>Vehicles</label></center>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="current_value_vehicles" id="current_value_vehicles" value="<?php
                                                    if (!empty($current_value_vehicles)) {
                                                        echo $current_value_vehicles;
                                                    }
                                                ?>" placeholder="Current Value">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="vehicles_cost" id="vehicles_cost" value="<?php
                                                    if (!empty($vehicles_cost)) {
                                                        echo $vehicles_cost;
                                                    }
                                                ?>" placeholder="Cost">
                                                </div>
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <center><label>Jewellery</label></center>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="current_value_jewellery" id="current_value_jewellery" value="<?php
                                                    if (!empty($current_value_jewellery)) {
                                                        echo $current_value_jewellery;
                                                    }
                                                ?>" placeholder="Current Value">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="jewellery_cost" id="jewellery_cost" value="<?php
                                                    if (!empty($jewellery_cost)) {
                                                        echo $jewellery_cost;
                                                    }
                                                ?>" placeholder="Cost">
                                                </div>
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <?php
                                            if(!empty($mwpa_field))
                                            {
                                                $mwpafield = explode(',', $mwpa_field);
                                                $mwpacurrentvalue = explode(',', $mwpa_current_value);
                                                $mwpacost = explode(',', $mwpa_cost);
                                                foreach ($mwpafield as $key => $value) 
                                                {
                                            ?>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwpa_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" name="mwpa_current_value[]" value="<?php
                                                                if (!empty($mwpacurrentvalue[$key])) {
                                                                    echo $mwpacurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Current Value">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" name="mwpa_cost[]" value="<?php
                                                                if (!empty($mwpacost[$key])) {
                                                                    echo $mwpacost[$key];
                                                                }
                                                            ?>" placeholder="Cost">
                                                            </div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div id="mwpa" class="row form">
                                    </div>
                                    <div class="col-lg-12 text-right">
                                        <br>
                                        <a href="javascript:void(0);" class="mwpa_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Asset</a>
                                    </div>
                                    <div class="col-lg-12">                                        
                                        <br>
                                        <div class="col-lg-6">
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                        </div>
                                        <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="mortgage">
                            <CENTER><h4>MORTGAGES</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="mortgage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="mortgage_frm" id="mortgage_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>PERSONAL RESIDENCE MORTGAGE</label>
                                                <input type="text" class="form-control" name="personal_resisdence" id="personal_resisdence" value="<?php
                                                        if (!empty($personal_resisdence)) {
                                                            echo $personal_resisdence;
                                                        }
                                                    ?>" placeholder="PERSONAL RESIDENCE MORTGAGE">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>INVESTMENT PROPERTY MORTGAGES</label>
                                                 <input type="text" class="form-control" name="investment_property" id="investment_property" value="<?php
                                                        if (!empty($investment_property)) {
                                                            echo $investment_property;
                                                        }
                                                    ?>" placeholder="INVESTMENT PROPERTY MORTGAGES">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>RECREATION PROPERTY MORTGAGES</label>
                                                 <input type="text" class="form-control" name="recreation_property" id="recreation_property"  value="<?php
                                                        if (!empty($recreation_property)) {
                                                            echo $recreation_property;
                                                        }
                                                    ?>" placeholder="RECREATION PROPERTY MORTGAGES">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
										<div class="col-lg-12">
                                            <?php
                                            if(!empty($mwmortage_field))
                                            {
                                                $mwmortagefield = explode(',', $mwmortage_field);
                                                $mwmortagecurrentvalue = explode(',', $mwmortage_current_value);
												$mwmortagesecurefield = explode(',', $mwmortage_secure_typefield);/***/
                                                $mwmortage_secure_type = explode(',', $mwmortage_secure_type); /***/
                                                foreach ($mwmortagefield as $key => $value) 
                                                {
                                            ?>
                                                    
                                                    <div class="col-lg-6" >
                                                    <div class="col-lg-12" >
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwmortage_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" class="form-control" name="mwmortage_current_value[]" value="<?php
                                                                if (!empty($mwmortagecurrentvalue[$key])) {
                                                                    echo $mwmortagecurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Current Value">
                                                            </div>
															<div class="col-lg-12"><select  class="form-control" name="mwmortage_secure_type[]" >
													
                                                               <option value="secure" <?php if($mwmortage_secure_type[$key] == 'secure') echo "selected";?>>Secure</option><option value="insecure"<?php if($mwmortage_secure_type[$key] == 'insecure') echo "selected";?>>Insecure</option></select></div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
													</div>
                                                    
                                            <?php
                                                }
                                            }
                                            ?>
											
											
											
											
											 </div>
                                        </div>
                                        <div id="mwmortage" class="row form">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);"  class="mwmortage_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Debt</a>
                                        </div>
                                        <div class="col-lg-12">                                        
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" name="complete" onclick="check()" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard" onclick="window.location.replace('<?= base_url() ?>users/dash')">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="linecredit">
                            <CENTER><h4>LINE OF CREDIT</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="linecredit_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="linecredit_frm" id="linecredit_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>EQUITY SECURED</label>
                                                <input type="text" class="form-control" name="equity_secured" id="equity_secured" value="<?php
                                                            if (!empty($equity_secured)) {
                                                                echo $equity_secured;
                                                            }
                                                        ?>" placeholder="EQUITY SECURED">
                                            </div>                                            
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>UNSECURED</label>
                                                <input type="text" class="form-control" name="unsecured" id="unsecured" value="<?php
                                                            if (!empty($unsecured)) {
                                                                echo $unsecured;
                                                            }
                                                        ?>" placeholder="UNSECURED">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <?php
                                            if(!empty($mwloc_field) || empty($mwloc_field))
                                            {
                                                $mwlocfield = explode(',', $mwloc_field);
                                                $mwloccurrentvalue = explode(',', $mwloc_current_value);
												 
                                                $mwia_secure_type = explode(',', $mwia_secure_type);
                                                foreach ($mwlocfield as $key => $value) 
                                                {
                                            ?>
                                                    <div class="col-lg-6">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwloc_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" class="form-control" name="mwloc_current_value[]" value="<?php
                                                                if (!empty($mwloccurrentvalue[$key])) {
                                                                    echo $mwloccurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Value">
                                                            </div>
															<div class="col-lg-12"><select  class="form-control" name="mwia_secure_type[]" ><option value="secure" <?php if($mwia_secure_type[$key] == 'secure') echo "selected";?>>Secure</option><option value="insecure" <?php if($mwia_secure_type[$key] == 'insecure') echo "selected";?>>Insecure</option></select></div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
													
													</div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div id="mwloc" class="row form">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="mwloc_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Debt</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard" onclick="window.location.replace('<?= base_url() ?>users/dash')">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="investable">
                            <CENTER><h4>Investable Assets</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="investable_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="investable_frm" id="investable_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Checking Accounts</label>
                                            <input type="text" class="form-control" name="checking_accounts" id="checking_accounts" value="<?php
                                                                if (!empty($checking_accounts)) {
                                                                    echo $checking_accounts;
                                                                }
                                                            ?>" placeholder="Checking Accounts">
                                             <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Savings Accounts</label>
                                                <input type="text" class="form-control" name="saving_accounts" id="saving_accounts" value="<?php
                                                                if (!empty($saving_accounts)) {
                                                                    echo $saving_accounts;
                                                                }
                                                            ?>" placeholder="Savings Accounts">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Health Savings Account</label>
                                                <input type="text" class="form-control" name="health_saving" id="health_saving" value="<?php
                                                                if (!empty($health_saving)) {
                                                                    echo $health_saving;
                                                                }
                                                            ?>" placeholder="Health Savings Account">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Taxable Investments</label>
                                                <input type="text" class="form-control" name="taxable_investment" id="taxable_investment" value="<?php
                                                                if (!empty($taxable_investment)) {
                                                                    echo $taxable_investment;
                                                                }
                                                            ?>" placeholder="Taxable Investments">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Education Savings Plan</label>
                                                <input type="text" class="form-control" name="education_saving" id="education_saving" value="<?php
                                                                if (!empty($education_saving)) {
                                                                    echo $education_saving;
                                                                }
                                                            ?>" placeholder="Education Savings Plan">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Life Insurance Cash Value</label>
                                                <input type="text" class="form-control" name="life_insurance" id="life_insurance" value="<?php
                                                                if (!empty($life_insurance)) {
                                                                    echo $life_insurance;
                                                                }
                                                            ?>" placeholder="Life Insurance Cash Value">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>401(k)/DPSP</label>
                                                <input type="text" class="form-control" name="dpsp" id="dpsp" value="<?php
                                                                if (!empty($dpsp)) {
                                                                    echo $dpsp;
                                                                }
                                                            ?>" placeholder="401(k)/DPSP">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>403(b)/LIRA</label>
                                                <input type="text" class="form-control" name="lira" id="lira" value="<?php
                                                                if (!empty($lira)) {
                                                                    echo $lira;
                                                                }
                                                            ?>" placeholder="403(b)/LIRA">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>IRA/RRSP</label>
                                                <input type="text" class="form-control" name="rrsp" id="rrsp" value="<?php
                                                                if (!empty($rrsp)) {
                                                                    echo $rrsp;
                                                                }
                                                            ?>" placeholder="IRA/RRSP">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>SEP/IRA/IPP</label>
                                                <input type="text" class="form-control" name="ipp" id="ipp" value="<?php
                                                                if (!empty($ipp)) {
                                                                    echo $ipp;
                                                                }
                                                            ?>" placeholder="SEP/IRA/IPP">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <?php
                                            if(!empty($mwia_field))
                                            {
                                                $mwiafield = explode(',', $mwia_field);
                                                $mwiacurrentvalue = explode(',', $mwia_current_value);
                                                foreach ($mwiafield as $key => $value) 
                                                {
                                            ?>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwia_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" class="form-control" name="mwia_current_value[]" value="<?php
                                                                if (!empty($mwiacurrentvalue[$key])) {
                                                                    echo $mwiacurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Value">
                                                            </div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div id="mwia" class="row form">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="mwia_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Debt</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
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
                        <div class="tab-pane fade" id="liabilities">
                            <CENTER><h4>CREDIT CARDS</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="liabilities_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="liabilities_frm" id="liabilities_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>MASTERCARD</label>
                                            <input type="text" class="form-control"  name="mastercard" id="mastercard" value="<?php
                                                                if (!empty($mastercard)) {
                                                                    echo $mastercard;
                                                                }
                                                            ?>" placeholder="MASTERCARD">
                                            </div>
                                            <div class="form-group">
                                                <label>AMERICAN EXPRESS</label>
                                                <input type="text" class="form-control"  name="american_express" id="american_express" value="<?php
                                                                if (!empty($american_express)) {
                                                                    echo $american_express;
                                                                }
                                                            ?>" placeholder="AMERICAN EXPRESS">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>VISA</label>
                                                <input type="text" class="form-control" name="visa" id="visa" value="<?php
                                                                if (!empty($visa)) {
                                                                    echo $visa;
                                                                }
                                                            ?>" placeholder="VISA">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>RETAIL</label>
                                                <input type="text" class="form-control" name="retail" id="retail" value="<?php
                                                                if (!empty($retail)) {
                                                                    echo $retail;
                                                                }
                                                            ?>" placeholder="RETAIL">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <?php
                                            if(!empty($mwlia_field) || empty($mwlia_field))
                                            {
                                                $mwliafield = explode(',', $mwlia_field);
                                                $mwliacurrentvalue = explode(',', $mwlia_current_value);
												$mwlia_secure_typefield = explode(',', $mwlia_secure_typefield);
                                                $mwlia_secure_type = explode(',', $mwlia_secure_type);
                                                foreach ($mwliafield as $key => $value) 
                                                {
                                            ?><div class="col-lg-6">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwlia_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" class="form-control" name="mwlia_current_value[]" value="<?php
                                                                if (!empty($mwliacurrentvalue[$key])) {
                                                                    echo $mwliacurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Value">
                                                            </div>
															<div class="col-lg-12"><select  class="form-control" name="mwlia_secure_type[]" ><option value="secure" <?php if($mwlia_secure_type[$key]== 'secure') echo "selected";?>>Secure</option><option value="insecure" <?php if($mwlia_secure_type[$key]== 'insecure') echo "selected";?>>Insecure</option></select></div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
													
													</div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div id="mwlia" class="row form">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="mwlia_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Debt</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard" onclick="window.location.replace('<?= base_url() ?>users/dash')">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="loans">
                            <CENTER><h4>LOANS</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="loans_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="loans_frm" id="loans_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>PERSONAL LOANS</label>
                                            <input type="text" class="form-control" style="width:90%;" name="personal_loan" id="personal_loan" value="<?php
                                                                if (!empty($personal_loan)) {
                                                                    echo $personal_loan;
                                                                }
                                                            ?>" placeholder="PERSONAL LOANS">
                                            </div>
                                            <div class="form-group">
                                                <label>STUDENT LOANS</label>
                                                <input type="text" class="form-control" name="student_loan" id="student_loan" value="<?php
                                                                if (!empty($student_loan)) {
                                                                    echo $student_loan;
                                                                }
                                                            ?>" placeholder="STUDENT LOANS">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>CAR LOANS</label>
                                                <input type="text" class="form-control" name="car_loan" id="car_loan" value="<?php
                                                                if (!empty($car_loan)) {
                                                                    echo $car_loan;
                                                                }
                                                            ?>" placeholder="CAR LOANS">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>INVESTMENT LOANS</label>
                                                <input type="text" class="form-control" name="investment_loan" id="investment_loan" value="<?php
                                                                if (!empty($investment_loan)) {
                                                                    echo $investment_loan;
                                                                }
                                                            ?>" placeholder="INVESTMENT LOANS">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>BUSINESS LOANS</label>
                                                <input type="text" class="form-control" name="business_loan" id="business_loan" value="<?php
                                                                if (!empty($business_loan)) {
                                                                    echo $business_loan;
                                                                }
                                                                ?>" placeholder="BUSINESS LOANS">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>CONSOLIDATION LOANS</label>
                                                <input type="text" class="form-control" name="consolidation_loan" id="consolidation_loan" value="<?php
                                                                if (!empty($consolidation_loan)) {
                                                                    echo $consolidation_loan;
                                                                }
                                                            ?>" placeholder="CONSOLIDATION LOANS">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <?php
                                            if(!empty($mwloan_field) || empty($mwloan_field))
                                            {
                                                $mwloanfield = explode(',', $mwloan_field);
                                                $mwloancurrentvalue = explode(',', $mwloan_current_value);
												
												$mwloan_secure_typefield = explode(',', $mwloan_secure_typefield);
                                                $mwloan_secure_type = explode(',', $mwloan_secure_type);
                                                foreach ($mwloanfield as $key => $value) 
                                                {
                                            ?><div class="col-lg-6">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <br><center><label><input type="text" class="form-control" name="mwloan_field[]"  value="<?=$value?>" placeholder="Field Name"></label></center>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <input type="text" class="form-control" name="mwloan_current_value[]" value="<?php
                                                                if (!empty($mwloancurrentvalue[$key])) {
                                                                    echo $mwloancurrentvalue[$key];
                                                                }
                                                            ?>" placeholder="Value">
                                                            </div>
															<div class="col-lg-12"><select  class="form-control" name="mwloan_secure_type[]" ><option value="secure" <?php if($mwloan_secure_type[$key] == 'secure') echo "selected";?>>Secure</option><option value="insecure" <?php if($mwloan_secure_type[$key] == 'insecure') echo "selected";?>>Insecure</option></select></div>
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
													</div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div id="mwloan" class="row form">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="mwloan_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Debt</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard" onclick="window.location.replace('<?= base_url() ?>users/dash')">
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