<?php if(!isset($discussion)){ ?>
<a href="#" onclick="new_discussion();return false;" class="btn btn-info"><?php echo _l('new_project_discussion'); ?></a>
<?php
$this->load->view('admin/projects/project_discussion');
render_datatable(array(
 _l('project_discussion_subject'),
 _l('project_discussion_last_activity'),
 _l('project_discussion_total_comments'),
 _l('project_discussion_show_to_customer'),
 _l('options'),
 ),'project-discussions'); ?>
 <?php } else { ?>
 <h3 class="bold no-margin"><?php echo $discussion->subject; ?></h3>
 <p class="no-margin text-muted"><?php echo _l('project_discussion_posted_on',_d($discussion->datecreated)); ?></p>
 <p class="text-muted">
  <?php if($discussion->staff_id == 0){
    echo _l('project_discussion_posted_by',get_client_full_name($discussion->client_id));
  } else {
   echo _l('project_discussion_posted_by',get_staff_full_name($discussion->staff_id));
 }
 ?>
</p>
<p><?php echo $discussion->description; ?></p>
<hr />
<div id="discussion-comments"></div>
<?php } ?>
