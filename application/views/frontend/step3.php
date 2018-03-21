<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/package.css" >
<style>
    .adddress .form-group {
        float: left;
        padding-left: 20px;
        padding-right: 20px;
        width: 50%;
    }
    .adddress .form-group select {margin:0px;}
</style>
<div class="container">   
    <div class="row"> 
        <form class="form-horizontal" id="paymentform" method="post" action="<?php echo base_url(); ?>frontend/step4"> 
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
                            <li role="presentation" id="litab3" class="active litabs">           
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
                        <div class="tab-pane active" role="tabpanel" id="step3">             
                            <div class="row divphide">                    
                                <div class="col-md-12">
                                    <div class="col-md-7 adddress">    
                                        <?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
                                            <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
                                        <?php } ?>
                                        <fieldset>                          
                                            <!-- Form Name -->              
                                            <div class="panel panel-default credit-card-box">      
                                                <div class="panel-heading col-md-12" >           
                                                    <div class="row display-tr" >              
                                                        <h3 class="panel-title display-td" >Address Details</h3>                                          
                                                    </div>                                      
                                                </div>  
                                            </div>
                                            <!-- Text input-->                           
                                            <div class="form-group">                     
                                                <label for="textinput">First Name</label>   
                                                <input type="text" placeholder="First Name" name="user[firstname]" class="form-control" required="required" value="<?php
                                                if (!empty($firstname)) {
                                                    echo $firstname;
                                                }
                                                ?>">                     
                                                <input type="hidden" class="form-control" required="required" data-stripe="name" value="<?php echo $_SESSION['user']['user_name']; ?>">                     
                                            </div>                                    
                                            <!-- Text input-->                       
                                            <div class="form-group">                 
                                                <label  for="textinput">Last Name</label>   
                                                <input type="text" placeholder="Last Name" name="user[lastname]" class="form-control" required="required" value="<?php
                                                if (!empty($lastname)) {
                                                    echo $lastname;
                                                }
                                                ?>">  
                                            </div>                                       
                                            <div class="form-group">                     
                                                <label  for="textinput">Country/Region</label>   
                                                <select id="ddlcountry" name="user[ddlcountry]" class="form-control" data-stripe="address_country" required="required"> 
                                                    <option>--Please Select Country--</option>   
                                                    <?php foreach ($countrylist as $cntlist) { ?>                              
                                                        <option <?php if (!empty($ddlcountry) && $ddlcountry == $cntlist['countryname']) { ?> selected <?php } ?> value="<?php echo $cntlist['countryname']; ?>>"><?php echo $cntlist['countryname']; ?></option>
                                                    <?php } ?>                                          
                                                </select>    
                                            </div>            
                                            <div class="form-group"> 
                                                <label for="textinput">Address 1</label> 
                                                <input type="text" name="user[address]" placeholder="Address Line 1" data-stripe="address_line1"  class="form-control" required="required" value="<?php
                                                if (!empty($address)) {
                                                    echo $address;
                                                }
                                                ?>">     
                                            </div>                              
                                            <!-- Text input-->                  
                                            <div class="form-group">               
                                                <label  for="textinput">Address 2 (Optional)</label>   
                                                <input type="text" name="user[address2]" placeholder="Address Line 2" data-stripe="address_line2"   class="form-control" value="<?php
                                                if (!empty($address2)) {
                                                    echo $address2;
                                                }
                                                ?>">      
                                            </div>                                    
                                            <!-- Text input-->                     
                                            <div class="form-group">                 
                                                <label for="textinput">Zip Code:</label> 
                                                <input type="text" name="user[zipcode]"  placeholder="Please enter valid zipcode"    maxlength="6" class="form-control" required="required" value="<?php
                                                if (!empty($zipcode)) {
                                                    echo $zipcode;
                                                }
                                                ?>">      
                                            </div>                                     
                                            <!-- Text input-->                       

                                            <div class="form-group">            
                                                <label  for="textinput">City</label> 
                                                <input type="text" name="user[city]" required="required" placeholder="City" data-stripe="address_city" class="form-control"  value="<?php
                                                if (!empty($city)) {
                                                    echo $city;
                                                }
                                                ?>">   
                                            </div>                             

                                            <div class="form-group">       
                                                <label  for="textinput">State</label>      
                                                <input type="text" name="user[state]" required="required"  placeholder="State" data-stripe="address_state" class="form-control" value="<?php
                                                if (!empty($state)) {
                                                    echo $state;
                                                }
                                                ?>">    
                                            </div>                                      

                                            <!-- Text input-->                         
                                            <div class="form-group">                    
                                                <label  for="textinput">Phone</label>     
                                                <input type="text" name="user[phone]" required="required" placeholder="Phone" maxlength="10" class="form-control" value="<?php
                                                if (!empty($phone)) {
                                                    echo $phone;
                                                }
                                                ?>">   
                                            </div>   
                                        </fieldset>         
                                    </div>                            



                                    <div class="col-md-5">  
                                        <!-- CREDIT CARD FORM STARTS HERE -->            
                                        <div class="panel panel-default credit-card-box">      
                                            <div class="panel-heading col-md-12" >           
                                                <div class="row display-tr" >              
                                                    <h3 class="panel-title display-td" >Payment Information</h3>    
                                                    <div class="display-td" >                         
                                                        <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">      
                                                    </div>                                          
                                                </div>                                      
                                            </div>                                  
                                            <div class="panel-body" style="padding:10px;"> 

                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                <label for="number" style="line-height: 2;">Card Number</label>
                                                                <div class="input-group">
                                                                    <input type="tel" class="form-control" placeholder="Valid Card Number" autocomplete="cc-number"  data-stripe="number" name="number" required autofocus  />
                                                                    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-xs-7 col-md-7">
                                                            <div class="form-group">
                                                                <label for="cardExpiry"><span class="hidden-xs">Expiration</span><span class="visible-xs-inline">EXP</span> Date</label>
                                                                <div class="col-xs-6 col-md-6">
                                                                    <select class="form-control" data-stripe="exp_month" name="exp_month" style="margin-left: -11px;">
                                                                    <?php
                                                                        for ($i=1; $i <=12 ; $i++) {  
                                                                    ?>
                                                                        <?php if($i<10){ ?><option value="<?php echo '0'.$i; ?>"><?php echo '0'.$i; ?></option><?php }else{ ?> <option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php } ?>
                                                                    <?php
                                                                        }
                                                                    ?>        
                                                                    </select>
                                                                </div>
                                                                <div  class="col-xs-6 col-md-6">
                                                                    <?php
                                                                        $curr_year = date('Y');
                                                                    ?>
                                                                    <select class="form-control" data-stripe="exp_year" name="exp_year" style="margin-left: -10px;" >
                                                                        <?php
                                                                            for ($i=0; $i <=20 ; $i++) { 
                                                                        ?>
                                                                            <option value="<?php echo $curr_year+$i; ?>"><?php echo $curr_year+$i; ?></option>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-5 col-md-5 pull-right">
                                                            <div class="form-group">
                                                            <label for="cvc" >Cvv Code</label>
                                                            <input type="tel" class="form-control" data-stripe="cvc" name="cvc" placeholder="CVC" autocomplete="cc-csc" required style="margin-top: 12px;" 
                                                            />
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                <label for="address_zip" style="line-height: 2;">Billing Zip</label>
                                                                <input type="text" class="form-control" data-stripe="address_zip" name="address_zip" placeholder="Billing Zip"  />
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        
                                                </div>                 
                                            </div>                           
                                        </div>  
                                        <div class="col-md-12 float-right" style="background:#fff;float:right;min-height:236px;">
                                            <div class="panel panel-default">
                                                    <div class="panel-heading" style="background:#d43f3a;color:#fff;">
                                                        <h4 class="text-center"><strong>Order summary</strong></h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-condensed">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="padding-bottom: 25px; line-height: 2;">
                                                                            <?php
                                        $frate = ($_POST['pamount'] * $_POST['packege_period'])+$_POST['addon_business_plus'];
                                        echo '<input type="hidden" id="pamount" name="pamount" value="' . $frate . '" />';
                                        echo '<input type="hidden" name="pname" value="' . $pckg_details['pckgtype_name'] . '" />';
                                        echo '<input type="hidden" name="pid" value="' . $pckg_details['pckgtype_id'] . '" />';
                                        echo '<input type="hidden" name="packege_period" value="' . $_POST['packege_period'] . '" />';
                                        if(!empty($_POST['addon_business_plus']))
                                        {
                                           echo '<input type="hidden" name="addon_business_plus" value="1" />'; 
                                        }
                                        else
                                        {
                                            echo '<input type="hidden" name="addon_business_plus" value="0" />';
                                        }
                                        $pckg = $pckg_details['pckgtype_name'];
                                        $pckgamt = $_POST['pamount'];
                                        ?><span>Pennybanker <?php echo $_POST['pname']; ?> package</span>   
                                                                        <span>Pennybanker Period <?php echo $_POST['packege_period']; ?> Month</span>
                                                                        </td>
                                                                        <td class="text-right txtcolor"  style="padding-bottom: 25px; line-height: 2;">$<?php echo $_POST['pamount'] * $_POST['packege_period']; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                    if(!empty($_POST['addon_business_plus']))
                                                                    {
                                                                    ?>
                                                                    <tr id="addon_detail">
                                                                        <td style="padding-bottom: 25px; line-height: 2;">Business Plus</td><td class="text-right txtcolor"  style="padding-bottom: 25px; line-height: 2;">$<?=$_POST['addon_business_plus']?></td>
                                                                    </tr>
                                                                    <?php
                                                                        }
                                                                    ?>
                                                                    <tr>
                                                                        <td style="padding-top: 25px;">Total</td>
                                                                        <td class="text-right" style="padding-top: 25px;">
                                                                            <span class="notice-warning">
                                                                                <strong class="amtTot">
                                                                                   $<?php echo $frate; ?>  
                                                                                </strong>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <div id="message"></div> 
                                                                            <ul class="list-inline pull-right" style="margin-top:30px;">    
                                                                                <li><a href="<?php echo base_url(); ?>frontend" class="btn btn-default">Previous</a></li>
                                                                                <li id="subscrptionbutton"><button type="submit" class="btn btn-success" >Proceed to Purchase</button></li>      
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
                            </div>                    
                        </div>
                        <div class="clearfix"></div>
                    </div>                
                </div>     
            </section>  
        </form>
    </div>
</div>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_amWTX6IDTziR1O4oZpYE7i5O');
    $(function () {
        var $form = $('#paymentform');
        $form.submit(function (event) {
            // Disable the submit button to prevent repeated clicks:
            $form.find('.submit').prop('disabled', true);
            $form.find('.submit').val('Please wait...');
            $('#subscrptionbutton').html('<button disabled="disabled" type="button" class="btn btn-success" >Please Wait... Payment in process</button>');

            // Request a token from Stripe:
            Stripe.card.createToken($form, stripeResponseHandler);
            // Prevent the form from being submitted:
            return false;
        });
    });
    function stripeResponseHandler(status, response) {

        if (response.error) {
            $('#subscrptionbutton').html('<button type="submit" class="btn btn-success" >Proceed to Purchase</button>');
            $('#message').html('<div class="alert alert-warning fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Warning!</strong> ' + response.error.message + '</div>')
        } else {
            var data = $('#paymentform').serializeArray();
            data.push({name: 'access_token', value: response.id});
            $.ajax({
                url: '<?php echo base_url('frontend/process'); ?>',
                data: data,
                type: 'POST',
                dataType: 'JSON',
                success: function (response) {
                    if (response.success) {
                        window.location.href = "<?php echo base_url('frontend/success'); ?>";
                    } else {
                        $('#subscrptionbutton').html('<button type="submit" class="btn btn-success" >Proceed to Purchase</button>');
                        $('#message').html('<div class="alert alert-warning fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Warning!</strong> ' + response.error + '</div>')
                    }
                },
                error: function (error) {
                    $('#subscrptionbutton').html('<button type="submit" class="btn btn-success" >Proceed to Purchase</button>');
                    $('#message').html('<div class="alert alert-warning fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Warning!</strong> ' + error.error + '</div>')
                }
            });
        }
    }
</script>