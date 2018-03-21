
<div class="container">    
    <?php $this->load->view('users/topmenu'); ?>
    <div class="parent no-gutters">        
        <section class="col-xs-12 col-sm-12 col-md-1 "  style="width: 240px;">   
            <?php $this->load->view('users/leftmenu'); ?>           
        </section>     
        <section class="col-xs-12 col-sm-12 col-md-7 white-bg"> 
            <div class="wrap">
                <!-- tab style-1 -->
                <div class="row">
                    <div class="grid_12 columns">
                        <div class="tab style-1">

                            <ul>
                                <li class="active">
                                      <?php if (!empty($usermeta) && !empty($usermeta[$_SESSION['user']['user_id']])) { ?>
                                        <?php extract($usermeta[$_SESSION['user']['user_id']]); ?>
                                    <?php } ?>
                                    <form method="post">
                                        <div class="form">
                                            <h1>Your Legacy</h1>
                                            <table>
                                                <tr name="legacy">
                                                    <th> Your Legacy</th>
                                                    <th <?php if (!empty($legacy) && $legacy == ' Yes') { ?> selected <?php } ?>  value=" Yes">YES</th>
                                                    <th>NO</th>
                                                </tr>
                                                <tr>
                                                    <td>Do you have a Will?</td>
                                                    <td><input <?php if (!empty($vehicle) && $vehicle == 'Yes') { ?> selected <?php } ?>  type="radio" name="vehicle" value="Yes">Yes</td>
                                                    <td><input <?php if (!empty($vehicle) && $vehicle == 'No') { ?> selected <?php } ?> type="radio" name="vehicle" value="NO">NO</td>
                                                </tr>
                                                <tr>
                                                    <td>Has your situation changed since your last Will?</td>
                                                    <td><input type="radio" name="vehicle" value="Yes">Yes</td>
                                                    <td><input type="radio" name="vehicle" value="NO">NO</td>
                                                </tr> 
                                                <tr>
                                                    <td>Have you prepared Powers of Attorney for:</td>
                                                    <td><input type="radio" name="vehicle" value="Yes">Yes</td>
                                                    <td><input type="radio" name="vehicle" value="NO">NO</td>
                                                </tr>
                                                <tr>
                                                    <td>Your Finances</td>
                                                    <td><input type="radio" name="vehicle" value="Yes">Yes</td>
                                                    <td><input type="radio" name="vehicle" value="NO">NO</td>
                                                </tr>
                                                <tr>
                                                    <td>Your Health/Personal Care</td>
                                                    <td><input type="radio" name="vehicle" value="Yes">Yes</td>
                                                    <td><input type="radio" name="vehicle" value="NO">NO</td>
                                                </tr> 
                                                <tr>
                                                    <td>Do you have an inter vivos trust in place? </td>
                                                    <td><input type="radio" name="vehicle" value="Yes">Yes</td>
                                                    <td><input type="radio" name="vehicle" value="NO">NO</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <br>
                                        <div class="form">	
                                            <table>
                                                <tr>
                                                    <th>Charitable Giving</th>
                                                    <th>YES</th>
                                                    <th>NO</th>
                                                </tr>

                                                <tr>
                                                    <td>Do you intend to include charities in your estate plan?</td>
                                                    <td><input type="radio" name="vehicle" value="Yes">Yes</td>
                                                    <td><input type="radio" name="vehicle" value="NO">NO</td>
                                                </tr> 
                                                <tr>
                                                    <td>Have you considered possible tax advantages to giving?</td>
                                                    <td><input type="radio" name="vehicle" value="Yes">Yes</td>
                                                    <td><input type="radio" name="vehicle" value="NO">NO</td>
                                                </tr>	
                                            </table>
                                            <input type="submit" style="width:95%;" value="Complete">
                                            <input type="submit" style="width:95%;" value="Save and Return to Dashboard">
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div> 
                    </div> 
                </div> 
            </div>

        </section>   

        <section class="col-xs-12 col-sm-12 col-md-4" style="margin-left: 10px;">     
            <?php $this->load->view('users/rightmenu'); ?>       
        </section>    
    </div>   
</div>

