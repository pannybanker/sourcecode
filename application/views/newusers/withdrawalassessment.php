<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Company Withdrawal Assessment</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Company Withdrawal Assessment
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#payment" data-toggle="tab" aria-expanded="true">Current</a>
                        </li>
                        <li class=""><a href="#mortgage" data-toggle="tab" aria-expanded="false">Projected</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="payment">
                            <CENTER><h4>Current</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="current_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="businesswithdrawalassessment_current_frm" id="businesswithdrawalassessment_current_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_current_withdrawalamount">
                                                        <label>Withdrawal Amount</label>
                                                        <input class="businesswithdrawalassessment_current_withdrawalamount__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_current_withdrawalamount'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_current_withdrawalamount" id="businesswithdrawalassessment_current_withdrawalamount" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_current_withdrawalamount'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_current_netprofitinflow">
                                                        <label>Net Profit Inflow</label>
                                                        <input class="businesswithdrawalassessment_current_netprofitinflow__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_current_netprofitinflow'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_current_netprofitinflow" id="businesswithdrawalassessment_current_netprofitinflow" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_current_netprofitinflow'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_current_ownerequity">
                                                        <label>Owner’s Equity</label>
                                                        <input class="businesswithdrawalassessment_current_ownerequity__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_current_ownerequity'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_current_ownerequity" id="businesswithdrawalassessment_current_ownerequity" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_current_ownerequity'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_current_rateofdepletion">
                                                        <label>Rate of Depletion</label>
                                                        <input class="businesswithdrawalassessment_current_rateofdepletion__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_current_rateofdepletion'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_current_rateofdepletion" id="businesswithdrawalassessment_current_rateofdepletion" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_current_rateofdepletion'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_current_personalitytyperisklevel">
                                                        <label>Personality Type & Risk Level</label>
                                                        <input class="businesswithdrawalassessment_current_personalitytyperisklevel__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_current_personalitytyperisklevel'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_current_personalitytyperisklevel" id="businesswithdrawalassessment_current_personalitytyperisklevel" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_current_personalitytyperisklevel'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_current_returnonequity">
                                                        <label>Return on Equity</label>
                                                        <input class="businesswithdrawalassessment_current_returnonequity__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_current_returnonequity'] ?>" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_current_returnonequity" id="businesswithdrawalassessment_current_returnonequity" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_current_returnonequity'] ?>">
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
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="mortgage">
                            <CENTER><h4>Projected</h4></CENTER>
                            <!-- /.panel-body -->
                            <!-- /.panel-body -->
                            <div class="panel-body">
                                <div class="alert hide" id="projected_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="businesswithdrawalassessment_projected_frm" id="businesswithdrawalassessment_projected_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_projected_withdrawalamount">
                                                        <label>Withdrawal Amount</label>
                                                        <input class="businesswithdrawalassessment_projected_withdrawalamount__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_projected_withdrawalamount'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_projected_withdrawalamount" id="businesswithdrawalassessment_projected_withdrawalamount" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_projected_withdrawalamount'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_projected_netprofitinflow">
                                                        <label>Net Profit Inflow</label>
                                                        <input class="businesswithdrawalassessment_projected_netprofitinflow__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_projected_netprofitinflow'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_projected_netprofitinflow" id="businesswithdrawalassessment_projected_netprofitinflow" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_projected_netprofitinflow'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_projected_ownerequity">
                                                        <label>Owner’s Equity</label>
                                                        <input class="businesswithdrawalassessment_projected_ownerequity__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_projected_ownerequity'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_projected_ownerequity" id="businesswithdrawalassessment_projected_ownerequity" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_projected_ownerequity'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_projected_rateofdepletion">
                                                        <label>Rate of Depletion</label>
                                                        <input class="businesswithdrawalassessment_projected_rateofdepletion__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_projected_rateofdepletion'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_projected_rateofdepletion" id="businesswithdrawalassessment_projected_rateofdepletion" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_projected_rateofdepletion'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_projected_personalitytyperisklevel">
                                                        <label>Personality Type & Risk Level</label>
                                                        <input class="businesswithdrawalassessment_projected_personalitytyperisklevel__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_projected_personalitytyperisklevel'] ?>" min="0" max="100000">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    $
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_projected_personalitytyperisklevel" id="businesswithdrawalassessment_projected_personalitytyperisklevel" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_projected_personalitytyperisklevel'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="businesswithdrawalassessment_projected_returnonequity">
                                                        <label>Return on Equity</label>
                                                        <input class="businesswithdrawalassessment_projected_returnonequity__range" type="range" value="<?= $leftmeta['businesswithdrawalassessment_projected_returnonequity'] ?>" min="0" max="10">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="padding-top: 35px;">
                                                    %
                                                </div>
                                                <div class="col-lg-3" style="padding-top: 28px;">
                                                    <input type="text" name="businesswithdrawalassessment_projected_returnonequity" id="businesswithdrawalassessment_projected_returnonequity" class="form-control" value="<?= $leftmeta['businesswithdrawalassessment_projected_returnonequity'] ?>">
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