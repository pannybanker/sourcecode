<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Investor Personality and Risk Tolerance assessment</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Investor Personality and Risk Tolerance assessment
                </div>
                <div class="panel-body">
                    <div class="alert hide" id="msg">
                        <span></span>
                    </div>
                    <form method="post" name="elite_tolerancescenario_frm" id="elite_tolerancescenario_frm" action="#">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Investor Personality and Risk Tolerance assessment</th>
                                            <th width="20%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Have you risked your own money in building your wealth?</td>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_1" value="YES" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_1']) && $leftmeta['elite_tolerancescenario_qst_1'] == 'YES') { ?> checked="" <?php } ?> >YES
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_1" value="NO" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_1']) && $leftmeta['elite_tolerancescenario_qst_1'] == 'NO') { ?> checked="" <?php } ?> >NO
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Which is more likely; your comfort in risk to build wealth or the need to preserve it?</td>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_2" value="Comfort in risk" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_2']) && $leftmeta['elite_tolerancescenario_qst_2'] == 'Comfort in risk') { ?> checked="" <?php } ?> >Comfort in risk
                                                </label><br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_2" value="Need to preserve" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_2']) && $leftmeta['elite_tolerancescenario_qst_2'] == 'Need to preserve') { ?> checked="" <?php } ?> >Need to preserve
                                                </label>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>Would you prefer to maintain control over decisions on investments or delegate the responsibility to someone?</td>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_3" value="Maintain control" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_3']) && $leftmeta['elite_tolerancescenario_qst_3'] == 'Maintain control') { ?> checked="" <?php } ?> >Maintain control
                                                </label><br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_3" value="Delegate" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_3']) && $leftmeta['elite_tolerancescenario_qst_3'] == 'Delegate') { ?> checked="" <?php } ?> >Delegate
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Are you confident in your abilities as an investor?</td>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_4" value="YES" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_4']) && $leftmeta['elite_tolerancescenario_qst_4'] == 'YES') { ?> checked="" <?php } ?> >YES
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_4" value="NO" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_4']) && $leftmeta['elite_tolerancescenario_qst_4'] == 'NO') { ?> checked="" <?php } ?> >NO
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Is your goal intended to maintain your current lifestyle, or are you motivated to build wealth by sacrificing current lifestyle?</td>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_5" value="Build wealth" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_5']) && $leftmeta['elite_tolerancescenario_qst_5'] == 'Build wealth') { ?> checked="" <?php } ?> >Build wealth
                                                </label><br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_5" value="Continue lifestyle" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_5']) && $leftmeta['elite_tolerancescenario_qst_5'] == 'Continue lifestyle') { ?> checked="" <?php } ?> >Continue lifestyle
                                                </label>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>In your work life and personal life, do you typically take charge of seeking what needs to be done and doing it, or do you let others direct you? </td>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_6" value="Take charge" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_6']) && $leftmeta['elite_tolerancescenario_qst_6'] == 'Take charge') { ?> checked="" <?php } ?> >Take charge
                                                </label><br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_6" value="Take direction" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_6']) && $leftmeta['elite_tolerancescenario_qst_6'] == 'Take direction') { ?> checked="" <?php } ?> >Take direction
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>What do you value more, preserving capital or risking capital to build wealth?</td>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_7" value="Risking capital" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_7']) && $leftmeta['elite_tolerancescenario_qst_7'] == 'Risking capital') { ?> checked="" <?php } ?> >Risking capital
                                                </label><br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_7" value="Preserving capital" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_7']) && $leftmeta['elite_tolerancescenario_qst_7'] == 'Preserving capital') { ?> checked="" <?php } ?> >Preserving capital
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Do you look to borrow money to make money/operate a business or you focus on limiting debt you owe?</td>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_8" value="Borrow money" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_8']) && $leftmeta['elite_tolerancescenario_qst_8'] == 'Borrow money') { ?> checked="" <?php } ?> >Borrow money
                                                </label><br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="elite_tolerancescenario_qst_8" value="Limit debt" <?php if (!empty($leftmeta['elite_tolerancescenario_qst_8']) && $leftmeta['elite_tolerancescenario_qst_8'] == 'Limit debt') { ?> checked="" <?php } ?> >Limit debt
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">
                                <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->