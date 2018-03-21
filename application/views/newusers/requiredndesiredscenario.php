<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Required & Desired Return</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Required & Desired Return
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- /.panel-body -->
                        <div class="panel-body">
                            <div class="alert hide" id="msg">
                                <span></span>
                            </div>
                            <form method="post" name="elite_requiredndesired_frm" id="elite_requiredndesired_frm" action="#">
                                <div class="row form">
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <CENTER><h4>Choose Short Term Goal</h4></CENTER>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_requiredndesired_short_term_cash_inflow">
                                                    <label>Cash Inflow</label>
                                                    <input class="elite_requiredndesired_short_term_cash_inflow__range" type="range" value="<?= $leftmeta['elite_requiredndesired_short_term_cash_inflow_value'] ?>" min="0" max="500">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_requiredndesired_short_term_cash_inflow_value" id="elite_requiredndesired_short_term_cash_inflow_value" class="form-control" value="<?= $leftmeta['elite_requiredndesired_short_term_cash_inflow_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_requiredndesired_short_term_cash_outflow">
                                                    <label>Cash Outflow</label>
                                                    <input class="elite_requiredndesired_short_term_cash_outflow__range" type="range" value="<?= $leftmeta['elite_requiredndesired_short_term_cash_outflow_value'] ?>" min="0" max="99">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_requiredndesired_short_term_cash_outflow_value" id="elite_requiredndesired_short_term_cash_outflow_value" class="form-control" value="<?= $leftmeta['elite_requiredndesired_short_term_cash_outflow_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_requiredndesired_short_term_netincome">
                                                    <label>Net income needed</label>
                                                    <input class="elite_requiredndesired_short_term_netincome__range" type="range" value="<?= $leftmeta['elite_requiredndesired_short_term_netincome_value'] ?>" min="0" max="500">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_requiredndesired_short_term_netincome_value" id="elite_requiredndesired_short_term_netincome_value" class="form-control" value="<?= $leftmeta['elite_requiredndesired_short_term_netincome_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_requiredndesired_short_term_netinvestavle">
                                                    <label>Net Investable Assets</label>
                                                    <input class="elite_requiredndesired_short_term_netinvestavle__range" type="range" value="<?= $leftmeta['elite_requiredndesired_short_term_netinvestavle_value'] ?>" min="0" max="99">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_requiredndesired_short_term_netinvestavle_value" id="elite_requiredndesired_short_term_netinvestavle_value" class="form-control" value="<?= $leftmeta['elite_requiredndesired_short_term_netinvestavle_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_requiredndesired_short_term_inflationrate">
                                                    <label>Inflation Rate</label>
                                                    <input class="elite_requiredndesired_short_term_inflationrate__range" type="range" value="<?= $leftmeta['elite_requiredndesired_short_term_inflationrate_value'] ?>" min="0" max="100">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_requiredndesired_short_term_inflationrate_value" id="elite_requiredndesired_short_term_inflationrate_value" class="form-control" value="<?= $leftmeta['elite_requiredndesired_short_term_inflationrate_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <CENTER><h4>Choose Long Term Goal</h4></CENTER>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_requiredndesired_long_term_cash_inflow">
                                                    <label>Cash Inflow</label>
                                                    <input class="elite_requiredndesired_long_term_cash_inflow__range" type="range" value="<?= $leftmeta['elite_requiredndesired_long_term_cash_inflow_value'] ?>" min="0" max="500">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_requiredndesired_long_term_cash_inflow_value" id="elite_requiredndesired_long_term_cash_inflow_value" class="form-control" value="<?= $leftmeta['elite_requiredndesired_long_term_cash_inflow_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_requiredndesired_long_term_cash_outflow">
                                                    <label>Cash Outflow</label>
                                                    <input class="elite_requiredndesired_long_term_cash_outflow__range" type="range" value="<?= $leftmeta['elite_requiredndesired_long_term_cash_outflow_value'] ?>" min="0" max="99">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_requiredndesired_long_term_cash_outflow_value" id="elite_requiredndesired_long_term_cash_outflow_value" class="form-control" value="<?= $leftmeta['elite_requiredndesired_long_term_cash_outflow_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_requiredndesired_long_term_netincome">
                                                    <label>Net income needed</label>
                                                    <input class="elite_requiredndesired_long_term_netincome__range" type="range" value="<?= $leftmeta['elite_requiredndesired_long_term_netincome_value'] ?>" min="0" max="500">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_requiredndesired_long_term_netincome_value" id="elite_requiredndesired_long_term_netincome_value" class="form-control" value="<?= $leftmeta['elite_requiredndesired_long_term_netincome_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_requiredndesired_long_term_netinvestavle">
                                                    <label>Net Investable Assets</label>
                                                    <input class="elite_requiredndesired_long_term_netinvestavle__range" type="range" value="<?= $leftmeta['elite_requiredndesired_long_term_netinvestavle_value'] ?>" min="0" max="99">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_requiredndesired_long_term_netinvestavle_value" id="elite_requiredndesired_long_term_netinvestavle_value" class="form-control" value="<?= $leftmeta['elite_requiredndesired_long_term_netinvestavle_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_requiredndesired_long_term_inflationrate">
                                                    <label>Inflation Rate</label>
                                                    <input class="elite_requiredndesired_long_term_inflationrate__range" type="range" value="<?= $leftmeta['elite_requiredndesired_long_term_inflationrate_value'] ?>" min="0" max="100">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_requiredndesired_long_term_inflationrate_value" id="elite_requiredndesired_long_term_inflationrate_value" class="form-control" value="<?= $leftmeta['elite_requiredndesired_long_term_inflationrate_value'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span>Please keep text: based on….<br>
                                            Net income needed of: $__________<br>
                                            Net Investable Assets of: $_________<br>
                                            Your Projected Minimum Required Return is : ________
                                            </span>
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
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->