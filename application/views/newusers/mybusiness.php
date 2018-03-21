<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Business</h1>
        </div>
        <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    My Business
                </div> 
				<div id="prints">
				</div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="about">
                            <CENTER><h4 class="page-header">Business Assets for Sole Proprietors and Partnerships</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="msg">
                                    <span></span>
                                </div>
                                <form method="post" name="mybusiness_frm" id="mybusiness_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-12">
                                            <div class="col-lg-3">
                                                <h4>Company</h4>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4>Ownership(%)</h4>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4>Value</h4>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4>Investment Accounts</h4>
                                            </div>
											
                                        </div>   <?php  
										$bafspap_company = explode(',', $bafspap_company);
                                                $bafspap_ownership = explode(',', $bafspap_ownership);
												$bafspap_value = explode(',', $bafspap_value);/***/
                                                $bafspap_investment_accounts = explode(',', $bafspap_investment_accounts); /***/
										 foreach ($bafspap_company as $key => $value) 
                                                { ?>
                                        <div class="col-lg-12">
                                            <div class="col-lg-3">
                                                <input type="text" name="bafspap_company[]" id="bafspap_company" class="form-control" value="<?php
                                            if (!empty($bafspap_company)) {
                                                echo $bafspap_company[$key];
                                            }
                                            ?>">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="text" name="bafspap_ownership[]" id="bafspap_ownership" class="form-control" value="<?php
                                            if (!empty($bafspap_ownership)) {
                                                echo $bafspap_ownership[$key];
                                            }
                                            ?>">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="text" name="bafspap_value[]" id="bafspap_value" class="form-control" value="<?php
                                            if (!empty($bafspap_value)) {
                                                echo $bafspap_value[$key];
                                            }
                                            ?>">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="text" name="bafspap_investment_accounts[]" id="bafspap_investment_accounts" class="form-control" value="<?php
                                            if (!empty($bafspap_investment_accounts)) {
                                                echo $bafspap_investment_accounts[$key];
                                            }
                                            ?>">
                                            </div>
                                        </div>
												<?php } ?>
										<div id="baspp" >
                                        </div>
										<div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="business_assets_add text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Business Assests</a>
                                        </div>
										
										
                                        <div class="col-lg-12">
                                            <CENTER><h4 class="page-header">Business Assets for Corporations</h4></CENTER>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-3">
                                                <h4>Company</h4>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4>Ownership(%)</h4>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4>Value</h4>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4>Investment Accounts</h4>
                                            </div>
                                        </div>
										 <?php 
										$bafc_company = explode(',', $bafc_company);
                                                $bafc_ownership = explode(',', $bafc_ownership);
												$bafc_value = explode(',', $bafc_value);/***/
                                                $bafc_investment_accounts = explode(',', $bafc_investment_accounts); /***/
										 foreach ($bafc_company as $key => $value) 
                                                { ?>
                                        <div class="col-lg-12">
                                            <div class="col-lg-3">
                                                <input type="text" name="bafc_company[]" id="bafc_company" class="form-control" value="<?php
                                            if (!empty($bafc_company)) {
                                                echo $bafc_company[$key];
                                            }
                                            ?>">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="text" name="bafc_ownership[]" id="bafc_ownership" class="form-control" value="<?php
                                            if (!empty($bafc_ownership)) {
                                                echo $bafc_ownership[$key];
                                            }
                                            ?>">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="text" name="bafc_value[]" id="bafc_value" class="form-control" value="<?php
                                            if (!empty($bafc_value)) {
                                                echo $bafc_value[$key];
                                            }
                                            ?>">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="text" name="bafc_investment_accounts[]" id="bafc_investment_accounts" class="form-control" value="<?php
                                            if (!empty($bafc_investment_accounts)) {
                                                echo $bafc_investment_accounts[$key];
                                            }
                                            ?>">
                                            </div>
                                        </div>
												<?php } ?>
										<div id="bacb" >
                                        </div>
										<div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="business_corporation_add text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Business Corporation</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                            <CENTER><h4 class="page-header">Withdrawals</h4></CENTER>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <h4>Dividend Amount</h4>
                                            </div>
                                            <div class="col-lg-6">
                                                <h4>Frequency</h4>
                                            </div>
                                        </div>
										 <?php 
										
												$w_dividend_amount = explode(',', $w_dividend_amount);/***/
                                                $w_frequency = explode(',', $w_frequency); /***/
										 foreach ($w_dividend_amount as $key => $value) 
                                                { ?>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="text" name="w_dividend_amount[]" id="w_dividend_amount" class="form-control" value="<?php
                                            if (!empty($w_dividend_amount)) {
                                                echo $w_dividend_amount[$key];
                                            }
                                            ?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <select name="w_frequency[]" id="w_frequency" class="form-control">
                                                    <option value="">Please Select Frequency</option>
                                                    <option value="Annual" <?php if (!empty($w_frequency) && $w_frequency[$key] == 'Annual') { ?> selected <?php } ?>>Annual</option>
                                                    <option value="Semi-Annual" <?php if (!empty($w_frequency) && $w_frequency[$key] == 'Semi-Annual') { ?> selected <?php } ?>>Semi-Annual</option>
                                                    <option value="Quarterly" <?php if (!empty($w_frequency) && $w_frequency[$key] == 'Quarterly') { ?> selected <?php } ?>>Quarterly</option>
                                                    <option value="Monthly" <?php if (!empty($w_frequency) && $w_frequency[$key] == 'Monthly') { ?> selected <?php } ?>>Monthly</option>
                                                </select>
                                            </div>
                                        </div>
												<?php } ?>
											<div id="withdrawalswrap" >
                                        </div>
										<div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="withdrawals_add text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Withdrawals</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <br>
                                        <div class="col-lg-6">
                                            <input type="submit" id="complete" name="complete" class="btn btn-primary btn-lg btn-block" value="Complete">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard" onclick="window.location.replace('<?= base_url() ?>users/dash')">
                                        </div>
                                        <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                    </div>
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->