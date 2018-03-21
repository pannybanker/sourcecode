<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Protection</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    My Protection
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#coverage" data-toggle="tab" aria-expanded="true">Life Coverage</a>
                        </li>
                        <li class=""><a href="#disability" data-toggle="tab" aria-expanded="false">Disability Insurance</a>
                        </li>
                        <li class=""><a href="#critical" data-toggle="tab" aria-expanded="false">Critical Illness Insurance</a>
                        </li>
                        <li class=""><a href="#longtermcare" data-toggle="tab" aria-expanded="false">Long- Term Care</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="coverage">
                            <CENTER><h4 class="page-header ole tltip" data-tooltip="Providing a safety net for life’s surprises can keep you from falling behind.  Add more fields if we have missed anything.">Life Coverage</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="coverage_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="coverage_frm" id="coverage_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-12">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Type of Policy</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Coverage($)</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Beneficiary</label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
										//print_r($life_coverage_policy_type);
                                            $lifecoveragepolicytype = explode(',', $life_coverage_policy_type);
                                            $lifecoverageamount = explode(',', $life_coverage_amount);
                                            $lifecoveragebenificiary = explode(',', $life_coverage_benificiary);
                                            foreach ($lifecoveragepolicytype as $key => $value) 
                                            {
                                        ?>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="life_coverage_policy_type[]"  value="<?php
                                                                if (!empty($value)) {
                                                                    echo $value;
                                                                }
                                                                ?>"  placeholder="Type of Policy">
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="life_coverage_amount[]" value="<?php
                                                                if (!empty($lifecoverageamount[$key])) {
                                                                    echo $lifecoverageamount[$key];
                                                                }
                                                                ?>" placeholder="Coverage($)">
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="life_coverage_benificiary[]" value="<?php
                                                                if (!empty($lifecoveragebenificiary[$key])) {
                                                                    echo $lifecoveragebenificiary[$key];
                                                                }
                                                                ?>" placeholder="Beneficiary">
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        ?>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div id="mplc">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="mplc_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Coverage</a>
                                        </div>
                                        <div class="col-lg-12">                                        
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                            <input type="hidden" name="base_url"  id="base_url" value="<?= base_url() ?>">
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
							
							
							
							
                            <!-- /.panel-body -->
                        </div>
                        <div class="tab-pane fade" id="disability">
                            <CENTER><h4 class="page-header ole tltip" data-tooltip="Providing a safety net for life’s surprises can keep you from falling behind.  Add more fields if we have missed anything.">Disability Insurance</h4></CENTER>
							
							
							
                            <div class="panel-body">
                                <div class="alert hide" id="disability_msg">
                                    <span></span>
                                </div>
								   <form method="post" name="coverage_frm" id="coverage_frm" action="#">
                                    <div class="row form">
                                        <div class="col-lg-12">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insured</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Coverage($)</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Target End Date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
									
                           $disabilityinsuranceinsured = explode(',', $disability_insurance_insured);
							$disabilityinsurancecoverage = explode(',', $disability_insurance_coverage);
                             $disabilityinsurancetargetenddate = explode(',', $disability_insurance_targetend_date);
                              foreach ($disabilityinsuranceinsured as $key => $value) 
                                            {
												
                                        ?>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="disability_insurance_insured[]"  value="<?php
                                                                if (!empty($value)) {
                                                                    echo $value;
                                                                }
                                                                ?>"  placeholder="Insured">
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="disability_insurance_coverage[]" value="<?php
                                                                if (!empty($disabilityinsurancecoverage[$key])) {
                                                                    echo $disabilityinsurancecoverage[$key];
                                                                }
                                                                ?>" placeholder="Coverage($)">
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="disability_insurance_targetend_date[]" value="<?php
                                                                if (!empty($disabilityinsurancetargetenddate[$key])) {
                                                                    echo $disabilityinsurancetargetenddate[$key];
                                                                }
                                                                ?>" placeholder="Target End Date">
                                                            <p class="help-block"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        ?>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div id="dis">
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="disability_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Coverage</a>
                                        </div>
                                        <div class="col-lg-12">                                        
                                            <br>
                                            <div class="col-lg-6">
                                                <input type="submit" onclick="savedisability();" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                            <input type="hidden" name="base_url"  id="base_url" value="<?= base_url() ?>">
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                                    </div>
                                    <!-- /.row (nested) -->
                               
                            </div>
                            <!-- /.panel-body -->
                        
                      
                        <div class="tab-pane fade" id="critical">
                            
							  <CENTER><h4 class="page-header ole tltip" data-tooltip="Providing a safety net for life’s surprises can keep you from falling behind.  Add more fields if we have missed anything.">Critical Illness Insurance</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="critical_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="critical_frm" id="critical_frm" action="#">
                                    <div class="row form">
									 <div class="col-lg-12">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insured</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Coverage($)</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Target End Date</label>
                                                </div>
                                            </div>
                                        </div>
										 <?php
									//print_r($critical_illness_targetend_date);
                           $criticalillnessinsured = explode(',', $critical_illness_insured);
							$criticalillnesscoverage = explode(',', $critical_illness_coverage);
                             $criticalillnesstargetenddate = explode(',', $critical_illness_targetend_date);
							// print_r($criticalillnesstargetenddate);
                              foreach ($criticalillnessinsured as $key => $value) 
                                            {
												
                                        ?>
									<div class="col-lg-12">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                             
                                                <input type="text" class="form-control" name="critical_illness_insured[]"  value="<?php
                                                                if (!empty($value)) {
                                                                    echo $value;
                                                                }
                                                                ?>"  placeholder="Insured">
                                                <p class="help-block"></p>
                                            </div>
											</div>
											  <div class="col-lg-3">
                                            <div class="form-group">
                                               
                                                <input type="text" class="form-control" name="critical_illness_coverage[]"  value="<?php if (!empty($criticalillnesscoverage[$key])) { echo $criticalillnesscoverage[$key]; }?>"  placeholder="Coverage($)">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
										 <div class="col-lg-3">
                                            <div class="form-group">
                                             
                                                <input type="text" class="form-control" name="critical_illness_targetend_date[]"  value="<?php
                                                    if (!empty($criticalillnesstargetenddate[$key])) {
                                                        echo $criticalillnesstargetenddate[$key];
                                                    }
                                                    ?>"  placeholder="Target End Date">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
										<div class="col-lg-3">
										</div>
										
										</div>
											<?php } ?>
										 <div id="crtkl"> </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="critical_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Coverage</a>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                      
                                        
                                        <div class="col-lg-12">
                                           <div class="col-lg-6">
                                                <input type="submit" onclick="savecritical();" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
											</div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                       
                        <div class="tab-pane fade" id="longtermcare">
                            
							<CENTER><h4 class="page-header ole tltip" data-tooltip="Providing a safety net for life’s surprises can keep you from falling behind.  Add more fields if we have missed anything.">Long- Term Care</h4></CENTER>
                            <div class="panel-body">
                                <div class="alert hide" id="longtermcare_msg">
                                    <span></span>
                                </div>
                                <form method="post" name="longtermcare_frm" id="longtermcare_frm" action="#">
                                    <div class="row form">
									   <div class="row form">
									 <div class="col-lg-12">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Insured</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Coverage($)</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Target End Date</label>
                                                </div>
                                            </div>
                                        </div>
										 <?php
									//print_r($longterm_care_coverage);
                           $longtermcareinsured = explode(',', $longterm_care_insured);
							$longtermcarecoverage = explode(',', $longterm_care_coverage);
                             $longtermcaretargetenddate = explode(',', $longterm_care_targetend_date);
                              foreach ($longtermcareinsured as $key => $value) 
                                            {
												
                                        ?>
									
									
									<div class="col-lg-12">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                               
                                                <input type="text" class="form-control" name="longterm_care_insured[]" value="<?php
                                                   if (!empty($value)) {
                                                                    echo $value;
                                                                }
                                                    ?>" placeholder="Insured">
                                                <p class="help-block"></p>
                                            </div>
                                            </div>
											 <div class="col-lg-3">
                                            <div class="form-group">
                                               
                                                <input type="text" class="form-control" name="longterm_care_coverage[]" value="<?php
                                                    if (!empty($longtermcarecoverage[$key])) {
                                                        echo $longtermcarecoverage[$key];
                                                    }
                                                    ?>"  placeholder="Coverage($)">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                               
                                                <input type="text" class="form-control" name="longterm_care_targetend_date[]"  value="<?php
                                                    if (!empty($longtermcaretargetenddate[$key])) {
                                                        echo $longtermcaretargetenddate[$key];
                                                    }
                                                    ?>" placeholder="Target End Date">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
										 <div class="col-lg-3"></div>
                                        </div>
											<?php } ?>
										 <div id="long"> </div>
                                        <div class="col-lg-12 text-right">
                                            <br>
                                            <a href="javascript:void(0);" class="long_add_button text-right" title="Add field" style="margin-right: 10px; margin-top: 10px;">Add Coverage</a>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="submit" onclick="savelongterm();" class="btn btn-primary btn-lg btn-block" value="Complete">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
						 </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->

<!-- /#page-wrapper -->
<script>
function savedisability()
			 {

        //stop submit the form, we will post it manually.
        event.preventDefault();
        var disability_insurance_insured = $('input[name^=disability_insurance_insured]').map(function(idx, elem) { return $(elem).val();}).get();
        var disability_insurance_coverage = $('input[name^=disability_insurance_coverage]').map(function(idx, elem) { return $(elem).val();}).get();
        var disability_insurance_targetend_date = $('input[name^=disability_insurance_targetend_date]').map(function(idx, elem) { return $(elem).val();}).get();
        var base_url = $("#base_url").val();
        var data = new FormData();
        data.append( 'disability_insurance_insured', disability_insurance_insured);
        data.append( 'disability_insurance_coverage', disability_insurance_coverage);
        data.append( 'disability_insurance_targetend_date', disability_insurance_targetend_date);

        // disabled the submit button
        $("#disability_frm").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: base_url+"users/save",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
                response = JSON.parse(data);
                if(response.response)
                {
                    $('#disability_msg').removeClass('hide').addClass('show');
                    $('#disability_msg').removeClass('alert-danger').addClass('alert-success');
                    $('#disability_msg span').text("disability "+response.msg);
                    $("#disability_frm").prop("disabled", false);
                }
                else
                {
                    $('#disability_msg').removeClass('hide').addClass('show');
                    $('#disability_msg').removeClass('alert-success').addClass('alert-danger');
                    $('#disability_msg span').text(response.msg);
                    $("#disability_frm").prop("disabled", false);
                }
            },
            error: function (e) {
                $('#disability_msg').removeClass('hide').addClass('show');
                $('#disability_msg').removeClass('alert-success').addClass('alert-danger');
                $('#disability_msg span').text(e.status+' '+e.statusText);
                $("#disability_frm").prop("disabled", false);

            }
        });

    }
	function savecritical()
			 {

        //stop submit the form, we will post it manually.
        event.preventDefault();
        var critical_illness_insured = $('input[name^=critical_illness_insured]').map(function(idx, elem) { return $(elem).val();}).get();
        var critical_illness_coverage = $('input[name^=critical_illness_coverage]').map(function(idx, elem) { return $(elem).val();}).get();
        var critical_illness_targetend_date = $('input[name^=critical_illness_targetend_date]').map(function(idx, elem) { return $(elem).val();}).get();
        var base_url = $("#base_url").val();
        var data = new FormData();
        data.append( 'critical_illness_insured', critical_illness_insured);
        data.append( 'critical_illness_coverage', critical_illness_coverage);
        data.append( 'critical_illness_targetend_date', critical_illness_targetend_date);

        // disabled the submit button
        $("#critical_frm").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: base_url+"users/save",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
                response = JSON.parse(data);
                if(response.response)
                {
                    $('#critical_msg').removeClass('hide').addClass('show');
                    $('#critical_msg').removeClass('alert-danger').addClass('alert-success');
                    $('#critical_msg span').text("critical "+response.msg);
                    $("#critical_frm").prop("disabled", false);
                }
                else
                {
                    $('#critical_msg').removeClass('hide').addClass('show');
                    $('#critical_msg').removeClass('alert-success').addClass('alert-danger');
                    $('#critical_msg span').text(response.msg);
                    $("#critical_frm").prop("disabled", false);
                }
            },
            error: function (e) {
                $('#critical_msg').removeClass('hide').addClass('show');
                $('#critical_msg').removeClass('alert-success').addClass('alert-danger');
                $('#critical_msg span').text(e.status+' '+e.statusText);
                $("#critical_frm").prop("disabled", false);

            }
        });

    }
	function savelongterm()
			 {

        //stop submit the form, we will post it manually.
        event.preventDefault();
        var longterm_care_insured = $('input[name^=longterm_care_insured]').map(function(idx, elem) { return $(elem).val();}).get();
        var longterm_care_coverage = $('input[name^=longterm_care_coverage]').map(function(idx, elem) { return $(elem).val();}).get();
        var longterm_care_targetend_date = $('input[name^=longterm_care_targetend_date]').map(function(idx, elem) { return $(elem).val();}).get();
        var base_url = $("#base_url").val();
        var data = new FormData();
        data.append( 'longterm_care_insured', longterm_care_insured);
        data.append( 'longterm_care_coverage', longterm_care_coverage);
        data.append( 'longterm_care_targetend_date', longterm_care_targetend_date);

        // disabled the submit button
        $("#longtermcare_frm").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: base_url+"users/save",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
                response = JSON.parse(data);
                if(response.response)
                {
                    $('#longtermcare_msg').removeClass('hide').addClass('show');
                    $('#longtermcare_msg').removeClass('alert-danger').addClass('alert-success');
                    $('#longtermcare_msg span').text("longtermcare "+response.msg);
                    $("#longtermcare_frm").prop("disabled", false);
                }
                else
                {
                    $('#longtermcare_msg').removeClass('hide').addClass('show');
                    $('#longtermcare_msg').removeClass('alert-success').addClass('alert-danger');
                    $('#longtermcare_msg span').text(response.msg);
                    $("#longtermcare_frm").prop("disabled", false);
                }
            },
            error: function (e) {
                $('#longtermcare_msg').removeClass('hide').addClass('show');
                $('#longtermcare_msg').removeClass('alert-success').addClass('alert-danger');
                $('#longtermcare_msg span').text(e.status+' '+e.statusText);
                $("#longtermcare_frm").prop("disabled", false);

            }
        });

    }
	
	</script>