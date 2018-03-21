<div class="container">    
    <?php $this->load->view('users/topmenu'); ?>
    <div class="parent no-gutters">        
        <section class="col-xs-12 col-sm-12 col-md-1 "  style="width: 240px;">   
            <?php $this->load->view('users/leftmenu'); ?>           
        </section>     
        <section class="col-xs-12 col-sm-12 col-md-7 white-bg">
            <img src="<?php echo base_url(); ?>assets1/images/dash/portfolio_area.png" class="img-responsive">
			<br>
			<iframe width="400" height="300" src="https://www.youtube.com/embed/hS5CfP8n_js" frameborder="0" allowfullscreen style="float: left;"></iframe>
			<img src="<?php echo base_url(); ?>assets1/images/dash/images.jpg" class="img-responsive" style="float: left;width: 209px;height: 325px;">
        </section>   

        <section class="col-xs-12 col-sm-12 col-md-4">     
            <?php $this->load->view('users/rightmenu'); ?>       
        </section>    
    </div>   
</div>
</div>