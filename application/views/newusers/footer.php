<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>

<?php $tde = $personal_loans+$education_loans+$business_loans+$consolidation_loans+$investment_loan+$car_loans;?>
<?php $cc =  $mastercard+$visa+$american_express+$retail;  ?>
<?php $tlc = $equity_secured+$unsecured; ?>
<?php $tme = $personal_resisdence+$recreation_property+$investment_property; ?>

<?php $secure = $tde+$cc+$equity_secured+$tme; ?>
<?php $total_secure = $total_secure; ?>
<?php $total_unsecure = $total_unsecure; ?>
<!-- jQuery -->
    <script src="<?= base_url() ?>assets/newuser/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>assets/newuser/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url() ?>assets/newuser/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?= base_url() ?>assets/newuser/vendor/raphael/raphael.min.js"></script>
    <script src="<?= base_url() ?>assets/newuser/vendor/morrisjs/morris.min.js"></script>
    <script src="<?= base_url() ?>assets/newuser/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url() ?>assets/newuser/dist/js/sb-admin-2.js"></script>

    <!-- Validation JavaScript -->
    <script src="<?= base_url() ?>assets/newuser/js/form-validation.min.js"></script>

    <!-- Range Slider JavaScript -->
    <script src="<?= base_url() ?>assets/newuser/js/range-slider.js"></script>

    <!-- Datepicker jquery file -->
    <script src="<?= base_url() ?>assets/newuser/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/newuser/dist/js/jquery.darktooltip.js"></script>

    <!-- Theme JS files -->
    <script type="text/javascript" src="<?=base_url()?>assets/newuser/js/uploaders/purify.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/newuser/js/uploaders/sortable.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/newuser/js/uploaders/fileinput.min.js"></script>
    
    <script type="text/javascript" src="<?=base_url()?>assets/newuser/js/uploaders/uploader_bootstrap.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/newuser/js/uploaders/formula_calculation.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    /* Load google charts*/
    google.charts.load('current', {'packages':['corechart']});
   /*  google.charts.setOnLoadCallback(drawChart); */
    
  
  
  
  
    /* Draw the chart and set the chart values*/
    function drawChart() {
		
      var data = google.visualization.arrayToDataTable([
      ['Task', 'Income Analysis'],
      ['Recurring Income', <?php echo $recurringincome; ?>],
      ['Variable Income', <?php echo $variableincome; ?>],
      ['Cost Of Income', <?php echo $costofincome; ?>]
    ]);
    var data1 = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Home Expenses', <?php echo $homeexpense; ?>],
      ['Transportation Expenses', <?php echo $transpotationexpense; ?>],
      ['Personal Expenses', <?php echo $personalexpenses; ?>],
      ['Health & Insurance', <?php echo $helthexpenses; ?>],
      ['Debts Payments', <?php echo $debtexpenses; ?>]
    ]);

	/* var data2 = google.visualization.arrayToDataTable([
      ['Task', 'Debt Analysis'],
      ['Secure', <?php echo $secure; ?>],
      ['Unsecure', <?php echo $unsecured; ?>],
      
    ]); */
	
      // Optional; add a title and set the width and height of the chart
      var options = {'title':'Income Analysis', 'width':550, 'height':400, 'pieSliceText': 'value', colors: ['#5b9bd5', '#ed7d31', '#a5a5a5']};

      var options1 = {'title':'Expenses Analysis', 'width':550, 'height':400, 'pieSliceText': 'value', colors: ['#2f75b5', '#ed7d31', '#a5a5a5', '#ffc000', '#8da8d9']};
      var options2 = {'title':'Debt Analysis', 'width':550, 'height':400, 'pieSliceText': 'value', colors: ['#5b9bd5', '#ed7d31']};
    
	  // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
      var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
	   
      chart1.draw(data1, options1);
	  
	  /* var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
	  chart2.draw(data2, options2); */
	 
    }
	
	
	
	
	
	
	
    </script>
    <!-- /theme JS files -->
	
	
	
	<script>
