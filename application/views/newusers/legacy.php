 <?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header ole tltip" data-tooltip="End of life planning can be a difficult topic, however one of the most important components for wealth building, preserving, and transferring.  The questions below will gauge whether you are in true control of your wealth, values and beliefs.">My Legacy</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="alert hide" id="legacy_msg">
                    <span></span>
                </div>
                <form method="post" name="legacy_frm" id="legacy_frm" action="#">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>My Legacy</th>
                                        <th>
                                            YES
                                        </th>
                                        <th>
                                            NO
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Do you have a Will?</td>
                                        <td>
                                            <input <?php if (!empty($legacy1) && $legacy1 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy1" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy1) && $legacy1 == 'No') { ?> checked <?php } ?> type="radio" name="legacy1" value="No">No
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Has your situation changed since your last Will?</td>
                                        <td>
                                            <input <?php if (!empty($legacy2) && $legacy2 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy2" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy2) && $legacy2 == 'No') { ?> checked <?php } ?> type="radio" name="legacy2" value="No">No
                                        </td>
                                    </tr> 
                                    </tbody>
                                    
                                    <thead>
                                    <tr>
                                        <th>Have you prepared Powers of Attorney for:</th>
                                        <th>
                                            YES
                                        </th>
                                        <th>
                                            NO
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                       <tr>
                                        <td>Your Finances</td>
                                        <td>
                                            <input <?php if (!empty($legacy4) && $legacy4 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy4" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy4) && $legacy4 == 'No') { ?> checked <?php } ?> type="radio" name="legacy4" value="No">No
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Your Health/Personal Care</td>
                                        <td>
                                            <input <?php if (!empty($legacy5) && $legacy5 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy5" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy5) && $legacy5 == 'No') { ?> checked <?php } ?> type="radio" name="legacy5" value="No">No
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Do you have an inter vivos trust in place? </td>
                                        <td>
                                            <input <?php if (!empty($legacy6) && $legacy6 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy6" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy6) && $legacy6 == 'No') { ?> checked <?php } ?> type="radio" name="legacy6" value="No">No
                                        </td>
                                    </tr>
                                </tbody>
                                    
                                    
                                   <!-- <tr>
                                        <td>Have you prepared Powers of Attorney for:</td>
                                        <td>
                                            <input <?php if (!empty($legacy3) && $legacy3 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy3" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy3) && $legacy3 == 'No') { ?> checked <?php } ?> type="radio" name="legacy3" value="No">No
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Your Finances</td>
                                        <td>
                                            <input <?php if (!empty($legacy4) && $legacy4 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy4" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy4) && $legacy4 == 'No') { ?> checked <?php } ?> type="radio" name="legacy4" value="No">No
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Your Health/Personal Care</td>
                                        <td>
                                            <input <?php if (!empty($legacy5) && $legacy5 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy5" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy5) && $legacy5 == 'No') { ?> checked <?php } ?> type="radio" name="legacy5" value="No">No
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Do you have an inter vivos trust in place? </td>
                                        <td>
                                            <input <?php if (!empty($legacy6) && $legacy6 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy6" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy6) && $legacy6 == 'No') { ?> checked <?php } ?> type="radio" name="legacy6" value="No">No
                                        </td>
                                    </tr> 
                                </tbody> -->
                                <thead>
                                    <tr>
                                        <th>Charitable Giving</th>
                                        <th>
                                            YES
                                        </th>
                                        <th>
                                            NO
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Do you intend to include charities in your estate plan?</td>
                                        <td>
                                            <input <?php if (!empty($legacy7) && $legacy7 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy7" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy7) && $legacy7 == 'No') { ?> checked <?php } ?> type="radio" name="legacy7" value="No">No
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Have you considered possible tax advantages to giving?</td>
                                        <td>
                                            <input <?php if (!empty($legacy8) && $legacy8 == 'Yes') { ?> checked <?php } ?>  type="radio" name="legacy8" value="Yes">Yes
                                        </td>
                                        <td>
                                            <input <?php if (!empty($legacy8) && $legacy8 == 'No') { ?> checked <?php } ?> type="radio" name="legacy8" value="No">No
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