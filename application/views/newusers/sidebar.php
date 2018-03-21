<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?= base_url(); ?>" class="logo"><img src="<?= base_url(); ?>assets1/images/logo.png" style="width: 180px;"> </a>
            </div>
            <!-- /.navbar-header -->            

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <ul class="nav navbar-nav">
                    <li <?php if($menu == 'dash'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>users/dash">Home</a></li>
                    <li <?php if($menu == 'about'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>users/about">About Me</a></li>
                    <li <?php if($menu == 'lifestyle'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>users/lifestyle?months=<?php echo date('n'); ?>&years=<?php echo date('Y'); ?>">My Lifestyle</a></li>
                    <li <?php if($menu == 'wealth'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>users/wealth">My Wealth</a></li>
                    <li <?php if($menu == 'protection'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>users/protection">My Protection</a></li>
                    <?php if($user_package['pay_businessplus']==0){ ?>
                    <li <?php if($menu == 'mybusiness'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>users/mybusiness">My Business</a></li>
                    <?php }else{ ?>
                    <li <?php if($menu == 'business'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>users/business"><span class="label label-default">My Business Plus</span></a></li>
                    <?php } ?>
                    <li <?php if($menu == 'legacy'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>users/legacy">My Legacy</a></li>
                </ul>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="javascript:void(0);"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="<?=base_url()?>"><i class="fa fa-globe fa-fw"></i> Visit Website</a>
                        </li>
                        <li><a href="<?=base_url()?>frontend"><i class="fa fa-gear fa-fw"></i> Upgrade Now</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url() ?>users/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?= base_url() ?>users/dash"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <?php if($user_package['pay_packageid']==1){ ?>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-edit fa-fw"></i> Basic Financial Assmt.<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>users/cashanalysis">Cash Flow analysis</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/debtanalysis">Debt Analysis</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <?php if($user_package['pay_packageid']==2){ ?>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i> Enhanced Financial Assmt.<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>users/tolerancescenario">Investor Personality and Risk Tolerance assessment</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/requiredndesiredscenario">Required vs Desired Return</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/standardlivingassessment">Standard of Living assessment</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/lifestagereview">Life Stage review</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/cashanalysis">Cash Flow analysis</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/debtanalysis">Debt Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Executive Summary and Gaps analysis</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>

                        <?php if($user_package['pay_packageid']==3){ ?>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i> Total Wealth Review <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>users/tolerancescenario">Investor Personality and Risk Tolerance assessment</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/requiredndesiredscenario">Required vs Desired Return</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/standardlivingassessment">Standard of Living assessment</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/lifestagereview">Life Stage review</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/cashanalysis">Cash Flow analysis</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/debtanalysis">Debt Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Retirement Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Tax Planning Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Insurance Planning Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Estate Planning Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Executive Summary and Gaps analysis</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i> Action Plan</a>
                        </li>
                        <?php } ?>  

                        <?php if($user_package['pay_packageid']==5){ ?>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i>Standard Financial Assmt.<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>users/tolerancescenario">Investor Personality and Risk Tolerance assessment</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/requiredndesiredscenario">Required vs Desired Return</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/standardlivingassessment">Standard of Living assessment</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/cashanalysis">Cash Flow analysis</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/debtanalysis">Debt Analysis</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        
                        <?php if($user_package['pay_packageid']==6){ ?>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i> Total Wealth Review <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>users/tolerancescenario">Investor Personality and Risk Tolerance assessment</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/requiredndesiredscenario">Required vs Desired Return</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/standardlivingassessment">Standard of Living assessment</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/lifestagereview">Life Stage review</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/cashanalysis">Cash Flow analysis</a>                
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>users/debtanalysis">Debt Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Retirement Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Tax Planning Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Insurance Planning Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Estate Planning Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Executive Summary and Gaps analysis</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i> Action Plan</a>
                        </li>
                        <?php } ?>  

                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i> Scenario Tools<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i> Savings Scenario Tools<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url();?>users/savingscenario">Savings Scenarios</a>              
                                        </li>
                                        <?php if($user_package['pay_packageid']!=1){ ?>
                                        <li>
                                            <a href="<?php echo base_url();?>users/lifeinsurancescenario">Asset and Income Protection</a>              
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>users/capitalscenario">Growing Your Wealth</a>              
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i> Planning for Retirement<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="<?php echo base_url();?>users/retirementscenario">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retirement Scenarios</a>             
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>users/payoutscenario">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payout Scenarios</a>             
                                                </li>                                               
                                            </ul>             
                                        </li>

                                        <?php } ?>
                                    </ul>           
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i> Borrowing Scenario Tools<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url();?>users/borrwingscenario">Leverage vs Savings</a>            
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>users/loancomparison">Loan Comparison</a>         
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Buy vs Lease</a>            
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i> Mortgages<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="<?=base_url()?>users/whaticanafford">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What can I afford</a>             
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>users/rentorown">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rent or Own</a>            
                                                </li> 
                                                <?php if($user_package['pay_packageid']!=1){ ?>
                                                <li>
                                                    <a href="<?=base_url()?>users/mortgagecalculator">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mortgage Calculator</a>            
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>users/mortgagecomparison">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mortgage Comparison</a>            
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>users/mortgagefreefaster">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mortgage Free Faster</a>            
                                                </li> 
                                                <?php } ?>                                         
                                            </ul>             
                                        </li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url()?>users/goaltracker"><i class="fa fa-wrench fa-fw"></i> Goal Tracker</a>
                        </li>
                        
                        <?php if($user_package['pay_packageid']==6){ ?>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i>  Business Financial Assmt. <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url()?>users/businesspersonalityandriskassessment">Business Personality and Risk Assessment</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Cash Flow Analysis</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Debt Analysis</a>                
                                </li>
                                <li>
                                    <a href="<?=base_url()?>users/withdrawalassessment">Owner’s Withdrawals</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i>Business Portfolio Analysis <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url()?>users/businesslifecycletracker">Business Life Cycle Tracker</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Executive Summary and Gap Analysis</a>                
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-wrench fa-fw"></i>  Business Tools<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="javascript:void(0);">Short term needs</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Performance needs</a>                
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Long term growth</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="<?=base_url()?>users/upgrade/1"> Upgrade with Basic</a>
                            <a href="<?=base_url()?>users/upgrade/2"> Upgrade with Elite</a>
                            <a href="<?=base_url()?>users/upgrade/3"> Upgrade with Executive</a>
                            <a href="<?=base_url()?>users/upgrade/5"> Upgrade with Exclusive</a>
                            <a href="<?=base_url()?>users/upgrade/6"> Business Plus</a>
                        </li>
                        <li>
                            <?php 
                                $metadetails = $this->frontend_model->get_package_by_id($user_package['pay_packageid']);
                            ?>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div>&nbsp;&nbsp;Current Package</div>
                                        <div class="col-xs-12">
                                            <center><h3><?php print_r($metadetails['pckgtype_name'])?></h3></center>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <a href="<?=base_url()?>frontend"> <button type="button" class="btn bg-primary btn-labeled btn-xlg" style="height: 60px; width: 200px;"><h4>Upgrade Now</h4></button></a>
                                    </div>
                                </a>
                            </div>
                            
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <script>

        </script>