function check()
{
	/* alert('ddaf');
	var e = document.getElementById("mwmortage_secure_typefield");
var strUser = e.options[e.selectedIndex].value;
	
	alert(strUser);
	 */
	

}
</script>
    <script>
        $(document).ready(function(){
            var date_input=$('input[name="about_dob"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'dd/mm/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
        $( document ).ready( function(){
            $( "#dependents" ).change(function (e) {
                
                var value = $("#dependents").val();
                var max_fields      = 10; //maximum input boxes allowed
                var wrapper         = $(".input_fields_dependents"); //Fields wrapper
                
                var x = 1; //initlal text box count
                e.preventDefault();
                for(var i=1;i<=value;i++)
                {
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div class="form-group col-lg-12"><div class="col-lg-2"><input type="text" name="name_depedent[]" class="form-control"/></div><div class="col-lg-2"><input type="text" name="age_depedent[]" class="form-control"/></div><div class="col-lg-2"><input type="text" name="relationship_depedent[]" class="form-control"/></div><div class="col-lg-2"><input type="text" name="residency_depedent[]" class="form-control"/></div><div class="col-lg-2"><input type="text" name="citizenship_depedent[]" class="form-control"/></div><div class="col-lg-2"><p class="fa fa-times-circle-o fa-2 remove_field"></p></div><br></div>'); //add input box
                    }
                }
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
                })
            });
        });
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwpa_add_button'); //Add button selector
            var wrapper = $('#mwpa'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwpa_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-6"><input type="text" class="form-control" name="mwpa_current_value[]" value="" placeholder="Current Value"></div><div class="col-lg-6"><input type="text" class="form-control" name="mwpa_cost[]" value="" placeholder="Cost"></div><p class="help-block"></p></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="margin-left: 450px;"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwmortage_add_button'); //Add button selector
            var wrapper = $('#mwmortage'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="col-lg-12"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwmortage_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-12"><input type="text" class="form-control" name="mwmortage_current_value[]" value="" placeholder="Current Value"></div><div class="col-lg-12"><select  class="form-control" name="mwmortage_secure_type[]" ><option value="secure">Secure</option><option value="insecure">Insecure</option></select></div><p class="help-block"></p></div></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="float:right"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwloc_add_button'); //Add button selector
            var wrapper = $('#mwloc'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="col-lg-12"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwloc_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-12"><input type="text" class="form-control" name="mwloc_current_value[]" value="" placeholder="Value"></div><div class="col-lg-12"><select  class="form-control" name="mwia_secure_type[]" ><option value="secure">Secure</option><option value="insecure">Insecure</option></select></div><p class="help-block"></p></div></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="float:right"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwia_add_button'); //Add button selector
            var wrapper = $('#mwia'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwia_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-12"><input type="text" class="form-control" name="mwia_current_value[]" value="" placeholder="Value"></div><p class="help-block"></p></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="margin-left: 450px;"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
        
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwlia_add_button'); //Add button selector
            var wrapper = $('#mwlia'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="col-lg-12"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwlia_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-12"><input type="text" class="form-control" name="mwlia_current_value[]" value="" placeholder="Value"></div><div class="col-lg-12"><select  class="form-control" name="mwlia_secure_type[]" ><option value="secure">Secure</option><option value="insecure">Insecure</option></select></div><p class="help-block"></p></div></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="float:right"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwloan_add_button'); //Add button selector
            var wrapper = $('#mwloan'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="col-lg-12"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwloan_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-12"><input type="text" class="form-control" name="mwloan_current_value[]" value="" placeholder="Value"></div><div class="col-lg-12"><select  class="form-control" name="mwloan_secure_type[]" ><option value="secure">Secure</option><option value="insecure">Insecure</option></select></div><p class="help-block"></p></div></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="float:right"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwrexpenses_add_button'); //Add button selector
            var wrapper = $('#mwrexpenses'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwrexpenses_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-12"><input type="text" class="form-control" name="mwrexpenses_current_value[]" value="" placeholder="Value"></div><p class="help-block"></p></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="margin-left: 450px;"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwtexpenses_add_button'); //Add button selector
            var wrapper = $('#mwtexpenses'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwtexpenses_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-12"><input type="text" class="form-control" name="mwtexpenses_current_value[]" value="" placeholder="Value"></div><p class="help-block"></p></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="margin-left: 450px;"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwpexpenses_add_button'); //Add button selector
            var wrapper = $('#mwpexpenses'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwpexpenses_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-12"><input type="text" class="form-control" name="mwpexpenses_current_value[]" value="" placeholder="Value"></div><p class="help-block"></p></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="margin-left: 450px;"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwhiexpenses_add_button'); //Add button selector
            var wrapper = $('#mwhiexpenses'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwhiexpenses_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-12"><input type="text" class="form-control" name="mwhiexpenses_current_value[]" value="" placeholder="Value"></div><p class="help-block"></p></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="margin-left: 450px;"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mwdexpenses_add_button'); //Add button selector
            var wrapper = $('#mwdexpenses'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-6"><div class="form-group"><br><div class="col-lg-12"><center><label><input type="text" class="form-control" name="mwdexpenses_field[]"  value="" placeholder="Field Name"></label></center></div><div class="col-lg-12"><input type="text" class="form-control" name="mwdexpenses_current_value[]" value="" placeholder="Value"></div><p class="help-block"></p></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="margin-left: 450px;"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.mplc_add_button'); //Add button selector
            var wrapper = $('#mplc'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-12"><div class="col-lg-3"><div class="form-group"><input type="text" class="form-control" name="life_coverage_policy_type[]"  value=""  placeholder="Type of Policy"><p class="help-block"></p></div></div><div class="col-lg-3"><div class="form-group"> <input type="text" class="form-control" name="life_coverage_amount[]" value="" placeholder="Coverage($)"><p class="help-block"></p></div></div><div class="col-lg-3"><div class="form-group"><input type="text" class="form-control" name="life_coverage_benificiary[]" value="" placeholder="Beneficiary"><p class="help-block"></p></div></div><a href="javascript:void(0);" class="remove_button col-lg-3" title="Remove field"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

		
		 $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.disability_add_button'); //Add button selector
            var wrapper = $('#dis'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-12"><div class="col-lg-3"><div class="form-group"><input type="text" class="form-control" name="disability_insurance_insured[]"  value=""  placeholder="Insured"><p class="help-block"></p></div></div><div class="col-lg-3"><div class="form-group"> <input type="text" class="form-control" name="disability_insurance_coverage[]" value="" placeholder="Coverage($)"><p class="help-block"></p></div></div><div class="col-lg-3"><div class="form-group"><input type="text" class="form-control" name="disability_insurance_targetend_date[]" value="" placeholder="Target End Dates"><p class="help-block"></p></div></div><a href="javascript:void(0);" class="remove_button col-lg-3" title="Remove field"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

		 $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.critical_add_button'); //Add button selector
            var wrapper = $('#crtkl'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-12"><div class="col-lg-3"><div class="form-group"><input type="text" class="form-control" name="critical_illness_insured[]"  value=""  placeholder="Insured"><p class="help-block"></p></div></div><div class="col-lg-3"><div class="form-group"> <input type="text" class="form-control" name="critical_illness_coverage[]" value="" placeholder="Coverage($)"><p class="help-block"></p></div></div><div class="col-lg-3"><div class="form-group"><input type="text" class="form-control" name="critical_illness_targetend_date[]" value="" placeholder="Target End Dates"><p class="help-block"></p></div></div><a href="javascript:void(0);" class="remove_button col-lg-3" title="Remove field"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

		$(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.long_add_button'); //Add button selector
            var wrapper = $('#long'); //Input field wrapper
            var fieldHTML = '<div class="col-lg-12"><div class="col-lg-3"><div class="form-group"><input type="text" class="form-control" name="longterm_care_insured[]"  value=""  placeholder="Insured"><p class="help-block"></p></div></div><div class="col-lg-3"><div class="form-group"> <input type="text" class="form-control" name="longterm_care_coverage[]" value="" placeholder="Coverage($)"><p class="help-block"></p></div></div><div class="col-lg-3"><div class="form-group"><input type="text" class="form-control" name="longterm_care_targetend_date[]" value="" placeholder="Target End Dates"><p class="help-block"></p></div></div><a href="javascript:void(0);" class="remove_button col-lg-3" title="Remove field"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

		
		
		
		
		
	/******************************************************** code start for mybusiness page    *****************************************************/
	
		  $(document).ready(function(){
            var maxField01_mybs = 10; /*Input fields increment limitation*/
            var business_assets_add = $('.business_assets_add'); /*Add button selector*/
            var wrapper01 = $('#baspp'); //Input field wrapper
            var fieldHTML01_mybs = '<div class="col-lg-12" style="padding-top:10px"><div class="col-lg-3"><input type="text" name="bafspap_company[]" id="bafspap_company" class="form-control" value=""></div><div class="col-lg-3"><input type="text" name="bafspap_ownership[]" id="bafspap_ownership" class="form-control" value=""> </div> <div class="col-lg-3"> <input type="text" name="bafspap_value[]" id="bafspap_value" class="form-control" value=""></div> <div class="col-lg-3"><input type="text" name="bafspap_investment_accounts[]" id="bafspap_investment_accounts" class="form-control" value=""></div><a href="javascript:void(0);" style="float:right" class="remove_button text-right" title="Remove field"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>';
 //New input field html 
            var x01_mybs = 1; //Initial field counter is 1
            $(business_assets_add).click(function(){ //Once add button is clicked
                if(x01_mybs < maxField01_mybs){ //Check maximum number of input fields
                    x01_mybs++; //Increment field counter
                    $(wrapper01).append(fieldHTML01_mybs); // Add field html
                }
            });
            $(wrapper01).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x01_mybs--; //Decrement field counter
            });
			
			
			
			
			
			
			
			
			 var maxField02_mybs = 10; /*Input fields increment limitation*/
            var business_corporation_add = $('.business_corporation_add'); /*Add button selector*/
            var wrapper02 = $('#bacb'); /*Input field wrapper*/
            var fieldHTML02_mybs = '<div class="col-lg-12" style="padding-top:10px"> <div class="col-lg-3"><input type="text" name="bafc_company[]" id="bafc_company" class="form-control" value=""> </div><div class="col-lg-3">  <input type="text" name="bafc_ownership[]" id="bafc_ownership" class="form-control" value="">  </div><div class="col-lg-3"><input type="text" name="bafc_value[]" id="bafc_value" class="form-control" value="">  </div><div class="col-lg-3"> <input type="text" name="bafc_investment_accounts[]" id="bafc_investment_accounts" class="form-control" value=""></div><a href="javascript:void(0);" style="float:right" class="remove_button text-right" title="Remove field"><img src="<?=base_url()?>assets/images/cross-icon.png"/></a></div>';
    
 /*New input field html */
            var x02_mybs = 1; /*Initial field counter is 1*/
            $(business_corporation_add).click(function(){ /*Once add button is clicked*/
                if(x02_mybs < maxField02_mybs){ /*Check maximum number of input fields*/
                    x02_mybs++; /*Increment field counter*/
                    $(wrapper02).append(fieldHTML02_mybs); /* Add field html*/
                }
            });
            $(wrapper02).on('click', '.remove_button', function(e){ /*Once remove button is clicked*/
                e.preventDefault();
                $(this).parent('div').remove(); /*Remove field html*/
                x02_mybs--; /*Decrement field counter*/
            });
      
		
		
		
		
		
		
		
		
		
		
		
			 var maxField03_mybs = 10; /*Input fields increment limitation*/
            var withdrawals_add = $('.withdrawals_add'); /*Add button selector*/
            var wrapper03 = $('#withdrawalswrap'); /*Input field wrapper*/
            var fieldHTML03_mybs = '<div class="col-lg-12" style="padding-top:10px"> <div class="col-lg-6"><input type="text" name="w_dividend_amount[]" id="w_dividend_amount" class="form-control" value=""> </div> <div class="col-lg-6"> <select name="w_frequency[]" id="w_frequency" class="form-control"> <option value="">Please Select Frequency</option> <option value="Annual" >Annual</option><option value="Semi-Annual" >Semi-Annual</option><option value="Quarterly" >Quarterly</option><option value="Monthly" >Monthly</option>   </select> </div><a href="javascript:void(0);" class="remove_button text-right" style="float:right" title="Remove field"><img src="<?=base_url()?>assets/images/cross-icon.png"/> </a></div>';
 
 /*New input field html */
            var x03_mybs = 1; /*Initial field counter is 1*/
            $(withdrawals_add).click(function(){ /*Once add button is clicked*/
                if(x03_mybs < maxField03_mybs){ /*Check maximum number of input fields*/
                    x03_mybs++; /*Increment field counter*/
                    $(wrapper03).append(fieldHTML03_mybs); /* Add field html*/
                }
            });
            $(wrapper03).on('click', '.remove_button', function(e){ /*Once remove button is clicked*/
                e.preventDefault();
                $(this).parent('div').remove(); /*Remove field html*/
                x03_mybs--; /*Decrement field counter*/
            });
        });
		
		/******************************************************** code ends for mybusiness page    *****************************************************/	
		
		
		
		
		
		
		
		
        $(document).ready(function(){
          $('.tltip').darkTooltip({
                 opacity:1,
                 animation:'flipIn',
                gravity:'west'
         });
        });
        function check_spouse(id) 
        {
            if(id=='yes')
            {
                $("#spouse_income_details").removeClass('hide').addClass('show');
            }
            else
            {
                $("#spouse_income_details").removeClass('show').addClass('hide');
            }
        }
    </script>

</body>

</html>