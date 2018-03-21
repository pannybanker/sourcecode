<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/package.css" >
<div class="container">   
    <div class="row"> 
        <form class="form-horizontal" id="addtocartform" method="post" action="<?php echo base_url(); ?>frontend/step2"> 
            <section>          
                <div class="wizard">  
                    <div class="wizard-inner">  
                        <div class="connecting-line"></div>    
                        <ul class="nav nav-tabs" role="tablist">    
                            <li role="presentation" id="litab1" class="active litabs">  
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
                            <li role="presentation" id="litab4" class="disabled litabs">  
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete"> 
                                    <span class="round-tab">                                  
                                        <i class="glyphicon glyphicon-ok"></i>            
                                    </span>                         
                                </a>                     
                            </li>                  
                        </ul>          
                    </div>           
                    <div class="tab-content">   
                        <div class="tab-pane active" role="tabpanel" id="step1">      
                            <div class="container">                          
                                <div class="row">                     
                                    <h2 class="text-center">Subscription Packages</h2>    
                                    <?php 
                                        foreach ($pckg_list as $pckg) { 
                                        $metadetails = $this->frontend_model->get_package_meta($pckg['pckgtype_id']);
                                        if(count($metadetails)==5)
                                        {
                                            $value = "520px";
                                        }
                                        else
                                        {
                                            $value = "698px";
                                        }
                                    ?>      
                                        <div class="col-xs-12 col-md-4">            
                                            <div class="panel panel-primary" style="height: <?=$value?>;">       
                                                <?php if ($pckg['mark_popular'] == 1) { ?>
                                                    <div class="cnrflash">
                                                        <div class="cnrflash-inner">                          
                                                            <span class="cnrflash-label">MOST <br> POPULAR</span>
                                                        </div>                               
                                                    </div>                                  
                                                <?php } ?>                                  
                                                <div class="panel-heading" style="background:<?php echo $pckg['header_color']; ?>"> 
                                                    <h3 class="panel-title">  
                                                        <?php echo $pckg['pckgtype_name']; ?>   
                                                    </h3> 
                                                </div> 
                                                <div class="panel-body"> 
                                                    <div class="the-price">     
                                                        <h1> $<?php echo $pckg['pckgtype_price']; ?><span class="subscript">/mo</span></h1>     
                                                        <small><?php echo $pckg['pckgtype_tagline']; ?></small>            
                                                    </div>                                          
                                                    <table class="table">                           
                                                        <?php
                                                        $cnt = 1;
                                                        $count = 0;
                                                        foreach ($metadetails as $md) {
                                                            if ($cnt % 2 != 0) {
                                                                ?>                 
                                                                <tr  style="height: 60px;">                           
                                                                    <td>                         
                                                                        <?php echo $md['pckgmeta_metaval']; ?> 
                                                                    </td>                 
                                                                </tr>                
                                                            <?php } else { ?>            
                                                                <tr class="active" style="height: 60px;">     
                                                                    <td>                
                                                                        <?php echo $md['pckgmeta_metaval']; ?>    
                                                                    </td>                          
                                                                </tr>                           
                                                                <?php
                                                            } $cnt++; $count++;
                                                        }
                                                        if($pckg_max_count['total']!=$count)
                                                        {
                                                            $newcount = $pckg_max_count['total']-$count;
                                                            if($newcount<=2)
                                                            {
                                                            for ($i= 0; $i < $newcount; $i++) 
                                                            { 
                                                        ?>
                                                                <tr  style="height: 60px;">                           
                                                                    <td>                         
                                                                        &nbsp;
                                                                    </td>                 
                                                                </tr>  
                                                        <?php
                                                            }
                                                            }
                                                        }
                                                        ?>                                                       
                                                    </table>                                        
                                                </div>                                        
                                                <div class="panel-footer"> 
                                                    <?php if (!empty($_SESSION) && !empty($_SESSION['user'])) { ?>
                                                        <?php $packegedetails = $this->frontend_model->get_user_package_meta($pckg['pckgtype_id']); ?>
                                                        <?php if (!empty($packegedetails)) { ?>
                                                            <span>Package Purchased on <?php echo $packegedetails['pay_paydate']; ?></span>
                                                        <?php } else { ?>
                                                            <button type="submit" value="<?php echo $pckg['pckgtype_id']; ?>" name="addtocart" class="btn btn-danger">Add to Cart</button>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <a href="#" data-toggle="modal" data-target="#package-modal" class="btn btn-danger">Add to Cart</a>
                                                    <?php } ?>
                                                </div>                                      
                                            </div>                                 
                                        </div>                             
                                    <?php } ?>               
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