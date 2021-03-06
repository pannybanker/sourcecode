<?php
if($tag != ''){
    $pdf->SetFillColor(240,240,240);
    $pdf->SetDrawColor(245,245,245);
    $pdf->SetXY(0,0);
    $pdf->SetFont('freesans','B',15);
    $pdf->SetTextColor(0);
    $pdf->SetLineWidth(0.75);
    $pdf->StartTransform();
    $pdf->Rotate(-35,109,235);
    $pdf->Cell(100,1,strtoupper($tag),'TB',0,'C','1');
    $pdf->StopTransform();
    $pdf->SetFont('freesans','',10);
    $pdf->setX(10);
    $pdf->setY(10);
}
if(get_option('show_status_on_pdf_ei') == 1){
    // Top
    if ($status == 1) {
        $status = _l('estimate_status_draft');
        $pdf->SetFillColor(119, 119, 119);
    } else if ($status == 2) {
        $status = _l('estimate_status_sent');
        $pdf->SetFillColor(3, 169, 244);
    } else if ($status == 3) {
        $status = _l('estimate_status_declined');
         $pdf->SetFillColor(252, 45, 66);
    } else if ($status == 4) {
        $status = _l('estimate_status_accepted');
        $pdf->SetFillColor(37, 155, 36);
    } else {
        $status = _l('estimate_status_expired');
        $pdf->SetFillColor(255, 111, 0);
    }

    $pdf->SetTextColor(255);
    $pdf->Cell(50, 10, strtoupper($status), 0, 1, 'C', '1');
    $pdf->SetTextColor(0);
}
$html = '<span style="font-weight:bold;font-size:20px;">'._l('estimate_pdf_heading').'</span><br />';
$html .= '<b style="color:#6a6c6f"># ' . $estimate_number . '</b>';
$pdf->writeHTMLCell(0, 0, 0, 20, $html, 0, 1, false, true, 'R', false);
$pdf->Ln(6);
$custom_pdf_logo_image_url = get_option('custom_pdf_logo_image_url');
$pdf->setJPEGQuality(100);
if($custom_pdf_logo_image_url == ''){
    $pdf->writeHTMLCell(35, 0, 10, 25, '<a href="'.site_url().'"><img src="'.site_url('uploads/company/'.get_option('company_logo')).'"></a>', 0, 1, false, true, 'L', false);
} else {
    $pdf->writeHTMLCell(35, 0, 10, 25, '<a href="'.site_url().'"><img src="'.$custom_pdf_logo_image_url.'"></a>', 0, 1, false, true, 'L', false);
}
// Get Y position for the separation
$y            = $pdf->getY();
$estimate_info = '<b>' . get_option('invoice_company_name') . '</b><br />';
$estimate_info .= get_option('invoice_company_address') . '<br/>';
$estimate_info .= get_option('invoice_company_city') . ', ';
$estimate_info .= get_option('invoice_company_country_code') . ' ';
$estimate_info .= get_option('invoice_company_postal_code') . ' ';
// check for company custom fields
$custom_company_fields = get_company_custom_fields();
if(count($custom_company_fields) > 0){
    $estimate_info .= '<br />';
}
foreach($custom_company_fields as $field){
    $estimate_info .= $field['label'] . ':' . $field['value'] . '<br />';
}
$pdf->writeHTMLCell(91, '', '', $y, $estimate_info, 0, 0, false, true, 'J', true);

// Estimate to
$client_details = '<b>' ._l('estimate_to') . '</b><br />';
$client_details .= $estimate->client->company . '<br />';
$client_details .= $estimate->billing_street . '<br />' . $estimate->billing_city . ', ' . $estimate->billing_state .'<br />'.
get_country_short_name($estimate->billing_country) . ',' . $estimate->billing_zip . '<br />';
if (!empty($estimate->client->vat)) {
    $client_details .= _l('estimate_vat') . ' ' . $estimate->client->vat . '<br />';
}

$inserted_customer_custom_field = false;
// check for estimate custom fields which is checked show on pdf
$pdf_custom_fields = get_custom_fields('customers',array('show_on_pdf'=>1));
foreach($pdf_custom_fields as $field){
    $value = get_custom_field_value($estimate->clientid,$field['id'],'customers');
    if($value == ''){continue;}
    $inserted_customer_custom_field = true;
    $client_details .= $field['name'] . ': ' . $value . '<br />';
}

