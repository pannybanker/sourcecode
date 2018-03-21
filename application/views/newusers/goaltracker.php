<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Goal Tracker</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Goal Tracker
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                 

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="payment">
                            <CENTER><h4>Goal Tracker</h4></CENTER>
                            <!-- /.panel-body -->
                            <div class="panel-body">
                               
                    <form method="post">
                                        <div class="top-grids">
                                                    <div>
                                                
                                                <li class="active" >
                                                    <select name="gender" required="required">
                                                        <option  value="">Select Scenario  </option>
                                                        <option <?php if (!empty($gender) && $gender == 'Required Savings   ') { ?> selected <?php } ?> value="Required Savings   ">Required Savings  </option>
                                                        <option <?php if (!empty($gender) && $gender == 'Life Insurance Coverage Purpose  ') { ?> selected <?php } ?> value="Life Insurance Coverage Purpose  ">Life Insurance Coverage Purpose </option>
                                                        <option <?php if (!empty($gender) && $gender == 'Income Insurance Coverage Purpose     ') { ?> selected <?php } ?> value="Income Insurance Coverage Purpose     ">Income Insurance Coverage Purpose    </option>
                                                        <option <?php if (!empty($gender) && $gender == 'Capital Growth Purpose     ') { ?> selected <?php } ?> value="Capital Growth Purpose     ">Capital Growth Purpose    </option>
                                                        <option <?php if (!empty($gender) && $gender == 'Capital Savings Purpose       ') { ?> selected <?php } ?> value="Capital Savings Purpose         ">Capital Savings Purpose        </option>
                                                        <option <?php if (!empty($gender) && $gender == 'Required Savings for Retirement      ') { ?> selected <?php } ?> value="Required Savings for Retirement       ">Required Savings for Retirement      </option>
                                                        <option <?php if (!empty($gender) && $gender == 'Available Savings for Retirement      ') { ?> selected <?php } ?> value="Available Savings for Retirement        ">Available Savings for Retirement       </option>
                                                        
                                                        
                                                    </select>
                                                </li>   
                                                <h2>Additional Monthly Savings</h2>
                                                
              <p>Date: <input type="text" id="datepicker" name="occupation" style="width: 35%;"></p>


                                                <!--<div data-role="rangeslider">
                                                    Additional lump sum average<input type="range" name="price-min" id="price-min" value="0" min="0" max="1000">
                                                </div>-->
                                                <input type="range" min="0" max="10000"; style="width: 35%;" >
    <output></output>
</div>

                                                <h2>Current Monthly Savings</h2>
                                                <table>
                                                            <tr>
                                                                <th>Paydown Debt</th>
                                                                <th>Current balance</th>
                                                                <th>% Achieved</th>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Visa</td>
                                                                <td>$</td>
                                                                <td></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Line of credit </td>
                                                                <td>$</td>
                                                                <td></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>loan</td>
                                                                <td>$</td>
                                                                <td></td>
                                                                
                                                            </tr>
                                                            
                                                        </table>
                                                 <div class="col-lg-12">
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" id="complete" name="complete" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" id="return_to" name="retun_to" class="btn btn-primary btn-lg btn-block" value="Save and return to dashboard">
                                                <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                            </div>
                                        </div>
                                            </div>                                          
                                        </section>   
                                        <!--<section class="col-xs-12 col-sm-12 col-md-4" style="margin-left: 10px;">     
                                            <?php $this->load->view('users/rightmenu'); ?>       
                                        </section> -->   
                                    </div> 
                                </form>                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<!-- /#page-wrapper -->
<style>.penny-saving-hello {
        
    
    font-size: 16px;
    text-align: justify-all;

    }</style>