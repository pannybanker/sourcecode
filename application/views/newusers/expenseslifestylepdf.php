<?php

    tcpdf();

    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $obj_pdf->SetCreator(PDF_CREATOR);

    $title = "Cash Flow Analysis Report";

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

    <?php extract($usermeta[$_SESSION['user']['user_id']]);


	?>

<?php } 

	$umeta = $usermeta[$_SESSION['user']['user_id']];
	if(isset($_GET['months'])){
		$n = $_GET['months'];
	}else{
		$n = date('n');
	}
	if(isset($_GET['years'])){
		$y = $_GET['years'];
	}else{
		$y = date('Y');
	}
	$m = $n."_".$y;


?>

<div id="page-wrapper">

    <!-- /.row -->

    <div class="row">                             

          <table border="1" cellspacing="0" cellpadding="3">

            <thead>

              <tr>

                  <th colspan="2"><h2>Current Projected Cash Flow</h2></th>

              </tr>

            </thead>

            <tbody>
				<tr>

                  <td colspan="2"><span>The following report shows your source of expenses in a month.</span></td>

              </tr>

              <tr>

                <td>&nbsp;</td>

                <td><?php echo $y; ?></td>

              </tr>
              <tr>

                <td colspan="2"><h2 style="text-align: center;">My Expenses</h2></td>

              </tr>

              <tr>

                <td colspan="2"><h2>Home Expenses</h2></td>

              </tr>

              <tr>

                <td>Mortgage & Rent</td>

                <td><?php  if (!empty($umeta['mortgage_rent_'.$m])) {  echo "$".number_format($umeta['mortgage_rent_'.$m]);  } ?></td>

              </tr>

              <tr>

                <td>Property Taxes</td>

                <td><?php if (!empty($umeta['property_taxes_'.$m])) { echo "$".number_format($umeta['property_taxes_'.$m]);  } ?></td>

              </tr>

              <tr>

                <td>Insurance</td>

                <td><?php if (!empty($umeta['insurance_'.$m])) { echo "$".number_format($umeta['insurance_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Cable, Internet & Phone</td>

                <td><?php if (!empty($umeta['cable_internet_phone_'.$m])) { echo "$".number_format($umeta['cable_internet_phone_'.$m]); }  ?></td>

              </tr>

              <tr>

                <td>Property Fees & Dues</td>

                <td><?php if (!empty($umeta['property_fees_'.$m])) { echo "$".number_format($umeta['property_fees_'.$m]); }  ?></td>

              </tr>

              <tr>

                <td>Utilities</td>

                <td><?php if (!empty($umeta['utilities_'.$m])) { echo "$".number_format($umeta['utilities_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Household Items</td>

                <td><?php if (!empty($umeta['household_items_'.$m])) { echo "$".number_format($umeta['household_items_'.$m]); } ?></td>

              </tr>

              <tr>

                <td><h3>Total Home Expenses</h3></td>

                <td><h3><?php $the = $umeta['mortgage_rent_'.$m]+$umeta['property_taxes_'.$m]+$umeta['insurance_'.$m]+$umeta['cable_internet_phone_'.$m]+$umeta['property_fees_'.$m]+$umeta['utilities_'.$m]+$umeta['household_items_'.$m];echo "$".number_format($the) ?></h3></td>

              </tr>

              <tr>

                <td colspan="2"><h2>Transportation Expenses</h2></td>

              </tr>

              <tr>

                <td>Fuel</td>

                <td><?php if (!empty($umeta['fuel_'.$m])) { echo "$".number_format($umeta['fuel_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>License & Registration</td>

                <td><?php if (!empty($umeta['license_registration_'.$m])) { echo "$".number_format($umeta['license_registration_'.$m]); }  ?></td>

              </tr>

              <tr>

                <td>Vehicle Financng</td>

                <td><?php if (!empty($umeta['vehicle_financing_'.$m])) { echo "$".number_format($umeta['vehicle_financing_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Repairs & Maintenance</td>

                <td><?php if (!empty($umeta['repairs_maintenance_'.$m])) { echo "$".number_format($umeta['repairs_maintenance_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Insurance</td>

                <td><?php if (!empty($umeta['insurance_'.$m])) { echo "$".number_format($umeta['insurance_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Tolls</td>

                <td><?php if (!empty($umeta['tolls_'.$m])) { echo "$".number_format($umeta['tolls_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Parking</td>

                <td><?php if (!empty($umeta['parking_'.$m])) { echo "$".number_format($umeta['parking_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Transit</td>

                <td><?php if (!empty($umeta['transit_'.$m])) { echo "$".number_format($umeta['transit_'.$m]); } ?></td>

              </tr>

              <tr>

                <td><h3>Total Transportation Expenses</h3></td>

                <td><h3><?php $tte = $umeta['fuel_'.$m]+$umeta['license_registration_'.$m]+$umeta['vehicle_financing_'.$m]+$umeta['repairs_maintenance_'.$m]+$umeta['insurance_'.$m]+$umeta['tolls_'.$m]+$umeta['parking_'.$m]+$umeta['transit_'.$m];echo "$".number_format($tte) ?></h3></td>

              </tr>

              <tr>

                <td colspan="2"><h2>Personal  Expenses</h2></td>

              </tr>

              <tr>

                <td>Groceries & Meals</td>

                <td><?php if (!empty($umeta['groceries_meals_'.$m])) { echo "$".number_format($umeta['groceries_meals_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Clothing & Jewelry</td>

                <td><?php if (!empty($umeta['clothing_jewelwery_'.$m])) { echo "$".number_format($umeta['clothing_jewelwery_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Personal Care & Grooming</td>

                <td><?php if (!empty($umeta['personal_care_'.$m])) { echo "$".number_format($umeta['personal_care_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Entertainment & Hobbies</td>

                <td><?php if (!empty($umeta['entertainment_hobbies_'.$m])) { echo "$".number_format($umeta['entertainment_hobbies_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Dinin</td>

                <td><?php if (!empty($umeta['dinin_'.$m])) { echo "$".number_format($umeta['dinin_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Child Care & Child Activities</td>

                <td><?php if (!empty($umeta['childcare_'.$m])) { echo "$".number_format($umeta['childcare_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Pet Care</td>

                <td><?php if (!empty($umeta['petcare_'.$m])) { echo "$".number_format($umeta['petcare_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Memberships & Subscriptions</td>

                <td><?php if (!empty($umeta['memberships_subscription_'.$m])) { echo "$".number_format($umeta['memberships_subscription_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Vacation Fund</td>

                <td><?php if (!empty($umeta['vacation_fund_'.$m])) { echo "$".number_format($umeta['vacation_fund_'.$m]); } ?></td>

              </tr>

              <tr>

                <td><h3>Total Personal Expenses</h3></td>

                <td><h3><?php $tpe = $umeta['groceries_meals_'.$m]+$umeta['clothing_jewelwery_'.$m]+$umeta['personal_care_'.$m]+$umeta['entertainment_hobbies_'.$m]+$umeta['dinin_'.$m]+$umeta['childcare_'.$m]+$umeta['petcare_'.$m]+$umeta['memberships_subscription_'.$m]+$umeta['vacation_fund_'.$m];echo "$".number_format($tpe) ?></h3></td>

              </tr>

              <tr>

                <td colspan="2"><h2>Health & Insurance Expenses</h2></td>

              </tr>

              <tr>

                <td>Health Insurance</td>

                <td><?php if (!empty($umeta['health_insurance_'.$m])) { echo "$".number_format($umeta['health_insurance_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Life Insurance</td>

                <td><?php if (!empty($umeta['life_insurance_'.$m])) { echo "$".number_format($umeta['life_insurance_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Disibilty Insurance</td>

                <td><?php if (!empty($umeta['disability_insurance_'.$m])) { echo "$".number_format($umeta['disability_insurance_'.$m]); }  ?></td>

              </tr>

              <tr>

                <td>Critical Illness Insurance</td>

                <td><?php if (!empty($umeta['critical_illness_'.$m])) { echo "$".number_format($umeta['critical_illness_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Vision</td>

                <td><?php if (!empty($umeta['vision_'.$m])) { echo "$".number_format($umeta['vision_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Medical</td>

                <td><?php if (!empty($umeta['medical_'.$m])) { echo "$".number_format($umeta['medical_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Prescriptions</td>

                <td><?php if (!empty($umeta['prescriptions_'.$m])) { echo "$".number_format($umeta['prescriptions_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Dental</td>

                <td><?php if (!empty($umeta['dental_'.$m])) { echo "$".number_format($umeta['dental_'.$m]); } ?></td>

              </tr>

              <tr>

                <td><h3>Total Health & Insurance Expenses</h3></td>

                <td><h3><?php $thie = $umeta['health_insurance_'.$m]+$umeta['life_insurance_'.$m]+$umeta['disability_insurance_'.$m]+$umeta['critical_illness_'.$m]+$umeta['vision_'.$m]+$umeta['medical_'.$m]+$umeta['prescriptions_'.$m]+$umeta['dental_'.$m];echo "$".number_format($thie) ?></h3></td>

              </tr>

               <tr>

                <td colspan="2"><h2>Debts Expenses</h2></td>

              </tr>

              <tr>

                <td>Personal Loans</td>

                <td><?php if (!empty($umeta['personal_loans_'.$m])) { echo "$".number_format($umeta['personal_loans_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Credit cards</td>

                <td><?php if (!empty($umeta['credit_cards_'.$m])) { echo "$".number_format($umeta['credit_cards_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Credit Lines</td>

                <td><?php if (!empty($umeta['credit_lines_'.$m])) { echo "$".number_format($umeta['credit_lines_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Education Loans</td>

                <td><?php if (!empty($umeta['education_loans_'.$m])) { echo "$".number_format($umeta['education_loans_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Business Loans</td>

                <td><?php if (!empty($umeta['business_loans_'.$m])) { echo "$".number_format($umeta['business_loans_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Consolidated Loans</td>

                <td><?php if (!empty($umeta['consolidated_loans_'.$m])) { echo "$".number_format($umeta['consolidated_loans_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Investment Loan</td>

                <td><?php if (!empty($umeta['investment_loan_'.$m])) { echo "$".number_format($umeta['investment_loan_'.$m]); } ?></td>

              </tr>

              <tr>

                <td><h3>Total Debts Expenses</h3></td>

                <td><h3><?php $tde = $umeta['personal_loans_'.$m]+$umeta['credit_cards_'.$m]+$umeta['credit_lines_'.$m]+$umeta['education_loans_'.$m]+$umeta['business_loans_'.$m]+$umeta['consolidated_loans_'.$m]+$umeta['investment_loan_'.$m];echo "$".number_format($tde) ?></h3></td>

              </tr>
			  
				<tr>
				  <td><h3>Total Expenses</h3></td>
				  <td colspan="2"><h3><?php $te = $the+$tte+$tpe+$thie+$tde; echo "$".number_format($te); ?></h3></td>
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

    $obj_pdf->Output('lifestyle.pdf', 'I');

?>