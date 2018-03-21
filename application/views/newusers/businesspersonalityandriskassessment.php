<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header ole tltip" data-tooltip="End of life planning can be a difficult topic, however one of the most important components for wealth building, preserving, and transferring.  The questions below will gauge whether you are in true control of your wealth, values and beliefs.">Business Personality and Risk Review</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="alert hide" id="businessriskassessment_msg">
                    <span></span>
                </div>
                <form method="post" name="businesspersonalityandriskassessment_frm" id="businesspersonalityandriskassessment_frm" action="#">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="3">Business Personality and Risk Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Have you risked your own money in building your Business?</td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment1']) && $leftmeta['businessriskassessment1'] == 'Yes') { ?> checked <?php } ?>  type="radio" name="businessriskassessment1" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment1']) && $leftmeta['businessriskassessment1'] == 'No') { ?> checked <?php } ?> type="radio" name="businessriskassessment1" value="No">No
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Which is more likely; your comfort in risk to build wealth or the need to preserve it?</td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment2']) && $leftmeta['businessriskassessment2'] == 'Comfort in risk') { ?> checked <?php } ?>  type="radio" name="businessriskassessment2" value="Comfort in risk">Comfort in risk
                                        </td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment2']) && $leftmeta['businessriskassessment2'] == 'Need to preserve') { ?> checked <?php } ?> type="radio" name="businessriskassessment2" value="Need to preserve">Need to preserve
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Would you prefer to maintain control over decisions in business or delegate the responsibility to someone?</td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment3']) && $leftmeta['businessriskassessment3'] == 'Maintain control') { ?> checked <?php } ?>  type="radio" name="businessriskassessment3" value="Maintain control">Maintain control
                                        </td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment3']) && $leftmeta['businessriskassessment3'] == 'Delegate') { ?> checked <?php } ?> type="radio" name="businessriskassessment3" value="Delegate">Delegate
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Are you confident in your abilities as a business investor?</td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment4']) && $leftmeta['businessriskassessment4'] == 'Yes') { ?> checked <?php } ?>  type="radio" name="businessriskassessment4" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment4']) && $leftmeta['businessriskassessment4'] == 'No') { ?> checked <?php } ?> type="radio" name="businessriskassessment4" value="No">No
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Is your goal intended to maintain your current business wealth, or are you motivated to build wealth by use of leverage?</td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment5']) && $leftmeta['businessriskassessment5'] == 'Build wealth') { ?> checked <?php } ?>  type="radio" name="businessriskassessment5" value="Build wealth">Build wealth
                                        </td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment5']) && $leftmeta['businessriskassessment5'] == 'Maintain Wealth') { ?> checked <?php } ?> type="radio" name="businessriskassessment5" value="Maintain Wealth">Maintain Wealth
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>In your business life and personal life, do you typically take charge of seeking what needs to be done and doing it, or do you let others direct you?</td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment6']) && $leftmeta['businessriskassessment6'] == 'Take charge') { ?> checked <?php } ?>  type="radio" name="businessriskassessment6" value="Take charge">Take charge
                                        </td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment6']) && $leftmeta['businessriskassessment6'] == 'Take direction') { ?> checked <?php } ?> type="radio" name="businessriskassessment6" value="Take direction">Take direction
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>What do you value more, preserving capital or risking capital to build wealth?</td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment7']) && $leftmeta['businessriskassessment7'] == 'Risking capital') { ?> checked <?php } ?>  type="radio" name="businessriskassessment7" value="Risking capital">Risking capital
                                        </td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment7']) && $leftmeta['businessriskassessment7'] == 'Preserving capital') { ?> checked <?php } ?> type="radio" name="businessriskassessment7" value="Preserving capital">Preserving capital
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Do you look to borrow money to make money/operate a business or you focus on limiting debt owed?</td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment8']) && $leftmeta['businessriskassessment8'] == 'Borrow money') { ?> checked <?php } ?>  type="radio" name="businessriskassessment8" value="Borrow money">Borrow money
                                        </td>
                                        <td>
                                            <input <?php if (!empty($leftmeta['businessriskassessment8']) && $leftmeta['businessriskassessment8'] == 'Limit debt') { ?> checked <?php } ?> type="radio" name="businessriskassessment8" value="Limit debt">Limit debt
                                        </td>
                                    </tr>   
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                            </div>
                            <div class="col-lg-6">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                            </div>
                            <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->