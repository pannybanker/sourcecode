<?php if(!empty($code)) { ?>
<h1>Please wait contact loading......</h1>
  <?php if ($this->router->fetch_class() == 'mycon' && $this->router->fetch_method() == 'country' && !empty($code)) { ?>
            <meta http-equiv="refresh" content="0;URL='<?php echo base_url();?>mycon/world'" /> 
        <?php } ?>
<?php } else { ?>
<h1>Invalid Request...</h1>
<?php } ?>
