<div class="col-md-12 page-pdf-html-logo">
    <?php get_company_logo(); ?>
    <?php if(is_staff_logged_in()){ ?>
    <a href="<?php echo admin_url(); ?>estimates/list_estimates/<?php echo $estimate->id; ?>" class="btn btn-info pull-right"><?php echo _l('goto_admin_area'); ?>
    </a>
    <?php } ?>
</div>
<div class="clearfix"></div>
<div class="panel_s mtop20 animated fadeIn">
    <div class="panel-body">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="mtop10 display-block">
                        <?php echo format_estimate_status($estimate->status,'',true,true); ?>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <?php echo form_open($this->uri->uri_string(),array('class'=>'pull-right')); ?>
                    <input type="submit" name="estimatepdf" class="btn btn-info" value="<?php echo _l('clients_invoice_html_btn_download'); ?>">
                    <?php echo form_close(); ?>
                    <?php
                    if ($estimate->status != 4 && $estimate->status != 3) {
                        echo form_open($this->uri->uri_string(),array('class'=>'pull-right mright10'));
                        echo form_hidden('estimate_action',3);
                        echo '<button type="submit" class="btn btn-default">'._l('clients_decline_estimate').'</button>';
                        echo form_close();
                        echo form_open($this->uri->uri_string(),array('class'=>'pull-right mright10'));
                        echo form_hidden('estimate_action',4);
                        echo '<button type="submit" class="btn btn-success">'._l('clients_accept_estimate').'</button>';
                        echo form_close();
                    } else if($estimate->status == 3){
                        if ($estimate->expirydate >= date('Y-m-d') && $estimate->status != 5) {
                            echo form_open($this->uri->uri_string(),array('class'=>'pull-right mright10'));
                            echo form_hidden('estimate_action',4);
                            echo '<button type="submit" class="btn btn-success">'._l('clients_accept_estimate').'</button>';
                            echo form_close();
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="row mtop40">
                <div class="col-md-6">
                    <h4 class="bold"><?php echo format_estimate_number($estimate->id); ?></h4>
                    <address>
                        <span class="bold"><?php echo get_option('invoice_company_name'); ?></span><br>
                        <?php echo get_option('invoice_company_address'); ?><br>
                        <?php echo get_option('invoice_company_city'); ?>, <?php echo get_option('invoice_company_country_code'); ?> <?php echo get_option('invoice_company_postal_code'); ?><br>
                        <?php if(get_option('invoice_company_phonenumber') != ''){ ?>
                        <abbr title="Phone">P:</abbr> <?php echo get_option('invoice_company_phonenumber'); ?>
                        <?php } ?>
                        <?php
                            // check for company custom fields
                        $custom_company_fields = get_company_custom_fields();
                        foreach($custom_company_fields as $field){
                            echo $field['label'] . ':' . $field['value'] . '<br />';
                        }
                        ?>
                    </address>
                </div>
                <div class="col-sm-6 text-right">
                    <span class="bold"><?php echo _l('estimate_to'); ?>:</span>
                    <address>
                        <span class="bold"><?php echo $estimate->client->company; ?></span><br>
                        <?php echo $estimate->billing_street; ?><br>
                        <?php echo $estimate->billing_city; ?>, <?php echo $estimate->billing_state; ?><br/><?php echo get_country_short_name($estimate->billing_country); ?>,<?php echo $estimate->billing_zip; ?><br>
                        <?php if(!empty($estimate->client->vat)){ ?>
                        <?php echo _l('estimate_vat'); ?>: <?php echo $estimate->client->vat; ?><br />
                        <?php } ?>
                        <?php
                            // check for customer custom fields which is checked show on pdf
                        $pdf_custom_fields = get_custom_fields('customers',array('show_on_pdf'=>1));
                        foreach($pdf_custom_fields as $field){
                            $value = get_custom_field_value($estimate->clientid,$field['id'],'customers');
                            if($value == ''){continue;}
                            echo $field['name'] . ': ' . $value . '<br />';
                        }
                        ?>
                    </address>
                    <!-- shipping details -->
                    <?php if($estimate->include_shipping == 1 && $estimate->show_shipping_on_estimate == 1){ ?>
                    <span class="bold"><?php echo _l('ship_to'); ?>:</span>
                    <address>
                        <?php echo $estimate->shipping_street; ?><br>
                        <?php echo $estimate->shipping_city; ?>, <?php echo $estimate->shipping_state; ?><br/><?php echo get_country_short_name($estimate->shipping_country); ?>,<?php echo $estimate->shipping_zip; ?>
                    </address>
                    <?php } ?>
                    <p>
                        <span><span class="text-muted"><?php echo _l('estimate_data_date'); ?></span> <?php echo $estimate->date; ?></span>
                        <?php if(!empty($estimate->expirydate)){ ?>
                        <br /><span class="mtop20"><span class="text-muted"><?php echo _l('estimate_data_expiry_date'); ?></span> <?php echo $estimate->expirydate; ?></span>
                        <?php } ?>
                        <?php if(!empty($estimate->reference_no)){ ?>
                        <br /><span class="mtop20"><span class="text-muted"><?php echo _l('reference_no'); ?>:</span> <?php echo $estimate->reference_no; ?></span>
                        <?php } ?>
                        <?php if($estimate->sale_agent != 0){
                            if(get_option('show_sale_agent_on_estimates') == 1){ ?>
                            <br /><span class="mtop20">
                            <span class="text-muted"><?php echo _l('sale_agent_string'); ?>:</span>
                            <?php echo get_staff_full_name($estimate->sale_agent); ?>
                        </span>
                        <?php }
                    }
                    ?>
                    <?php
                        // check for estimate custom fields which is checked show on pdf
                    $pdf_custom_fields = get_custom_fields('estimate',array('show_on_pdf'=>1));
                    foreach($pdf_custom_fields as $field){
                        $value = get_custom_field_value($estimate->id,$field['id'],'estimate');
                        if($value == ''){continue;} ?>
                        <br /><span class="mtop20">
                        <span class="text-muted"><?php echo $field['name']; ?>: </span>
                        <?php echo $value; ?>
                    </span>
                    <?php
                }
                ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table items">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="description"><?php echo _l('estimate_table_item_heading'); ?></th>
                            <?php
                            $qty_heading = _l('estimate_table_quantity_heading');
                            if($estimate->show_quantity_as == 2){
                                $qty_heading = _l('estimate_table_hours_heading');
                            } else if($estimate->show_quantity_as == 3){
                                $qty_heading = _l('estimate_table_quantity_heading') .'/'._l('estimate_table_hours_heading');
                            }
                            ?>
                            <th><?php echo $qty_heading; ?></th>
                            <th><?php echo _l('estimate_table_rate_heading'); ?></th>
                            <?php if(get_option('show_tax_per_item') == 1){ ?>
                            <th><?php echo _l('estimate_table_tax_heading'); ?></th>
                            <?php } ?>
                            <th><?php echo _l('estimate_table_amount_heading'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($estimate)){
                            $_tax_tr = '';
                            $taxes = array();
                            $_calculated_taxes = array();
                            $i = 1;
                            foreach($estimate->items as $item){
                                $_item = '';
                                $_item .= '<tr>';
                                $_item .= '<td>' .$i. '</td>';
                                $_item .= '<td class="description"><span class="bold">'.$item['description'].'</span><br /><span class="text-muted">'.$item['long_description'].'</span></td>';
                                $_item .= '<td>'.floatVal($item['qty']).'</td>';
                                $_item .= '<td>'._format_number($item['rate']).'</td>';
                                if(get_option('show_tax_per_item') == 1){
                                    $_item .= '<td>';
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
                                        if(get_option('show_tax_per_item') == 1){
                                            $_item .= str_replace('|',' ',$tax['taxname']) .'%, ';
                                        }
                                    }
                                    if(get_option('show_tax_per_item') == 1){
                                    // Remove the last , and white space
                                        $_item = substr($_item, 0, -2);
                                    }
                                } else {
                                    if(get_option('show_tax_per_item') == 1){
                                        $_item .= '0%';
                                    }
                                }
                                if(get_option('show_tax_per_item') == 1){
                                    $_item .= '</td>';
                                }
                                $_item .= '<td class="amount">'._format_number(($item['qty'] * $item['rate'])).'</td>';
                                $_item .= '</tr>';
                                echo $_item;

                                $i++;
                            }

                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-6 col-md-offset-6">
            <table class="table text-right">
                <tbody>
                    <tr id="subtotal">
                        <td><span class="bold"><?php echo _l('estimate_subtotal'); ?></span>
                        </td>
                        <td class="subtotal">
                            <?php
                            if(isset($estimate)){
                                echo _format_number($estimate->subtotal,$estimate->symbol);
                            }
                            ?>
                        </td>
                    </tr>
                    <?php if($estimate->discount_percent != 0){ ?>
                    <tr>
                        <td>
                            <span class="bold"><?php echo _l('estimate_discount'); ?> (<?php echo $estimate->discount_percent; ?>%)</span>
                        </td>
                        <td class="discount">
                            <?php echo '-' . _format_number($estimate->discount_total); ?>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php
                    if(isset($estimate)){
                        foreach($taxes as $tax){
                            $total = array_sum($tax['total']);
                            if($estimate->discount_percent != 0 && $estimate->discount_type == 'before_tax'){
                                $total_tax_calculated = ($total * $estimate->discount_percent) / 100;
                                $total = ($total - $total_tax_calculated);
                            }
                            $_tax_name = explode('|',$tax['tax_name']);
                            echo '<tr class="tax-area"><td>'.$_tax_name[0].'('._format_number($tax['taxrate']).'%)</td><td>'._format_number($total,$estimate->symbol).'</td></tr>';
                        }
                    }
                    ?>
                    <?php if($estimate->adjustment != '0.00'){ ?>
                    <tr>
                        <td>
                            <span class="bold"><?php echo _l('estimate_adjustment'); ?></span>
                        </td>
                        <td class="adjustment">
                            <?php echo _format_number($estimate->adjustment); ?>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td><span class="bold"><?php echo _l('estimate_total'); ?></span>
                        </td>
                        <td class="total">
                            <?php
                            if(isset($estimate)){
                                echo format_money($estimate->total,$estimate->symbol);
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
        if(get_option('total_to_words_enabled') == 1){ ?>
        <div class="col-md-12 text-center">
           <p class="bold"><?php echo  _l('num_word').': '.$this->numberword->convert($estimate->total,$estimate->currency_name); ?></p>
       </div>
       <?php } ?>
       <?php if(!empty($estimate->clientnote)){ ?>
       <div class="col-md-12">
        <b><?php echo _l('estimate_note'); ?></b><br /><br /><?php echo $estimate->clientnote; ?>
    </div>
    <?php } ?>
    <?php if(!empty($estimate->terms)){ ?>
    <div class="col-md-12">
        <hr />
        <b><?php echo _l('terms_and_conditions'); ?></b><br /><br /><?php echo $estimate->terms; ?>
    </div>
    <?php } ?>
</div>
</div>
</div>
</div>
