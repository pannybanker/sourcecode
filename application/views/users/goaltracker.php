
<div class="container">    
    <!--<?php //$this->load->view('users/topmenu'); ?>-->
    <div class="parent no-gutters">        
        <section class="col-xs-12 col-sm-12 col-md-1 "  style="width: 240px;">   
          <!--  <?php //$this->load->view('users/leftmenu'); ?> -->       
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
                                        <div class="top-grids">
											<br><h1>Goal Tracker</h1>
											<div>
												
												<li class="active" >
													<select name="gender" required="required">
														<option  value="">Select Scenario  </option>
														<option <?php if (!empty($gender) && $gender == 'Required Savings   ') { ?> selected <?php } ?> value="Required Savings   ">Required Savings  </option>
														<option <?php if (!empty($gender) && $gender == 'Life Insurance Coverage Purpose  ') { ?> selected <?php } ?> value="Life Insurance Coverage Purpose  ">Life Insurance Coverage Purpose </option>
														<option <?php if (!empty($gender) && $gender == 'Income Insurance Coverage Purpose     ') { ?> selected <?php } ?> value="Income Insurance Coverage Purpose     ">Income Insurance Coverage Purpose    </option>
														<option <?php if (!empty($gender) && $gender == 'Capital Growth Purpose     ') { ?> selected <?php } ?> value="Capital Growth Purpose     ">Capital Growth Purpose    </option>
														<option <?php if (!empty($gender) && $gender == 'Capital Savings Purpose       ') { ?> selected <?php } ?> value="Capital Savings Purpose         ">Capital Savings Purpose        </option>
														<option <?php if (!empty($gender) && $gender == 'Required Savings for Retirement      ') { ?> selected <?php } ?> value="Required Savings for Retirement       ">Required Savings for Retirement      </option>
														<option <?php if (!empty($gender) && $gender == 'Available Savings for Retirement      ') { ?> selected <?php } ?> value="Available Savings for Retirement        ">Available Savings for Retirement       </option>
														
														
													</select>
												</li>	
												<h2>Additional Monthly Savings</h2>
												  <li class="active" >    <input type="Date" class="active textbox" style="width: 90%;"  name="occupation" value="<?php
                                            if (!empty($occupation)) {
                                                echo $occupation;
                                            }
                                            ?>" placeholder="Start Date"></li>

												<!--<div data-role="rangeslider">
													Additional lump sum average<input type="range" name="price-min" id="price-min" value="0" min="0" max="1000">
												</div>-->
												<input type="range" min="0" max="10000";">
    <output></output>
</div>

												<h2>Current Monthly Savings</h2>
												<table>
															<tr>
																<th>Paydown Debt</th>
																<th>Current balance</th>
																<th>% Achieved</th>
																
															</tr>
															<tr>
																<td>Visa</td>
																<td>$</td>
																<td></td>
																
															</tr>
															<tr>
																<td>Line of credit </td>
																<td>$</td>
																<td></td>
																
															</tr>
															<tr>
																<td>loan</td>
																<td>$</td>
																<td></td>
																
															</tr>
															
														</table>
												<br><input type="submit" style="width: 95%;" value="COMPLETE"><br><br>
												<input type="submit" style="width: 95%;" value="Save and return to dashboard">
											</div>											
										</section>   
										<section class="col-xs-12 col-sm-12 col-md-4" style="margin-left: 10px;">     
											<?php $this->load->view('users/rightmenu'); ?>       
										</section>    
									</div> 
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
  (function () {
    var selector = '[data-rangeSlider]',
      elements = document.querySelectorAll(selector);
    // Example functionality to demonstrate a value feedback
    function valueOutput(element) {
      var value = element.value,
        output = element.parentNode.getElementsByTagName('output')[0];
      output.innerHTML = value;
    }
    for (var i = elements.length - 1; i >= 0; i--) {
      valueOutput(elements[i]);
    }
    Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function (el) {
      el.addEventListener('input', function (e) {
        valueOutput(e.target);
      }, false);
    });
    // Example functionality to demonstrate disabled functionality
    var toggleBtnDisable = document.querySelector('#js-example-disabled button[data-behaviour="toggle"]');
    toggleBtnDisable.addEventListener('click', function (e) {
      var inputRange = toggleBtnDisable.parentNode.querySelector('input[type="range"]');
      console.log(inputRange);
      if (inputRange.disabled) {
        inputRange.disabled = false;
      }
      else {
        inputRange.disabled = true;
      }
      inputRange.rangeSlider.update();
    }, false);
    // Example functionality to demonstrate programmatic value changes
    var changeValBtn = document.querySelector('#js-example-change-value button');
    changeValBtn.addEventListener('click', function (e) {
      var inputRange = changeValBtn.parentNode.querySelector('input[type="range"]'),
        value = changeValBtn.parentNode.querySelector('input[type="number"]').value,
        event = document.createEvent('Event');
      event.initEvent('change', true, true);
      inputRange.value = value;
      inputRange.dispatchEvent(event);
    }, false);
    // Example functionality to demonstrate programmatic buffer set
    var stBufferBtn = document.querySelector('#js-example-buffer-set button');
    stBufferBtn.addEventListener('click', function (e) {
      var inputRange = stBufferBtn.parentNode.querySelector('input[type="range"]'),
        value = stBufferBtn.parentNode.querySelector('input[type="number"]').value;
      inputRange.rangeSlider.update({buffer: value});
    }, false);
    // Example functionality to demonstrate destroy functionality
    var destroyBtn = document.querySelector('#js-example-destroy button[data-behaviour="destroy"]');
    destroyBtn.addEventListener('click', function (e) {
      var inputRange = destroyBtn.parentNode.querySelector('input[type="range"]');
      console.log(inputRange);
      inputRange.rangeSlider.destroy();
    }, false);
    var initBtn = document.querySelector('#js-example-destroy button[data-behaviour="initialize"]');
    initBtn.addEventListener('click', function (e) {
      var inputRange = initBtn.parentNode.querySelector('input[type="range"]');
      rangeSlider.create(inputRange, {});
    }, false);
    //update range
    var updateBtn1 = document.querySelector('#js-example-update-range button');
    updateBtn1.addEventListener('click', function (e) {
      var inputRange = updateBtn1.parentNode.querySelector('input[type="range"]');
      inputRange.rangeSlider.update({min: 0, max: 20, step: 0.5, value: 1.5, buffer: 70});
    }, false);
    var toggleBtn = document.querySelector('#js-example-hidden button[data-behaviour="toggle"]');
    toggleBtn.addEventListener('click', function (e) {
      var container = e.target.previousElementSibling;
      if (container.style.cssText.match(/display[\s:]{1,200000}none/)) {
        container.style.cssText = '';
      } else {
        container.style.cssText = 'display: none;';
      }
    }, false);
    // Basic rangeSlider initialization
    rangeSlider.create(elements, {
      // Callback function
      onInit: function () {
      },
      // Callback function
      onSlideStart: function (value, percent, position) {
        console.info('onSlideStart', 'value: ' + value, 'percent: ' + percent, 'position: ' + position);
      },
      // Callback function
      onSlide: function (value, percent, position) {
        console.log('onSlide', 'value: ' + value, 'percent: ' + percent, 'position: ' + position);
      },
      // Callback function
      onSlideEnd: function (value, percent, position) {
        console.warn('onSlideEnd', 'value: ' + value, 'percent: ' + percent, 'position: ' + position);
      }
    });
    rangeSlider.create(document.querySelector('#vertical'), {
      vertical: true
    });
  })();
</script>
