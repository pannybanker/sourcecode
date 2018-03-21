<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Life Stage Review</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Life Stage Review
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
                            <form method="post" name="elite_lifestagereview_frm" id="elite_lifestagereview_frm" action="#">
                                <div class="row form">
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_lifestagereview_age">
                                                    <label>Age</label>
                                                    <input class="elite_lifestagereview_age__range" type="range" value="<?= $leftmeta['elite_lifestagereview_age_value'] ?>" min="0" max="99">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                Years
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_lifestagereview_age_value" id="elite_lifestagereview_age_value" class="form-control" value="<?= $leftmeta['elite_lifestagereview_age_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_lifestagereview_current_cash_inflows">
                                                    <label>Current Cash Inflows</label>
                                                    <input class="elite_lifestagereview_current_cash_inflows__range" type="range" value="<?= $leftmeta['elite_lifestagereview_current_cash_inflows_value'] ?>" min="0" max="99">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_lifestagereview_current_cash_inflows_value" id="elite_lifestagereview_current_cash_inflows_value" class="form-control" value="<?= $leftmeta['elite_lifestagereview_current_cash_inflows_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Profession/Student</label>
                                                <select class="form-control" name="elite_lifestagereview_profession" id="elite_lifestagereview_profession">
                                                    <option value="">Profession Type</option>
                                                    <option value="Profession" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Profession'){ ?> selected <?php } ?> >Profession</option>
                                                    <option value="Student" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Student'){ ?> selected <?php } ?>>Student</option>
                                                </select>
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Goals Achieved</label>
                                                <select class="form-control" name="elite_lifestagereview_goal_achieved" id="elite_lifestagereview_goal_achieved">
                                                    <option value="">Goals Achieved</option>
                                                    <option value="Immediate Obligations & Needs" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Immediate Obligations & Needs'){ ?> selected <?php } ?> >Immediate Obligations & Needs</option>
                                                    <option value="Priorities, Desires & Beliefs" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Priorities, Desires & Beliefs'){ ?> selected <?php } ?>>Priorities, Desires & Beliefs</option>
                                                    <option value="Aspirations" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Aspirations'){ ?> selected <?php } ?>>Aspirations</option>
                                                </select>
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Goals to focus on</label>
                                                <select class="form-control" name="elite_lifestagereview_goal_to_focus_on" id="elite_lifestagereview_goal_to_focus_on">
                                                    <option value="">Goals Achieved</option>
                                                    <option value="Immediate Obligations & Needs" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Immediate Obligations & Needs'){ ?> selected <?php } ?> >Immediate Obligations & Needs</option>
                                                    <option value="Priorities, Desires & Beliefs" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Priorities, Desires & Beliefs'){ ?> selected <?php } ?>>Priorities, Desires & Beliefs</option>
                                                    <option value="Aspirations" <?php if($leftmeta['currsaving_borrwing_payment'] == 'Aspirations'){ ?> selected <?php } ?>>Aspirations</option>
                                                </select>
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_lifestagereview_current_lifestyle">
                                                    <label>Current Lifestyle</label>
                                                    <input class="elite_lifestagereview_current_lifestyle__range" type="range" value="<?= $leftmeta['elite_lifestagereview_current_lifestyle_value'] ?>" min="0" max="500">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_lifestagereview_current_lifestyle_value" id="elite_lifestagereview_current_lifestyle_value" class="form-control" value="<?= $leftmeta['elite_lifestagereview_current_lifestyle_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_lifestagereview_net_investable_assets">
                                                    <label>Net Investable Assets</label>
                                                    <input class="elite_lifestagereview_net_investable_assets__range" type="range" value="<?= $leftmeta['elite_lifestagereview_net_investable_assets_value'] ?>" min="0" max="99">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_lifestagereview_net_investable_assets_value" id="elite_lifestagereview_net_investable_assets_value" class="form-control" value="<?= $leftmeta['elite_lifestagereview_net_investable_assets_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-8">
                                                <div class="elite_lifestagereview_curent_total_net_worth">
                                                    <label>Current Total Net Worth</label>
                                                    <input class="elite_lifestagereview_curent_total_net_worth__range" type="range" value="<?= $leftmeta['elite_lifestagereview_curent_total_net_worth_value'] ?>" min="0" max="500">
                                                </div>
                                            </div>
                                            <div class="col-lg-1" style="padding-top: 35px;">
                                                $
                                            </div>
                                            <div class="col-lg-3" style="padding-top: 28px;">
                                                <input type="text" name="elite_lifestagereview_curent_total_net_worth_value" id="elite_lifestagereview_curent_total_net_worth_value" class="form-control" value="<?= $leftmeta['elite_lifestagereview_curent_total_net_worth_value'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span>
                                                We can all experience the stages of the life cycle more than once in our lifetime or remain in one stage for most of our lives.  Your personal situation, experience, values, and beliefs will steer the path of progressing in each cycle. 
                                            </span>
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