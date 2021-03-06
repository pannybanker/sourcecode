  <?php if(isset($client)){ ?>
  <?php echo form_open_multipart(admin_url('clients/upload_attachment/'.$client->userid),array('class'=>'dropzone','id'=>'client-attachments-upload')); ?>
  <input type="file" name="file" multiple />
  <?php echo form_close(); ?>
  <div class="attachments">
      <?php $no_attachments = true; ?>
      <div class="table-responsive mtop25">
        <table class="table dt-table table-customer-files">
            <thead>
                <tr>
                    <th><?php echo _l('customer_attachments_file'); ?></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($attachments as $type => $attachment){
                if($type == 'invoices'){
                    if(!has_permission('manageSales')){continue;}
                    $url = site_url() .'download/file/invoice_attachment/';
                    $upload_path = INVOICE_ATTACHMENTS_FOLDER;
                    $key_indicator = 'invoiceid';
                } else if($type == 'contracts'){
                    if(!has_permission('manageContracts')){continue;}
                    $url = site_url() .'download/file/contract/';
                    $key_indicator = 'contractid';
                    $upload_path = CONTRACTS_UPLOADS_FOLDER;
                } else if($type == 'leads'){
                    $url = site_url() .'download/file/lead_attachment/';
                    $upload_path = LEAD_ATTACHMENTS_FOLDER;
                    $key_indicator = 'leadid';
                } else if($type == 'tasks'){
                    $url = site_url() .'download/file/taskattachment/';
                    $key_indicator = 'taskid';
                    $upload_path = TASKS_ATTACHMENTS_FOLDER;
                } else if($type == 'tickets'){
                    $url = site_url() .'download/file/ticket/';
                    $upload_path = TICKET_ATTACHMENTS_FOLDER;
                    $key_indicator = 'ticketid';
                } else if($type == 'client'){
                    $url = site_url() .'download/file/client/';
                    $upload_path = CLIENT_ATTACHMENTS_FOLDER;
                    $key_indicator = 'clientid';
                }
                ?>
                <?php foreach($attachment as $_att){
                    $no_attachments = false;
                    ?>
                    <tr>
                     <td>
                        <i class="<?php echo get_mime_class($_att['filetype']); ?>"></i>
                        <a data-toggle="tooltip" data-title="<?php echo _l('customer_file_from',ucfirst($type)); ?>" href="<?php echo $url . $_att['id']; ?>"><?php echo $_att['file_name']; ?></a>
                        <br />
                        <small class="text-muted"> <?php echo $_att['filetype']; ?></small>
                    </td>
                    <td>
                      <?php $path = $upload_path . $_att[$key_indicator] . '/' . $_att['file_name'];
                      if(is_image($path)){
                        $base64 = base64_encode(file_get_contents($path));
                        $src = 'data: '.get_mime_by_extension($_att['file_name']).';base64,'.$base64;
                        ?>
                        <button type="button" class="btn btn-info btn-icon" data-placement="bottom" data-html="true" data-toggle="popover" data-content='<img src="<?php echo $src; ?>" class="img img-responsive mbot20">' data-trigger="focus"><i class="fa fa-eye"></i></button>
                        <?php } ?>
                        <button type="button" data-toggle="modal" data-return-url="<?php echo admin_url('clients/client/'.$client->userid); ?>" data-file-name="<?php echo $_att['file_name']; ?>" data-filetype="<?php echo $_att['filetype']; ?>" data-path="<?php echo $path; ?>" data-target="#send_file" class="btn btn-info btn-icon"><i class="fa fa-envelope"></i></button>
                        <?php if($type == 'client'){ ?>
                        <a href="<?php echo admin_url('clients/delete_attachment/'.$_att['id']); ?>" class="btn btn-danger btn-icon _delete"><i class="fa fa-remove"></i></a>
                        <?php } ?>
                    </td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script>
        initDataTableOffline('.table-customer-files');
    </script>
</div>
<?php
include_once(APPPATH . 'views/admin/clients/modals/send_file_modal.php');
} ?>
