 <?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php }

$total_income=0;
$total_expenses=0;
$diff=0;
	$cash='Cash Surplus';

 ?>
 
 <?php

$propert_assets = $current_value_personal_residence+$personal_cost+$current_value_realestate+$realestate_cost+$current_value_art+$art_cost+$current_value_recreation_property+$recreation_cost+$current_value_vehicles+$vehicles_cost+$current_value_jewellery+$jewellery_cost;

$investable_assets = $checking_accounts+$saving_accounts+$health_saving+$taxable_investment+$education_saving+$life_insurance+$dpsp+$lira+$rrsp+$ipp;


$mortage= $personal_resisdence+$investment_property+$recreation_property;
$line_of_credit = $equity_secured+$unsecured;
$credit_card = $mastercard+$american_express+$visa+$retail;
$loan = $personal_loan+$student_loan+$car_loan+$investment_loan+$business_loan+$consolidation_loan;

$assets = $propert_assets+$investable_assets;

$libalities = $mortage+$line_of_credit+$credit_card+$loan;
if($assets > $libalities){
	$diffe = $assets - $libalities;
	$bal='Cash Surplus';
}else{
	$diffe = $libalities - $assets;
	$bal='Cash Shortage';
}

?>
 
 <?php $total_income= ($employment_income + $business_income+$other_income+$pensions+$government_benefits+$investment_earning+$realstate+$bonuses+$student_loan+$allowances+$other_income+$spouse_employment_income+$spouse_business_income+$spouse_pensions+$spouse_government_benefits+$spouse_investment_earning+$spouse_realstate+$spouse_bonuses+$spouse_student_loan+$spouse_allowances+$spouse_other_income+$spouse_taxes)-$taxes;  ?>

 <?php $total_expenses= $mortgage_rent+$property_fees+$property_taxes+$utilities+$insurance+$household_items+$cable_internet_phone+$mortgage_rent+$fuel+$transportation_insurance+$license_registration+$tolls+$vehicle_financing+$parking+$repairs_maintenance+$transit+$groceries_meals+$childcare+$clothing_jewelwery+$petcare+$personal_care+$memberships_subscription+$entertainment_hobbies+$vacation_fund+$dinin+$health_insurance+$vision+$life_insurance+$medical+$disability_insurance+$prescriptions+$critical_illness+$dental;  ?>
 <?php if($total_income>=$total_expenses)
                                        {
                                            echo $total_income-$total_expenses;
                                            $cash='Cash Surplus';
                                        }
                                        else
                                        {
                                            echo $total_expenses-$total_income;
                                            $cash='Cash Shortage';
                                        }

                                        $diff=$total_income-$total_expenses;
                                        ?>
 <?php

$propertyassests=0;
$propertyassests=$current_value_realestate+$current_value_personal_residence+$current_value_recreation_property+$current_value_vehicles+$current_value_jewellery+$current_value_art;


 ?>
 <script src="<?php echo base_url(); ?>assets/js/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                               <div id="mylifestyle"></div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>users/lifestyle">
                            <div class="panel-footer">
                                <span class="pull-left">My Lifestyle</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                               <div id="mywealth"></div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>users/wealth">
                            <div class="panel-footer">
                                <span class="pull-left">My Wealth</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> My Lifestyle
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <style>
#mylifestyle {
	width		: 100%;
	height		: 200px;
	font-size	: 11px;
}		




#mywealth {
    width       : 100%;
    height      : 200px;
    font-size   : 11px;
}			
</style>

<!-- Resources -->


<!-- Chart code -->
<script>
var chart = AmCharts.makeChart( "mylifestyle", {
  "type": "serial",
  "hideCredits":true,
  "theme": "dark",
  "dataProvider": [ {
    "country": "Income",
    "visits": <?php echo $total_income; ?>
  }, {
    "country": "Expense",
    "visits": <?php echo $total_expenses; ?>
  }, {
    "country": "<?php echo $cash; ?>",
    "visits": <?php echo $diff; ?>
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": false
  }

} );


var chart2 = AmCharts.makeChart( "mywealth", {
  "type": "serial",
  "hideCredits":true,
  "theme": "dark",
  "dataProvider": [ {
    "country": "Assets",
    "visits": <?php echo $assets; ?>
  }, {
    "country": "Libalities",
    "visits": <?php echo $libalities; ?>
  }, {
    "country": "<?php echo $bal; ?>",
    "visits": <?php echo $diffe; ?>
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": false
  }

} );
</script>

<!-- HTML -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>3321</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>3320</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>3319</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">


                                	<!-- Styles -->

                                    <!--div id="morris-bar-chart"></div-->
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Posts
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                               <div class="form-group">
                                <label for="sel1">Select continent:</label>
                                <select class="form-control" id="new_cont" onchange="change_cont(this.value);">
                                      <option value="world">World</option>
                                         <option value="us">US/Canada</option>
                                         <option value="au">Latin America/ Caribbean</option>
                                         <option value="de">Middle East </option>
                                         <option value="gb">UK </option>
                                         <option value="af">Africa </option>
                                             <option value="it">Europe</option>
                                         <option value="in">Asia Pacific</option>
                                  </select>
                                </div>      
                                <div id="newslist">
                                    <?php if(!empty($news)){ ?>
                                            <?php foreach ($news as $key => $value) {?>

<a href="<?php echo $value; ?>" target="_blank" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> <?php echo $key; ?>
                                 
                                </a>

                                                
                                           <?php } ?>

                                    <?php } ?>
                                
                            </div>
                           


                               
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block" id="myBtn">Add New Post</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            <a href="#" class="btn btn-default btn-block">View Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="panel-body">

            <div class="row">

              <div class="col-lg-12">

               <div class="alert alert-danger ciquery"></div>

 <!--<div class="alert alert-success query_successmsg">

  <strong>Thanks!</strong> for submitted query.

</div>-->

            <b><?php //f(isset($response)) echo $response; ?></b>
<form action="saveldata" id="linkform" method="post">
  <div class="form-group">
    <label for="email">Title:</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="pwd">Link:</label>
    <input type="url" name="link" class="form-control" id="link">
  </div>
  <div class="form-group">
<input type="hidden" name="user_id" value="<?php echo $id; ?>"/>

  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  <div id="error_message" class="ajax_response" style="float:left"></div>
    <div id="success_message" class="ajax_response" style="float:left"></div>
</form>


                      </div>

                    </div>

                  </div>

                                    

       

                  

                </form>

                </div>

                </div>

                </div>
  </div>

</div>

<script type="text/javascript">


</script>   
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function change_cont(val)
{

    $("#newslist").html('Loading...');
       $.ajax({
           type: "POST",
           url: '<?php echo base_url(); ?>users/newsrefresh',
           data: {cont:val}, // serializes the form's elements.
           success: function(data)
           {

        $("#newslist").html(data);
       
           }
         });
}
 


</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 45%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.list-group{
        overflow-y: scroll;
    max-height: 250px;
}
</style>