if($inserted_customer_custom_field){
    $client_details .= '<br />';
}

$pdf->writeHTMLCell(99, '', '', '', $client_details, 0, 1, false, true, 'R', true);
// ship to to
if($estimate->include_shipping == 1 && $estimate->show_shipping_on_estimate == 1){
    $pdf->Ln(5);
    $shipping_details = '<b>' ._l('ship_to') . '</b><br />';
    $shipping_details .= $estimate->shipping_street . '<br />' . $estimate->shipping_city . ', ' . $estimate->shipping_city .'<br />'.
    get_country_short_name($estimate->shipping_country) . ',' . $estimate->shipping_zip;
    $pdf->writeHTMLCell(191, '', '', '', $shipping_details, 0, 1, false, true, 'R', true);
    $pdf->Ln(5);
}
// Dates
$pdf->Cell(0, 0, _l('estimate_data_date') . ': ' . _d($estimate->date), 0, 1, 'R', 0, '', 0);
if (!empty($estimate->expirydate)) {
    $pdf->Cell(0, 0, _l('estimate_data_expiry_date') . ': ' . _d($estimate->expirydate), 0, 1, 'R', 0, '', 0);
}
if (!empty($estimate->reference_no)) {
    $pdf->Cell(0, 0, _l('reference_no') . ': ' . $estimate->reference_no, 0, 1, 'R', 0, '', 0);
}
if($estimate->sale_agent != 0){
    if(get_option('show_sale_agent_on_estimates') == 1){
       $pdf->Cell(0, 0, _l('sale_agent_string') . ': ' .  get_staff_full_name($estimate->sale_agent), 0, 1, 'R', 0, '', 0);
   }
}
// check for estimate custom fields which is checked show on pdf
$pdf_custom_fields = get_custom_fields('estimate',array('show_on_pdf'=>1));
foreach($pdf_custom_fields as $field){
    $value = get_custom_field_value($estimate->id,$field['id'],'estimate');
    if($value == ''){continue;}
    $pdf->Cell(0, 0, $field['name'] . ': ' .  $value, 0, 1, 'R', 0, '', 0);
}
// The Table
$pdf->Ln(5);
$item_width = 38;
// If show item taxes is disabled in PDF we should increase the item width table heading
if(get_option('show_tax_per_item') == 0){
    $item_width = $item_width + 15;
}

$qty_heading = _l('estimate_table_quantity_heading');
if($estimate->show_quantity_as == 2){
    $qty_heading = _l('estimate_table_hours_heading');
} else if($estimate->show_quantity_as == 3){
    $qty_heading = _l('estimate_table_quantity_heading') .'/'._l('estimate_table_hours_heading');
}

// Header
$tblhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0">
<tr height="30" bgcolor="#323a45" style="color:#fff;text-align:center;">
	<th width="5%;">#</th>
	<th width="'.$item_width.'%" align="left">'._l('estimate_table_item_heading').'</th>
	<th width="12%">'.$qty_heading.'</th>
	<th width="15%">'._l('estimate_table_rate_heading').'</th>';
    if(get_option('show_tax_per_item') == 1){
        $tblhtml .= '<th width="15%">'._l('estimate_table_tax_heading').'</th>';
    }
	$tblhtml .='<th width="15%">'._l('estimate_table_amount_heading').'</th>
