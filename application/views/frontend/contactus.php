<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/package.css" >
<div class="container">   
    <div class="row"> 
       	<div class="container">
			<div class="col-md-6 col-md-offset-3">
			    <div class="form-area">  
			        <form role="form" name="contactfrm" id="contactfrm" method="post">
			        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
			        	<div class="alert alert-success hide" id="successmsg">
						  <strong>Thanks for contacting us, </strong> we will contact you soon. 
						</div>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="contact[name]" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="contact[email]" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="contact[mobile]" placeholder="Mobile Number" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" name="contact[message]" placeholder="Message" maxlength="140" rows="7"></textarea>                   
                    </div>
			            
			        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
			        </form>
			    </div>
			</div>
			</div>
    </div>
</div>
<script type="text/javascript">
    $("#contactfrm").submit(function (e) {
        e.preventDefault();
        var url = '<?php echo base_url(); ?>frontend/set_contact_data';
        $.ajax({
            type: "POST",
            url: url,
            data: $("#contactfrm").serialize(),
            success: function (data)
            {
                $('#successmsg').removeClass('hide').addClass('show');
            }
        });
        return false;
    });
</script>