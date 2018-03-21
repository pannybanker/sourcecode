<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Loan Comparison</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Loan Comparison
                </div>
                <div class="panel-body">
                    <CENTER><h4>Loan Comparison</h4></CENTER>
                    <!-- /.panel-body -->
                    <div class="panel-body">
                        <div class="alert hide" id="loancomparision_msg">
                            <span></span>
                        </div>
                        <form method="post" name="loancomparison_frm" id="loancomparison_frm" action="#">
                            <?php

                                $loan2_calculate = "";
                                $loan3_calculate = "";
                                $loan1_calculate = "";
                                if($leftmeta['lc_loan1_ammount'] != "" && $leftmeta['lc_loan1_ammount'] !="" && $leftmeta['lc_loan1_pf'] !="" && $leftmeta['lc_loan1_tol'] !="")
                                {
                                   $pv1 = $leftmeta['lc_loan1_ammount'];
                                    $payment_frequency1 = $leftmeta['lc_loan1_pf'];
                                    $n1='';
                                    if($payment_frequency1=='Weekly'){$n1 = 52; $d1 = 4;}
                                    if($payment_frequency1=='Biweekly'){$n1 = 26; $d1 = 2;}
                                    if($payment_frequency1=='Monthly'){$n1 = 12; $d1 = 1;}
                                    $i1  = round(($leftmeta['lc_loan1_ir']/100)/12,8);
                                    $t1  = $leftmeta['lc_loan1_tol'];
                                    $pmt1 = round($pv1*($i1*pow(1+$i1, $t1))/((pow(1+$i1, $t1))-1),2);
                                    
                                    $years1 = round(($pmt1*$t1)/(($pmt1/$d1)*$n1),1);
                                    $intersetpaid1 = round((($pmt1/$d1)*$n1*$years1)-$pv1,2); 
                                    if( $leftmeta['lc_calculator_comparison']=='Payment Ammount')
                                    {
                                        $loan1_calculate = $pmt1/$d1;
                                    }
                                    if( $leftmeta['lc_calculator_comparison']=='Total Payment In Years')
                                    {
                                        $loan1_calculate = $years1;
                                    }
                                    if( $leftmeta['lc_calculator_comparison']=='Total Remaining Interest')
                                    {
                                        $loan1_calculate = $intersetpaid1;
                                    }
                                }
                                if($leftmeta['lc_loan2_ammount'] != "" && $leftmeta['lc_loan2_ammount'] !="" && $leftmeta['lc_loan2_pf'] !="" && $leftmeta['lc_loan2_tol'] !="")
                                {
                                    $pv2 = $leftmeta['lc_loan2_ammount'];
                                    $payment_frequency2 = $leftmeta['lc_loan2_pf'];
                                    $n2='';
                                    if($payment_frequency2=='Weekly'){$n2 = 52; $d2 = 4;}
                                    if($payment_frequency2=='Biweekly'){$n2 = 26; $d2 = 2;}
                                    if($payment_frequency2=='Monthly'){$n2 = 12; $d2 = 1;}
                                    $i2  = round(($leftmeta['lc_loan2_ir']/100)/12,8);
                                    $t2  = $leftmeta['lc_loan2_tol'];
                                    $pmt2 = round($pv2*($i2*pow(1+$i2, $t2))/((pow(1+$i2, $t2))-1),2);
                                    $years2 = round(($pmt2*$t2)/(($pmt2/$d2)*$n2),1);
                                    $intersetpaid2 = round((($pmt2/$d2)*$n2*$years2)-$pv2,2);
                                    if( $leftmeta['lc_calculator_comparison']=='Payment Ammount')
                                    {
                                        $loan2_calculate = $pmt2/$d2;
                                    }
                                    if( $leftmeta['lc_calculator_comparison']=='Total Payment In Years')
                                    {
                                        $loan2_calculate = $years2;
                                    }
                                    if( $leftmeta['lc_calculator_comparison']=='Total Remaining Interest')
                                    {
                                        $loan2_calculate = $intersetpaid2;
                                    }
                                }
                                if($leftmeta['lc_loan3_ammount'] != "" && $leftmeta['lc_loan3_ammount'] !="" && $leftmeta['lc_loan3_pf'] !="" && $leftmeta['lc_loan3_tol'] !="")
                                {
                                    $pv3 = $leftmeta['lc_loan3_ammount'];
                                    $payment_frequency3 = $leftmeta['lc_loan3_pf'];
                                    $n3='';
                                    if($payment_frequency3=='Weekly'){$n3 = 52; $d3 = 4;}
                                    if($payment_frequency3=='Biweekly'){$n3 = 26; $d3 = 2;}
                                    if($payment_frequency3=='Monthly'){$n3 = 12; $d3 = 1;}
                                    $i3  = round(($leftmeta['lc_loan3_ir']/100)/12,8);
                                    $t3  = $leftmeta['lc_loan3_tol'];
                                    $pmt3 = round($pv3*($i3*pow(1+$i3, $t3))/((pow(1+$i3, $t3))-1),2);
                                    $years3 = round(($pmt3*$t3)/(($pmt3/$d3)*$n3),1);
                                    $intersetpaid3 = round((($pmt3/$d3)*$n3*$years3)-$pv3,2);
                                    if( $leftmeta['lc_calculator_comparison']=='Payment Ammount')
                                    {
                                        $loan3_calculate = $pmt3/$d3;
                                    }
                                    if( $leftmeta['lc_calculator_comparison']=='Total Payment In Years')
                                    {
                                        $loan3_calculate = $years3;
                                    }
                                    if( $leftmeta['lc_calculator_comparison']=='Total Remaining Interest')
                                    {
                                        $loan3_calculate = $intersetpaid3;
                                    }
                                }
								
                            ?>
							
                            <div class="row form">
                                <div class="col-lg-12">
                                    <div class="col-lg-3">&nbsp;</div>
                                    <div class="col-lg-3">
                                        <h4>Loan1</h4>
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Loan2</h4>
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Loan3</h4>
                                    </div>
                                </div>    


								<div class="col-lg-12">
                                    <div class="col-lg-3">&nbsp;</div>
                                    <div class="col-lg-3">
										<select name="lc_get_amount1" id="lc_get_amount1" class="form-control">
											<option value="">Select Loan Amount1</option>
											<?php if (!empty($personal_loan)) { ?>
											  <option value="<?php echo $personal_loan; ?>">PERSONAL LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($student_loan)) { ?>
											  <option value="<?php echo $student_loan; ?>">STUDENT LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($car_loan)) { ?>
											  <option value="<?php echo $car_loan; ?>">CAR LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($investment_loan)) { ?>
											  <option value="<?php echo $investment_loan; ?>">INVESTMENT LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($business_loan)) { ?>
											  <option value="<?php echo $business_loan; ?>">BUSINESS LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($consolidation_loan)) { ?>
											  <option value="<?php echo $consolidation_loan; ?>">CONSOLIDATION LOANS</option>
															  <?php   } ?>
											<option value="custom">Custom</option>
											
										</select>
									</div>
                                    <div class="col-lg-3">
                                       <select name="lc_get_amount2" id="lc_get_amount2" class="form-control">
											<option value="">Select Loan Amount2</option>
											<?php if (!empty($personal_loan)) { ?>
											  <option value="<?php echo $personal_loan; ?>">PERSONAL LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($student_loan)) { ?>
											  <option value="<?php echo $student_loan; ?>">STUDENT LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($car_loan)) { ?>
											  <option value="<?php echo $car_loan; ?>">CAR LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($investment_loan)) { ?>
											  <option value="<?php echo $investment_loan; ?>">INVESTMENT LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($business_loan)) { ?>
											  <option value="<?php echo $business_loan; ?>">BUSINESS LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($consolidation_loan)) { ?>
											  <option value="<?php echo $consolidation_loan; ?>">CONSOLIDATION LOANS</option>
															  <?php   } ?>
											<option value="custom">Custom</option>
											
										</select>
                                    </div>
                                    <div class="col-lg-3">
                                        <select name="lc_get_amount3" id="lc_get_amount3" class="form-control">
											<option value="">Select Loan Amount3</option>
											<?php if (!empty($personal_loan)) { ?>
											  <option value="<?php echo $personal_loan; ?>">PERSONAL LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($student_loan)) { ?>
											  <option value="<?php echo $student_loan; ?>">STUDENT LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($car_loan)) { ?>
											  <option value="<?php echo $car_loan; ?>">CAR LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($investment_loan)) { ?>
											  <option value="<?php echo $investment_loan; ?>">INVESTMENT LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($business_loan)) { ?>
											  <option value="<?php echo $business_loan; ?>">BUSINESS LOANS</option>
															  <?php   } ?>
															  
											<?php if (!empty($consolidation_loan)) { ?>
											  <option value="<?php echo $consolidation_loan; ?>">CONSOLIDATION LOANS</option>
															  <?php   } ?>
											<option value="custom">Custom</option>
											
										</select>
                                    </div>
                                </div>  

								
                                <div class="col-lg-12">
                                    <div class="col-lg-3">
                                        <h4>Loan Amount</h4>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="lc_loan1_ammount" id="lc_loan1_ammount" class="form-control check_numeric" value="<?= $leftmeta['lc_loan1_ammount'] ?>" >
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="lc_loan2_ammount" id="lc_loan2_ammount" class="form-control check_numeric" value="<?= $leftmeta['lc_loan2_ammount'] ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="lc_loan3_ammount" id="lc_loan3_ammount" class="form-control check_numeric" value="<?= $leftmeta['lc_loan3_ammount'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-3">
                                        <h5>Payment Frequency</h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <select id="lc_loan1_pf" name="lc_loan1_pf" class="form-control" >
                                            <option value="">Select Payment Frequency</option>
                                            <option value="Monthly" <?php if( $leftmeta['lc_loan1_pf']=='Monthly') { echo "selected"; } ?> >Monthly</option>
                                            <option value="Biweekly"  <?php if( $leftmeta['lc_loan1_pf']=='Biweekly') { echo "selected"; } ?>>Biweekly</option>
                                            <option value="Weekly"  <?php if( $leftmeta['lc_loan1_pf']=='Weekly') { echo "selected"; } ?>>Weekly</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <select id="lc_loan2_pf" name="lc_loan2_pf" class="form-control">
                                            <option value="">Select Payment Frequency</option>
                                            <option value="Monthly" <?php if( $leftmeta['lc_loan2_pf']=='Monthly') { echo "selected"; } ?> >Monthly</option>
                                            <option value="Biweekly"  <?php if( $leftmeta['lc_loan2_pf']=='Biweekly') { echo "selected"; } ?>>Biweekly</option>
                                            <option value="Weekly"  <?php if( $leftmeta['lc_loan2_pf']=='Weekly') { echo "selected"; } ?>>Weekly</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <select id="lc_loan3_pf" name="lc_loan3_pf" class="form-control">
                                            <option value="">Select Payment Frequency</option>
                                            <option value="Monthly" <?php if( $leftmeta['lc_loan3_pf']=='Monthly') { echo "selected"; } ?> >Monthly</option>
                                            <option value="Biweekly"  <?php if( $leftmeta['lc_loan3_pf']=='Biweekly') { echo "selected"; } ?>>Biweekly</option>
                                            <option value="Weekly"  <?php if( $leftmeta['lc_loan3_pf']=='Weekly') { echo "selected"; } ?>>Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-3">
                                        <h5>Interest Rate</h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="lc_loan1_ir" id="lc_loan1_ir" class="form-control check_numeric"  value="<?= $leftmeta['lc_loan1_ir'] ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="lc_loan2_ir" id="lc_loan2_ir" class="form-control check_numeric" value="<?= $leftmeta['lc_loan2_ir'] ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="lc_loan3_ir" id="lc_loan3_ir" class="form-control check_numeric" value="<?= $leftmeta['lc_loan3_ir'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-3">
                                        <h5>Terms of loan</h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="lc_loan1_tol" id="lc_loan1_tol" class="form-control check_numeric" value="<?= $leftmeta['lc_loan1_tol'] ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="lc_loan2_tol" id="lc_loan2_tol" class="form-control check_numeric" value="<?= $leftmeta['lc_loan2_tol'] ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="lc_loan3_tol" id="lc_loan3_tol" class="form-control check_numeric" value="<?= $leftmeta['lc_loan3_tol'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-3">
                                        <select name="lc_calculator_comparison" id="lc_calculator_comparison" class="form-control">
                                            <option value="">Select Calculate Comparison</option>
                                            <option value="Payment Ammount" <?php if( $leftmeta['lc_calculator_comparison']=='Payment Ammount') { echo "selected"; } ?> >Payment Amount</option>
                                            <option value="Total Payment In Years"  <?php if( $leftmeta['lc_calculator_comparison']=='Total Payment In Years') { echo "selected"; } ?>>Total Payment in Years</option>
                                            <option value="Total Remaining Interest"  <?php if( $leftmeta['lc_calculator_comparison']=='Total Remaining Interest') { echo "selected"; } ?>>Total Interest Paid</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="loan1_calculate" id="loan1_calculate" readonly="" class="form-control" value="<?= $loan1_calculate ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="loan2_calculate" id="loan2_calculate" readonly="" class="form-control" value="<?= $loan2_calculate ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" name="loan3_calculate" id="loan3_calculate" readonly="" class="form-control" value="<?= $loan3_calculate ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <div class="col-lg-6">
                                        <input type="submit" id="complete" name="complete" class="btn btn-primary btn-lg btn-block" value="Complete">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and return to dashboard">
                                        <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </form>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->