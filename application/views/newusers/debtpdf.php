<?php

    tcpdf();

    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $obj_pdf->SetCreator(PDF_CREATOR);

    $title = "Debts Analysis Report";

    $obj_pdf->SetTitle($title); 

    $obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, "Year Report");

    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    $obj_pdf->SetDefaultMonospacedFont('helvetica');

    $obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

    $obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    $obj_pdf->SetFont('helvetica', '', 9);

    $obj_pdf->setFontSubsetting(false);

    $obj_pdf->AddPage();

    ob_start();

?>

<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>

    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>

<?php } ?>

<div id="page-wrapper">

    <!-- /.row -->

    <div class="row">                             

          <table border="1" cellspacing="0" cellpadding="3">

            <thead>

              <tr>

                  <th colspan="2"><h2>Current Projected Debt Analysis</h2></th>

              </tr>

            </thead>

            <tbody>

              <tr>

                  <td colspan="2"><span>The following report shows your sources of income and expenses over the next 5 years.</span></td>

              </tr>

              <tr>

                <td colspan="2"><h2>Debts Expenses</h2></td>

              </tr>

              <tr>

                <td>Personal Loans</td>

                <td><?php if (!empty($personal_loans)) { echo "$".number_format($personal_loans); } ?></td>

              </tr>

              <tr>

                <td>Credit cards</td>

                <td><?php if (!empty($credit_cards)) { echo "$".number_format($credit_cards); } ?></td>

              </tr>

              <tr>

                <td>Credit Lines</td>

                <td><?php if (!empty($credit_lines)) { echo "$".number_format($credit_lines); } ?></td>

              </tr>

              <tr>

                <td>Education Loans</td>

                <td><?php if (!empty($education_loans)) { echo "$".number_format($education_loans); } ?></td>

              </tr>

              <tr>

                <td>Business Loans</td>

                <td><?php if (!empty($business_loans)) { echo "$".number_format($business_loans); } ?></td>

              </tr>

              <tr>

                <td>Consolidated Loans</td>

                <td><?php if (!empty($consolidated_loans)) { echo "$".number_format($consolidated_loans); } ?></td>

              </tr>

              <tr>

                <td>Investment Loan</td>

                <td><?php if (!empty($investment_loan)) { echo "$".number_format($investment_loan); } ?></td>

              </tr>

              <tr>

                <td><h3>Total Debts Expenses</h3></td>

                <td><h3><?php $tde = $personal_loans+$credit_cards+$credit_lines+$education_loans+$business_loans+$consolidated_loans+$investment_loan; echo "$".number_format($tde); ?></h3></td>

              </tr>
			  
			  
			  <tr>

                <td colspan="2"><h2>Debts Credit Cards Expenses</h2></td>

              </tr>

              <tr>

                <td>Mastercard</td>

                <td><?php if (!empty($mastercard)) { echo "$".number_format($mastercard); } ?></td>

              </tr>

              <tr>

                <td>VISA</td>

                <td><?php if (!empty($visa)) { echo "$".number_format($visa); } ?></td>

              </tr>

              <tr>

                <td>AMERICAN EXPRESS</td>

                <td><?php if (!empty($american_express)) { echo "$".number_format($american_express); } ?></td>

              </tr>

              <tr>

                <td>Retail</td>

                <td><?php if (!empty($retail)) { echo "$".number_format($retail); } ?></td>

              </tr>

              <tr>

                <td><h3>Total Credit Cards Expenses</h3></td>

                <td><h3><?php $cc =  $mastercard+$visa+$american_express+$retail; echo "$" .number_format($cc) ?></h3></td>

              </tr>
			  
			  
			  
			  <!--<tr>

                <td colspan="2"><h2>Debts Investable assets Expenses</h2></td>

              </tr>

              <tr>

               <td>Checking Accounts</td>
			   
               <td><?php if (!empty($checking_accounts)) { echo $checking_accounts; } ?></td>

              </tr>

              <tr>

                 <td>Life Insurance</td>
                 
				 <td><?php if (!empty($life_insurance)) { echo $life_insurance; } ?></td>

              </tr>

              <tr>

                <td>Savings Accounts</td>
                
				<td><?php if (!empty($saving_accounts)) { echo $saving_accounts; } ?></td>

              </tr>

              <tr>

                <td>401(k)/DPSP</td>
                
				<td><?php if (!empty($dpsp)) { echo $dpsp; } ?></td>

              </tr>
			  
			  <tr>

                <td>Health Savings Accounts</td>
                
				<td><?php if (!empty($health_saving)) { echo $health_saving; } ?></td>

              </tr>
			  
			  <tr>

				<td>403(b)/LIRA</td>
              
				<td><?php if (!empty($lira)) { echo $lira; } ?></td>

              </tr>
			  
			  <tr>

				 <td>Taxable Investments</td>
                 
				 <td><?php if (!empty($taxable_investment)) { echo $taxable_investment; } ?></td>

              </tr>
			  
			  <tr>

				 <td>IRA/RRSP</td>
                 
				 <td><?php if (!empty($rrsp)) { echo $rrsp; } ?></td>

              </tr>			  
			  
			  <tr>

				 <td>Education Savings Plan</td>
                  
				  <td><?php if (!empty($education_saving)) { echo $education_saving; } ?></td>
				  
              </tr>
			  
			  <tr>

				<td>SEP/IRA/IPP</td>
                
				<td><?php if (!empty($ipp)) { echo $ipp; } ?></td>
				  
              </tr>

              <tr>

                <td><h3>Total Investable Assets Expenses</h3></td>

                <td><h3><?php $tia = $checking_accounts+$life_insurance+$saving_accounts+$health_saving+$lira+$taxable_investment+$education_saving+$ipp; echo "$". number_format($tia) ?></h3></td>

              </tr>-->
			  

			   <tr>

                <td colspan="2"><h2>Debts Line Of Credit Expenses</h2></td>

              </tr>

              <tr>

               <td>EQUITY SECURED</td>
                
				<td><?php if (!empty($equity_secured)) { echo "$".number_format($equity_secured); } ?></td>

              </tr>

              <tr>

                  <td>Consolidated Loans</td>
                   
				   <td><?php if (!empty($unsecured)) { echo "$".number_format($unsecured); } ?></td>

              </tr>

              

              <tr>

                <td><h3>Total Line Of Credit Expenses</h3></td>

                <td><h3><?php $tlc = $equity_secured+$unsecured; echo "$". number_format($tlc) ?></h3></td>

              </tr>
			  
			  
			  <tr>

                <td colspan="2"><h2>Debts Mortgages Expenses</h2></td>

              </tr>

              <tr>

				<td>PERSONAL RESIDENCE MORTGAGE</td>
				
                <td><?php if (!empty($personal_resisdence)) { echo "$".number_format($personal_resisdence); } ?></td>

              </tr>

              <tr>

                  <td>RECREATION PROPERTY MORTGAGES</td>
                    
				  <td><?php if (!empty($recreation_property)) { echo "$".number_format($recreation_property); } ?></td>

              </tr>
			  <tr>

                  <td>INVESTMENT PROPERTY MORTGAGES</td>
                   
				  <td><?php if (!empty($investment_property)) { echo "$".number_format($investment_property); } ?></td>

              </tr>
			  <tr>

                  <td><h3>Total Mortgages Expenses</h3></td>
                  
				  <td><h3><?php $tme = $personal_resisdence+$recreation_property+$investment_property; echo "$". number_format($tme) ?></h3></td>

              </tr>

              <tr>
				  <td><h3>Total Expenses</h3></td>
				  <td colspan="2"><h3><?php $te = $tde+$cc+$tlc+$tme; echo "$".number_format($te); ?></h3></td>
			  </tr>
			  
            </tbody>

          </table>

    </div>

    <!-- /.row -->

</div>

<!-- /#page-wrapper -->

<?php

    $content = ob_get_contents();

    ob_end_clean();

    $obj_pdf->writeHTML($content, true, false, true, false, '');

    $obj_pdf->Output('debtanalysis.pdf', 'I');

?>