</tr>';
// Items
$taxes   = array();
$_calculated_taxes = array();
$i       = 1;
$tblhtml .= '<tbody>';
foreach ($estimate->items as $item) {
    $tblhtml .= '<tr style="text-align:center;font-size:9px;">';
    $tblhtml .= '<td>' . $i . '</td>';
    $tblhtml .= '<td align="left">' . $item['description'] . '<br /><span style="color:#777">'.$item['long_description'].'</span></td>';
    $tblhtml .= '<td>' . floatVal($item['qty']) . '</td>';
    $tblhtml .= '<td>' . _format_number($item['rate']) . '</td>';
    if(get_option('show_tax_per_item') == 1){
        $tblhtml .= '<td>';
    }
    $item_taxes = get_estimate_item_taxes($item['id']);
    if(count($item_taxes) > 0){
        foreach($item_taxes as $tax){
            $calc_tax = 0;
            $tax_not_calc = false;
            if(!in_array($tax['taxname'],$_calculated_taxes)) {
                array_push($_calculated_taxes,$tax['taxname']);
                $tax_not_calc = true;
            }
            if($tax_not_calc == true){
                $taxes[$tax['taxname']] =array();
                $taxes[$tax['taxname']]['total'] = array();
                array_push($taxes[$tax['taxname']]['total'],(($item['qty'] * $item['rate']) / 100 * $tax['taxrate']));
                $taxes[$tax['taxname']]['tax_name'] = $tax['taxname'];
                $taxes[$tax['taxname']]['taxrate'] = $tax['taxrate'];
            } else {
                array_push($taxes[$tax['taxname']]['total'],(($item['qty'] * $item['rate']) / 100 * $tax['taxrate']));
            }
            // Replace the DB separator for space
            if(get_option('show_tax_per_item') == 1){
                $tblhtml .= str_replace('|',' ',$tax['taxname']) .'%, ';
            }
        }

        if(get_option('show_tax_per_item') == 1){
            // Remove the last , and white space
            $tblhtml = substr($tblhtml, 0, -2);
         }
    } else {
        if(get_option('show_tax_per_item') == 1){
            $tblhtml .= '0%';
        }
    }
    if(get_option('show_tax_per_item') == 1){
        $tblhtml .= '</td>';
    }
    $i++;
    $tblhtml .= '<td>' . _format_number(($item['qty'] * $item['rate'])) . '</td>';
    $tblhtml .= '</tr>';
}
$tblhtml .= '</tbody>';
$tblhtml .= '</table>';
$pdf->writeHTML($tblhtml, true, false, false, false, '');

$pdf->Ln(8);
$tbltotal = '';
$tbltotal .= '<table cellpadding="6">';
$tbltotal .= '
<tr>
	<td align="right" width="80%">'._l('estimate_subtotal').'</td>
	<td align="right" width="20%">' . _format_number($estimate->subtotal) . '</td>
</tr>';
if($estimate->discount_percent != 0){
    $tbltotal .= '
    <tr>
        <td align="right" width="80%">'.  _l('estimate_discount') . '('. $estimate->discount_percent .'%)'.'</td>
        <td align="right" width="20%">-' . _format_number($estimate->discount_total) . '</td>
    </tr>';
}
foreach($taxes as $tax){
    $total = array_sum($tax['total']);
    if($estimate->discount_percent != 0 && $estimate->discount_type == 'before_tax'){
        $total_tax_calculated = ($total * $estimate->discount_percent) / 100;
        $total = ($total - $total_tax_calculated);
    }
    // The tax is in format TAXNAME|20
    $_tax_name = explode('|',$tax['tax_name']);
    $tbltotal .= '<tr>
    <td align="right" width="80%">' . $_tax_name[0] . '(' . _format_number($tax['taxrate']) . '%)' . '</td>
    <td align="right" width="20%">' . _format_number($total,$estimate->symbol) . '</td>
</tr>';
}
if ($estimate->adjustment != '0.00') {
    $tbltotal .= '<tr>
    <td align="right" width="80%">'._l('estimate_adjustment').'</td>
    <td align="right" width="20%">' . _format_number($estimate->adjustment) . '</td>
</tr>';
}
$tbltotal .= '
<tr style="background-color:#f0f0f0;">
	<td align="right" width="80%">'._l('estimate_total').'</td>
	<td align="right" width="20%">' . format_money($estimate->total, $estimate->symbol) . '</td>
</tr>';

$tbltotal .= '</table>';

$pdf->writeHTML($tbltotal, true, false, false, false, '');

if(get_option('total_to_words_enabled') == 1){
     $CI->load->library('numberword');
     // Set the font bold
     $pdf->SetFont('freesans','B',10);
     $pdf->Cell(0, 0, _l('num_word').': '.$CI->numberword->convert($estimate->total,$estimate->currency_name), 0, 1, 'C', 0, '', 0);
     // Set the font again to normal like the rest of the pdf
     $pdf->SetFont('freesans','',10);
     $pdf->Ln(4);
}

if (!empty($estimate->clientnote)) {
    $pdf->Ln(4);
    $pdf->MultiCell(190, 0, _l('estimate_note') . ' ' . clear_textarea_breaks($estimate->clientnote),0,'L');
}

if (!empty($estimate->terms)) {
    $pdf->Ln(4);
    $pdf->Cell(0, 0, _l('terms_and_conditions'), 0, 1, 'L', 0, '', 0);
    $pdf->Ln(2);
    $pdf->MultiCell(190, 0, clear_textarea_breaks($estimate->terms),0,'L');
}
