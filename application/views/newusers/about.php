<?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
    <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
<?php } ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header ole tltip" data-tooltip="We’d like to know the basics to help you along. Who are you? Who are your current advisors that make an impact? How have you started your journey to establishing your wealth?">About Me</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    About Me
                </div>
                <div class="panel-body">
                    <div class="alert hide" id="msg">
                        <span></span>
                    </div>
                    <form method="post" name="about_frm" id="about_frm" action="#">
                        <div class="row form">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender" id="gender">
                                        <option  value="">Select Gender</option>
                                        <option <?php if (!empty($gender) && $gender == 'Male') { ?> selected <?php } ?> value="Male">Male</option>
                                        <option <?php if (!empty($gender) && $gender == 'Female') { ?> selected <?php } ?> value="Female">Female</option>
                                    </select>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <div class="input-group">
                                    <div class="input-group-addon">
                                     <i class="fa fa-calendar">
                                     </i>
                                    </div>
                                    <input class="form-control" id="about_dob" name="about_dob" value="<?php
                                                if (!empty($about_dob)) {
                                                    echo $about_dob;
                                                }
                                                ?>" placeholder="DD/MM/YYYY" type="text"/>
                                   </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label>Citizenship</label>
                                    <input class="form-control" type="text" class="form-control" name="citizenship" id="citizenship"  value="<?php
                                                if (!empty($citizenship)) {
                                                    echo $citizenship;
                                                }
                                                ?>" placeholder="Citizenship">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label>Occupation</label>
                                    <input type="text" class="form-control" name="occupation" id="occupation" value="<?php
                                                if (!empty($occupation)) {
                                                    echo $occupation;
                                                }
                                                ?>" placeholder="Occupation">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label>Industry</label>
                                    <input type="text" class="form-control" name="industry" id="industry" value="<?php
                                                if (!empty($industry)) {
                                                    echo $industry;
                                                }
                                                ?>" placeholder="Industry">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label>Family Structure</label>
                                    <input type="text" class="form-control" name="family_structure" id="family_structure"  value="<?php
                                            if (!empty($family_structure)) {
                                                echo $family_structure;
                                            }
                                            ?>" placeholder="Family Structure">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label>Number of dependents</label>
                                    <select class="form-control" name="dependents" id="dependents">
                                        <option value="">Number of dependents</option>
                                        <?php
                                            for($i=1;$i<=10;$i++)
                                            {
                                        ?>
                                                <option value="<?php echo $i; ?>" <?php if (!empty($dependents) && $dependents == $i) { ?> selected <?php } ?>><?php echo $i; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Wealth Established By</label>
                                    <select class="form-control" name="wealth" id="wealth">
                                        <option value="Null"> Select Wealth Established By</option>
                                        <option  <?php if (!empty(wealth) && $wealth == 'Inheritance') { ?> selected <?php } ?> value="Inheritance">Inheritance</option>
                                        <option <?php if (!empty(wealth) && $wealth == 'Gift') { ?> selected <?php } ?> value="Gift">Gift</option>
                                        <option <?php if (!empty(wealth) && $wealth == 'Trust') { ?> selected <?php } ?> value="Trust">Trust</option>
                                        <option <?php if (!empty(wealth) && $wealth == 'Employment') { ?> selected <?php } ?> value="Employment">Employment</option>
                                        <option <?php if (!empty(wealth) && $wealth == 'My own business') { ?> selected <?php } ?> value="My own business">My own business</option>
                                        
                                    </select>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12"><label>Accountant</label></div>
                                    <div class="col-lg-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="accountant" id="accountant" value="<?php
                                                if (!empty($accountant)) {
                                                    echo $accountant;
                                                }
                                                ?>" placeholder="Name">
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Email id</label>
                                        <input type="text" class="form-control" name="accountant_emailid" id="accountant_emailid" value="<?php
                                                if (!empty($accountant_emailid)) {
                                                    echo $accountant_emailid;
                                                }
                                                ?>" placeholder="Email id">
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="accountant_phone" id="accountant_phone" value="<?php
                                                if (!empty($accountant_phone)) {
                                                    echo $accountant_phone;
                                                }
                                                ?>" placeholder="Phone Number">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12"><label>Lawyer</label></div>
                                    <div class="col-lg-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="lawyer" id="lawyer" value="<?php
                                                if (!empty($lawyer)) {
                                                    echo $lawyer;
                                                }
                                                ?>" placeholder="Name">
                                    <p class="help-block"></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Email id</label>
                                        <input type="text" class="form-control" name="lawyer_emailid" id="lawyer_emailid" value="<?php
                                                if (!empty($lawyer_emailid)) {
                                                    echo $lawyer_emailid;
                                                }
                                                ?>" placeholder="Email id">
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="lawyer_phone" id="lawyer_phone" value="<?php
                                                if (!empty($lawyer_phone)) {
                                                    echo $lawyer_phone;
                                                }
                                                ?>" placeholder="Phone Number">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12"><label>Investment Advisor</label></div>
                                    <div class="col-lg-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="investment_advisor" id="investment_advisor" value="<?php
                                                if (!empty($investment_advisor)) {
                                                    echo $investment_advisor;
                                                }
                                                ?>" placeholder="Investment Advisor">
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Email id</label>
                                        <input type="text" class="form-control" name="investment_advisor_emailid" id="investment_advisor_emailid" value="<?php
                                                if (!empty($investment_advisor_emailid)) {
                                                    echo $investment_advisor_emailid;
                                                }
                                                ?>" placeholder="Email id">
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="investment_advisor_phone" id="investment_advisor_phone" value="<?php
                                                if (!empty($investment_advisor_phone)) {
                                                    echo $investment_advisor_phone;
                                                }
                                                ?>" placeholder="Phone Number">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12"><label>Insurance Agent</label></div>
                                    <div class="col-lg-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="insurance_agent" id="insurance_agent" value="<?php
                                            if (!empty($insurance_agent)) {
                                                echo $insurance_agent;
                                            }
                                            ?>" placeholder="Insurance Agent">
                                    <p class="help-block"></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Email id</label>
                                        <input type="text" class="form-control" name="insurance_agent_emailid" id="insurance_agent_emailid" value="<?php
                                                if (!empty($insurance_agent_emailid)) {
                                                    echo $insurance_agent_emailid;
                                                }
                                                ?>" placeholder="Email id">
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="insurance_agent_phone" id="insurance_agent_phone" value="<?php
                                                if (!empty($insurance_agent_phone)) {
                                                    echo $insurance_agent_phone;
                                                }
                                                ?>" placeholder="Phone Number">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group col-lg-12"><label class="col-lg-2"> Name of Child/Dependent</label><label class="col-lg-2"> Age</label><label class="col-lg-2"> Relationship</label><label class="col-lg-2"> Residency</label><label class="col-lg-2"> Citizenship</label><label class="col-lg-2"> Action</label></div>
                                <div class="input_fields_dependents">
                                    <?php
                                        $i=0;
                                        $depdtsage = explode(',', $age_depedent);
                                        $depdtsrelationship = explode(',', $relationship_depedent);
                                        $depdtsresidency = explode(',', $residency_depedent);
                                        $depdtscitizenship = explode(',', $citizenship_depedent);
                                        foreach (explode(',', $name_depedent) as $key => $value) 
                                        {
                                    ?>
                                            <div class="form-group col-lg-12">
                                                <div class="col-lg-2">
                                                    <input type="text" name="name_depedent[]" class="form-control" value="<?= $value ?>" />
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="text" name="age_depedent[]" class="form-control" value="<?= $depdtsage[$i] ?>" />
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="text" name="relationship_depedent[]" class="form-control" value="<?= $depdtsrelationship[$i] ?>" />
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="text" name="residency_depedent[]" class="form-control" value="<?= $depdtsresidency[$i] ?>" />
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="text" name="citizenship_depedent[]" class="form-control" value="<?= $depdtscitizenship[$i] ?>" />
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="fa fa-times-circle-o fa-2 remove_field"></p>
                                                </div>
                                            </div>
                                    <?php
                                            $i++;
                                        }
                                    ?>
                                </div>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Complete">
                                </div>
                                <div class="col-lg-6">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save and Return to Dashboard">
                                </div>
                                <input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->