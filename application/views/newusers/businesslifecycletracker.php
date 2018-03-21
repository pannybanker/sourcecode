
<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Business Life Cycle Tracker</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Business Life Cycle Tracker
                </div>
                <!-- /.panel-body -->
                <div class="panel-body">
                    <div class="alert hide" id="payment_msg">
                        <span></span>
                    </div>
                    <form method="post" name="businesslifecycletracker_frm" id="businesslifecycletracker_frm" action="#">
                        <div class="row form">
                            <div class="col-lg-6">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Goals Achieved:</label>
                                        <select class="form-control" name="businesslifecycletracker_goalsachieved" id="businesslifecycletracker_goalsachieved">
                                            <option value="">Select option</option>
                                            <option value="Established Seed Money" <?php if($leftmeta['businesslifecycletracker_goalsachieved'] == 'Established Seed Money'){ ?> selected <?php } ?> >Established Seed Money</option>
                                            <option value="Increase Lending" <?php if($leftmeta['businesslifecycletracker_goalsachieved'] == 'Increase Lending'){ ?> selected <?php } ?>>Increase Lending</option>
                                            <option value="Profit Increases" <?php if($leftmeta['businesslifecycletracker_goalsachieved'] == 'Profit Increases'){ ?> selected <?php } ?> >Profit Increases</option>
                                            <option value="Control Spending" <?php if($leftmeta['businesslifecycletracker_goalsachieved'] == 'Control Spending'){ ?> selected <?php } ?> >Control Spending</option>
                                            <option value="Find Buyer or New Direction" <?php if($leftmeta['businesslifecycletracker_goalsachieved'] == 'Find Buyer or New Direction'){ ?> selected <?php } ?> >Find Buyer or New Direction</option>
                                        </select>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Goals to Focus on:</label>
                                        <select class="form-control" name="businesslifecycletracker_goalstofocuson" id="businesslifecycletracker_goalstofocuson">
                                            <option value="">Select option</option>
                                            <option value="Increase Lending" <?php if($leftmeta['businesslifecycletracker_goalstofocuson'] == 'Increase Lending'){ ?> selected <?php } ?>>Increase Lending</option>
                                            <option value="Profit Increases" <?php if($leftmeta['businesslifecycletracker_goalstofocuson'] == 'Profit Increases'){ ?> selected <?php } ?> >Profit Increases</option>
                                            <option value="Control Spending" <?php if($leftmeta['businesslifecycletracker_goalstofocuson'] == 'Control Spending'){ ?> selected <?php } ?> >Control Spending</option>
                                            <option value="Find Buyer or New Direction" <?php if($leftmeta['businesslifecycletracker_goalstofocuson'] == 'Find Buyer or New Direction'){ ?> selected <?php } ?> >Find Buyer or New Direction</option>
                                        </select>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-8">
                                        <div class="businesslifecycletracker_netprofitflows">
                                            <label>Net Profit Flows</label>
                                            <input class="businesslifecycletracker_netprofitflows__range" type="range" value="<?= $leftmeta['businesslifecycletracker_netprofitflows'] ?>" min="1000" max="100000">
                                        </div>
                                    </div>
                                    <div class="col-lg-1" style="padding-top: 35px;">
                                        $
                                    </div>
                                    <div class="col-lg-3" style="padding-top: 28px;">
                                        <input type="text" name="businesslifecycletracker_netprofitflows" id="businesslifecycletracker_netprofitflows" class="form-control" value="<?= $leftmeta['businesslifecycletracker_netprofitflows'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-8">
                                        <div class="businesslifecycletracker_debtequity">
                                            <label>Debt/Equity</label>
                                            <input class="businesslifecycletracker_debtequity__range" type="range" value="<?= $leftmeta['businesslifecycletracker_debtequity'] ?>" min="1000" max="100000">
                                        </div>
                                    </div>
                                    <div class="col-lg-1" style="padding-top: 35px;">
                                        $
                                    </div>
                                    <div class="col-lg-3" style="padding-top: 28px;">
                                        <input type="text" name="businesslifecycletracker_debtequity" id="businesslifecycletracker_debtequity" class="form-control" value="<?= $leftmeta['businesslifecycletracker_debtequity'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-8">
                                        <div class="businesslifecycletracker_totalassets">
                                            <label>Total Assets</label>
                                            <input class="businesslifecycletracker_totalassets__range" type="range" value="<?= $leftmeta['businesslifecycletracker_totalassets'] ?>" min="1000" max="100000">
                                        </div>
                                    </div>
                                    <div class="col-lg-1" style="padding-top: 35px;">
                                        $
                                    </div>
                                    <div class="col-lg-3" style="padding-top: 28px;">
                                        <input type="text" name="businesslifecycletracker_totalassets" id="businesslifecycletracker_totalassets" class="form-control" value="<?= $leftmeta['businesslifecycletracker_totalassets'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-8">
                                        <div class="businesslifecycletracker_interestrate">
                                            <label>Interest Rate</label>
                                            <input class="businesslifecycletracker_interestrate__range" type="range" value="<?=$leftmeta['businesslifecycletracker_interestrate']?>" min="0" max="10">
                                        </div>
                                    </div>
                                    <div class="col-lg-1" style="padding-top: 35px;">
                                        %
                                    </div>
                                    <div class="col-lg-3" style="padding-top: 28px;">
                                        <input type="text" name="businesslifecycletracker_interestrate" id="businesslifecycletracker_interestrate" class="form-control" value="<?=$leftmeta['businesslifecycletracker_interestrate']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <br>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Add Additional Lump Sum">
                                <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </form>
                </div>
                    </div>
                </div>
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->