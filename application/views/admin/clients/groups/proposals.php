<?php if(isset($client)){ ?>
<?php if(has_permission('manageSales')){ ?>
<?php
$table_data = array(
   _l('proposal_subject'),
   _l('proposal_total'),
   _l('proposal_open_till'),
   _l('proposal_date_created'),
   _l('proposal_status'));
$custom_fields = get_custom_fields('proposal',array('show_on_table'=>1));
foreach($custom_fields as $field){
   array_push($table_data,$field['name']);
}
render_datatable($table_data,'proposals-client-profile');
?>
<?php } ?>
<?php } ?>
