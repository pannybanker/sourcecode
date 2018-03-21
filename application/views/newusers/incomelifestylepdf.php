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

    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>

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

                  <td colspan="2"><span>The following report shows your sources of income in a month.</span></td>

              </tr>

              <tr>

                <td>&nbsp;</td>

                <td><?php echo $y; ?></td>

              </tr>

              <tr>

                  <td colspan="2"><h3>My Income Sources</h3></td>

              </tr>

              <tr>

                <td>Employment Income</td>

                <td><?php if (!empty($umeta['employment_income_'.$m])) { echo "$".number_format($umeta['employment_income_'.$m]);} ?></td>

              </tr>

              <tr>

                <td>Pensions</td>

                <td><?php if (!empty($umeta['pensions_'.$m])) { echo "$".number_format($umeta['pensions_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Investment Earnings</td>

                <td><?php if (!empty($umeta['investment_earning_'.$m])) { echo "$".number_format($umeta['investment_earning_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Bonuses</td>

                <td><?php if (!empty($umeta['bonuses_'.$m])) { echo "$".number_format($umeta['bonuses_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Allowances</td>

                <td><?php if (!empty($umeta['allowances_'.$m])) { echo "$".number_format($umeta['allowances_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Tax & Withholdings</td>

                <td><?php if (!empty($umeta['taxes_'.$m])) { echo "$".number_format($umeta['taxes_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Business Income</td>

                <td><?php  if (!empty($umeta['bonuses_'.$m])) { echo "$".number_format($umeta['bonuses_'.$m]);  } ?></td>

              </tr>

              <tr>

                <td>Goverment Benefits</td>

                <td><?php if (!empty($umeta['government_benefits_'.$m])) { echo "$".number_format($umeta['government_benefits_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Real Esate/Rental</td>

                <td><?php if (!empty($umeta['realstate_'.$m])) { echo "$".number_format($umeta['realstate_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Student Loan Received</td>

                <td><?php if (!empty($umeta['student_loan_'.$m])) { echo "$".number_format($umeta['student_loan_'.$m]); } ?></td>

              </tr>

              <tr>

                <td>Other Income</td>

                <td><?php if (!empty($umeta['other_income_'.$m])) { echo "$".number_format($umeta['other_income_'.$m]);  } ?></td>

              </tr>

              <tr>

                <td><h3>Total Income Source</h3></td>

                <td><h3><?php $tis = $umeta['employment_income_'.$m]+$umeta['pensions_'.$m]+$umeta['investment_earning_'.$m]+$umeta['bonuses_'.$m]+ $umeta['government_benefits_'.$m] + $umeta['allowances_'.$m] + $umeta['government_benefits_'.$m] + $umeta['realstate_'.$m] + $umeta['student_loan_'.$m] + $umeta['other_income_'.$m] - $umeta['taxes_'.$m]; echo "$".number_format($tis); ?></h3></td>

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