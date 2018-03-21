<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/package.css" >
<div class="container">   
    <div class="row"> 
        <form class="form-horizontal" id="billingform" method="post"> 
            <section>          
                <div class="wizard">  
                    <div class="wizard-inner">  
                        <div class="connecting-line"></div>    
                        <ul class="nav nav-tabs" role="tablist">    
                            <li role="presentation" id="litab1" class="disabled litabs">  
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1"> 
                                    <span class="round-tab">                               
                                        <i class="glyphicon glyphicon-briefcase"></i>        
                                    </span>                         
                                </a>                  
                            </li>                    
                            <li role="presentation" id="litab2" class="disabled litabs">    
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">   
                                    <span class="round-tab">                                  
                                        <i class="glyphicon glyphicon-usd"></i>              
                                    </span>            
                                </a>                  
                            </li>                    
                            <li role="presentation" id="litab3" class="disabled litabs">           
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">       
                                    <span class="round-tab">                                
                                        <i class="glyphicon glyphicon-envelope"></i>        
                                    </span>                            
                                </a>                   
                            </li>                      
                            <li role="presentation" id="litab4" class="active litabs">  
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete"> 
                                    <span class="round-tab">                                  
                                        <i class="glyphicon glyphicon-ok"></i>            
                                    </span>                         
                                </a>                     
                            </li>                  
                        </ul>          
                    </div>           
                    <div class="tab-content">     
                        <div class="container">
                                <div class="row text-center">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <br><br> <h2 style="color:#0fad00">Success</h2>
                                        <br>
                                        <p style="font-size:20px;color:#5C5C5C;">You have successfully completed all steps.Your Subscription completed.</p>
                                        <br>
                                        <a href="<?php echo base_url();?>users/newdash" class="btn btn-success">Click Here to Continue..</a>
                                        <br><br>
                                    </div>
                                    
                                </div>
                        </div>                
                        <div class="clearfix"></div>
                    </div>                
                </div>     
            </section>  
        </form>
    </div>
</div>