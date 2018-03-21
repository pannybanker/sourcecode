<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/package.css" >
<div class="container">   
    <div class="row"> 
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>frontend/step3"> 
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
                            <li role="presentation" id="litab2" class="active litabs">    
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
                        <div class="tab-pane active" role="tabpanel" id="step2">                           
                            <h4 style="padding-left: 20px;">
                                &nbsp;&nbsp;You've selected Pennybanker <?php
                                echo '<span class="txtcolor" >' . $pckg_details['pckgtype_name'] . ' Package $' . $pckg_details['pckgtype_price'] . '/pm </span>';
                                echo '<input type="hidden" id="pamount" name="pamount" value="' . $pckg_details['pckgtype_price'] . '" />';
                                echo '<input type="hidden" name="pname" value="' . $pckg_details['pckgtype_name'] . '" />';
                                echo '<input type="hidden" name="pid" value="' . $pckg_details['pckgtype_id'] . '" />';
                                $pckg = $pckg_details['pckgtype_name'];
                                $pckgamt = $pckg_details['pckgtype_price'];
                                ?>
                            </h4>         

                            <div class="row divhide" id="divTermDrop" style="padding:14px;">       
                                <div class="col-md-7" style="border-top:0px #80D651 solid; background:#fff;margin-left:20px; padding:5px;">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr style="background:#d43f3a;color:#fff;">
                                                
                                                <div class="panel-heading" style="background:#d43f3a;color:#fff;">
                                                    <th style="font-size: 15px; font-weight: 15px;">Package</th>                       
                                                    <th class="text-center" style="font-size: 15px; font-weight: 15px;">Term</th>                          
                                                    <th style="font-size: 15px; font-weight: 15px;">Unit Price</th>                    
                                                    <th style="font-size: 15px; font-weight: 15px;">Sub-Total</th> 
                                                </div>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="padding-top: 22px;">Pennybanker <?php echo $pckg; ?> package</td>
                                                <td>
                                                    <select name="packege_period" id="packege_period" onchange="setTotalAmt(this.value)" class="form-control" id="ddlTerm">  
                                                        <option value="3" >3 Months</option>                      
                                                        <option value="9">9 Months</option>                      
                                                        <option value="12" selected="selected">12 Months</option>      
                                                    </select>  
                                                </td>
                                                <td style="padding-top: 22px;">
                                                    <span class="notice-warning">
                                                        <strong>
                                                            $<?php echo $pckg_details['pckgtype_price']; ?>/pm
                                                        </strong>
                                                    </span>
                                                </td>
                                                <td style="padding-top: 22px;">
                                                    <span class="notice-warning">
                                                        <strong class="amtTot">
                                                            $<?php echo round(12 * $pckg_details['pckgtype_price']);
                                                                ?>
                                                        </strong>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php
                                                if($pckg!='Basic')
                                                {
                                            ?>
                                                    <tr>
                                                        <td style="padding-top: 22px;">
                                                            Business Plus Package
                                                        </td>
                                                        <td>
                                                           <td style="padding-top: 22px;">
                                                                <span class="notice-warning">
                                                                    <strong>
                                                                        $50
                                                                    </strong>
                                                                    <input type="hidden" name="addon_business_plus" id="addon_business_plus" value="">
                                                                </span>
                                                            </td> 
                                                        </td>
                                                        <td colspan="2">
                                                            <span class="btn btn-default" onclick="addon_business(50)" id="addon_btn">Add</span>
                                                            <span class="btn btn-default hide" id="addon_remove_btn" onclick="remove_business(50)">Remove</span>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>                         
                                </div>                          
                                <div class="col-md-4 float-right" style="background:#fff;float:right;margin-right:20px;min-height:236px;">
                                <div class="panel panel-default">
                                        <div class="panel-heading" style="background:#d43f3a;color:#fff;">
                                            <h4 class="text-center"><strong>Order summary</strong></h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-bottom: 25px; line-height: 2;">Pennybanker <?php echo $pckg; ?> package</td>
                                                            <td class="text-right txtcolor"  style="padding-bottom: 25px; line-height: 2;">$<?php echo $pckg_details['pckgtype_price']; ?>/pm
                                                            </td>
                                                        </tr>
                                                        <tr id="addon_detail">
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-top: 25px;">Total</td>
                                                            <td class="text-right" style="padding-top: 25px;">
                                                                <span class="notice-warning">
                                                                    <strong class="amtTot">
                                                                       $<?php echo round(12 * $pckg_details['pckgtype_price']);?>  
                                                                    </strong>
                                                                   
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <ul class="list-inline pull-right" style="margin-top:10px;">    
                                                                    <li><a href="<?php echo base_url(); ?>frontend" class="btn btn-default">Previous</a></li>
                                                                    <li><button type="submit" class="btn btn-success" >Proceed to Purchase</button></li>      
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>                    
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