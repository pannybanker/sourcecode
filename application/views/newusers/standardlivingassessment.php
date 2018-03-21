<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Standard of Living assessment</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Standard of Living assessment
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#current" data-toggle="tab" aria-expanded="true">Current</a>
                        </li>
                        <li><a href="#projected" data-toggle="tab" aria-expanded="false">Projected</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="current">
                            <CENTER><h4>Current</h4></CENTER>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- /.panel-body -->
                                    <div class="panel-body">
                                        <div class="alert hide" id="current_msg">
                                            <span></span>
                                        </div>
                                        <form method="post" name="elite_standardlivingassessment_current_frm" id="elite_standardlivingassessment_current_frm" action="#">
                                            <div class="row form">
                                                <div class="col-lg-6">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-8">
                                                            <div class="elite_standardlivingassessment_current_life_style_expense">
                                                                <label>Life Style Expense</label>
                                                                <input class="elite_standardlivingassessment_current_life_style_expense__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_current_life_style_expense_value'] ?>" min="0" max="500">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1" style="padding-top: 35px;">
                                                            $
                                                        </div>
                                                        <div class="col-lg-3" style="padding-top: 28px;">
                                                            <input type="text" name="elite_standardlivingassessment_current_life_style_expense_value" id="elite_standardlivingassessment_current_life_style_expense_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_current_life_style_expense_value'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-8">
                                                            <div class="elite_standardlivingassessment_current_life_cash_inflow">
                                                                <label>Cash Inflow</label>
                                                                <input class="elite_standardlivingassessment_current_life_cash_inflow__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_current_life_cash_inflow_value'] ?>" min="0" max="99">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1" style="padding-top: 35px;">
                                                            $
                                                        </div>
                                                        <div class="col-lg-3" style="padding-top: 28px;">
                                                            <input type="text" name="elite_standardlivingassessment_current_life_cash_inflow_value" id="elite_standardlivingassessment_current_life_cash_inflow_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_current_life_cash_inflow_value'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-8">
                                                            <div class="elite_standardlivingassessment_current_total_net_worth">
                                                                <label>Total Net Worth</label>
                                                                <input class="elite_standardlivingassessment_current_total_net_worth__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_current_total_net_worth_value'] ?>" min="0" max="500">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1" style="padding-top: 35px;">
                                                            $
                                                        </div>
                                                        <div class="col-lg-3" style="padding-top: 28px;">
                                                            <input type="text" name="elite_standardlivingassessment_current_total_net_worth_value" id="elite_standardlivingassessment_current_total_net_worth_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_current_total_net_worth_value'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-8">
                                                            <div class="elite_standardlivingassessment_current_rate_of_depletion">
                                                                <label>Rate of Depletion</label>
                                                                <input class="elite_standardlivingassessment_current_rate_of_depletion__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_current_rate_of_depletion_value'] ?>" min="0" max="99">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1" style="padding-top: 35px;">
                                                            $
                                                        </div>
                                                        <div class="col-lg-3" style="padding-top: 28px;">
                                                            <input type="text" name="elite_standardlivingassessment_current_rate_of_depletion_value" id="elite_standardlivingassessment_current_rate_of_depletion_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_current_rate_of_depletion_value'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-8">
                                                            <div class="elite_standardlivingassessment_current_persnolaity_type_risk_level">
                                                                <label>Personality Type & Risk Level</label>
                                                                <input class="elite_standardlivingassessment_current_persnolaity_type_risk_level__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_current_persnolaity_type_risk_level_value'] ?>" min="0" max="100">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1" style="padding-top: 35px;">
                                                            $
                                                        </div>
                                                        <div class="col-lg-3" style="padding-top: 28px;">
                                                            <input type="text" name="elite_standardlivingassessment_current_persnolaity_type_risk_level_value" id="elite_standardlivingassessment_current_persnolaity_type_risk_level_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_current_persnolaity_type_risk_level_value'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-8">
                                                            <div class="elite_standardlivingassessment_current_assumed_return">
                                                                <label>Assumed Return</label>
                                                                <input class="elite_standardlivingassessment_current_assumed_return__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_current_assumed_return_value'] ?>" min="0" max="500">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1" style="padding-top: 35px;">
                                                            $
                                                        </div>
                                                        <div class="col-lg-3" style="padding-top: 28px;">
                                                            <input type="text" name="elite_standardlivingassessment_current_assumed_return_value" id="elite_standardlivingassessment_current_assumed_return_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_current_assumed_return_value'] ?>">
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
                        <div class="tab-pane fade" id="projected">
                            <CENTER><h4>projected</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="projected_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="elite_standardlivingassessment_projected_frm" id="elite_standardlivingassessment_projected_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="elite_standardlivingassessment_projected_life_style_expense">
                                                        <label>Life Style Expense</label>
                                                        <input class="elite_standardlivingassessment_projected_life_style_expense__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_projected_life_style_expense_value'] ?>" min="0" max="500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="elite_standardlivingassessment_projected_life_style_expense_value" id="elite_standardlivingassessment_projected_life_style_expense_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_projected_life_style_expense_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="elite_standardlivingassessment_projected_life_cash_inflow">
                                                        <label>Cash Inflow</label>
                                                        <input class="elite_standardlivingassessment_projected_life_cash_inflow__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_projected_life_cash_inflow_value'] ?>" min="0" max="99">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="elite_standardlivingassessment_projected_life_cash_inflow_value" id="elite_standardlivingassessment_projected_life_cash_inflow_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_projected_life_cash_inflow_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="elite_standardlivingassessment_projected_total_net_worth">
                                                        <label>Total Net Worth</label>
                                                        <input class="elite_standardlivingassessment_projected_total_net_worth__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_projected_total_net_worth_value'] ?>" min="0" max="500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="elite_standardlivingassessment_projected_total_net_worth_value" id="elite_standardlivingassessment_projected_total_net_worth_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_projected_total_net_worth_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="elite_standardlivingassessment_projected_rate_of_depletion">
                                                        <label>Rate of Depletion</label>
                                                        <input class="elite_standardlivingassessment_projected_rate_of_depletion__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_projected_rate_of_depletion_value'] ?>" min="0" max="99">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="elite_standardlivingassessment_projected_rate_of_depletion_value" id="elite_standardlivingassessment_projected_rate_of_depletion_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_projected_rate_of_depletion_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="elite_standardlivingassessment_projected_persnolaity_type_risk_level">
                                                        <label>Personality Type & Risk Level</label>
                                                        <input class="elite_standardlivingassessment_projected_persnolaity_type_risk_level__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_projected_persnolaity_type_risk_level_value'] ?>" min="0" max="100">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="elite_standardlivingassessment_projected_persnolaity_type_risk_level_value" id="elite_standardlivingassessment_projected_persnolaity_type_risk_level_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_projected_persnolaity_type_risk_level_value'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="elite_standardlivingassessment_projected_assumed_return">
                                                        <label>Assumed Return</label>
                                                        <input class="elite_standardlivingassessment_projected_assumed_return__range" type="range" value="<?= $leftmeta['elite_standardlivingassessment_projected_assumed_return_value'] ?>" min="0" max="500">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="elite_standardlivingassessment_projected_assumed_return_value" id="elite_standardlivingassessment_projected_assumed_return_value" class="form-control" value="<?= $leftmeta['elite_standardlivingassessment_projected_assumed_return_value'] ?>">
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
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->