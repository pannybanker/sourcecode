<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Debt Analysis </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Debt Analysis 
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            <th colspan="2">
                              <div class="col-md-6">
                                <h2>Current Projected Debt Analysis</h2>
                              </div>
                              <div class="col-md-6">
                                <a href="<?=base_url()?>users/donloaddebtpdf" class="btn btn-success btn-lg" target="_blank">
                                  <span class="glyphicon glyphicon-download"></span> Download 
                                </a>
                              </div>
                              
                            </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td colspan="2"><span>The following report shows your sources of income and expenses over the next 5 years.</span></td>
                        </tr>
                        
                        <tr>
                          <td colspan="2"><h2>Debts Loan Expenses</h2></td>
                        </tr>
                        <tr style="background-color: #5b9bd5;">
                          <td>Personal Loans</td>
                          <td><?php if (!empty($personal_loans)) { echo "$".number_format($personal_loans); } ?></td>
						  <td rowspan="6"><div id="piechart"></div></td>
                        </tr>
                        
                        <tr style="background-color: #5b9bd5;">
                          <td>Education Loans</td>
                          <td><?php if (!empty($education_loans)) { echo "$".number_format($education_loans); } ?></td>
                        </tr>
                        <tr style="background-color: #5b9bd5;">
                          <td>Business Loans</td>
                          <td><?php if (!empty($business_loans)) { echo "$".number_format($business_loans); } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Car Loans</td>
                          <td><?php if (!empty($car_loans)) { echo "$".number_format($car_loans); } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Consolidation Loans</td>
                          <td><?php if (!empty($consolidation_loans)) { echo "$".number_format($consolidation_loans); } ?></td>
                        </tr>
						
						<tr style="background-color: #5b9bd5;">
                          <td >Investment Loan</td>
                          <td><?php if (!empty($investment_loan)) { echo "$".number_format($investment_loan); } ?></td>
                        </tr>
						<?php 
						$total_unsecure1 ='';
						$mwloan_field = explode(',',$mwloan_field);
						 $mwloan_current_value = explode(',',$mwloan_current_value);
						 $mwloan_secure_type = explode(',',$mwloan_secure_type);
						 $mwloan_value='';
						foreach ($mwloan_field as $key => $value) 
                                                { if($mwloan_field[$key] != ''){ 
												 if($mwloan_current_value[$key] != 'secure')  { $total_unsecure1 += $mwloan_current_value[$key];}
												?>
												<tr style="background-color: <?php if($mwloan_secure_type[$key] == 'secure')  { ?>#5b9bd5<?php } else {  ?>#ed7d31<?php } ?>;">
                          <td ><?php if (!empty($mwloan_field[$key])) { echo "".$mwloan_field[$key]; } ?></td>
                          <td ><?php if (!empty($mwloan_current_value[$key])) { echo "$".$mwloan_current_value[$key]; 
						  $mwloan_value += $mwloan_current_value[$key];
						  } ?></td>
                        </tr>
												<?php } } ?>
						<tr >
                          <td><h3>Total Debts Expenses</h3></td>
                          <td><h3><?php $tde = $personal_loans+$education_loans+$business_loans+$consolidation_loans+$investment_loan+$car_loans+$mwloan_value; echo "$".number_format($tde) ?></h3></td>
						  
						  
						  <!--td><h3><?php echo $personal_loans+$credit_cards+$credit_lines+$education_loans+$business_loans+$consolidated_loans+$investment_loan; ?></h3></td-->
                        </tr>
						
						<tr>
                          <td colspan="2"><h2>Debts Credit Cards Expenses</h2></td>
                        </tr>
						
						
						
						<tr style="background-color: #5b9bd5;">
                          <td>Mastercard</td>
                          <td><?php if (!empty($mastercard)) { echo "$".number_format($mastercard); } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>VISA</td>
                          <td><?php if (!empty($visa)) { echo "$".number_format($visa); } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>AMERICAN EXPRESS</td>
                          <td><?php if (!empty($american_express)) { echo "$".number_format($american_express); } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Retail</td>
                          <td><?php if (!empty($retail)) { echo "$".number_format($retail); } ?></td>
                        </tr>
						<?php 
						$total_unsecure2 = '';
						$mwlia_field = explode(',',$mwlia_field);
						 $mwlia_current_value = explode(',',$mwlia_current_value);
						 $mwlia_secure_type = explode(',',$mwlia_secure_type);
						 $mwlia_value='';
						foreach ($mwlia_field as $key => $value) 
                                                { if($mwlia_field[$key] != ''){ 
												 if($mwlia_secure_type[$key] != 'secure')  { $total_unsecure2 += $mwlia_current_value[$key];}
												?>
												<tr style="background-color: <?php if($mwlia_secure_type[$key] == 'secure')  { ?>#5b9bd5<?php } else {  ?>#ed7d31<?php } ?>;">
                          <td ><?php if (!empty($mwlia_field[$key])) { echo "".$mwlia_field[$key]; } ?></td>
                          <td ><?php if (!empty($mwlia_current_value[$key])) { echo "$".$mwlia_current_value[$key]; 
						  $mwlia_value += $mwlia_current_value[$key];
						  } ?></td>
                        </tr>
												<?php } } ?>
						<tr >
                          <td><h3>Total Cards Expenses</h3></td>
                          <td><h3><?php $cc =  $mastercard+$visa+$american_express+$retail; echo "$" .number_format($cc) ?></h3></td>
						  
						  
						  <!--td><h3><?php echo $personal_loans+$credit_cards+$credit_lines+$education_loans+$business_loans+$consolidated_loans+$investment_loan+$mwlia_value ?></h3></td-->
                        </tr>
						<!--
						<tr>
                          <td colspan="2"><h2>Debts Investable assets Expenses</h2></td>
                        </tr>
						
                        <tr style="background-color: #5b9bd5;">
                          <td>Checking Accounts</td>
                          <td><?php if (!empty($checking_accounts)) { echo $checking_accounts; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Life Insurance</td>
                          <td><?php if (!empty($life_insurance)) { echo $life_insurance; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Savings Accounts</td>
                          <td><?php if (!empty($saving_accounts)) { echo $saving_accounts; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>401(k)/DPSP</td>
                          <td><?php if (!empty($dpsp)) { echo $dpsp; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Health Savings Accounts</td>
                          <td><?php if (!empty($health_saving)) { echo $health_saving; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>403(b)/LIRA</td>
                          <td><?php if (!empty($lira)) { echo $lira; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Taxable Investments</td>
                          <td><?php if (!empty($taxable_investment)) { echo $taxable_investment; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>IRA/RRSP</td>
                          <td><?php if (!empty($rrsp)) { echo $rrsp; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Education Savings Plan</td>
                          <td><?php if (!empty($education_saving)) { echo $education_saving; } ?></td>
                        </tr>
                        <tr style="background-color: #5b9bd5;">
                          <td>SEP/IRA/IPP</td>
                          <td><?php if (!empty($ipp)) { echo $ipp; } ?></td>
                        </tr>
						
						
						<tr >
                          <td><h3>Total Investable Assets Expenses</h3></td>
                          <td><h3><?php echo $checking_accounts+$life_insurance+$saving_accounts+$health_saving+$lira+$taxable_investment+$education_saving+$ipp; ?></h3></td>
						  
						  
						  <!--td><h3><?php echo $personal_loans+$credit_cards+$credit_lines+$education_loans+$business_loans+$consolidated_loans+$investment_loan; ?></h3></td
                        </tr>
						-->
						<tr>
                          <td colspan="2"><h2>Debts Line Of Credit Expenses</h2></td>
                        </tr>
						
						
						<tr style="background-color: #5b9bd5;">
                          <td>EQUITY SECURED</td>
                          <td><?php if (!empty($equity_secured)) { echo "$".number_format($equity_secured); } ?></td>
                        </tr>
						<tr style="background-color: #ed7d31;">
                          <td>Consolidated Loans</td>
                          <td><?php if (!empty($unsecured)) { echo "$".number_format($unsecured); } ?></td>
                        </tr>
						
						<?php 
						$total_unsecure3  = $unsecured;
						$mwloc_field = explode(',',$mwloc_field);
						 $mwloc_current_value = explode(',',$mwloc_current_value);
						 $mwloc_secure_type = explode(',',$mwloc_secure_type);
						 $mwloc_value='';
						foreach ($mwloc_field as $key => $value) 
                                                { if($mwloc_field[$key] != ''){
													if($mwloc_current_value[$key] != 'secure')  { $total_unsecure3 += $mwloc_current_value[$key];}
													?>
												<tr style="background-color: <?php if($mwloc_secure_type[$key] == 'secure')  { ?>#5b9bd5<?php } else {  ?>#ed7d31<?php } ?>;">
                          <td ><?php if (!empty($mwloc_field[$key])) { echo "".$mwloc_field[$key]; } ?></td>
                          <td ><?php if (!empty($mwloc_current_value[$key])) { echo "$".$mwloc_current_value[$key]; 
						  $mwloc_value += $mwloc_current_value[$key];
						  } ?></td>
                        </tr>
												<?php } } ?>
						<tr >
                          <td><h3>Total Line Of Credit Expenses</h3></td>
                          <td><h3><?php $tlc = $equity_secured+$unsecured; echo "$".number_format($tlc); ?></h3></td>
						  
						  
						  <!--td><h3><?php echo $personal_loans+$credit_cards+$credit_lines+$education_loans+$business_loans+$consolidated_loans+$investment_loan+$mwloc_value; ?></h3></td-->
                        </tr>
						
						<tr>
                          <td colspan="2"><h2>Debts Mortgages Expenses</h2></td>
                        </tr>
						
						
						
						<tr style="background-color: #5b9bd5;">
                          <td>PERSONAL RESIDENCE MORTGAGE</td>
                          <td><?php if (!empty($personal_resisdence)) { echo "$".number_format($personal_resisdence); } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>RECREATION PROPERTY MORTGAGES</td>
                          <td><?php if (!empty($recreation_property)) { echo "$".number_format($recreation_property); } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>INVESTMENT PROPERTY MORTGAGES</td>
                          <td><?php if (!empty($investment_property)) { echo "$".number_format($investment_property); } ?></td>
                        </tr>
                        <?php 
						$total_unsecure4 = '';
						$mwmortage_field = explode(',',$mwmortage_field);
						 $mwmortage_current_value = explode(',',$mwmortage_current_value);
						 $mwmortage_secure_type = explode(',',$mwmortage_secure_type);
						 $mwmortage_value='';
						foreach ($mwmortage_field as $key => $value) 
                                                { if($mwmortage_field[$key] != ''){ 
												if($mwmortage_current_value[$key] != 'secure')  { $total_unsecure4 += $mwmortage_current_value[$key];}
												?>
												<tr style="background-color: <?php if($mwmortage_secure_type[$key] == 'secure')  { ?>#5b9bd5<?php } else {  ?>#ed7d31<?php } ?>;">
                          <td ><?php if (!empty($mwmortage_field[$key])) { echo "".$mwmortage_field[$key]; } ?></td>
                          <td ><?php if (!empty($mwmortage_current_value[$key])) { echo "$".$mwmortage_current_value[$key]; 
						  $mwmortage_value += $mwmortage_current_value[$key];
						  } ?></td>
                        </tr>
												<?php } } ?>
                        <tr >
                          <td><h3>Total Mortgages Expenses</h3></td>
                          <td><h3><?php $tme = $personal_resisdence+$recreation_property+$investment_property+$mwmortage_value; echo "$".number_format($tme) ?></h3></td>
                        </tr>
						
						
						
						<!--
						
						<tr>
                          <td colspan="2"><h2>Debts Property Assets Expenses</h2></td>
                        </tr>
						
						
						
						<tr style="background-color: #5b9bd5;">
                          <td>Personal Residence</td>
                          <td><?php if (!empty($current_value_personal_residence)) { echo $current_value_personal_residence.', '.$personal_cost; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Recreation Property</td>
                          <td><?php if (!empty($current_value_recreation_property)) { echo $current_value_recreation_property.', '.$recreation_cost; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Real Estate Investment</td>
                          <td><?php if (!empty($current_value_realestate)) { echo $current_value_realestate.', '.$realestate_cost; } ?></td>
                        </tr>
						
						<tr style="background-color: #5b9bd5;">
                          <td>Vehicles</td>
                          <td><?php if (!empty($current_value_vehicles)) { echo $current_value_vehicles.', '.$vehicles_cost; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Art & Collectables</td>
                          <td><?php if (!empty($current_value_art)) { echo $current_value_art.', '.$art_cost; } ?></td>
                        </tr>
						<tr style="background-color: #5b9bd5;">
                          <td>Jewellery</td>
                          <td><?php if (!empty($current_value_jewellery)) { echo $current_value_jewellery.', '.$jewellery_cost; } ?></td>
                        </tr>-->
                        
                        <tr>
                          <td><h3>Total  Expenses</h3></td>
                          <td><h3><?php $te = $tde+$cc+$tlc+$tme; echo "$".number_format($te); ?></h3><?php 
						$total_unsecure = $total_unsecure1+$total_unsecure2+$total_unsecure3+$total_unsecure4;
						$total_secure = $te - $total_unsecure;
						
						?></td>
						  
                        </tr>
						
						
                        <tr>
                          <td colspan="2">
                            <center>
                              <a href="<?=base_url()?>users/donloaddebtpdf" class="btn btn-success btn-lg" target="_blank">
                                <span class="glyphicon glyphicon-download"></span> Download 
                              </a>
                            </center>
                            
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<script>
$( document ).ready(function() {
   
	google.charts.setOnLoadCallback(drawChart2);
});
function drawChart2() {
		
      

	var data2 = google.visualization.arrayToDataTable([
      ['Task', 'Debt Analysis'],
      ['Secure', <?php echo $total_secure; ?>],
      ['Unsecure', <?php echo $total_unsecure; ?>],
      
    ]);
      // Optional; add a title and set the width and height of the chart
     

      
      var options2 = {'title':'Debt Analysis', 'width':400, 'height':300, 'pieSliceText': 'value', colors: ['#5b9bd5', '#ed7d31']};
      
	  
	  
	  var chart2 = new google.visualization.PieChart(document.getElementById('piechart'));
	  
	  chart2.draw(data2, options2);
	
    }
</script>