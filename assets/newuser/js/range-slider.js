

function numberWithCommas(number) {

    var parts = number.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}


var rangeSliderSaving = function(){
  var slider = $('.range-slider-saving'),
      range = $('.range-slider-saving__range'),
      value = $('.range-slider-saving__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-saving-value").val(this.value);
      var t  = $("#range-slider-year-value").val();
      var i  = $("#range-slider-interest-value").val();
      var fp = $("#frequency-payment").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      var percentage = ((i/fpv)/100).toFixed(7);
      var pvf = ((Math.pow(1+parseFloat(percentage), fpv*t))-1)/percentage;
      var finalvalue = (this.value/pvf).toFixed(2);
      finalvalue=numberWithCommas(finalvalue);
      $("#ssfvp").html(finalvalue);
      $("#sssgmp").html(this.value.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });
  });
};

var rangeSliderYear = function(){
  var slider = $('.range-slider-year'),
      range = $('.range-slider-year__range'),
      value = $('.range-slider-year__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-year-value").val(this.value);
      var pv  = $("#range-slider-saving-value").val();
      var i  = $("#range-slider-interest-value").val();
      var fp = $("#frequency-payment").val();
      var td = $("#td").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(this.value != 0 && i != 0)
      {
        var percentage = ((i/fpv)/100).toFixed(7);
        var pvf = ((Math.pow(1+parseFloat(percentage), fpv*this.value))-1)/percentage;
        var finalvalue = (pv/pvf).toFixed(2);

        finalvalue=numberWithCommas(finalvalue);
        $("#ssfvp").html(finalvalue);
        $("#sstp").html(this.value);
      } 
      else
      {
        $("#sstp").html(0);
      }
    });
  });
};

var rangeSliderInterest = function(){
  var slider = $('.range-slider-interest'),
      range = $('.range-slider-interest__range'),
      value = $('.range-slider-interest__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-interest-value").val(this.value);
      var pv  = $("#range-slider-saving-value").val();
      var t  = $("#range-slider-year-value").val();
      var fp = $("#frequency-payment").val();
      var td = $("#td").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(this.value != 0 && t != 0)
      {
        var percentage = ((this.value/fpv)/100).toFixed(7);
        var pvf = ((Math.pow(1+parseFloat(percentage), fpv*t))-1)/percentage;
        var finalvalue = (pv/pvf).toFixed(2);

        finalvalue=numberWithCommas(finalvalue);
        $("#ssfvp").html(finalvalue);
        $("#ssip").html(this.value);
      } 
      else
      {
        $("#ssfvp").html(0);
      }        
    });
  });
};




var rangeSliderMorgate= function(){
  var slider = $('.range-slider-year-morgate'),
      range = $('.range-slider-year-morgate__range'),
      value = $('.range-slider-year-morgate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-year-morgate-value").val(this.value);
      var pv  = $("#range-slider-saving-morgate-value").val();
      var i  = $("#range-slider-interest-morgate-value").val();
      var fp = $("#frequency-morgate").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(this.value != 0 && i != 0)
      {
        var percentage = ((i/fpv)/100).toFixed(7);
        var finalvalue = (pv*(((Math.pow(1+parseFloat(percentage), fpv*this.value))-1)/percentage)).toFixed(2);
       

        var finalvalue = numberWithCommas(finalvalue);



        $("#ssfva").html(finalvalue);
        $("#ssta").html(this.value);
      } 
      else
      {
        $("#ssta").html(0);
      }
    });
  });
};

var rangeSliderSavingMorgate = function(){
  var slider = $('.range-slider-saving-morgate'),
      range = $('.range-slider-saving-morgate__range'),
      value = $('.range-slider-saving-morgate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-saving-morgate-value").val(this.value);
      var t  = $("#range-slider-year-morgate-value").val();
      var i  = $("#range-slider-interest-morgate-value").val();
      var fp = $("#frequency-morgate").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(t != 0 && i != 0)
      {
        var percentage = ((i/fpv)/100).toFixed(7);
        var finalvalue = (this.value*(((Math.pow(1+parseFloat(percentage), fpv*t))-1)/percentage)).toFixed(2);
        finalvalue=numberWithCommas(finalvalue);
        $("#ssfva").html(finalvalue);
     


     var sssgma=numberWithCommas(this.value);
        $("#sssgma").html(sssgma);
      } 
      else
      {
        $("#sssgma").html(0);
      }
    });
  });
};

var rangeSliderInterestMorgate = function(){
  var slider = $('.range-slider-interest-morgate'),
      range = $('.range-slider-interest-morgate__range'),
      value = $('.range-slider-interest-morgate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-interest-morgate-value").val(this.value);
      var t  = $("#range-slider-year-morgate-value").val();
      var pv  = $("#range-slider-saving-morgate-value").val();
      var fp = $("#frequency-morgate").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(t != 0 && this.value != 0)
      {
        var percentage = ((this.value/fpv)/100).toFixed(7);
        var finalvalue = (pv*(((Math.pow(1+parseFloat(percentage), fpv*t))-1)/percentage)).toFixed(2);
        
finalvalue=numberWithCommas(finalvalue);

        $("#ssfva").html(finalvalue);
        $("#ssia").html(this.value);
      } 
      else
      {
        $("#ssia").html(0);
      }
    });
  });
};

var rangeSliderSavingGoalMortization = function(){
  var slider = $('.range-slider-saving-goal-amortization'),
      range = $('.range-slider-saving-goal-amortization__range'),
      value = $('.range-slider-saving-goal-amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-saving-goal-amortization-value").val(this.value);
      var pv  = $("#range-slider-saving-amortization-value").val();
      var fp  = $("#frequency-amortization").val();
      var i   = $("#range-slider-interest-amortization-value").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(i != 0)
      {
        var percentage = ((i/fpv)/100).toFixed(7);
        var x = Math.log(((pv/this.value)*percentage)+1);
        var y = Math.log(1+parseFloat(percentage));
        var finalvalue = (((x/y).toFixed())/fpv).toFixed(1);
   
        $("#ssty").html(finalvalue);
      }
      else
      {
        $("#ssty").html(0);
      }

      var sspmty=numberWithCommas(this.value);
      $("#sspmty").html(sspmty);
    });
  });
};

var rangeSliderSavingMortization = function(){
  var slider = $('.range-slider-saving-amortization'),
      range = $('.range-slider-saving-amortization__range'),
      value = $('.range-slider-saving-amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-saving-amortization-value").val(this.value);
      var pmt  = $("#range-slider-saving-goal-amortization-value").val();
      var fp  = $("#frequency-amortization").val();
      var i   = $("#range-slider-interest-amortization-value").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(i != 0)
      {
        var percentage = ((i/fpv)/100).toFixed(7);
        var x = Math.log(((this.value/pmt)*percentage)+1);
        var y = Math.log(1+parseFloat(percentage));
        var finalvalue = (((x/y).toFixed())/fpv).toFixed(1);
        finalvalue=numberWithCommas(finalvalue);
        $("#ssty").html(finalvalue);
      }
      else
      {
        $("#ssty").html(0);
      }

      var ssfvy=numberWithCommas(this.value);
      $("#ssfvy").html(ssfvy);
    });
  });
};

var rangeSliderInterestaMortization = function(){
  var slider = $('.range-slider-interest-amortization'),
      range = $('.range-slider-interest-amortization__range'),
      value = $('.range-slider-interest-amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-interest-amortization-value").val(this.value);
      var pmt  = $("#range-slider-saving-goal-amortization-value").val();
      var fp  = $("#frequency-amortization").val();
      var pv   = $("#range-slider-saving-amortization-value").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(this.value != 0)
      {
        var percentage = ((this.value/fpv)/100).toFixed(7);
        var x = Math.log(((pv/pmt)*percentage)+1);
        var y = Math.log(1+parseFloat(percentage));
        var finalvalue = (((x/y).toFixed())/fpv).toFixed(1);
        finalvalue=numberWithCommas(finalvalue);
        $("#ssty").html(finalvalue);
      }
      else
      {
        $("#ssty").html(0);
      }
      $("#ssiy").html(this.value);
    });
  });
};


var rangeSliderlifeinsurance = function(){
	
  var slider = $('.range-slider-life-insurance_coverage_purpose'),
      range = $('.range-slider-life-insurance_coverage_purpose__range'),
      value = $('.range-slider-life-insurance_coverage_purpose__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){

      $("#lifeinsurance-scenario-coverage-purpose-value").val(this.value);
      var lscpv = $("#lifeinsurance-scenario-coverage-purpose-value").val();
      var cp = $("#currdebts-payment").val();
      var finavalue = (parseInt(this.value)+parseInt(rsspv))-parseInt(cp);
      $("#isslc").html(finavalue);
    });
  });
};



var rangeSliderInsurancePayment = function(){
	
  var slider = $('.range-slider-insurance-payment'),
      range = $('.range-slider-insurance-payment__range'),
      value = $('.range-slider-insurance-payment__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-insurance-payment-value").val(this.value);
      var rsspv = $("#range-slider-saving-payment-value").val();
      var cp = $("#currdebts-payment").val();
      var finavalue = (parseInt(this.value)+parseInt(rsspv))-parseInt(cp);
      $("#isslc").html(finavalue);
    });
  });
};

var rangeSliderSavingPayment = function(){
  var slider = $('.range-slider-saving-payment'),
      range = $('.range-slider-saving-payment__range'),
      value = $('.range-slider-saving-payment__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-saving-payment-value").val(this.value);
      var rsipv = $("#range-slider-insurance-payment-value").val();
      var cp = $("#currdebts-payment").val();
      var finavalue = (parseInt(this.value)+parseInt(rsipv))-parseInt(cp);
      $("#isslc").html(finavalue);
    });
  });
};

var rangeSliderCurrdebtsPayment = function(){
  var slider = $('.currdebts-payment'),
      range = $('.currdebts-payment__range'),
      value = $('.currdebts-payment__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#currdebts-payment").val(this.value);
      var rsspv = $("#range-slider-saving-payment-value").val();
      var rsipv = $("#range-slider-insurance-payment-value").val();
      var finavalue = (parseInt(rsspv)+parseInt(rsipv))-parseInt(this.value);
      $("#isslc").html(finavalue);
    });
  });
};

var rangeSliderGrossMorgate = function(){
  var slider = $('.range-slider-gross-morgate'),
      range = $('.range-slider-gross-morgate__range'),
      value = $('.range-slider-gross-morgate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-gross-morgate-value").val(this.value);
      var rsbmv = $("#range-slider-benefit-morgate-value").val();
      var rslmv = $("#range-slider-lifestyle-morgate-value").val();
      var percentage = (this.value*rsbmv)/100;
      var mle = (percentage-rslmv).toFixed();
      $("#totalexpenses").html(mle);
    });
  });
};

var rangeSliderBenefitMorgate = function(){
  var slider = $('.range-slider-benefit-morgate'),
      range = $('.range-slider-benefit-morgate__range'),
      value = $('.range-slider-benefit-morgate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-benefit-morgate-value").val(this.value);
      var rsgmv = $("#range-slider-gross-morgate-value").val();
      var rslmv = $("#range-slider-lifestyle-morgate-value").val();
      var percentage = (rsgmv*this.value)/100;
      var mle = (percentage-rslmv).toFixed();
      $("#totalexpenses").html(mle);
    });
  });
};

var rangeSliderLifestyleMorgate = function(){
  var slider = $('.range-slider-lifestyle-morgate'),
      range = $('.range-slider-lifestyle-morgate__range'),
      value = $('.range-slider-lifestyle-morgate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-lifestyle-morgate-value").val(this.value);
      var rsgmv = $("#range-slider-gross-morgate-value").val();
      var rsbmv = $("#range-slider-benefit-morgate-value").val();
      var percentage = (rsgmv*rsbmv)/100;
      var mle = (percentage-this.value).toFixed();
      $("#totalexpenses").html(mle);
    });
  });
};

var rangeSliderLifestyleAvailableMorgate = function(){
  var slider = $('.available-morgate'),
      range = $('.available-morgate__range'),
      value = $('.available-morgate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#available-morgate").val(this.value);
    });
  });
};

var rangeSliderLifestyleDecreaseMorgate = function(){
  var slider = $('.decrease-morgate'),
      range = $('.decrease-morgate__range'),
      value = $('.decrease-morgate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#decrease-morgate").val(this.value);
    });
  });
};

var rangeSliderMarketValueCapital = function(){
  var slider = $('.range-slider-market-value-capital'),
      range = $('.range-slider-market-value-capital__range'),
      value = $('.range-slider-market-value-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-market-value-capital-value").val(this.value);
      var t  = $("#range-slider-average-tax-capital-value").val();
      var i  = $("#range-slider-average-return-value").val();
      var n = $("#years-capital").val();
      var inf = $("#range-slider-inflation-rate-capital-value").val();
      if(this.value != 0 && i != 0 && t != 0 && inf != 0)
      {
        t = t/100;
        i = i/100;
        inf = inf/100;
        var r = ((i*(1-t))-inf).toFixed(3);
        var fvn = (this.value*(Math.pow(1+parseFloat(i), n))).toFixed(2);
        var fvrt = (this.value*(Math.pow(1+parseFloat(r), n))).toFixed(2);
        $("#cpry").html(n);
        $("#cprpv").html(this.value);
        $("#cprfvn").html(fvn);
        $("#cprfvrt").html(fvrt);
      } 
      else
      {
        $("#cpry").html(n);
        $("#cprpv").html(this.value);
        $("#cprfvn").html(0);
        $("#cprfvrt").html(0);
      }
    });
  });
};

var rangeSliderAverageTaxCapital = function(){
  var slider = $('.range-slider-average-tax-capital'),
      range = $('.range-slider-average-tax-capital__range'),
      value = $('.range-slider-average-tax-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-tax-capital-value").val(this.value);
      var pv  = $("#range-slider-market-value-capital-value").val();
      var i  = $("#range-slider-average-return-value").val();
      var n = $("#years-capital").val();
      var inf = $("#range-slider-inflation-rate-capital-value").val();
      var t = this.value;
      if(pv != 0 && i != 0 && t != 0 && inf != 0)
      {
        t = t/100;
        i = i/100;
        inf = inf/100;
        var r = ((i*(1-t))-inf).toFixed(3);
        var fvn = (pv*(Math.pow(1+parseFloat(i), n))).toFixed(2);
        var fvrt = (pv*(Math.pow(1+parseFloat(r), n))).toFixed(2);
        $("#cpry").html(n);
        $("#cprpv").html(pv);
        $("#cprfvn").html(fvn);
        $("#cprfvrt").html(fvrt);
      } 
      else
      {
        $("#cpry").html(n);
        $("#cprpv").html(pv);
        $("#cprfvn").html(0);
        $("#cprfvrt").html(0);
      }
    });
  });
};

var rangeSliderAverageReturn = function(){
  var slider = $('.range-slider-average-return'),
      range = $('.range-slider-average-return__range'),
      value = $('.range-slider-average-return__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-return-value").val(this.value);
      var pv  = $("#range-slider-market-value-capital-value").val();
      var t  = $("#range-slider-average-tax-capital-value").val();
      var n = $("#years-capital").val();
      var inf = $("#range-slider-inflation-rate-capital-value").val();
      var i = this.value;
      if(pv != 0 && i != 0 && t != 0 && inf != 0)
      {
        t = t/100;
        i = i/100;
        inf = inf/100;
        var r = ((i*(1-t))-inf).toFixed(3);
        var fvn = (pv*(Math.pow(1+parseFloat(i), n))).toFixed(2);
        var fvrt = (pv*(Math.pow(1+parseFloat(r), n))).toFixed(2);
        $("#cpry").html(n);
        $("#cprpv").html(pv);
        $("#cprfvn").html(fvn);
        $("#cprfvrt").html(fvrt);
      } 
      else
      {
        $("#cpry").html(n);
        $("#cprpv").html(pv);
        $("#cprfvn").html(0);
        $("#cprfvrt").html(0);
      }
    });
  });
};

var rangeSliderInflationRateCapital = function(){
  var slider = $('.range-slider-inflation-rate-capital'),
      range = $('.range-slider-inflation-rate-capital__range'),
      value = $('.range-slider-inflation-rate-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-inflation-rate-capital-value").val(this.value);
      var pv  = $("#range-slider-market-value-capital-value").val();
      var t  = $("#range-slider-average-tax-capital-value").val();
      var n = $("#years-capital").val();
      var i = $("#range-slider-average-return-value").val();
      var inf = this.value;
      if(pv != 0 && i != 0 && t != 0 && inf != 0)
      {
        t = t/100;
        i = i/100;
        inf = inf/100;
        var r = ((i*(1-t))-inf).toFixed(3);
        var fvn = (pv*(Math.pow(1+parseFloat(i), n))).toFixed(2);
        var fvrt = (pv*(Math.pow(1+parseFloat(r), n))).toFixed(2);
        $("#cpry").html(n);
        $("#cprpv").html(pv);
        $("#cprfvn").html(fvn);
        $("#cprfvrt").html(fvrt);
      } 
      else
      {
        $("#cpry").html(n);
        $("#cprpv").html(pv);
        $("#cprfvn").html(0);
        $("#cprfvrt").html(0);
      }
    });
  });
};

var rangeSliderCurrmarketMorgateCapital = function(){
  var slider = $('.range-slider-currmarket-morgate-capital'),
      range = $('.range-slider-currmarket-morgate-capital__range'),
      value = $('.range-slider-currmarket-morgate-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-currmarket-morgate-capital-value").val(this.value);
      var pmt  = $("#range-slider-regular-saving-morgate-capital-value").val();
      var t  = $("#average_tax_rate_morgate_capital").val();
      var inf = $("#range-slider-inflation-rate-morgate-capital-value").val();
      var ii = $("#range-slider-required-return-morgate-capital").val();
      var term = $("#frequency-morgate-capital").val();
      var n = $("#years_capital_morgate_capital").val();
      var terms = "";
      if(term=='Monthly')
         terms = 12;
      if(term=='Weekly')
         terms = 52;
      if(term=='Biweekly')
         terms = 26;
      if(pmt != 0 && t != 0 && inf != 0 && ii != 0 && n != 0)
      {
        i = ((ii/100)/terms).toFixed(6);
        var na = n*terms;
        t = t/100;
        inf = inf/100;
        ia = ii/100;
        var total_pmt = 0;
        for (var j=1; j <= na ; j++) 
        { 
          total_pmt = total_pmt + parseFloat((pmt*(Math.pow(1+parseFloat(i),j))).toFixed(3));
        }
        var fvna = ((total_pmt + (this.value*(Math.pow(1+parseFloat(i), na))))).toFixed(2);
        var r = (((ia*(1-t))-inf)/terms).toFixed(6);
        var total_pmt_rt = 0;
        for (var k=1; k <= na ; k++) 
        { 
          total_pmt_rt = total_pmt_rt + parseFloat((pmt*(Math.pow(1+parseFloat(r),k))).toFixed(3));
        }
        var fvrt = ((total_pmt_rt + (this.value*(Math.pow(1+parseFloat(r), na))))).toFixed(2); 
        $("#csy").html(n);
        $("#csna").html(fvna);
        $("#csrt").html(fvrt);
      } 
      else
      {
        $("#csy").html(n);
        $("#csna").html(0);
        $("#csrt").html(0);
      }
    });
  });
};

var rangeSliderRegularSavingMorgateCapital = function(){
  var slider = $('.range-slider-regular-saving-morgate-capital'),
      range = $('.range-slider-regular-saving-morgate-capital__range'),
      value = $('.range-slider-regular-saving-morgate-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-regular-saving-morgate-capital-value").val(this.value);
      var pv  = $("#range-slider-currmarket-morgate-capital-value").val();
      var t  = $("#average_tax_rate_morgate_capital").val();
      var inf = $("#range-slider-inflation-rate-morgate-capital-value").val();
      var ii = $("#range-slider-required-return-morgate-capital").val();
      var term = $("#frequency-morgate-capital").val();
      var n = $("#years_capital_morgate_capital").val();
      var terms = "";
      if(term=='Monthly')
         terms = 12;
      if(term=='Weekly')
         terms = 52;
      if(term=='Biweekly')
         terms = 26;
      if(this.value != 0 && t != 0 && inf != 0 && ii != 0 && n != 0)
      {
        i = ((ii/100)/terms).toFixed(6);
        var na = n*terms;
        t = t/100;
        inf = inf/100;
        ia = ii/100;
        var total_pmt = 0;
        for (var j=1; j <= na ; j++) 
        { 
          total_pmt = total_pmt + parseFloat((this.value*(Math.pow(1+parseFloat(i),j))).toFixed(3));
        }
        var fvna = ((total_pmt + (pv*(Math.pow(1+parseFloat(i), na))))).toFixed(2);
        var r = (((ia*(1-t))-inf)/terms).toFixed(6);
        var total_pmt_rt = 0;
        for (var k=1; k <= na ; k++) 
        { 
          total_pmt_rt = total_pmt_rt + parseFloat((this.value*(Math.pow(1+parseFloat(r),k))).toFixed(3));
        }
        var fvrt = ((total_pmt_rt + (pv*(Math.pow(1+parseFloat(r), na))))).toFixed(2); 
        $("#csy").html(n);
        $("#csna").html(fvna);
        $("#csrt").html(fvrt);
      } 
      else
      {
        $("#csy").html(n);
        $("#csna").html(0);
        $("#csrt").html(0);
      }
    });
  });
};

var rangeSliderTaxRateMorgateCapital = function(){
  var slider = $('.average_tax_rate_morgate_capital'),
      range = $('.average_tax_rate_morgate_capital__range'),
      value = $('.average_tax_rate_morgate_capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#average_tax_rate_morgate_capital").val(this.value);
      var pv  = $("#range-slider-currmarket-morgate-capital-value").val();
      var pmt  = $("#range-slider-regular-saving-morgate-capital-value").val();
      var inf = $("#range-slider-inflation-rate-morgate-capital-value").val();
      var ii = $("#range-slider-required-return-morgate-capital").val();
      var term = $("#frequency-morgate-capital").val();
      var n = $("#years_capital_morgate_capital").val();
      var terms = "";
      if(term=='Monthly')
         terms = 12;
      if(term=='Weekly')
         terms = 52;
      if(term=='Biweekly')
         terms = 26;
      if(pmt != 0 && this.value != 0 && inf != 0 && ii != 0 && n != 0)
      {
        i = ((ii/100)/terms).toFixed(6);
        var na = n*terms;
        t = this.value/100;
        inf = inf/100;
        ia = ii/100;
        var total_pmt = 0;
        for (var j=1; j <= na ; j++) 
        { 
          total_pmt = total_pmt + parseFloat((pmt*(Math.pow(1+parseFloat(i),j))).toFixed(3));
        }
        var fvna = ((total_pmt + (pv*(Math.pow(1+parseFloat(i), na))))).toFixed(2);
        var r = (((ia*(1-t))-inf)/terms).toFixed(6);
        var total_pmt_rt = 0;
        for (var k=1; k <= na ; k++) 
        { 
          total_pmt_rt = total_pmt_rt + parseFloat((pmt*(Math.pow(1+parseFloat(r),k))).toFixed(3));
        }
        var fvrt = ((total_pmt_rt + (pv*(Math.pow(1+parseFloat(r), na))))).toFixed(2); 
        $("#csy").html(n);
        $("#csna").html(fvna);
        $("#csrt").html(fvrt);
      } 
      else
      {
        $("#csy").html(n);
        $("#csna").html(0);
        $("#csrt").html(0);
      }
    });
  });
};

var rangeSliderInflationRateMorgateCapital = function(){
  var slider = $('.range-slider-inflation-rate-morgate-capital'),
      range = $('.range-slider-inflation-rate-morgate-capital__range'),
      value = $('.range-slider-inflation-rate-morgate-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-inflation-rate-morgate-capital-value").val(this.value);
      var pv  = $("#range-slider-currmarket-morgate-capital-value").val();
      var pmt  = $("#range-slider-regular-saving-morgate-capital-value").val();
      var t = $("#average_tax_rate_morgate_capital").val();
      var ii = $("#range-slider-required-return-morgate-capital").val();
      var term = $("#frequency-morgate-capital").val();
      var n = $("#years_capital_morgate_capital").val();
      var terms = "";
      if(term=='Monthly')
         terms = 12;
      if(term=='Weekly')
         terms = 52;
      if(term=='Biweekly')
         terms = 26;
      if(pmt != 0 && t != 0 && this.value != 0 && ii != 0 && n != 0)
      {
        i = ((ii/100)/terms).toFixed(6);
        var na = n*terms;
        t = t/100;
        inf = this.value/100;
        ia = ii/100;
        var total_pmt = 0;
        for (var j=1; j <= na ; j++) 
        { 
          total_pmt = total_pmt + parseFloat((pmt*(Math.pow(1+parseFloat(i),j))).toFixed(3));
        }
        var fvna = ((total_pmt + (pv*(Math.pow(1+parseFloat(i), na))))).toFixed(2);
        var r = (((ia*(1-t))-inf)/terms).toFixed(6);
        var total_pmt_rt = 0;
        for (var k=1; k <= na ; k++) 
        { 
          total_pmt_rt = total_pmt_rt + parseFloat((pmt*(Math.pow(1+parseFloat(r),k))).toFixed(3));
        }
        var fvrt = ((total_pmt_rt + (pv*(Math.pow(1+parseFloat(r), na))))).toFixed(2); 
        $("#csy").html(n);
        $("#csna").html(fvna);
        $("#csrt").html(fvrt);
      } 
      else
      {
        $("#csy").html(n);
        $("#csna").html(0);
        $("#csrt").html(0);
      }
    });
  });
};

var rangeSliderRequiredReturnMorgateCapital = function(){
  var slider = $('.range-slider-required-return-morgate-capital'),
      range = $('.range-slider-required-return-morgate-capital__range'),
      value = $('.range-slider-required-return-morgate-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-required-return-morgate-capital").val(this.value);
      var pv  = $("#range-slider-currmarket-morgate-capital-value").val();
      var pmt  = $("#range-slider-regular-saving-morgate-capital-value").val();
      var t = $("#average_tax_rate_morgate_capital").val();
      var inf = $("#range-slider-inflation-rate-morgate-capital-value").val();
      var term = $("#frequency-morgate-capital").val();
      var n = $("#years_capital_morgate_capital").val();
      var terms = "";
      if(term=='Monthly')
         terms = 12;
      if(term=='Weekly')
         terms = 52;
      if(term=='Biweekly')
         terms = 26;
      if(pmt != 0 && t != 0 && inf != 0 && this.value != 0 && n != 0)
      {
        i = ((this.value/100)/terms).toFixed(6);
        var na = n*terms;
        t = t/100;
        inf = inf/100;
        ia = this.value/100;
        var total_pmt = 0;
        for (var j=1; j <= na ; j++) 
        { 
          total_pmt = total_pmt + parseFloat((pmt*(Math.pow(1+parseFloat(i),j))).toFixed(3));
        }
        var fvna = ((total_pmt + (pv*(Math.pow(1+parseFloat(i), na))))).toFixed(2);
        var r = (((ia*(1-t))-inf)/terms).toFixed(6);
        var total_pmt_rt = 0;
        for (var k=1; k <= na ; k++) 
        { 
          total_pmt_rt = total_pmt_rt + parseFloat((pmt*(Math.pow(1+parseFloat(r),k))).toFixed(3));
        }
        var fvrt = ((total_pmt_rt + (pv*(Math.pow(1+parseFloat(r), na))))).toFixed(2); 
        $("#csy").html(n);
        $("#csna").html(fvna);
        $("#csrt").html(fvrt);
      } 
      else
      {
        $("#csy").html(n);
        $("#csna").html(0);
        $("#csrt").html(0);
      }
    });
  });
};

var rangeSliderCurrentMarketRateAmortization = function(){
  var slider = $('.range-slider-current-market-rate-amortization'),
      range = $('.range-slider-current-market-rate-amortization__range'),
      value = $('.range-slider-current-market-rate-amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-current-market-rate-amortization-value").val(this.value);
      var pmt  = $("#range-slider-annual-payout-amortization-value").val();
      var t = $("#range-slider-inflation-rate-amortization-capital-value").val();
      var i = $("#range-slider-average-rate-amortization-capital-value").val();
      var y = $("#frequency-amortization-start-year").val();
      var cy = $("#current_year").val();
      var yy = y-cy;
      if(y != 0 && i != 0 && t != 0 && this.value != 0 && pmt != 0)
      {
        i = i/100;
        t = t/100;
        var interest = i*(1-t);
        var pvy;
        for (var j=1; j <= yy  ; j++) 
        { 
          if(j == 1)
          {
            pvy = (this.value*(1+interest))-pmt;
          }
          else
          {
            pvy = (pvy*(1+interest))-pmt;
          }
        }
        var pvay;
        for (var k=1; k <= yy ; k++) 
        { 
            if(k == 1)
            {
              pvay =(this.value*(Math.pow(1+parseFloat(1+interest), yy)))*(1+interest)-pmt;
            }
            else
            {
              pvay =(pvay*(Math.pow(1+parseFloat(1+interest), yy)))*(1+interest)-pmt;
            }
        }
        $("#csy").html(cy);
        $("#cspvy").html(pvy.toFixed());
        $("#cspvay").html(pvay.toFixed());
      } 
      else
      {
        $("#csy").html(cy);
        $("#cspvy").html(0);
        $("#cspvay").html(0);
      }
    });
  });
};

var rangeSliderAnnualPayoutAmortization = function(){
  var slider = $('.range-slider-annual-payout-amortization'),
      range = $('.range-slider-annual-payout-amortization__range'),
      value = $('.range-slider-annual-payout-amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-annual-payout-amortization-value").val(this.value);
      var pv  = $("#range-slider-current-market-rate-amortization-value").val();
      var t = $("#range-slider-inflation-rate-amortization-capital-value").val();
      var i = $("#range-slider-average-rate-amortization-capital-value").val();
      var y = $("#frequency-amortization-start-year").val();
      var cy = $("#current_year").val();
      var yy = y-cy;
      if(y != 0 && i != 0 && t != 0 && this.value != 0 && pv != 0)
      {
        i = i/100;
        t = t/100;
        var interest = i*(1-t);
        var pvy;
        for (var j=1; j <= yy  ; j++) 
        { 
          if(j == 1)
          {
            pvy = (pv*(1+interest))-this.value;
          }
          else
          {
            pvy = (pvy*(1+interest))-this.value;
          }
        }
        var pvay;
        for (var k=1; k <= yy ; k++) 
        { 
            if(k == 1)
            {
              pvay =(pv*(Math.pow(1+parseFloat(1+interest), yy)))*(1+interest)-this.value;
            }
            else
            {
              pvay =(pvay*(Math.pow(1+parseFloat(1+interest), yy)))*(1+interest)-this.value;
            }
        }
        $("#csy").html(cy);
        $("#cspvy").html(pvy.toFixed());
        $("#cspvay").html(pvay.toFixed());
      } 
      else
      {
        $("#csy").html(cy);
        $("#cspvy").html(0);
        $("#cspvay").html(0);
      }
    });
  });
};

var rangeSliderAnnualLongevityAmortization = function(){
  var slider = $('.average-tax-rate-amortization-capital'),
      range = $('.average-tax-rate-amortization-capital__range'),
      value = $('.average-tax-rate-amortization-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#average-tax-rate-amortization-capital").val(this.value);
    });
  });
};

var rangeSliderAnnualInflationRateAmortization = function(){
  var slider = $('.range-slider-inflation-rate-amortization-capital'),
      range = $('.range-slider-inflation-rate-amortization-capital__range'),
      value = $('.range-slider-inflation-rate-amortization-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-inflation-rate-amortization-capital-value").val(this.value);
      var pv  = $("#range-slider-current-market-rate-amortization-value").val();
      var pmt = $("#range-slider-annual-payout-amortization-value").val();
      var i = $("#range-slider-average-rate-amortization-capital-value").val();
      var y = $("#frequency-amortization-start-year").val();
      var cy = $("#current_year").val();
      var yy = y-cy;
      if(y != 0 && i != 0 && pmt != 0 && this.value != 0 && pv != 0)
      {
        i = i/100;
        t = this.value/100;
        var interest = i*(1-this.value);
        var pvy;
        for (var j=1; j <= yy  ; j++) 
        { 
          if(j == 1)
          {
            pvy = (pv*(1+interest))-pmt;
          }
          else
          {
            pvy = (pvy*(1+interest))-pmt;
          }
        }
        var pvay;
        for (var k=1; k <= yy ; k++) 
        { 
            if(k == 1)
            {
              pvay =(pv*(Math.pow(1+parseFloat(1+interest), yy)))*(1+interest)-pmt;
            }
            else
            {
              pvay =(pvay*(Math.pow(1+parseFloat(1+interest), yy)))*(1+interest)-pmt;
            }
        }
        $("#csy").html(cy);
        $("#cspvy").html(pvy.toFixed());
        $("#cspvay").html(pvay.toFixed());
      } 
      else
      {
        $("#csy").html(cy);
        $("#cspvy").html(0);
        $("#cspvay").html(0);
      }
    });
  });
};

var rangeSliderAnnualAverageRateAmortization = function(){
  var slider = $('.range-slider-average-rate-amortization-capital'),
      range = $('.range-slider-average-rate-amortization-capital__range'),
      value = $('.range-slider-average-rate-amortization-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-rate-amortization-capital-value").val(this.value);
      var pv  = $("#range-slider-current-market-rate-amortization-value").val();
      var pmt = $("#range-slider-annual-payout-amortization-value").val();
      var t = $("#range-slider-inflation-rate-amortization-capital-value").val();
      var y = $("#frequency-amortization-start-year").val();
      var cy = $("#current_year").val();
      var yy = y-cy;
      if(y != 0 && i != 0 && pmt != 0 && this.value != 0 && pv != 0)
      {
        i = this.value/100;
        t = t/100;
        var interest = i*(1-t);
        var pvy;
        for (var j=1; j <= yy  ; j++) 
        { 
          if(j == 1)
          {
            pvy = (pv*(1+interest))-pmt;
          }
          else
          {
            pvy = (pvy*(1+interest))-pmt;
          }
        }
        var pvay;
        for (var k=1; k <= yy ; k++) 
        { 
            if(k == 1)
            {
              pvay =(pv*(Math.pow(1+parseFloat(1+interest), yy)))*(1+interest)-pmt;
            }
            else
            {
              pvay =(pvay*(Math.pow(1+parseFloat(1+interest), yy)))*(1+interest)-pmt;
            }
        }
        $("#csy").html(cy);
        $("#cspvy").html(pvy.toFixed());
        $("#cspvay").html(pvay.toFixed());
      } 
      else
      {
        $("#csy").html(cy);
        $("#cspvy").html(0);
        $("#cspvay").html(0);
      }
    });
  });
};

var rangeSliderAmortizationRateMorgateCapital = function(){
  var slider = $('.range-slider-amortization-rate-morgate-capital'),
      range = $('.range-slider-amortization-rate-morgate-capital__range'),
      value = $('.range-slider-amortization-rate-morgate-capital__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-amortization-rate-morgate-capital-value").val(this.value);
    });
  });
};

var rangeSliderDesiredAnnualRetirement = function(){
  var slider = $('.range-slider-desired-annual-retirement'),
      range = $('.range-slider-desired-annual-retirement__range'),
      value = $('.range-slider-desired-annual-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-desired-annual-retirement-value").val(this.value);
      var pmt = $("#initial-investment-retirement").val();
      var t = $("#range-slider-average-tax-rate-retirement-value").val();
      var i = $("#range-slider-average-return-retirement-value").val();
      var age = $("#range-slider-age-option-retirement-value").val();
      var age2 = $("#range-slider-ageto-option-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && i != 0 && this.value != 0 && t != 0 && pmt != 0)
      {
        i = i/100;
        t = t/100;
        var interest = i*(1-year);
        var pvi;
        for (var k=1; k <= year ; k++) 
        { 
            if(k == 1)
            {
              pvi = this.value*(1+interest) - pmt;
            }
            else
            {
              pvi = pvi*(1+interest) - pmt;
            }
        }
        var terms;
        var irs = ((i*(1-t))/12).toFixed(6);
        var nrs = year*12;
        var pmt2 = this.value/((Math.pow(1+parseFloat(irs), nrs))-1)/irs;
        var pmt3 = this.value*(Math.pow(1+parseFloat(irs), nrs));
        for (var j=0; j <= year; j++) 
        { 
          pmt3 = pmt3 + pmt*Math.pow(1+parseFloat(irs), j); 
        } 
        finalpmt = (pmt3).toFixed(2);
        $("#rspmt").html(pmt2.toFixed(2));
        $("#rsfpmt").html(finalpmt);
        $("#rsage").html(age);
        $("#rsage2").html(age2);
      } 
      else
      {
        $("#rsage").html(age);
        $("#rsage2").html(age2);
        $("#rspmt").html(0);
        $("#rsfpmt").html(0);
      }
    });
  });
};

var rangeSliderAgeOptionRetirement = function(){
  var slider = $('.range-slider-age-option-retirement'),
      range = $('.range-slider-age-option-retirement__range'),
      value = $('.range-slider-age-option-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-age-option-retirement-value").val(this.value);
    });
  });
};

var rangeSliderPaymentFrequecyRetirement = function(){
  var slider = $('.range-slider-payment-frequency-retirement'),
      range = $('.range-slider-payment-frequency-retirement__range'),
      value = $('.range-slider-payment-frequency-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-payment-frequency-retirement-value").val(this.value);
    });
  });
};

var rangeSliderInitialInvestmentRetirement = function(){
  var slider = $('.initial-investment-retirement'),
      range = $('.initial-investment-retirement__range'),
      value = $('.initial-investment-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#initial-investment-retirement").val(this.value);
      var pv = $("#range-slider-desired-annual-retirement-value").val();
      var t = $("#range-slider-average-tax-rate-retirement-value").val();
      var i = $("#range-slider-average-return-retirement-value").val();
      var age = $("#range-slider-age-option-retirement-value").val();
      var age2 = $("#range-slider-ageto-option-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && i != 0 && this.value != 0 && t != 0 && pv != 0)
      {
        i = i/100;
        t = t/100;
        var interest = i*(1-year);
        var pvi;
        for (var k=1; k <= year ; k++) 
        { 
            if(k == 1)
            {
              pvi = pv*(1+interest) - this.value;
            }
            else
            {
              pvi = pvi*(1+interest) - this.value;
            }
        }
        var terms;
        var irs = ((i*(1-t))/12).toFixed(6);
        var nrs = year*12;
        var pmt2 = pv/((Math.pow(1+parseFloat(irs), nrs))-1)/irs;
        var pmt3 = pv*(Math.pow(1+parseFloat(irs), nrs));
        for (var j=0; j <= year; j++) 
        { 
          pmt3 = pmt3 + this.value*Math.pow(1+parseFloat(irs), j); 
        } 
        finalpmt = (pmt3).toFixed(2);
        $("#rspmt").html(pmt2.toFixed(2));
        $("#rsfpmt").html(finalpmt);
        $("#rsage").html(age);
        $("#rsage2").html(age2);
      } 
      else
      {
        $("#rsage").html(age);
        $("#rsage2").html(age2);
        $("#rspmt").html(0);
        $("#rsfpmt").html(0);
      }
    });
  });
};

var rangeSliderAverageReturnRetirement = function(){
  var slider = $('.range-slider-average-return-retirement'),
      range = $('.range-slider-average-return-retirement__range'),
      value = $('.range-slider-average-return-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-return-retirement-value").val(this.value);
      var pv = $("#range-slider-desired-annual-retirement-value").val();
      var t = $("#range-slider-average-tax-rate-retirement-value").val();
      var pmt = $("#initial-investment-retirement").val();
      var age = $("#range-slider-age-option-retirement-value").val();
      var age2 = $("#range-slider-ageto-option-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && pmt != 0 && this.value != 0 && t != 0 && pv != 0)
      {
        var i = this.value/100;
        t = t/100;
        var interest = i*(1-year);
        var pvi;
        for (var k=1; k <= year ; k++) 
        { 
            if(k == 1)
            {
              pvi = pv*(1+interest) - this.value;
            }
            else
            {
              pvi = pvi*(1+interest) - this.value;
            }
        }
        var terms;
        var irs = ((i*(1-t))/12).toFixed(6);
        var nrs = year*12;
        var pmt2 = pv/((Math.pow(1+parseFloat(irs), nrs))-1)/irs;
        var pmt3 = pv*(Math.pow(1+parseFloat(irs), nrs));
        for (var j=0; j <= year; j++) 
        { 
          pmt3 = pmt3 + this.value*Math.pow(1+parseFloat(irs), j); 
        } 
        finalpmt = (pmt3).toFixed(2);
        $("#rspmt").html(pmt2.toFixed(2));
        $("#rsfpmt").html(finalpmt);
        $("#rsage").html(age);
        $("#rsage2").html(age2);
      } 
      else
      {
        $("#rsage").html(age);
        $("#rsage2").html(age2);
        $("#rspmt").html(0);
        $("#rsfpmt").html(0);
      }
    });
  });
};

var rangeSliderAverageTaxRateRetirement = function(){
  var slider = $('.range-slider-average-tax-rate-retirement'),
      range = $('.range-slider-average-tax-rate-retirement__range'),
      value = $('.range-slider-average-tax-rate-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-tax-rate-retirement-value").val(this.value);
      var pv = $("#range-slider-desired-annual-retirement-value").val();
      var i = $("#range-slider-average-return-retirement-value").val();
      var pmt = $("#initial-investment-retirement").val();
      var age = $("#range-slider-age-option-retirement-value").val();
      var age2 = $("#range-slider-ageto-option-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && pmt != 0 && this.value != 0 && i != 0 && pv != 0)
      {
        var i = i/100;
        t = this.value/100;
        var interest = i*(1-year);
        var pvi;
        for (var k=1; k <= year ; k++) 
        { 
            if(k == 1)
            {
              pvi = pv*(1+interest) - this.value;
            }
            else
            {
              pvi = pvi*(1+interest) - this.value;
            }
        }
        var terms;
        var irs = ((i*(1-t))/12).toFixed(6);
        var nrs = year*12;
        var ipmt2 = Math.pow(parseFloat(1+irs), nrs);
        var pmt2 = pv/(((Math.pow(1+parseFloat(irs), nrs))-1)/irs);
        var pmt3 = pv*(Math.pow(1+parseFloat(irs), nrs));
        for (var j=0; j <= year; j++) 
        { 
          pmt3 = pmt3 + this.value*Math.pow(1+parseFloat(irs), j); 
        } 
        finalpmt = (pmt3).toFixed(2);
        $("#rspmt").html(pmt2.toFixed(2));
        $("#rsfpmt").html(finalpmt);
        $("#rsage").html(age);
        $("#rsage2").html(age2);
      } 
      else
      {
        $("#rsage").html(age);
        $("#rsage2").html(age2);
        $("#rspmt").html(0);
        $("#rsfpmt").html(0);
      }
    });
  });
};

var rangeSliderIntialInvestmentMorgateRetirement = function(){
  var slider = $('.range-slider-intial-investment-morgate-retirement'),
      range = $('.range-slider-intial-investment-morgate-retirement__range'),
      value = $('.range-slider-intial-investment-morgate-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-intial-investment-morgate-retirement-value").val(this.value);
      var pmt = $("#range-slider-saving-amount-morgate-retirement-value").val();
      var i = $("#range-slider-average-return-morgate-retirement-value").val();
      var age = $("#range-slider-age-option-morgate-retirement-value").val();
      var age2 = $("#range-slider-ageto-option-morgate-retirement-value").val();
      var t =  $("#range-slider-average-tax-rate-morgate-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && pmt != 0 && this.value != 0 && i != 0 && t != 0)
      {
        i = i/100;
        t = t/100;
        year = year/100;
        var interest = i*(1-year);
        var iras = ((i*(1-t))/12).toFixed(6);
        var pmtras = this.value*(Math.pow(1+parseFloat(iras)),year);
        for (var j=0; j <= year; j++) 
        { 
          pmtras = pmtras + pmt*Math.pow(1+parseFloat(iras), j); 
        } 
        var finalpmt = (pmtras).toFixed(2);
        var ny = year*12;
        var finalpvras = (pmt*((Math.pow(1+parseFloat(iras),ny)-1)/iras)).toFixed(2);
        var finalpmtras = (this.value/((1-(1/(Math.pow(1+parseFloat(interest),ny))))/interest)).toFixed(2);
        $("#finalpvras").html(this.value);
        $("#finalretireageras").html(age2);
        $("#finalpmtras").html(finalpmtras);
      } 
      else
      {
        $("#finalpvras").html(this.value);
        $("#finalretireageras").html(0);
        $("#finalpmtras").html(0);
      }
    });
  });
};


var rangeSliderSavingAmountMorgateRetirement = function(){
  var slider = $('.range-slider-saving-amount-morgate-retirement'),
      range = $('.range-slider-saving-amount-morgate-retirement__range'),
      value = $('.range-slider-saving-amount-morgate-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-saving-amount-morgate-retirement-value").val(this.value);
      var pv = $("#range-slider-intial-investment-morgate-retirement-value").val();
      var i = $("#range-slider-average-return-morgate-retirement-value").val();
      var age = $("#range-slider-age-option-morgate-retirement-value").val();
      var age2 = $("#range-slider-ageto-option-morgate-retirement-value").val();
      var t =  $("#range-slider-average-tax-rate-morgate-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && pv != 0 && this.value != 0 && i != 0 && t != 0)
      {
        i = i/100;
        t = t/100;
        year = year/100;
        var interest = i*(1-year);
        var iras = ((i*(1-t))/12).toFixed(6);
        var pmtras = pv*(Math.pow(1+parseFloat(iras)),year);
        for (var j=0; j <= year; j++) 
        { 
          pmtras = pmtras + this.value*Math.pow(1+parseFloat(iras), j); 
        } 
        var finalpmt = (pmtras).toFixed(2);
        var ny = year*12;
        var finalpvras = (this.value*((Math.pow(1+parseFloat(iras),ny)-1)/iras)).toFixed(2);
        var finalpmtras = (pv/((1-(1/(Math.pow(1+parseFloat(interest),ny))))/interest)).toFixed(2);
        $("#finalpvras").html(pv);
        $("#finalretireageras").html(age2);
        $("#finalpmtras").html(finalpmtras);
      } 
      else
      {
        $("#finalpvras").html(pv);
        $("#finalretireageras").html(0);
        $("#finalpmtras").html(0);
      }
    });
  });
};

var rangeSliderInflationRateMorgateRetirement = function(){
  var slider = $('.range-slider-inflation-rate-morgate-retirement'),
      range = $('.range-slider-inflation-rate-morgate-retirement__range'),
      value = $('.range-slider-inflation-rate-morgate-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-inflation-rate-morgate-retirement-value").val(this.value);
    });
  });
};

var rangeSliderAverageRateMorgateRetirement = function(){
  var slider = $('.range-slider-average-return-morgate-retirement'),
      range = $('.range-slider-average-return-morgate-retirement__range'),
      value = $('.range-slider-average-return-morgate-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-return-morgate-retirement-value").val(this.value);
      var pv = $("#range-slider-intial-investment-morgate-retirement-value").val();
      var pmt = $("#range-slider-saving-amount-morgate-retirement-value").val();
      var age = $("#range-slider-age-option-morgate-retirement-value").val();
      var age2 = $("#range-slider-ageto-option-morgate-retirement-value").val();
      var t =  $("#range-slider-average-tax-rate-morgate-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && pv != 0 && this.value != 0 && pmt != 0 && t != 0)
      {
        i = this.value/100;
        t = t/100;
        year = year/100;
        var interest = i*(1-year);
        var iras = ((i*(1-t))/12).toFixed(6);
        var pmtras = pv*(Math.pow(1+parseFloat(iras)),year);
        for (var j=0; j <= year; j++) 
        { 
          pmtras = pmtras + pmt*Math.pow(1+parseFloat(iras), j); 
        } 
        var finalpmt = (pmtras).toFixed(2);
        var ny = year*12;
        var finalpvras = (pmt*((Math.pow(1+parseFloat(iras),ny)-1)/iras)).toFixed(2);
        var finalpmtras = (pv/((1-(1/(Math.pow(1+parseFloat(interest),ny))))/interest)).toFixed(2);
        $("#finalpvras").html(pv);
        $("#finalretireageras").html(age2);
        $("#finalpmtras").html(finalpmtras);
      } 
      else
      {
        $("#finalpvras").html(pv);
        $("#finalretireageras").html(0);
        $("#finalpmtras").html(0);
      }
    });
  });
};

var rangeSliderAverageTaxRateMorgateRetirement = function(){
  var slider = $('.range-slider-average-tax-rate-morgate-retirement'),
      range = $('.range-slider-average-tax-rate-morgate-retirement__range'),
      value = $('.range-slider-average-tax-rate-morgate-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-tax-rate-morgate-retirement-value").val(this.value);
      var pv = $("#range-slider-intial-investment-morgate-retirement-value").val();
      var pmt = $("#range-slider-saving-amount-morgate-retirement-value").val();
      var age = $("#range-slider-age-option-morgate-retirement-value").val();
      var age2 = $("#range-slider-ageto-option-morgate-retirement-value").val();
      var i =  $("#range-slider-average-return-morgate-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && pv != 0 && this.value != 0 && pmt != 0 && i != 0)
      {
        i = i/100;
        t = this.value/100;
        year = year/100;
        var interest = i*(1-year);
        var iras = ((i*(1-t))/12).toFixed(6);
        var pmtras = pv*(Math.pow(1+parseFloat(iras)),year);
        for (var j=0; j <= year; j++) 
        { 
          pmtras = pmtras + pmt*Math.pow(1+parseFloat(iras), j); 
        } 
        var finalpmt = (pmtras).toFixed(2);
        var ny = year*12;
        var finalpvras = (pmt*((Math.pow(1+parseFloat(iras),ny)-1)/iras)).toFixed(2);
        var finalpmtras = (pv/((1-(1/(Math.pow(1+parseFloat(interest),ny))))/interest)).toFixed(2);
        $("#finalpvras").html(pv);
        $("#finalretireageras").html(age2);
        $("#finalpmtras").html(finalpmtras);
      } 
      else
      {
        $("#finalpvras").html(pv);
        $("#finalretireageras").html(0);
        $("#finalpmtras").html(0);
      }
    });
  });
};

var rangeSliderCurrentMarketRateAmortizationRetirement = function(){
  var slider = $('.range-slider-current-market-rate-amortization-retirement'),
      range = $('.range-slider-current-market-rate-amortization-retirement__range'),
      value = $('.range-slider-current-market-rate-amortization-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-current-market-rate-amortization-retirement-value").val(this.value);
      var i = $("#range-slider-average-return-amortization-retirement-value").val();
      var t = $("#range-slider-average-tax-rate-amortization-retirement-value").val();
      var age = $("#range-slider-retirement-age-amortization-retirement-value").val();
      var age2 = $("#range-slider-retirement-ageto-amortization-retirement-value").val();
      var pmt =  $("#range-slider-pmt-amortization-retirement").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && t != 0 && this.value != 0 && pmt != 0 && i != 0)
      {
        i = i/100;
        t = t/100;
        yrcn = year/100;
        var interestrcn = i*(1-yrcn);
        var fpvrcn;
       
        for (var j=1; j <= year ; j++) 
        { 
            if(j ==  1)
            {
              fpvrcn = (this.value*(1+interestrcn))-pmt;
            }
            else
            {
              fpvrcn = (fpvrcn*(1+interestrcn))-pmt; 
            }
        }
        var finalpvcrn = (fpvrcn).toFixed(0);
        $("#pvcrn").html(finalpvcrn);
        $("#datrcn").html(this.value);
      } 
      else
      {
        $("#pvcrn").html(0);
        $("#datrcn").html(this.value);
      }
    });
  });
};

var rangeSliderAverageReturnAmortizationRetirement = function(){
  var slider = $('.range-slider-average-return-amortization-retirement-value'),
      range = $('.range-slider-average-return-amortization-retirement-value__range'),
      value = $('.range-slider-average-return-amortization-retirement-value__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-return-amortization-retirement-value").val(this.value);
      var pmt = $("#range-slider-pmt-amortization-retirement").val();
      var t = $("#range-slider-average-tax-rate-amortization-retirement-value").val();
      var age = $("#range-slider-retirement-age-amortization-retirement-value").val();
      var age2 = $("#range-slider-retirement-ageto-amortization-retirement-value").val();
      var pv =  $("#range-slider-current-market-rate-amortization-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && t != 0 && this.value != 0 && pv != 0 && pmt != 0)
      {
        i = this.value/100;
        t = t/100;
        yrcn = year/100;
        var interestrcn = i*(1-yrcn);
        var fpvrcn;
       
        for (var j=1; j <= year ; j++) 
        { 
            if(j ==  1)
            {
              fpvrcn = (pv*(1+interestrcn))-pmt;
            }
            else
            {
              fpvrcn = (fpvrcn*(1+interestrcn))-pmt; 
            }
        }
        var finalpvcrn = (fpvrcn).toFixed(0);
        $("#pvcrn").html(finalpvcrn);
        $("#datrcn").html(pv);
      } 
      else
      {
        $("#pvcrn").html(0);
        $("#datrcn").html(pv);
      }
    });
  });
};

var rangeSliderAverageTaxRateAmortizationRetirement = function(){
  var slider = $('.range-slider-average-tax-rate-amortization-retirement-value'),
      range = $('.range-slider-average-tax-rate-amortization-retirement-value__range'),
      value = $('.range-slider-average-tax-rate-amortization-retirement-value__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-tax-rate-amortization-retirement-value").val(this.value);
      var pmt = $("#range-slider-pmt-amortization-retirement").val();
      var i = $("#range-slider-average-return-amortization-retirement-value").val();
      var age = $("#range-slider-retirement-age-amortization-retirement-value").val();
      var age2 = $("#range-slider-retirement-ageto-amortization-retirement-value").val();
      var pv =  $("#range-slider-current-market-rate-amortization-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && i != 0 && this.value != 0 && pv != 0 && pmt != 0)
      {
        i = i/100;
        t = this.value/100;
        yrcn = year/100;
        var interestrcn = i*(1-yrcn);
        var fpvrcn;
       
        for (var j=1; j <= year ; j++) 
        { 
            if(j ==  1)
            {
              fpvrcn = (pv*(1+interestrcn))-pmt;
            }
            else
            {
              fpvrcn = (fpvrcn*(1+interestrcn))-pmt; 
            }
        }
        var finalpvcrn = (fpvrcn).toFixed(0);
        $("#pvcrn").html(finalpvcrn);
        $("#datrcn").html(pv);
      } 
      else
      {
        $("#pvcrn").html(0);
        $("#datrcn").html(pv);
      }
    });
  });
};

var rangeSliderPmtAmortizationRetirement = function(){
  var slider = $('.range-slider-pmt-amortization-retirement'),
      range = $('.range-slider-pmt-amortization-retirement__range'),
      value = $('.range-slider-pmt-amortization-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-pmt-amortization-retirement").val(this.value);
      var i = $("#range-slider-average-return-amortization-retirement-value").val();
      var t = $("#range-slider-average-tax-rate-amortization-retirement-value").val();
      var age = $("#range-slider-retirement-age-amortization-retirement-value").val();
      var age2 = $("#range-slider-retirement-ageto-amortization-retirement-value").val();
      var pv =  $("#range-slider-current-market-rate-amortization-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && t != 0 && this.value != 0 && pv != 0 && i != 0)
      {
        i = i/100;
        t = t/100;
        yrcn = year/100;
        var interestrcn = i*(1-yrcn);
        var fpvrcn;
       
        for (var j=1; j <= year ; j++) 
        { 
            if(j ==  1)
            {
              fpvrcn = (pv*(1+interestrcn))-this.value;
            }
            else
            {
              fpvrcn = (fpvrcn*(1+interestrcn))-this.value; 
            }
        }
        var finalpvcrn = (fpvrcn).toFixed(0);
        $("#pvcrn").html(finalpvcrn);
        $("#datrcn").html(pv);
      } 
      else
      {
        $("#pvcrn").html(0);
        $("#datrcn").html(pv);
      }
    });
  });
};

var rangeSliderAnnualPayoutAmortizationRetirement = function(){
  var slider = $('.range-slider-annual-payout-amortization-retirement'),
      range = $('.range-slider-annual-payout-amortization-retirement__range'),
      value = $('.range-slider-annual-payout-amortization-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-annual-payout-amortization-retirement-value").val(this.value);
    });
  });
};

var rangeSliderInflationRateAmortizationRetirement = function(){
  var slider = $('.range-slider-inflation-rate-amortization-retirement'),
      range = $('.range-slider-inflation-rate-amortization-retirement__range'),
      value = $('.range-slider-inflation-rate-amortization-retirement__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-inflation-rate-amortization-retirement-value").val(this.value);
    });
  });
};

var rangeSliderCurrentValueAmortizationCapitalavailable = function(){
  var slider = $('.range-slider-current-value-amortization-capitalavailable'),
      range = $('.range-slider-current-value-amortization-capitalavailable__range'),
      value = $('.range-slider-current-value-amortization-capitalavailable__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-current-value-amortization-capitalavailable-value").val(this.value);
      var i = $("#range-slider-average-return-capital-retirement-value").val();
      var t = $("#range-slider-average-tax-rate-capital-retirement-value").val();
      var age = $("#range-slider-retirement-age-capital-retirement-value").val();
      var age2 = $("#range-slider-retirement-ageto-capital-retirement-value").val();
      var pv =  $("#range-slider-current-market-rate-amortization-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && t != 0 && this.value != 0 && pv != 0 && i != 0)
      {
        i = i/100;
        t = t/100;
        var interest = i*(1-t);
        var finalfvrca = (this.value*(Math.pow(1+parseFloat(interest),year))).toFixed();
        var finalpmtrca = (finalfvrca/((1-(1/(Math.pow(1+parseFloat(interest),year))))/interest)).toFixed();    
        $("#pmtrca").html(finalpmtrca);
        $("#pvrca").html(this.value);
      } 
      else
      {
        $("#pmtrca").html(0);
        $("#pvrca").html(this.value);
      }
    });
  });
};

var rangeSliderInflationRateCapitalavailable = function(){
  var slider = $('.range-slider-inflation-rate-capitalavailable'),
      range = $('.range-slider-inflation-rate-capitalavailable__range'),
      value = $('.range-slider-inflation-rate-capitalavailable__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-inflation-rate-capitalavailable-value").val(this.value);
    });
  });
};

var rangeSliderAverageReturnCapitalavailable = function(){
  var slider = $('.range-slider-average-return-capital-retirement-value'),
      range = $('.range-slider-average-return-capital-retirement-value__range'),
      value = $('.range-slider-average-return-capital-retirement-value__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-return-capital-retirement-value").val(this.value);
      var pv = $("#range-slider-current-value-amortization-capitalavailable-value").val();
      var t = $("#range-slider-average-tax-rate-capital-retirement-value").val();
      var age = $("#range-slider-retirement-age-capital-retirement-value").val();
      var age2 = $("#range-slider-retirement-ageto-capital-retirement-value").val();
      var pv =  $("#range-slider-current-market-rate-amortization-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && t != 0 && this.value != 0 && pv != 0 && pv != 0)
      {
        i = this.value/100;
        t = t/100;
        var interest = i*(1-t);
        var finalfvrca = (pv*(Math.pow(1+parseFloat(interest),year))).toFixed();
        var finalpmtrca = (finalfvrca/((1-(1/(Math.pow(1+parseFloat(interest),year))))/interest)).toFixed();    
        $("#pmtrca").html(finalpmtrca);
      } 
      else
      {
        $("#pmtrca").html(0);
      }
    });
  });
};

var rangeSliderAverageTaxRateCapitalavailable = function(){
  var slider = $('.range-slider-average-tax-rate-capital-retirement-value'),
      range = $('.range-slider-average-tax-rate-capital-retirement-value__range'),
      value = $('.range-slider-average-tax-rate-capital-retirement-value__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-tax-rate-capital-retirement-value").val(this.value);
      var pv = $("#range-slider-current-value-amortization-capitalavailable-value").val();
      var i = $("#range-slider-average-return-capital-retirement-value").val();
      var age = $("#range-slider-retirement-age-capital-retirement-value").val();
      var age2 = $("#range-slider-retirement-ageto-capital-retirement-value").val();
      var pv =  $("#range-slider-current-market-rate-amortization-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && i != 0 && this.value != 0 && pv != 0 && pv != 0)
      {
        i = i/100;
        t = this.value/100;
        var interest = i*(1-t);
        var finalfvrca = (pv*(Math.pow(1+parseFloat(interest),year))).toFixed();
        var finalpmtrca = (finalfvrca/((1-(1/(Math.pow(1+parseFloat(interest),year))))/interest)).toFixed();    
        $("#pmtrca").html(finalpmtrca);
      } 
      else
      {
        $("#pmtrca").html(0);
      }
    });
  });
};

var rangeSliderAnnualPayoutCapitalavailable = function(){
  var slider = $('.range-slider-annual-payout-capitalavailable'),
      range = $('.range-slider-annual-payout-capitalavailable__range'),
      value = $('.range-slider-annual-payout-capitalavailable__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-annual-payout-capitalavailable-value").val(this.value);
    });
  });
};

var rangeSliderInitialInvestmentPayout = function(){
  var slider = $('.range-slider-initial-investment-payout'),
      range = $('.range-slider-initial-investment-payout__range'),
      value = $('.range-slider-initial-investment-payout__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-initial-investment-payout-value").val(this.value);
      var i = $("#range-slider-average-return-payout-value").val();
      var age = $("#range-slider-retirement-age-payout-value").val();
      var age2 = $("#range-slider-retirement-ageto-payout-value").val();
      var t =  $("#range-slider-average-tax-rate-payout-value").val();
      var inf = $("#range-slider-interest-payout-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && i != 0 && this.value != 0 && t != 0 && inf != 0)
      {
        i = i/100;
        t = t/100;
        inf = inf/100;
        var interest = (i*(1-t)).toFixed(3);
        var fvip = (this.value*(Math.pow(1+parseFloat(interest),year))).toFixed();
        var iitip = ((((1+i)*(1+inf))-1)*(1-t)).toFixed(3);
        var pmtip = (fvip/((1-(1/(Math.pow(1+parseFloat(iitip),year))))/iitip)).toFixed(2);
        $("#pmtip").html(pmtip);
        $("#pvip").html(this.value);
      } 
      else
      {
        $("#pmtip").html(0);
        $("#pvip").html(this.value);
      }
    });
  });
};

var rangeSliderInterestPayout = function(){
  var slider = $('.range-slider-interest-payout'),
      range = $('.range-slider-interest-payout__range'),
      value = $('.range-slider-interest-payout__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-interest-payout-value").val(this.value);
      var i = $("#range-slider-average-return-payout-value").val();
      var age = $("#range-slider-retirement-age-payout-value").val();
      var age2 = $("#range-slider-retirement-ageto-payout-value").val();
      var t =  $("#range-slider-average-tax-rate-payout-value").val();
      var pv = $("#range-slider-initial-investment-payout-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && i != 0 && this.value != 0 && t != 0 && pv != 0)
      {
        i = i/100;
        t = t/100;
        inf = this.value/100;
        var interest = (i*(1-t)).toFixed(3);
        var fvip = (pv*(Math.pow(1+parseFloat(interest),year))).toFixed();
        var iitip = ((((1+i)*(1+inf))-1)*(1-t)).toFixed(3);
        var pmtip = (fvip/((1-(1/(Math.pow(1+parseFloat(iitip),year))))/iitip)).toFixed(2);
        $("#pmtip").html(pmtip);
      } 
      else
      {
        $("#pmtip").html(0);
      }
    });
  });
};

var rangeSliderAverageReturnPayoutPayout = function(){
  var slider = $('.range-slider-average-return-payout-value'),
      range = $('.range-slider-average-return-payout-value__range'),
      value = $('.range-slider-average-return-payout-value__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-return-payout-value").val(this.value);
      var inf = $("#range-slider-interest-payout-value").val();
      var age = $("#range-slider-retirement-age-payout-value").val();
      var age2 = $("#range-slider-retirement-ageto-payout-value").val();
      var t =  $("#range-slider-average-tax-rate-payout-value").val();
      var pv = $("#range-slider-initial-investment-payout-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && inf != 0 && this.value != 0 && t != 0 && pv != 0)
      {
        i = this.value/100;
        t = t/100;
        inf = inf/100;
        var interest = (i*(1-t)).toFixed(3);
        var fvip = (pv*(Math.pow(1+parseFloat(interest),year))).toFixed();
        var iitip = ((((1+i)*(1+inf))-1)*(1-t)).toFixed(3);
        var pmtip = (fvip/((1-(1/(Math.pow(1+parseFloat(iitip),year))))/iitip)).toFixed(2);
        $("#pmtip").html(pmtip);
      } 
      else
      {
        $("#pmtip").html(0);
      }
    });
  });
};

var rangeSliderAverageTaxRatePayoutPayout = function(){
  var slider = $('.range-slider-average-tax-rate-payout-value'),
      range = $('.range-slider-average-tax-rate-payout-value__range'),
      value = $('.range-slider-average-tax-rate-payout-value__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-tax-rate-payout-value").val(this.value);
      var inf = $("#range-slider-interest-payout-value").val();
      var age = $("#range-slider-retirement-age-payout-value").val();
      var age2 = $("#range-slider-retirement-ageto-payout-value").val();
      var i =  $("#range-slider-average-return-payout-value").val();
      var pv = $("#range-slider-initial-investment-payout-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && inf != 0 && this.value != 0 && i != 0 && pv != 0)
      {
        i = i/100;
        t = this.value/100;
        inf = inf/100;
        var interest = (i*(1-t)).toFixed(3);
        var fvip = (pv*(Math.pow(1+parseFloat(interest),year))).toFixed();
        var iitip = ((((1+i)*(1+inf))-1)*(1-t)).toFixed(3);
        var pmtip = (fvip/((1-(1/(Math.pow(1+parseFloat(iitip),year))))/iitip)).toFixed(2);
        $("#pmtip").html(pmtip);
      } 
      else
      {
        $("#pmtip").html(0);
      }
    });
  });
};

var rangeSliderInitialInvestmentMortgagePayout = function(){
  var slider = $('.range-slider-initial-investment-mortgage-payout'),
      range = $('.range-slider-initial-investment-mortgage-payout__range'),
      value = $('.range-slider-initial-investment-mortgage-payout__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-initial-investment-mortgage-payout-value").val(this.value);
      var i = $("#range-slider-interest-mortgage-payout-value").val();
      var age = $("#range-slider-mortgag-age-payout-value").val();
      var age2 = $("#range-slider-mortgag-ageto-payout-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && i != 0 && this.value != 0)
      {
        i = i/100;
        var pmt = (this.value/(1-(1/(Math.pow(1+parseFloat(i),year)))/i)).toFixed(2);
        $("#lappv").html(this.value);
        $("#lappmt").html(pmt);
      } 
      else
      {
        $("#lappv").html(this.value);
      }
    });
  });
};

var rangeSliderInterestMortgagePayout = function(){
  var slider = $('.range-slider-interest-mortgage-payout'),
      range = $('.range-slider-interest-mortgage-payout__range'),
      value = $('.range-slider-interest-mortgage-payout__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-interest-mortgage-payout-value").val(this.value);
      var pv = $("#range-slider-initial-investment-mortgage-payout-value").val();
      var age = $("#range-slider-mortgag-age-payout-value").val();
      var age2 = $("#range-slider-mortgag-ageto-payout-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && pv != 0 && this.value != 0)
      {
        i = this.value/100;
        var pmt = (pv/(1-(1/(Math.pow(1+parseFloat(i),year)))/i)).toFixed(2);
        $("#lappmt").html(pmt);
      } 
    });
  });
};

var rangeSliderAverageTaxRateMortgagePayout = function(){
  var slider = $('.range-slider-average-tax-rate-mortgage-payout'),
      range = $('.range-slider-average-tax-rate-mortgage-payout__range'),
      value = $('.range-slider-average-tax-rate-mortgage-payout__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-average-tax-rate-mortgage-payout").val(this.value);
    });
  });
};


var rangeSliderInitialInvestmentAmortizationPayout = function(){
  var slider = $('.range-slider-initial-investment-amortization-payout'),
      range = $('.range-slider-initial-investment-amortization-payout__range'),
      value = $('.range-slider-initial-investment-amortization-payout__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-initial-investment-amortization-payout-value").val(this.value);
    });
  });
};

var rangeSliderInterestAmortizationPayout = function(){
  var slider = $('.range-slider-interest-amortization-payout'),
      range = $('.range-slider-interest-amortization-payout__range'),
      value = $('.range-slider-interest-amortization-payout__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-interest-amortization-payout-value").val(this.value);
    });
  });
};

var rangeSliderSavingBorrwing = function(){
  var slider = $('.range-slider-saving-borrwing'),
      range = $('.range-slider-saving-borrwing__range'),
      value = $('.range-slider-saving-borrwing__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-saving-borrwing-value").val(this.value);
    });
  });
};

var rangeSliderYearBorrwing = function(){
  var slider = $('.range-slider-year-borrwing'),
      range = $('.range-slider-year-borrwing__range'),
      value = $('.range-slider-year-borrwing__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-year-borrwing-value").val(this.value);
    });
  });
};

var rangeSliderInterestBorrwing = function(){
  var slider = $('.range-slider-borrwing-interest'),
      range = $('.range-slider-borrwing-interest__range'),
      value = $('.range-slider-borrwing-interest__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-borrwing-interest-value").val(this.value);
    });
  });
};


var rangeSliderYearMorgateBorrwing = function(){
  var slider = $('.range-slider-year-morgate-borrwing'),
      range = $('.range-slider-year-morgate-borrwing__range'),
      value = $('.range-slider-year-morgate-borrwing__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-year-morgate-borrwing-value").val(this.value);
    });
  });
};

var rangeSliderSavingMorgateBorrwing = function(){





  var slider = $('.range-slider-saving-morgate-borrwing'),
      range = $('.range-slider-saving-morgate-borrwing__range'),
      value = $('.range-slider-saving-morgate-borrwing__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-saving-morgate-borrwing-value").val(this.value);
    });
  });
};

var rangeSliderInterestMorgateBorrwing = function(){
  var slider = $('.range-slider-interest-morgate-borrwing'),
      range = $('.range-slider-interest-morgate-borrwing__range'),
      value = $('.range-slider-interest-morgate-borrwing__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-interest-morgate-borrwing-value").val(this.value);
    });
  });
};

var rangeSliderSavingGoalAmortizationBorrwing = function(){
  var slider = $('.range-slider-saving-goal-amortization-borrwing'),
      range = $('.range-slider-saving-goal-amortization-borrwing__range'),
      value = $('.range-slider-saving-goal-amortization-borrwing__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-saving-goal-amortization-borrwing-value").val(this.value);
    });
  });
};

var rangeSliderSavingAmortizationBorrwing = function(){
  var slider = $('.range-slider-saving-amortization-borrwing'),
      range = $('.range-slider-saving-amortization-borrwing__range'),
      value = $('.range-slider-saving-amortization-borrwing__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-saving-amortization-borrwing-value").val(this.value);
    });
  });
};

var rangeSliderInterestAmortizationBorrwing = function(){
  var slider = $('.range-slider-interest-amortization-borrwing'),
      range = $('.range-slider-interest-amortization-borrwing__range'),
      value = $('.range-slider-interest-amortization-borrwing__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#range-slider-interest-amortization-borrwing-value").val(this.value);
    });
  });
};

var EliteRequiredndesiredShortTermCashInflow = function(){
  var slider = $('.elite_requiredndesired_short_term_cash_inflow'),
      range = $('.elite_requiredndesired_short_term_cash_inflow__range'),
      value = $('.elite_requiredndesired_short_term_cash_inflow__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_requiredndesired_short_term_cash_inflow_value").val(this.value);
    });
  });
};

var EliteRequiredndesiredShortTermCashOutflow = function(){
  var slider = $('.elite_requiredndesired_short_term_cash_outflow'),
      range = $('.elite_requiredndesired_short_term_cash_outflow__range'),
      value = $('.elite_requiredndesired_short_term_cash_outflow__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_requiredndesired_short_term_cash_outflow_value").val(this.value);
    });
  });
};

var EliteRequiredndesiredShortTermNetincome= function(){
  var slider = $('.elite_requiredndesired_short_term_netincome'),
      range = $('.elite_requiredndesired_short_term_netincome__range'),
      value = $('.elite_requiredndesired_short_term_netincome__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_requiredndesired_short_term_netincome_value").val(this.value);
    });
  });
};

var EliteRequiredndesiredShortTermNetinvestavle = function(){
  var slider = $('.elite_requiredndesired_short_term_netinvestavle'),
      range = $('.elite_requiredndesired_short_term_netinvestavle__range'),
      value = $('.elite_requiredndesired_short_term_netinvestavle__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_requiredndesired_short_term_netinvestavle_value").val(this.value);
    });
  });
};

var EliteRequiredndesiredShortTermInflationrate = function(){
  var slider = $('.elite_requiredndesired_short_term_inflationrate'),
      range = $('.elite_requiredndesired_short_term_inflationrate__range'),
      value = $('.elite_requiredndesired_short_term_inflationrate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_requiredndesired_short_term_inflationrate_value").val(this.value);
    });
  });
};

var EliteRequiredndesiredLongTermCashInflow = function(){
  var slider = $('.elite_requiredndesired_long_term_cash_inflow'),
      range = $('.elite_requiredndesired_long_term_cash_inflow__range'),
      value = $('.elite_requiredndesired_long_term_cash_inflow__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_requiredndesired_long_term_cash_inflow_value").val(this.value);
    });
  });
};

var EliteRequiredndesiredLongTermCashOutflow = function(){
  var slider = $('.elite_requiredndesired_long_term_cash_outflow'),
      range = $('.elite_requiredndesired_long_term_cash_outflow__range'),
      value = $('.elite_requiredndesired_long_term_cash_outflow__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_requiredndesired_long_term_cash_outflow_value").val(this.value);
    });
  });
};

var EliteRequiredndesiredLongTermNetincome= function(){
  var slider = $('.elite_requiredndesired_long_term_netincome'),
      range = $('.elite_requiredndesired_long_term_netincome__range'),
      value = $('.elite_requiredndesired_long_term_netincome__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_requiredndesired_long_term_netincome_value").val(this.value);
    });
  });
};

var EliteRequiredndesiredLongTermNetinvestavle = function(){
  var slider = $('.elite_requiredndesired_long_term_netinvestavle'),
      range = $('.elite_requiredndesired_long_term_netinvestavle__range'),
      value = $('.elite_requiredndesired_long_term_netinvestavle__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_requiredndesired_long_term_netinvestavle_value").val(this.value);
    });
  });
};

var EliteRequiredndesiredLongTermInflationrate = function(){
  var slider = $('.elite_requiredndesired_long_term_inflationrate'),
      range = $('.elite_requiredndesired_long_term_inflationrate__range'),
      value = $('.elite_requiredndesired_long_term_inflationrate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_requiredndesired_long_term_inflationrate_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentCurrentLifeStyleExpense = function(){
  var slider = $('.elite_standardlivingassessment_current_life_style_expense'),
      range = $('.elite_standardlivingassessment_current_life_style_expense__range'),
      value = $('.elite_standardlivingassessment_current_life_style_expense__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_current_life_style_expense_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentCurrentLifeCashInflow = function(){
  var slider = $('.elite_standardlivingassessment_current_life_cash_inflow'),
      range = $('.elite_standardlivingassessment_current_life_cash_inflow__range'),
      value = $('.elite_standardlivingassessment_current_life_cash_inflow__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_current_life_cash_inflow_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentCurrentTotalNetWorth = function(){
  var slider = $('.elite_standardlivingassessment_current_total_net_worth'),
      range = $('.elite_standardlivingassessment_current_total_net_worth__range'),
      value = $('.elite_standardlivingassessment_current_total_net_worth__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_current_total_net_worth_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentCurrentRateOfDepletion = function(){
  var slider = $('.elite_standardlivingassessment_current_rate_of_depletion'),
      range = $('.elite_standardlivingassessment_current_rate_of_depletion__range'),
      value = $('.elite_standardlivingassessment_current_rate_of_depletion__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_current_rate_of_depletion_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentCurrentPersnolaityTypeRiskLevel = function(){
  var slider = $('.elite_standardlivingassessment_current_persnolaity_type_risk_level'),
      range = $('.elite_standardlivingassessment_current_persnolaity_type_risk_level__range'),
      value = $('.elite_standardlivingassessment_current_persnolaity_type_risk_level__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_current_persnolaity_type_risk_level_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentCurrentAssumedReturn = function(){
  var slider = $('.elite_standardlivingassessment_current_assumed_return'),
      range = $('.elite_standardlivingassessment_current_assumed_return__range'),
      value = $('.elite_standardlivingassessment_current_assumed_return__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_current_assumed_return_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentProjectedLifeStyleExpense = function(){
  var slider = $('.elite_standardlivingassessment_projected_life_style_expense'),
      range = $('.elite_standardlivingassessment_projected_life_style_expense__range'),
      value = $('.elite_standardlivingassessment_projected_life_style_expense__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_projected_life_style_expense_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentProjectedLifeCashInflow = function(){
  var slider = $('.elite_standardlivingassessment_projected_life_cash_inflow'),
      range = $('.elite_standardlivingassessment_projected_life_cash_inflow__range'),
      value = $('.elite_standardlivingassessment_projected_life_cash_inflow__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_projected_life_cash_inflow_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentProjectedTotalNetWorth = function(){
  var slider = $('.elite_standardlivingassessment_projected_total_net_worth'),
      range = $('.elite_standardlivingassessment_projected_total_net_worth__range'),
      value = $('.elite_standardlivingassessment_projected_total_net_worth__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_projected_total_net_worth_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentProjectedRateOfDepletion = function(){
  var slider = $('.elite_standardlivingassessment_projected_rate_of_depletion'),
      range = $('.elite_standardlivingassessment_projected_rate_of_depletion__range'),
      value = $('.elite_standardlivingassessment_projected_rate_of_depletion__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_projected_rate_of_depletion_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentProjectedPersnolaityTypeRiskLevel = function(){
  var slider = $('.elite_standardlivingassessment_projected_persnolaity_type_risk_level'),
      range = $('.elite_standardlivingassessment_projected_persnolaity_type_risk_level__range'),
      value = $('.elite_standardlivingassessment_projected_persnolaity_type_risk_level__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_projected_persnolaity_type_risk_level_value").val(this.value);
    });
  });
};

var EliteStandardlivingassessmentProjectedAssumedReturn = function(){
  var slider = $('.elite_standardlivingassessment_projected_assumed_return'),
      range = $('.elite_standardlivingassessment_projected_assumed_return__range'),
      value = $('.elite_standardlivingassessment_projected_assumed_return__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_standardlivingassessment_projected_assumed_return_value").val(this.value);
    });
  });
};

var EliteLifestagereviewCurentTotalNetWorth = function(){
  var slider = $('.elite_lifestagereview_curent_total_net_worth'),
      range = $('.elite_lifestagereview_curent_total_net_worth__range'),
      value = $('.elite_lifestagereview_curent_total_net_worth__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_lifestagereview_curent_total_net_worth_value").val(this.value);
    });
  });
};

var EliteLifestagereviewNetInvestableAssetsValue = function(){
  var slider = $('.elite_lifestagereview_net_investable_assets'),
      range = $('.elite_lifestagereview_net_investable_assets__range'),
      value = $('.elite_lifestagereview_net_investable_assets__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_lifestagereview_net_investable_assets_value").val(this.value);
    });
  });
};

var EliteLifestagereviewCurrentLifestyle = function(){
  var slider = $('.elite_lifestagereview_current_lifestyle'),
      range = $('.elite_lifestagereview_current_lifestyle__range'),
      value = $('.elite_lifestagereview_current_lifestyle__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_lifestagereview_current_lifestyle_value").val(this.value);
    });
  });
};

var EliteLifestagereviewCurrentCashInflows = function(){
  var slider = $('.elite_lifestagereview_current_cash_inflows'),
      range = $('.elite_lifestagereview_current_cash_inflows__range'),
      value = $('.elite_lifestagereview_current_cash_inflows__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_lifestagereview_current_cash_inflows_value").val(this.value);
    });
  });
};

var EliteLifestagereviewAge = function(){
  var slider = $('.elite_lifestagereview_age'),
      range = $('.elite_lifestagereview_age__range'),
      value = $('.elite_lifestagereview_age__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#elite_lifestagereview_age_value").val(this.value);
    });
  });
};

var whaticanaffordgrossincome = function(){
  var slider = $('.whaticanafford_gross_income'),
      range = $('.whaticanafford_gross_income__range'),
      value = $('.whaticanafford_gross_income__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
       $("#whaticanafford_gross_income").val(this.value);
      var pt = $('#whaticanafford_property_taxes').val();
      var cf = $('#whaticanafford_condominium_fees').val();
      var hc = $('#whaticanafford_healing_costs').val();
      var bp = $('#whaticanafford_borrowing_payments').val();
      var i = $('#whaticanafford_intrest_rate').val();
      var a = $('#whaticanafford_amoritization').val();
      if(this.value != 0 && i != 0 && a !=0 && bp !=0 && hc !=0 && pt !=0 && cf !=0)
      {
        var tds = parseFloat(pt)+parseFloat(cf)+parseFloat(hc)+parseFloat(bp);
       
        var pmt = ((0.40*parseFloat(this.value))-tds).toFixed(2);
        //var ia  = parseFloat(i)/100;
		var ia  = (parseFloat(i)/100);
        var i  = (parseFloat(i/12)/100).toFixed(6);
        
		v = 1+parseFloat(i);
		
		mp = Math.pow(v, (a)*12);
		
        //var value = ia*(Math.pow(1+ia, (a)*12))/(Math.pow(1+ia,(a)*12)-1);
		var value = [ parseFloat(i)*(mp)/(mp-1)]; 
        var pv = (pmt/value).toFixed(2);
        var pp = (pv/(1-ia)).toFixed(2);
        var dp  = (pp-pv).toFixed(2);
         
        $("#pmt").html(Number(pmt).toLocaleString()); 
        $("#pv").html(Number(pv).toLocaleString());
        $("#mpp").html(Number(pp).toLocaleString());
        $("#dp").html(Number(dp).toLocaleString());
      }
    });
  });
};

var whaticanaffordpropertytaxes = function(){
  var slider = $('.whaticanafford_property_taxes'),
      range = $('.whaticanafford_property_taxes__range'),
      value = $('.whaticanafford_property_taxes__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#whaticanafford_property_taxes").val(this.value);
      var gi = $('#whaticanafford_gross_income').val();
      var cf = $('#whaticanafford_condominium_fees').val();
      var hc = $('#whaticanafford_healing_costs').val();
      var bp = $('#whaticanafford_borrowing_payments').val();
      var i = $('#whaticanafford_intrest_rate').val();
      var a = $('#whaticanafford_amoritization').val();
      if(this.value != 0 && i != 0 && a !=0 && bp !=0 && hc !=0 && gi !=0 && cf !=0)
      {
        var tds = parseInt(this.value)+parseInt(cf)+parseInt(hc)+parseInt(bp);
        var pmt = ((0.40*parseInt(gi))-tds).toFixed(2);
        var ia  = parseInt(i)/100;
        var value = ia*(Math.pow(1+ia,parseInt(a)*12))/(Math.pow(1+ia,parseInt(a)*12)-1);
        var pv = (pmt/value).toFixed(2);
        var pp = (pv/(1-ia)).toFixed(2);

        var dp  = (pp-pv).toFixed(2);
        $("#pmt").html(Number(pmt).toLocaleString()); 
        $("#pv").html(Number(pv).toLocaleString());
        $("#mpp").html(Number(pp).toLocaleString());
        $("#dp").html(Number(dp).toLocaleString());
      }
    });
  });
};

var whaticanaffordcondominiumfees = function(){
  var slider = $('.whaticanafford_condominium_fees'),
      range = $('.whaticanafford_condominium_fees__range'),
      value = $('.whaticanafford_condominium_fees__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#whaticanafford_condominium_fees").val(this.value);
      var gi = $('#whaticanafford_gross_income').val();
      var pt = $('#whaticanafford_property_taxes').val();
      var hc = $('#whaticanafford_healing_costs').val();
      var bp = $('#whaticanafford_borrowing_payments').val();
      var i = $('#whaticanafford_intrest_rate').val();
      var a = $('#whaticanafford_amoritization').val();
      if(this.value != 0 && i != 0 && a !=0 && bp !=0 && hc !=0 && gi !=0 && pt !=0)
      {
        var tds = parseInt(pt)+parseInt(this.value)+parseInt(hc)+parseInt(bp);
        var pmt = ((0.40*parseInt(gi))-tds).toFixed(2);
        var ia  = parseInt(i)/100;
        var value = ia*(Math.pow(1+ia,parseInt(a)*12))/(Math.pow(1+ia,parseInt(a)*12)-1);
        var pv = (pmt/value).toFixed(2);
        var pp = (pv/(1-ia)).toFixed(2);
        var dp  = (pp-pv).toFixed(2);
        $("#pmt").html(Number(pmt).toLocaleString()); 
        $("#pv").html(Number(pv).toLocaleString());
        $("#mpp").html(Number(pp).toLocaleString());
        $("#dp").html(Number(dp).toLocaleString());
      }
    });
  });
};

var whaticanaffordhealingcosts = function(){
  var slider = $('.whaticanafford_healing_costs'),
      range = $('.whaticanafford_healing_costs__range'),
      value = $('.whaticanafford_healing_costs__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#whaticanafford_healing_costs").val(this.value);
      var gi = $('#whaticanafford_gross_income').val();
      var pt = $('#whaticanafford_property_taxes').val();
      var cf = $('#whaticanafford_condominium_fees').val();
      var bp = $('#whaticanafford_borrowing_payments').val();
      var i = $('#whaticanafford_intrest_rate').val();
      var a = $('#whaticanafford_amoritization').val();
      if(this.value != 0 && i != 0 && a !=0 && bp !=0 && cf !=0 && gi !=0 && pt !=0)
      {
        var tds = parseInt(pt)+parseInt(this.value)+parseInt(cf)+parseInt(bp);
        var pmt = ((0.40*parseInt(gi))-tds).toFixed(2);
        var ia  = parseInt(i)/100;
        var value = ia*(Math.pow(1+ia,parseInt(a)*12))/(Math.pow(1+ia,parseInt(a)*12)-1);
        var pv = (pmt/value).toFixed(2);
        var pp = (pv/(1-ia)).toFixed(2);
        var dp  = (pp-pv).toFixed(2);
        $("#pmt").html(Number(pmt).toLocaleString()); 
        $("#pv").html(Number(pv).toLocaleString());
        $("#mpp").html(Number(pp).toLocaleString());
        $("#dp").html(Number(dp).toLocaleString());
      }
    });
  });
};

var whaticanaffordborrowingpayments = function(){
  var slider = $('.whaticanafford_borrowing_payments'),
      range = $('.whaticanafford_borrowing_payments__range'),
      value = $('.whaticanafford_borrowing_payments__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#whaticanafford_borrowing_payments").val(this.value);
      var gi = $('#whaticanafford_gross_income').val();
      var pt = $('#whaticanafford_property_taxes').val();
      var cf = $('#whaticanafford_condominium_fees').val();
      var hc = $('#whaticanafford_healing_costs').val();
      var i = $('#whaticanafford_intrest_rate').val();
      var a = $('#whaticanafford_amoritization').val();
      if(this.value != 0 && i != 0 && a !=0 && hc !=0 && cf !=0 && gi !=0 && pt !=0)
      {
        var tds = parseInt(pt)+parseInt(this.value)+parseInt(cf)+parseInt(hc);
        var pmt = ((0.40*parseInt(gi))-tds).toFixed(2);
        var ia  = parseInt(i)/100;
        var value = ia*(Math.pow(1+ia,parseInt(a)*12))/(Math.pow(1+ia,parseInt(a)*12)-1);
        var pv = (pmt/value).toFixed(2);
       var pp = (pv/(1-ia)).toFixed(2);
        var dp  = (pp-pv).toFixed(2);
        $("#pmt").html(Number(pmt).toLocaleString()); 
        $("#pv").html(Number(pv).toLocaleString());
        $("#mpp").html(Number(pp).toLocaleString());
        $("#dp").html(Number(dp).toLocaleString());
      }
    });
  });
};

var whaticanaffordintrestrate = function(){
  var slider = $('.whaticanafford_intrest_rate'),
      range = $('.whaticanafford_intrest_rate__range'),
      value = $('.whaticanafford_intrest_rate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#whaticanafford_intrest_rate").val(this.value);
      var gi = $('#whaticanafford_gross_income').val();
      var pt = $('#whaticanafford_property_taxes').val();
      var cf = $('#whaticanafford_condominium_fees').val();
      var hc = $('#whaticanafford_healing_costs').val();
      var bp = $('#whaticanafford_borrowing_payments').val();
      var a = $('#whaticanafford_amoritization').val();
      if(this.value != 0 && bp != 0 && a !=0 && hc !=0 && cf !=0 && gi !=0 && pt !=0)
      {
        var tds = parseInt(pt)+parseInt(bp)+parseInt(cf)+parseInt(hc);
        var pmt = ((0.40*parseInt(gi))-tds).toFixed(2);
        var ia  = parseInt(this.value)/100;
        var value = ia*(Math.pow(1+ia,parseInt(a)*12))/(Math.pow(1+ia,parseInt(a)*12)-1);
        var pv = (pmt/value).toFixed(2);
        var pp = (pv/(1-ia)).toFixed(2);
        var dp  = (pp-pv).toFixed(2);
        $("#pmt").html(Number(pmt).toLocaleString()); 
        $("#pv").html(Number(pv).toLocaleString());
        $("#mpp").html(Number(pp).toLocaleString());
        $("#dp").html(Number(dp).toLocaleString());
      }
    });
  });
};

var whaticanaffordamoritization = function(){
  var slider = $('.whaticanafford_amoritization'),
      range = $('.whaticanafford_amoritization__range'),
      value = $('.whaticanafford_amoritization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#whaticanafford_amoritization").val(this.value);
      var gi = $('#whaticanafford_gross_income').val();
      var pt = $('#whaticanafford_property_taxes').val();
      var cf = $('#whaticanafford_condominium_fees').val();
      var hc = $('#whaticanafford_healing_costs').val();
      var bp = $('#whaticanafford_borrowing_payments').val();
      var i = $('#whaticanafford_intrest_rate').val();
      if(this.value != 0 && bp != 0 && i !=0 && hc !=0 && cf !=0 && gi !=0 && pt !=0)
      {
        var tds = parseInt(pt)+parseInt(bp)+parseInt(cf)+parseInt(hc);
        var pmt = ((0.40*parseInt(gi))-tds).toFixed(2);
        var ia  = parseInt(i)/100;
        var value = ia*(Math.pow(1+ia,parseInt(this.value)*12))/(Math.pow(1+ia,parseInt(this.value)*12)-1);
        var pv = (pmt/value).toFixed(2);
        var pp = (pv/(1-ia)).toFixed(2);
        var dp  = (pp-pv).toFixed(2);
        $("#pmt").html(Number(pmt).toLocaleString()); 
        $("#pv").html(Number(pv).toLocaleString());
        $("#mpp").html(Number(pp).toLocaleString());
        $("#dp").html(Number(dp).toLocaleString());
      }
    });
  });
};

var rentorownanticipatedhomeprice = function(){
  var slider = $('.rentorown_anticipated_home_price'),
      range = $('.rentorown_anticipated_home_price__range'),
      value = $('.rentorown_anticipated_home_price__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#rentorown_anticipated_home_price").val(this.value);
      var ri = $('#rentorown_annual_rent_increase').val();
      var ahp = $('#rentorown_anticipated_home_price').val();
      var dp = $('#rentorown_available_down_payment').val();
      var hvi = $('#rentorown_anticipated_home_increase').val();
      var i = $('#rentorown_intrest_rate').val();
      var n = $('#rentorown_amoritization').val();
      var tc = $('#rentorown_comparison_timeframe').val();
      if(this.value != 0 && ri != 0 && ahp !=0 && dp !=0 && hvi !=0 && i !=0 && n !=0 && tc !=0)
      {
        var ar = this.value*12;
        ri = ri/100;
        var yr1 = ar;
        var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
        var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
        var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
        var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
        var pv = ahp-dp;
        n = n*12;
        var ir = ((i/12)/100).toFixed(6);
		a = 1+ parseFloat(ir);
		math_pow = Math.pow(a, 300);
        var pmt = (pv*(ir*math_pow)/(math_pow-1)).toFixed(2);
		
        var ypmt1 = (pmt*12);
        var ypmt1 = ypmt1;
        var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
        var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
        var ypmt4 = ((ypmt3*(1+ri))+ypmt1).toFixed(2);
        var ypmt5 = ((ypmt4*(1+ri))+ypmt1).toFixed(2);
        var cy = tc*12;
        var m_ammount = 0;
        var count = 0;
		mortgage = (yr5 - ypmt5).toFixed(2);
		
        for (var j=cy; j >=1 ; j--) 
        {
			
            var cvalue = 0; 
            if(count == 0)
            {
              m_ammount = pv*(Math.pow(1+ parseFloat(ir),parseInt(j)));
			  
            }
            else
            {
              cvalue = pmt*(Math.pow(1+ parseFloat(ir),parseInt(j)));
			  
            }
            m_ammount = m_ammount-cvalue;
            count++;
        }
        var mb = (m_ammount-pmt).toFixed(2);
		//alert(mb);
        var ei = 0;
        if(tc == 1)
        {
		 
          ei = (ahp*(1+ri)-mb).toFixed(2);  
        }
        if(tc == 2)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 3)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 4)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 5)
        {
			
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 6)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 7)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 8)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 9)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 10)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }          
        $("#cy").html(Number(tc).toLocaleString());
        $("#ei").html(Number(ei).toLocaleString());
        $("#mb").html(Number(mortgage).toLocaleString());
      }
    });
  });
};

var rentorownavailabledownpayment = function(){
  var slider = $('.rentorown_available_down_payment'),
      range = $('.rentorown_available_down_payment__range'),
      value = $('.rentorown_available_down_payment__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#rentorown_available_down_payment").val(this.value);
      var ri = $('#rentorown_annual_rent_increase').val();
      var ahp = $('#rentorown_anticipated_home_price').val();
      var ar = $('#rentorown_anticipated_home_price').val();
      var hvi = $('#rentorown_anticipated_home_increase').val();
      var i = $('#rentorown_intrest_rate').val();
      var n = $('#rentorown_amoritization').val();
      var tc = $('#rentorown_comparison_timeframe').val();
      if(this.value != 0 && ri != 0 && ahp !=0 && ar !=0 && hvi !=0 && i !=0 && n !=0 && tc !=0)
      {
        var ar = ar*12;
        ri = ri/100;
        var yr1 = ar;
        var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
        var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
        var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
        var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
        var pv = ahp-this.value;
        n = n*12;
        var ir = ((i/12)/100).toFixed(6);

        var pmt = (pv*(ir*(Math.pow(1+ir,parseInt(n))))/((Math.pow(1+ir,parseInt(n)))-1)).toFixed(2);
        var ypmt1 = (pmt*12);
        var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
        var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
        var cy = tc*12;
        var m_ammount = 0;
        var count = 0;
        for (var j=cy; j >=1 ; j--) 
        {
            var cvalue = 0; 
            if(count == 0)
            {
              m_ammount = pv*(Math.pow(1+ir,parseInt(j)));
            }
            else
            {
              cvalue = pmt*(Math.pow(1+ir,parseInt(j)));
            }
            m_ammount = m_ammount-cvalue;
            count+1;
        }
        var mb = (m_ammount-pmt).toFixed(2);
        var ei = 0;
        if(tc == 1)
        {
          ei = (ahp*(1+ri)-mb).toFixed(2);  
        }
        if(tc == 2)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 3)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 4)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 5)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 6)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 7)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 8)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 9)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 10)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }          
        $("#cy").html(Number(tc).toLocaleString());
        $("#ei").html(Number(ei).toLocaleString());
        $("#mb").html(Number(mortgage).toLocaleString());
      }
    });
  });
};

var rentorownamoritization = function(){
  var slider = $('.rentorown_amoritization'),
      range = $('.rentorown_amoritization__range'),
      value = $('.rentorown_amoritization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#rentorown_amoritization").val(this.value);
      var ri = $('#rentorown_annual_rent_increase').val();
      var ahp = $('#rentorown_anticipated_home_price').val();
      var ar = $('#rentorown_current_monthly_rent').val();
      var hvi = $('#rentorown_anticipated_home_increase').val();
      var i = $('#rentorown_intrest_rate').val();
      var dp = $('#rentorown_available_down_payment').val();
      var tc = $('#rentorown_comparison_timeframe').val();
      if(this.value != 0 && ri != 0 && ahp !=0 && ar !=0 && hvi !=0 && i !=0 && dp !=0 && tc !=0)
      {
        var ar = ar*12;
        ri = ri/100;
        var yr1 = ar;
        var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
        var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
        var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
        var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
        var pv = ahp-dp;
        n = this.value*12;
        var ir = ((i/12)/100).toFixed(6);

        var pmt = (pv*(ir*(Math.pow(1+ir,parseInt(n))))/((Math.pow(1+ir,parseInt(n)))-1)).toFixed(2);
        var ypmt1 = (pmt*12);
        var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
        var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
        var cy = tc*12;
        var m_ammount = 0;
        var count = 0;
        for (var j=cy; j >=1 ; j--) 
        {
            var cvalue = 0; 
            if(count == 0)
            {
              m_ammount = pv*(Math.pow(1+ir,parseInt(j)));
            }
            else
            {
              cvalue = pmt*(Math.pow(1+ir,parseInt(j)));
            }
            m_ammount = m_ammount-cvalue;
            count+1;
        }
        var mb = (m_ammount-pmt).toFixed(2);
        var ei = 0;
        if(tc == 1)
        {
          ei = (ahp*(1+ri)-mb).toFixed(2);  
        }
        if(tc == 2)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 3)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 4)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 5)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 6)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 7)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 8)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 9)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 10)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }          
        $("#cy").html(Number(tc).toLocaleString());
        $("#ei").html(Number(ei).toLocaleString());
        $("#mb").html(Number(mortgage).toLocaleString());
      }
    });
  });
};

var rentorownintrestrate = function(){
  var slider = $('.rentorown_intrest_rate'),
      range = $('.rentorown_intrest_rate__range'),
      value = $('.rentorown_intrest_rate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#rentorown_intrest_rate").val(this.value);
      var ri = $('#rentorown_annual_rent_increase').val();
      var ahp = $('#rentorown_anticipated_home_price').val();
      var ar = $('#rentorown_current_monthly_rent').val();
      var hvi = $('#rentorown_anticipated_home_increase').val();
      var n = $('#rentorown_amoritization').val();
      var dp = $('#rentorown_available_down_payment').val();
      var tc = $('#rentorown_comparison_timeframe').val();
      if(this.value != 0 && ri != 0 && ahp !=0 && ar !=0 && hvi !=0 && n !=0 && dp !=0 && tc !=0)
      {
        var ar = ar*12;
        ri = ri/100;
        var yr1 = ar;
        var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
        var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
        var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
        var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
        var pv = ahp-dp;
        n = n*12;
        var ir = ((this.value/12)/100).toFixed(6);

        var pmt = (pv*(ir*(Math.pow(1+ir,parseInt(n))))/((Math.pow(1+ir,parseInt(n)))-1)).toFixed(2);
        var ypmt1 = (pmt*12);
        var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
        var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
        var cy = tc*12;
        var m_ammount = 0;
        var count = 0;
        for (var j=cy; j >=1 ; j--) 
        {
            var cvalue = 0; 
            if(count == 0)
            {
              m_ammount = pv*(Math.pow(1+ir,parseInt(j)));
            }
            else
            {
              cvalue = pmt*(Math.pow(1+ir,parseInt(j)));
            }
            m_ammount = m_ammount-cvalue;
            count+1;
        }
        var mb = (m_ammount-pmt).toFixed(2);
        var ei = 0;
        if(tc == 1)
        {
          ei = (ahp*(1+ri)-mb).toFixed(2);  
        }
        if(tc == 2)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 3)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 4)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 5)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 6)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 7)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 8)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 9)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 10)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }          
        $("#cy").html(Number(tc).toLocaleString());
        $("#ei").html(Number(ei).toLocaleString());
        $("#mb").html(Number(mortgage).toLocaleString());
      }
    });
  });
};

var rentorownanticipatedhomeincrease = function(){
  var slider = $('.rentorown_anticipated_home_increase'),
      range = $('.rentorown_anticipated_home_increase__range'),
      value = $('.rentorown_anticipated_home_increase__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#rentorown_anticipated_home_increase").val(this.value);
      var ri = $('#rentorown_annual_rent_increase').val();
      var ahp = $('#rentorown_anticipated_home_price').val();
      var ar = $('#rentorown_current_monthly_rent').val();
      var i = $('#rentorown_intrest_rate').val();
      var n = $('#rentorown_amoritization').val();
      var dp = $('#rentorown_available_down_payment').val();
      var tc = $('#rentorown_comparison_timeframe').val();
      if(this.value != 0 && ri != 0 && ahp !=0 && ar !=0 && i !=0 && n !=0 && dp !=0 && tc !=0)
      {
        var ar = ar*12;
        ri = ri/100;
        var yr1 = ar;
        var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
        var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
        var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
        var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
        var pv = ahp-dp;
        n = n*12;
        var ir = ((i/12)/100).toFixed(6);

        var pmt = (pv*(ir*(Math.pow(1+ir,parseInt(n))))/((Math.pow(1+ir,parseInt(n)))-1)).toFixed(2);
        var ypmt1 = (pmt*12);
        var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
        var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
        var cy = tc*12;
        var m_ammount = 0;
        var count = 0;
        for (var j=cy; j >=1 ; j--) 
        {
            var cvalue = 0; 
            if(count == 0)
            {
              m_ammount = pv*(Math.pow(1+ir,parseInt(j)));
            }
            else
            {
              cvalue = pmt*(Math.pow(1+ir,parseInt(j)));
            }
            m_ammount = m_ammount-cvalue;
            count+1;
        }
        var mb = (m_ammount-pmt).toFixed(2);
        var ei = 0;
        if(tc == 1)
        {
          ei = (ahp*(1+ri)-mb).toFixed(2);  
        }
        if(tc == 2)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 3)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 4)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 5)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 6)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 7)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 8)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 9)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 10)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }          
       $("#cy").html(Number(tc).toLocaleString());
        $("#ei").html(Number(ei).toLocaleString());
        $("#mb").html(Number(mortgage).toLocaleString());
      }
    });
  });
};

var rentorowncurrentmonthlyrent = function(){
  var slider = $('.rentorown_current_monthly_rent'),
      range = $('.rentorown_current_monthly_rent__range'),
      value = $('.rentorown_current_monthly_rent__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#rentorown_current_monthly_rent").val(this.value);
      var ri = $('#rentorown_annual_rent_increase').val();
      var ahp = $('#rentorown_anticipated_home_price').val();
      var hvi = $('#rentorown_anticipated_home_increase').val();
      var i = $('#rentorown_intrest_rate').val();
      var n = $('#rentorown_amoritization').val();
      var dp = $('#rentorown_available_down_payment').val();
      var tc = $('#rentorown_comparison_timeframe').val();
      if(this.value != 0 && ri != 0 && ahp !=0 && hvi !=0 && i !=0 && n !=0 && dp !=0 && tc !=0)
      {
        var ar = this.value*12;
        ri = ri/100;
        var yr1 = ar;
        var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
        var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
        var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
        var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
        var pv = ahp-dp;
        n = n*12;
        var ir = ((i/12)/100).toFixed(6);

        var pmt = (pv*(ir*(Math.pow(1+ir,parseInt(n))))/((Math.pow(1+ir,parseInt(n)))-1)).toFixed(2);
        var ypmt1 = (pmt*12);
        var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
        var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
        var cy = tc*12;
        var m_ammount = 0;
        var count = 0;
        for (var j=cy; j >=1 ; j--) 
        {
            var cvalue = 0; 
            if(count == 0)
            {
              m_ammount = pv*(Math.pow(1+ir,parseInt(j)));
            }
            else
            {
              cvalue = pmt*(Math.pow(1+ir,parseInt(j)));
            }
            m_ammount = m_ammount-cvalue;
            count+1;
        }
        var mb = (m_ammount-pmt).toFixed(2);
        var ei = 0;
        if(tc == 1)
        {
          ei = (ahp*(1+ri)-mb).toFixed(2);  
        }
        if(tc == 2)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 3)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 4)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 5)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 6)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 7)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 8)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 9)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 10)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }          
       $("#cy").html(Number(tc).toLocaleString());
        $("#ei").html(Number(ei).toLocaleString());
        $("#mb").html(Number(mortgage).toLocaleString());
      }
    });
  });
};

var rentorownannualrentincrease = function(){
  var slider = $('.rentorown_annual_rent_increase'),
      range = $('.rentorown_annual_rent_increase__range'),
      value = $('.rentorown_annual_rent_increase__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#rentorown_annual_rent_increase").val(this.value);
      var ar = $('#rentorown_current_monthly_rent').val();
      var ahp = $('#rentorown_anticipated_home_price').val();
      var hvi = $('#rentorown_anticipated_home_increase').val();
      var i = $('#rentorown_intrest_rate').val();
      var n = $('#rentorown_amoritization').val();
      var dp = $('#rentorown_available_down_payment').val();
      var tc = $('#rentorown_comparison_timeframe').val();
      if(this.value != 0 && ar != 0 && ahp !=0 && hvi !=0 && i !=0 && n !=0 && dp !=0 && tc !=0)
      {
        var ar = ar*12;
        ri = this.value/100;
        var yr1 = ar;
        var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
        var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
        var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
        var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
        var pv = ahp-dp;
        n = n*12;
        var ir = ((i/12)/100).toFixed(6);

        var pmt = (pv*(ir*(Math.pow(1+ir,parseInt(n))))/((Math.pow(1+ir,parseInt(n)))-1)).toFixed(2);
        var ypmt1 = (pmt*12);
        var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
        var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
        var cy = tc*12;
        var m_ammount = 0;
        var count = 0;
        for (var j=cy; j >=1 ; j--) 
        {
            var cvalue = 0; 
            if(count == 0)
            {
              m_ammount = pv*(Math.pow(1+ir,parseInt(j)));
            }
            else
            {
              cvalue = pmt*(Math.pow(1+ir,parseInt(j)));
            }
            m_ammount = m_ammount-cvalue;
            count+1;
        }
        var mb = (m_ammount-pmt).toFixed(2);
        var ei = 0;
        if(tc == 1)
        {
          ei = (ahp*(1+ri)-mb).toFixed(2);  
        }
        if(tc == 2)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 3)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 4)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 5)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 6)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 7)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 8)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 9)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 10)
        {
          ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }          
        $("#cy").html(Number(tc).toLocaleString());
        $("#ei").html(Number(ei).toLocaleString());
        $("#mb").html(Number(mortgage).toLocaleString());
      }
    });
  });
};

var rentorowncomparisontimeframe = function(){
  var slider = $('.rentorown_comparison_timeframe'),
      range = $('.rentorown_comparison_timeframe__range'),
      value = $('.rentorown_comparison_timeframe__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#rentorown_comparison_timeframe").val(this.value);
      var ar = $('#rentorown_current_monthly_rent').val();
      var ahp = $('#rentorown_anticipated_home_price').val();
      var hvi = $('#rentorown_anticipated_home_increase').val();
      var i = $('#rentorown_intrest_rate').val();
      var n = $('#rentorown_amoritization').val();
      var dp = $('#rentorown_available_down_payment').val();
      var ri = $('#rentorown_annual_rent_increase').val();
      if(this.value != 0 && ar != 0 && ahp !=0 && hvi !=0 && i !=0 && n !=0 && dp !=0 && ri !=0)
      {
		var yr = "";
        var tc = this.value;
        var ar = ar*12;
        ri = ri/100;
        var yr1 = ar;
        var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
        var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
        var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
        var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
        var yr6 = ((yr5*(1+ri))+yr1).toFixed(2);
        var yr7 = ((yr6*(1+ri))+yr1).toFixed(2);
        var yr8 = ((yr7*(1+ri))+yr1).toFixed(2);
        var yr9 = ((yr8*(1+ri))+yr1).toFixed(2);
        var yr10 = ((yr9*(1+ri))+yr1).toFixed(2);
		
        var pv = ahp-dp;
        n = n*12;
        var ir = ((i/12)/100).toFixed(6);
		a = 1+ parseFloat(ir);
		math_pow = Math.pow(a, 300);
        var pmt = (pv*(ir*math_pow)/(math_pow-1)).toFixed(2);
		
        var ypmt1 = (pmt*12);
        var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
        var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
        var ypmt4 = ((ypmt3*(1+ri))+ypmt1).toFixed(2);
        var ypmt5 = ((ypmt4*(1+ri))+ypmt1).toFixed(2);
        var ypmt6 = ((ypmt5*(1+ri))+ypmt1).toFixed(2);
        var ypmt7 = ((ypmt6*(1+ri))+ypmt1).toFixed(2);
        var ypmt8 = ((ypmt7*(1+ri))+ypmt1).toFixed(2);
        var ypmt9 = ((ypmt8*(1+ri))+ypmt1).toFixed(2);
        var ypmt10 =((ypmt9*(1+ri))+ypmt1).toFixed(2);
        var cy = tc*12;
        var m_ammount = 0;
        var count = 0;
		
		for (var j=cy; j >=1 ; j--) 
        {
			
            var cvalue = 0; 
            if(count == 0)
            {
              m_ammount = pv*(Math.pow(1+ parseFloat(ir),parseInt(j)));
			}
            else
            {
              cvalue = pmt*(Math.pow(1+ parseFloat(ir),parseInt(j)));
			}
            m_ammount = m_ammount-cvalue;
            count++;
        }
        var mb = (m_ammount-pmt).toFixed(2);
		//alert(mb);
        var ei = 0;
        if(tc == 1)
        {
			mortgage = (yr1 - ypmt1).toFixed(2);
			ei = (ahp*(1+ri)-mb).toFixed(2);  
        }
        if(tc == 2)
        {
			mortgage = (yr2 - ypmt2).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 3)
        {
			mortgage = (yr3 - ypmt3).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 4)
        {
			mortgage = (yr4 - ypmt4).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 5)
        {
			mortgage = (yr5 - ypmt5).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 6)
        {
			mortgage = (yr6 - ypmt6).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 7)
        {
			mortgage = (yr7 - ypmt7).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 8)
        {
			mortgage = (yr8 - ypmt8).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 9)
        {
			mortgage = (yr9 - ypmt9).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 10)
        {
			mortgage = (yr10 - ypmt10).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }          
        $("#cy").html(Number(tc).toLocaleString());
        $("#ei").html(Number(ei).toLocaleString());
        $("#mb").html(Number(mortgage).toLocaleString());
      }
    });
  });
};

var mortgagecalculatorpaymentamount = function(){
  var slider = $('.mortgage_calculator_payment_amount'),
      range = $('.mortgage_calculator_payment_amount__range'),
      value = $('.mortgage_calculator_payment_amount__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_calculator_payment_amount").val(this.value);
      var t  = $("#mortgage_calculator_payment_amortization").val();
      var i  = $("#mortgage_calculator_payment_interest_rate").val();
      var fp = $("#mortgage_calculator_payment_frequency").val();
      var td = $("#td_payment").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      var percetage = ((i*(1-td/100))/fpv)/100;
      var finalvalue = (this.value*((parseFloat(percetage)*(Math.pow(1+parseFloat(percetage), fpv*t)))/((Math.pow(1+parseFloat(percetage), fpv*t))-1))).toFixed(2);
     finalvalue=numberWithCommas(finalvalue);


     $("#mortgage_payment").val(finalvalue);
    });
  });
};

var mortgagecalculatorpaymentamortization = function(){
  var slider = $('.mortgage_calculator_payment_amortization'),
      range = $('.mortgage_calculator_payment_amortization__range'),
      value = $('.mortgage_calculator_payment_amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_calculator_payment_amortization").val(this.value);
      var pv  = $("#mortgage_calculator_payment_amount").val();
      var i  = $("#mortgage_calculator_payment_interest_rate").val();
      var fp = $("#mortgage_calculator_payment_frequency").val();
      var td = $("#td_payment").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(this.value != 0 && i != 0)
      {
        var percetage = ((i*(1-td/100))/fpv)/100;
        var finalvalue = (pv*((parseFloat(percetage)*(Math.pow(1+parseFloat(percetage), fpv*this.value)))/((Math.pow(1+parseFloat(percetage), fpv*this.value))-1))).toFixed(2);
       finalvalue=numberWithCommas(finalvalue);


        $("#mortgage_payment").val(finalvalue);
      }
      else
      {
        $("#mortgage_payment").val(0);
      }
    });
  });
};

var mortgagecalculatorpaymentinterestrate = function(){
  var slider = $('.mortgage_calculator_payment_interest_rate'),
      range = $('.mortgage_calculator_payment_interest_rate__range'),
      value = $('.mortgage_calculator_payment_interest_rate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_calculator_payment_interest_rate").val(this.value);
      var pv  = $("#mortgage_calculator_payment_amount").val();
      var t  = $("#mortgage_calculator_payment_amortization").val();
      var fp = $("#mortgage_calculator_payment_frequency").val();
      var td = $("#td_payment").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(this.value !=0 && t != 0)
      {
        var percetage = ((this.value*(1-td/100))/fpv)/100;
        var finalvalue = (pv*((parseFloat(percetage)*(Math.pow(1+parseFloat(percetage), fpv*t)))/((Math.pow(1+parseFloat(percetage), fpv*t))-1))).toFixed(2);
        finalvalue=numberWithCommas(finalvalue);
        $("#mortgage_payment").val(finalvalue);
      }
      else
      {
        $("#mortgage_payment").val(0);
      }
    });
  });
};

var mortgagecalculatoramountamortization = function(){
  var slider = $('.mortgage_calculator_amount_amortization'),
      range = $('.mortgage_calculator_amount_amortization__range'),
      value = $('.mortgage_calculator_amount_amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_calculator_amount_amortization").val(this.value);
      var pv  = $("#mortgage_calculator_amount_payment").val();
      var i  = $("#mortgage_calculator_amount_interest_rate").val();
      var fp = $("#mortgage_calculator_amount_payment_frequency").val();
      var td = $("#td_ammount").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(i !=0 && this.value != 0)
      {
        var percetage = ((i*(1-td/100))/fpv)/100;
        var finalvalue = (pv*((parseFloat(percetage)*(Math.pow(1+parseFloat(percetage), fpv*this.value)))/((Math.pow(1+parseFloat(percetage), fpv*this.value))-1))).toFixed(2);
       finalvalue=numberWithCommas(finalvalue);
        $("#mortgage_ammount").val(finalvalue);
      }
      else
      {
        $("#mortgage_ammount").val(0);
      }
    });
  });
};

var mortgagecalculatoramountpayment = function(){
  var slider = $('.mortgage_calculator_amount_payment'),
      range = $('.mortgage_calculator_amount_payment__range'),
      value = $('.mortgage_calculator_amount_payment__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_calculator_amount_payment").val(this.value);
      var t  = $("#mortgage_calculator_amount_amortization").val();
      var i  = $("#mortgage_calculator_amount_interest_rate").val();
      var fp = $("#mortgage_calculator_amount_payment_frequency").val();
      var td = $("#td_ammount").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(i !=0 && t != 0)
      {
        var percetage = ((i*(1-td/100))/fpv)/100;
        var finalvalue = (this.value*((parseFloat(percetage)*(Math.pow(1+parseFloat(percetage), fpv*t)))/((Math.pow(1+parseFloat(percetage), fpv*t))-1))).toFixed(2);
        finalvalue=numberWithCommas(finalvalue);
        $("#mortgage_ammount").val(finalvalue);
      }
      else
      {
        $("#mortgage_ammount").val(0);
      }
    });
  });
};

var mortgagecalculatoramountinterestrate = function(){
  var slider = $('.mortgage_calculator_amount_interest_rate'),
      range = $('.mortgage_calculator_amount_interest_rate__range'),
      value = $('.mortgage_calculator_amount_interest_rate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_calculator_amount_interest_rate").val(this.value);
      var t  = $("#mortgage_calculator_amount_amortization").val();
      var pv  = $("#mortgage_calculator_amount_payment").val();
      var fp = $("#mortgage_calculator_amount_payment_frequency").val();
      var td = $("#td_ammount").val();
      var fpv = "";
      if(fp=='Monthly')
        fpv = 12;
      if(fp=='Weekly')
        fpv = 52;
      if(fp=='Biweekly')
        fpv = 26;
      if(this.value !=0 && t != 0)
      {
        var percetage = ((this.value*(1-td/100))/fpv)/100;
        var finalvalue = (pv*((parseFloat(percetage)*(Math.pow(1+parseFloat(percetage), fpv*t)))/((Math.pow(1+parseFloat(percetage), fpv*t))-1))).toFixed(2);
       finalvalue=numberWithCommas(finalvalue);
        $("#mortgage_ammount").val(finalvalue);
      }
      else
      {
        $("#mortgage_ammount").val(0);
      }
    });
  });
};

var mortgagecalculatoramortizationamount = function(){
  var slider = $('.mortgage_calculator_amortization_amount'),
      range = $('.mortgage_calculator_amortization_amount__range'),
      value = $('.mortgage_calculator_amortization_amount__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_calculator_amortization_amount").val(this.value);
    });
  });
};

var mortgagecalculatoramortizationamortization = function(){
  var slider = $('.mortgage_calculator_amortization_amortization'),
      range = $('.mortgage_calculator_amortization_amortization__range'),
      value = $('.mortgage_calculator_amortization_amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_calculator_amortization_amortization").val(this.value);
    });
  });
};

var mortgagecalculatoramortizationinterestrate = function(){
  var slider = $('.mortgage_calculator_amortization_interest_rate'),
      range = $('.mortgage_calculator_amortization_interest_rate__range'),
      value = $('.mortgage_calculator_amortization_interest_rate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_calculator_amortization_interest_rate").val(this.value);
    });
  });
};

var mortgagecomparisonmortgage1amount = function(){
  var slider = $('.mortgage_comparison_mortgage1_amount'),
      range = $('.mortgage_comparison_mortgage1_amount__range'),
      value = $('.mortgage_comparison_mortgage1_amount__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_comparison_mortgage1_amount").val(this.value);
    });
  });
};

var mortgagecomparisonmortgage1interestrate = function(){
  var slider = $('.mortgage_comparison_mortgage1_interest_rate'),
      range = $('.mortgage_comparison_mortgage1_interest_rate__range'),
      value = $('.mortgage_comparison_mortgage1_interest_rate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_comparison_mortgage1_interest_rate").val(this.value);
    });
  });
};

var mortgagecomparisonmortgage1amortization = function(){
  var slider = $('.mortgage_comparison_mortgage1_amortization'),
      range = $('.mortgage_comparison_mortgage1_amortization__range'),
      value = $('.mortgage_comparison_mortgage1_amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_comparison_mortgage1_amortization").val(this.value);
    });
  });
};

var mortgagecomparisonmortgage2amount = function(){
  var slider = $('.mortgage_comparison_mortgage2_amount'),
      range = $('.mortgage_comparison_mortgage2_amount__range'),
      value = $('.mortgage_comparison_mortgage2_amount__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_comparison_mortgage2_amount").val(this.value);
    });
  });
};

var mortgagecomparisonmortgage2interestrate = function(){
  var slider = $('.mortgage_comparison_mortgage2_interest_rate'),
      range = $('.mortgage_comparison_mortgage2_interest_rate__range'),
      value = $('.mortgage_comparison_mortgage2_interest_rate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_comparison_mortgage2_interest_rate").val(this.value);
    });
  });
};

var mortgagecomparisonmortgage2amortization = function(){
  var slider = $('.mortgage_comparison_mortgage2_amortization'),
      range = $('.mortgage_comparison_mortgage2_amortization__range'),
      value = $('.mortgage_comparison_mortgage2_amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_comparison_mortgage2_amortization").val(this.value);
    });
  });
};

var mortgagefreefasteranticipatedhomeprice = function(){
  var slider = $('.mortgage_freefaster_anticipated_homeprice'),
      range = $('.mortgage_freefaster_anticipated_homeprice__range'),
      value = $('.mortgage_freefaster_anticipated_homeprice__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_freefaster_anticipated_homeprice").val(this.value);
    });
  });
};

var mortgagefreefasteravailabledownpayment = function(){
  var slider = $('.mortgage_freefaster_available_downpayment'),
      range = $('.mortgage_freefaster_available_downpayment__range'),
      value = $('.mortgage_freefaster_available_downpayment__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_freefaster_available_downpayment").val(this.value);
    });
  });
};

var mortgagefreefasteranticipatedannualhomeprice = function(){
  var slider = $('.mortgage_freefaster_anticipated_annual_homeprice'),
      range = $('.mortgage_freefaster_anticipated_annual_homeprice__range'),
      value = $('.mortgage_freefaster_anticipated_annual_homeprice__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_freefaster_anticipated_annual_homeprice").val(this.value);
    });
  });
};

var mortgagefreefasteranticipatedinterestrate = function(){
  var slider = $('.mortgage_freefaster_anticipated_interest_rate'),
      range = $('.mortgage_freefaster_anticipated_interest_rate__range'),
      value = $('.mortgage_freefaster_anticipated_interest_rate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_freefaster_anticipated_interest_rate").val(this.value);
    });
  });
};

var mortgagefreefasteranticipatedamortization = function(){
  var slider = $('.mortgage_freefaster_anticipated_amortization'),
      range = $('.mortgage_freefaster_anticipated_amortization__range'),
      value = $('.mortgage_freefaster_anticipated_amortization__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_freefaster_anticipated_amortization").val(this.value);
    });
  });
};

var mortgagefreefasteranticipatedpaymentammount = function(){
  var slider = $('.mortgage_freefaster_anticipated_payment_ammount'),
      range = $('.mortgage_freefaster_anticipated_payment_ammount__range'),
      value = $('.mortgage_freefaster_anticipated_payment_ammount__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_freefaster_anticipated_payment_ammount").val(this.value);
    });
  });
};

var mortgagefreefastersmallchangelumsumpayment = function(){
  var slider = $('.mortgage_freefaster_smallchange_lumsum_payment'),
      range = $('.mortgage_freefaster_smallchange_lumsum_payment__range'),
      value = $('.mortgage_freefaster_smallchange_lumsum_payment__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_freefaster_smallchange_lumsum_payment").val(this.value);
    });
  });
};

var mortgagefreefasterincreasepayment = function(){
  var slider = $('.mortgage_freefaster_increase_payment'),
      range = $('.mortgage_freefaster_increase_payment__range'),
      value = $('.mortgage_freefaster_increase_payment__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#mortgage_freefaster_increase_payment").val(this.value);
    });
  });
};

var businesswithdrawalassessmentcurrentwithdrawalamount = function(){
  var slider = $('.businesswithdrawalassessment_current_withdrawalamount'),
      range = $('.businesswithdrawalassessment_current_withdrawalamount__range'),
      value = $('.businesswithdrawalassessment_current_withdrawalamount__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_current_withdrawalamount").val(this.value);
    });
  });
};

var businesswithdrawalassessmentcurrentnetprofitinflow = function(){
  var slider = $('.businesswithdrawalassessment_current_netprofitinflow'),
      range = $('.businesswithdrawalassessment_current_netprofitinflow__range'),
      value = $('.businesswithdrawalassessment_current_netprofitinflow__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_current_netprofitinflow").val(this.value);
    });
  });
};

var businesswithdrawalassessmentcurrentownerequity = function(){
  var slider = $('.businesswithdrawalassessment_current_ownerequity'),
      range = $('.businesswithdrawalassessment_current_ownerequity__range'),
      value = $('.businesswithdrawalassessment_current_ownerequity__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_current_ownerequity").val(this.value);
    });
  });
};


var businesswithdrawalassessmentcurrentrateofdepletion = function(){
  var slider = $('.businesswithdrawalassessment_current_rateofdepletion'),
      range = $('.businesswithdrawalassessment_current_rateofdepletion__range'),
      value = $('.businesswithdrawalassessment_current_rateofdepletion__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_current_rateofdepletion").val(this.value);
    });
  });
};


var businesswithdrawalassessmentcurrentpersonalitytyperisklevel = function(){
  var slider = $('.businesswithdrawalassessment_current_personalitytyperisklevel'),
      range = $('.businesswithdrawalassessment_current_personalitytyperisklevel__range'),
      value = $('.businesswithdrawalassessment_current_personalitytyperisklevel__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_current_personalitytyperisklevel").val(this.value);
    });
  });
};

var businesswithdrawalassessmentcurrentreturnonequity = function(){
  var slider = $('.businesswithdrawalassessment_current_returnonequity'),
      range = $('.businesswithdrawalassessment_current_returnonequity__range'),
      value = $('.businesswithdrawalassessment_current_returnonequity__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_current_returnonequity").val(this.value);
    });
  });
};

var businesswithdrawalassessmentprojectedwithdrawalamount = function(){
  var slider = $('.businesswithdrawalassessment_projected_withdrawalamount'),
      range = $('.businesswithdrawalassessment_projected_withdrawalamount__range'),
      value = $('.businesswithdrawalassessment_projected_withdrawalamount__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_projected_withdrawalamount").val(this.value);
    });
  });
};

var businesswithdrawalassessmentprojectednetprofitinflow = function(){
  var slider = $('.businesswithdrawalassessment_projected_netprofitinflow'),
      range = $('.businesswithdrawalassessment_projected_netprofitinflow__range'),
      value = $('.businesswithdrawalassessment_projected_netprofitinflow__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_projected_netprofitinflow").val(this.value);
    });
  });
};

var businesswithdrawalassessmentprojectedownerequity = function(){
  var slider = $('.businesswithdrawalassessment_projected_ownerequity'),
      range = $('.businesswithdrawalassessment_projected_ownerequity__range'),
      value = $('.businesswithdrawalassessment_projected_ownerequity__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_projected_ownerequity").val(this.value);
    });
  });
};


var businesswithdrawalassessmentprojectedrateofdepletion = function(){
  var slider = $('.businesswithdrawalassessment_projected_rateofdepletion'),
      range = $('.businesswithdrawalassessment_projected_rateofdepletion__range'),
      value = $('.businesswithdrawalassessment_projected_rateofdepletion__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_projected_rateofdepletion").val(this.value);
    });
  });
};


var businesswithdrawalassessmentprojectedpersonalitytyperisklevel = function(){
  var slider = $('.businesswithdrawalassessment_projected_personalitytyperisklevel'),
      range = $('.businesswithdrawalassessment_projected_personalitytyperisklevel__range'),
      value = $('.businesswithdrawalassessment_projected_personalitytyperisklevel__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_projected_personalitytyperisklevel").val(this.value);
    });
  });
};

var businesswithdrawalassessmentprojectedreturnonequity = function(){
  var slider = $('.businesswithdrawalassessment_projected_returnonequity'),
      range = $('.businesswithdrawalassessment_projected_returnonequity__range'),
      value = $('.businesswithdrawalassessment_projected_returnonequity__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesswithdrawalassessment_projected_returnonequity").val(this.value);
    });
  });
};

var businesslifecycletrackernetprofitflows = function(){
  var slider = $('.businesslifecycletracker_netprofitflows'),
      range = $('.businesslifecycletracker_netprofitflows__range'),
      value = $('.businesslifecycletracker_netprofitflows__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesslifecycletracker_netprofitflows").val(this.value);
    });
  });
};

var businesslifecycletrackerdebtequity = function(){
  var slider = $('.businesslifecycletracker_debtequity'),
      range = $('.businesslifecycletracker_debtequity__range'),
      value = $('.businesslifecycletracker_debtequity__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesslifecycletracker_debtequity").val(this.value);
    });
  });
};

var businesslifecycletrackertotalassets = function(){
  var slider = $('.businesslifecycletracker_totalassets'),
      range = $('.businesslifecycletracker_totalassets__range'),
      value = $('.businesslifecycletracker_totalassets__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesslifecycletracker_totalassets").val(this.value);
    });
  });
};

var businesslifecycletrackerinterestrate = function(){
  var slider = $('.businesslifecycletracker_interestrate'),
      range = $('.businesslifecycletracker_interestrate__range'),
      value = $('.businesslifecycletracker_interestrate__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $("#businesslifecycletracker_interestrate").val(this.value);
    });
  });
};

businesslifecycletrackernetprofitflows();

businesslifecycletrackerdebtequity();

businesslifecycletrackertotalassets();

businesslifecycletrackerinterestrate();

businesswithdrawalassessmentprojectedreturnonequity();

businesswithdrawalassessmentprojectedpersonalitytyperisklevel();

businesswithdrawalassessmentprojectedrateofdepletion();

businesswithdrawalassessmentprojectedownerequity();

businesswithdrawalassessmentprojectednetprofitinflow();

businesswithdrawalassessmentprojectedwithdrawalamount();

businesswithdrawalassessmentcurrentreturnonequity();

businesswithdrawalassessmentcurrentpersonalitytyperisklevel();

businesswithdrawalassessmentcurrentrateofdepletion();

businesswithdrawalassessmentcurrentownerequity();

businesswithdrawalassessmentcurrentnetprofitinflow();

businesswithdrawalassessmentcurrentwithdrawalamount();

mortgagefreefasterincreasepayment();

mortgagefreefastersmallchangelumsumpayment();

mortgagefreefasteranticipatedpaymentammount();

mortgagefreefasteranticipatedamortization();

mortgagefreefasteranticipatedinterestrate();

mortgagefreefasteranticipatedannualhomeprice();

mortgagefreefasteravailabledownpayment();

mortgagefreefasteranticipatedhomeprice();

mortgagecomparisonmortgage2amount();

mortgagecomparisonmortgage2interestrate();

mortgagecomparisonmortgage2amortization();

mortgagecomparisonmortgage1amount();

mortgagecomparisonmortgage1interestrate();

mortgagecomparisonmortgage1amortization();

mortgagecalculatoramortizationinterestrate();

mortgagecalculatoramortizationamortization();

mortgagecalculatoramortizationamount();

mortgagecalculatoramountamortization();

mortgagecalculatoramountpayment();

mortgagecalculatoramountinterestrate();

mortgagecalculatorpaymentinterestrate();

mortgagecalculatorpaymentamortization();

mortgagecalculatorpaymentamount();

rentorowncomparisontimeframe();

rentorownannualrentincrease();

rentorownanticipatedhomeprice();

rentorownavailabledownpayment();

rentorownamoritization();

rentorownintrestrate();

rentorownanticipatedhomeincrease();

rentorowncurrentmonthlyrent();

whaticanaffordgrossincome();

whaticanaffordamoritization();

whaticanaffordintrestrate();

whaticanaffordborrowingpayments();

whaticanaffordhealingcosts();

whaticanaffordcondominiumfees();

whaticanaffordpropertytaxes();

rangeSliderSaving();

rangeSliderYear();

rangeSliderInterest();

rangeSliderMorgate();

rangeSliderSavingMorgate();

rangeSliderInterestMorgate();

rangeSliderSavingGoalMortization();

rangeSliderSavingMortization();

rangeSliderInterestaMortization();

rangeSliderlifeinsurance();

rangeSliderInsurancePayment();

rangeSliderSavingPayment();

rangeSliderGrossMorgate();

rangeSliderBenefitMorgate();

rangeSliderLifestyleMorgate();

rangeSliderMarketValueCapital();

rangeSliderAverageTaxCapital();

rangeSliderInflationRateCapital();

rangeSliderCurrmarketMorgateCapital();

rangeSliderRegularSavingMorgateCapital();

rangeSliderInflationRateMorgateCapital();

rangeSliderCurrentMarketRateAmortization();

rangeSliderAnnualPayoutAmortization();

rangeSliderAmortizationRateMorgateCapital();

rangeSliderDesiredAnnualRetirement();

rangeSliderAgeOptionRetirement();

rangeSliderAverageReturnRetirement();

rangeSliderIntialInvestmentMorgateRetirement();

rangeSliderInflationRateMorgateRetirement();

rangeSliderCurrentMarketRateAmortizationRetirement();

rangeSliderAnnualPayoutAmortizationRetirement();

rangeSliderInflationRateAmortizationRetirement();

rangeSliderCurrentValueAmortizationCapitalavailable();

rangeSliderInflationRateCapitalavailable();

rangeSliderAnnualPayoutCapitalavailable();

rangeSliderInitialInvestmentPayout();

rangeSliderInterestPayout();

rangeSliderInitialInvestmentMortgagePayout();

rangeSliderInterestMortgagePayout();

rangeSliderInitialInvestmentAmortizationPayout();

rangeSliderInterestAmortizationPayout();

rangeSliderSavingBorrwing();

rangeSliderYearBorrwing();

rangeSliderInterestBorrwing();

rangeSliderYearMorgateBorrwing();

rangeSliderSavingMorgateBorrwing();

rangeSliderInterestMorgateBorrwing();

rangeSliderSavingGoalAmortizationBorrwing();

rangeSliderSavingAmortizationBorrwing();

rangeSliderInterestAmortizationBorrwing();

rangeSliderSavingAmountMorgateRetirement();

EliteRequiredndesiredShortTermCashInflow();

EliteRequiredndesiredShortTermCashOutflow();

EliteRequiredndesiredShortTermNetincome();

EliteRequiredndesiredShortTermNetinvestavle();

EliteRequiredndesiredShortTermInflationrate();

EliteRequiredndesiredLongTermCashInflow();

EliteRequiredndesiredLongTermCashOutflow();

EliteRequiredndesiredLongTermNetincome();

EliteRequiredndesiredLongTermNetinvestavle();

EliteRequiredndesiredLongTermInflationrate();

EliteStandardlivingassessmentCurrentLifeStyleExpense();

EliteStandardlivingassessmentCurrentLifeCashInflow();

EliteStandardlivingassessmentCurrentTotalNetWorth();

EliteStandardlivingassessmentCurrentRateOfDepletion();

EliteStandardlivingassessmentCurrentPersnolaityTypeRiskLevel();

EliteStandardlivingassessmentCurrentAssumedReturn();

EliteStandardlivingassessmentProjectedLifeStyleExpense();

EliteStandardlivingassessmentProjectedLifeCashInflow();

EliteStandardlivingassessmentProjectedTotalNetWorth();

EliteStandardlivingassessmentProjectedRateOfDepletion();

EliteStandardlivingassessmentProjectedPersnolaityTypeRiskLevel();

EliteStandardlivingassessmentProjectedAssumedReturn();

EliteLifestagereviewCurentTotalNetWorth();

EliteLifestagereviewNetInvestableAssetsValue();

EliteLifestagereviewCurrentLifestyle();

EliteLifestagereviewCurrentCashInflows();

EliteLifestagereviewAge();

rangeSliderCurrdebtsPayment();

rangeSliderLifestyleAvailableMorgate();

rangeSliderLifestyleDecreaseMorgate();

rangeSliderAverageReturn();

rangeSliderTaxRateMorgateCapital();

rangeSliderRequiredReturnMorgateCapital();

rangeSliderAnnualLongevityAmortization();

rangeSliderAnnualInflationRateAmortization();

rangeSliderAnnualAverageRateAmortization();

rangeSliderPaymentFrequecyRetirement();

rangeSliderInitialInvestmentRetirement();

rangeSliderAverageTaxRateRetirement();

rangeSliderAverageRateMorgateRetirement();

rangeSliderAverageTaxRateMorgateRetirement();

rangeSliderAverageReturnAmortizationRetirement();

rangeSliderAverageTaxRateAmortizationRetirement();

rangeSliderPmtAmortizationRetirement();

rangeSliderAverageTaxRateCapitalavailable();

rangeSliderAverageReturnCapitalavailable();

rangeSliderAverageReturnPayoutPayout();

rangeSliderAverageTaxRatePayoutPayout();

rangeSliderAverageTaxRateMortgagePayout();

$(document).ready(function(){
	
	$("#linkform").submit(function(event){
            event.preventDefault();
				var base_url = window.location.hostname;
            $.ajax({
                    url:"http://"+base_url+'/users/saveldata',
                    type:'post',
                    data:$(this).serialize(),
                    success:function(result){
                        window.location.reload(true);
                    }

            });
        });
	
	
	$('#rentorown_frm input').keyup(function(){
		$(this).parents('div.col-lg-12').find('input[type="range"]').val($(this).val());
		$(this).parents('div.col-lg-12').find('input[type="range"]').trigger('change');
	});
	
	$('#retirement_scenario_payment_frm input[type="range"]').change(function(){
		
		update_scenario_graph();
		
	});	
		
	$('#rentorown_frm input[type="range"]').change(function(){
		update_graph();
	  var tc = $("#rentorown_comparison_timeframe").val();
      var ar = $('#rentorown_current_monthly_rent').val();
      var ahp = $('#rentorown_anticipated_home_price').val();
      var hvi = $('#rentorown_anticipated_home_increase').val();
      var i = $('#rentorown_intrest_rate').val();
      var n = $('#rentorown_amoritization').val();
      var dp = $('#rentorown_available_down_payment').val();
      var ri = $('#rentorown_annual_rent_increase').val();
      if(tc != 0 && ar != 0 && ahp !=0 && hvi !=0 && i !=0 && n !=0 && dp !=0 && ri !=0)
      {
		var yr = "";
        //var tc = this.value;
        var ar = ar*12;
        ri = ri/100;
        var yr1 = ar;
        var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
        var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
        var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
        var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
        var yr6 = ((yr5*(1+ri))+yr1).toFixed(2);
        var yr7 = ((yr6*(1+ri))+yr1).toFixed(2);
        var yr8 = ((yr7*(1+ri))+yr1).toFixed(2);
        var yr9 = ((yr8*(1+ri))+yr1).toFixed(2);
        var yr10 = ((yr9*(1+ri))+yr1).toFixed(2);
		
        var pv = ahp-dp;
        n = n*12;
        var ir = ((i/12)/100).toFixed(6);
		a = 1+ parseFloat(ir);
		math_pow = Math.pow(a, 300);
        var pmt = (pv*(ir*math_pow)/(math_pow-1)).toFixed(2);
		
        var ypmt1 = (pmt*12);
        var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
        var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
        var ypmt4 = ((ypmt3*(1+ri))+ypmt1).toFixed(2);
        var ypmt5 = ((ypmt4*(1+ri))+ypmt1).toFixed(2);
        var ypmt6 = ((ypmt5*(1+ri))+ypmt1).toFixed(2);
        var ypmt7 = ((ypmt6*(1+ri))+ypmt1).toFixed(2);
        var ypmt8 = ((ypmt7*(1+ri))+ypmt1).toFixed(2);
        var ypmt9 = ((ypmt8*(1+ri))+ypmt1).toFixed(2);
        var ypmt10 =((ypmt9*(1+ri))+ypmt1).toFixed(2);
        var cy = tc*12;
        var m_ammount = 0;
        var count = 0;
		
		for (var j=cy; j >=1 ; j--) 
        {
			
            var cvalue = 0; 
            if(count == 0)
            {
              m_ammount = pv*(Math.pow(1+ parseFloat(ir),parseInt(j)));
			}
            else
            {
              cvalue = pmt*(Math.pow(1+ parseFloat(ir),parseInt(j)));
			}
            m_ammount = m_ammount-cvalue;
            count++;
        }
        var mb = (m_ammount-pmt).toFixed(2);
		//alert(mb);
        var ei = 0;
        if(tc == 1)
        {
			mortgage = (yr1 - ypmt1).toFixed(2);
			ei = (ahp*(1+ri)-mb).toFixed(2);  
        }
        if(tc == 2)
        {
			mortgage = (yr2 - ypmt2).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 3)
        {
			mortgage = (yr3 - ypmt3).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 4)
        {
			mortgage = (yr4 - ypmt4).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 5)
        {
			mortgage = (yr5 - ypmt5).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 6)
        {
			mortgage = (yr6 - ypmt6).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 7)
        {
			mortgage = (yr7 - ypmt7).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 8)
        {
			mortgage = (yr8 - ypmt8).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 9)
        {
			mortgage = (yr9 - ypmt9).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 10)
        {
			mortgage = (yr10 - ypmt10).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }          
        $("#cy").html(tc);
        $("#ei").html(ei);
        $("#mb").html(mortgage);
      }
	});
	
	
	$('#whaticanafford_frm input').keyup(function(){
		$(this).parents('div.col-lg-12').find('input[type="range"]').val($(this).val());
		$(this).parents('div.col-lg-12').find('input[type="range"]').trigger('change');
	});
	
	$('#whaticanafford_frm input[type="range"]').change(function(){
	  update_whaticanafford();
	  
	});
	function update_whaticanafford(){
	  var wgi = $("#whaticanafford_gross_income").val();
      var pt = $('#whaticanafford_property_taxes').val();
      var cf = $('#whaticanafford_condominium_fees').val();
      var hc = $('#whaticanafford_healing_costs').val();
      var bp = $('#whaticanafford_borrowing_payments').val();
      var i = $('#whaticanafford_intrest_rate').val();
      var a = $('#whaticanafford_amoritization').val();
      if(wgi != 0 && i != 0 && a !=0 && bp !=0 && hc !=0 && pt !=0 && cf !=0)
      {
        var tds = parseFloat(pt)+parseFloat(cf)+parseFloat(hc)+parseFloat(bp);
       
        var pmt = ((0.40*parseFloat(wgi))-tds).toFixed(2);
        //var ia  = parseFloat(i)/100;
		var ia  = (parseFloat(i)/100);
        var i  = (parseFloat(i/12)/100).toFixed(6);
        
		v = 1+parseFloat(i);
		
		mp = Math.pow(v, (a)*12);
		
        //var value = ia*(Math.pow(1+ia, (a)*12))/(Math.pow(1+ia,(a)*12)-1);
		var value = [ parseFloat(i)*(mp)/(mp-1)]; 
        var pv = (pmt/value).toFixed(2);
        var pp = (pv/(1-ia)).toFixed(2);
        var dp  = (pp-pv).toFixed(2);
         
        $("#pmt").html(Number(pmt).toLocaleString()); 
        $("#pv").html(Number(pv).toLocaleString());
        $("#mpp").html(Number(pp).toLocaleString());
        $("#dp").html(Number(dp).toLocaleString());
      }
	}
	$(document).on('click', '#get_chart', function(){
      var tc = $("#rentorown_comparison_timeframe").val();
      var ar = $('#rentorown_current_monthly_rent').val();
      var ahp = $('#rentorown_anticipated_home_price').val();
      var hvi = $('#rentorown_anticipated_home_increase').val();
      var i = $('#rentorown_intrest_rate').val();
      var n = $('#rentorown_amoritization').val();
      var dp = $('#rentorown_available_down_payment').val();
      var ri = $('#rentorown_annual_rent_increase').val();
      if(this.value != 0 && ar != 0 && ahp !=0 && hvi !=0 && i !=0 && n !=0 && dp !=0 && ri !=0)
      {
		var yr = "";
        
		
        var ar = ar*12;
        ri = ri/100;
        var yr1 = ar;
        var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
        var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
        var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
        var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
        var yr6 = ((yr5*(1+ri))+yr1).toFixed(2);
        var yr7 = ((yr6*(1+ri))+yr1).toFixed(2);
        var yr8 = ((yr7*(1+ri))+yr1).toFixed(2);
        var yr9 = ((yr8*(1+ri))+yr1).toFixed(2);
        var yr10 = ((yr9*(1+ri))+yr1).toFixed(2);
		
        var pv = ahp-dp;
        n = n*12;
        var ir = ((i/12)/100).toFixed(6);
		a = 1+ parseFloat(ir);
		math_pow = Math.pow(a, 300);
        var pmt = (pv*(ir*math_pow)/(math_pow-1)).toFixed(2);
		
        var ypmt = (pmt*12);
        var ypmt1 = (pmt*12);
        var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
        var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
        var ypmt4 = ((ypmt3*(1+ri))+ypmt1).toFixed(2);
        var ypmt5 = ((ypmt4*(1+ri))+ypmt1).toFixed(2);
        var ypmt6 = ((ypmt5*(1+ri))+ypmt1).toFixed(2);
        var ypmt7 = ((ypmt6*(1+ri))+ypmt1).toFixed(2);
        var ypmt8 = ((ypmt7*(1+ri))+ypmt1).toFixed(2);
        var ypmt9 = ((ypmt8*(1+ri))+ypmt1).toFixed(2);
        var ypmt10 =((ypmt9*(1+ri))+ypmt1).toFixed(2);
        var cy = tc*12;
        var m_ammount = 0;
        var count = 0;
		var cvalue = 0;
		for (var j=1; j <=cy ; j++) 
        {
			
            // 
            if(count == 0)
            {
              m_ammount = pv*(Math.pow(1+ parseFloat(ir),parseInt(j))); 
			 
			}
            else
            {
              cvalue = pmt*(Math.pow(1+ parseFloat(ir),parseInt(j)));
			}
            m_ammount = m_ammount-cvalue;
            count++;
			
				
			
        }
        var mb = (m_ammount-pmt).toFixed(2);
		
        var ei = 0;
        if(tc == 1)
        {
			mortgage = (yr1 - ypmt1).toFixed(2);
			ei = (ahp*(1+ri)-mb).toFixed(2);  
        }
        if(tc == 2)
        {
			mortgage = (yr2 - ypmt2).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 3)
        {
			mortgage = (yr3 - ypmt3).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 4)
        {
			mortgage = (yr4 - ypmt4).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 5)
        {
			mortgage = (yr5 - ypmt5).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 6)
        {
			mortgage = (yr6 - ypmt6).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 7)
        {
			mortgage = (yr7 - ypmt7).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 8)
        {
			mortgage = (yr8 - ypmt8).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 9)
        {
			mortgage = (yr9 - ypmt9).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }
        if(tc == 10)
        {
			mortgage = (yr10 - ypmt10).toFixed(2);
			ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
        }     
		
		n = 1;
		var dvTable = $("#result-bar-graph");
		 dvTable.html("");
		for (var i = 0; i < tc; i++) {
			var mb = (m_ammount-pmt).toFixed(2);
			//alert(mb);
				if(i == 0){
					yr1 = ar.toFixed(2);
					ypmt1 = ypmt.toFixed(2);
				}else{
					yr1 = ((yr1*(1+ri))+ar).toFixed(2);
					ypmt1 = ((ypmt1*(1+ri))+ypmt).toFixed(2);
				}
				mortgage = (yr1 - ypmt1).toFixed(2);
				ei = (ahp*(Math.pow(1+parseFloat(ri),parseInt(n)))-mb).toFixed(2);
				var row = $("<tr/>");
            
            for (var j = 0; j < 5; j++) {
				
				
                var cell = $("<td />");
				
				if(j==0){
					cell.html("Year "+n);
					
				}else if(j==1){
					
					cell.html("$"+Number(yr1).toLocaleString());
					
				}else if(j==2){
					cell.html("$"+Number(ypmt1).toLocaleString());
					
				}else if(j==3){
					cell.html("$"+Number(ei).toLocaleString());
				}else{
					cell.html("$"+Number(mortgage).toLocaleString());
				} 
                row.append(cell);
            }
			n++;
			dvTable.append(row);
        }

		
		$('.popupBlocker').show();
		
      }
    });
	
	function update_scenario_graph(){
		
	  var pf = $("#range-slider-payment-frequency-retirement__range").val();
      var pv = $("#range-slider-desired-annual-retirement-value").val();
      var t = $("#range-slider-average-tax-rate-retirement-value").val();
      var i = $("#range-slider-average-return-retirement-value").val();
      var age = $("#range-slider-age-option-retirement-value").val();
      var age2 = $("#range-slider-ageto-option-retirement-value").val();
      var year = age2-age;
      if(age != 0 && age2 != 0 && i != 0 && pf != 0 && t != 0 && pv != 0)
      {
        i = i/100;
        t = t/100;
        var interest = i*(1-year);
        var pvi;
        for (var k=1; k <= year ; k++) 
        { 
            if(k == 1)
            {
              pvi = pv*(1+interest) - pf;
            }
            else
            {
              pvi = pvi*(1+interest) - pf;
            }
        }
        var terms;
        var irs = ((i*(1-t))/12).toFixed(6);
        var nrs = year*12;
        var pmt2 = pv/((Math.pow(1+parseFloat(irs), nrs))-1)/irs;
        var pmt3 = pv*(Math.pow(1+parseFloat(irs), nrs));
        for (var j=0; j <= year; j++) 
        { 
          pmt3 = pmt3 + pf*Math.pow(1+parseFloat(irs), j); 
        } 
        finalpmt = (pmt3).toFixed(2);
        $("#rspmt").html(pmt2.toFixed(2));
        $("#rsfpmt").html(finalpmt);
        $("#rsage").html(age);
        $("#rsage2").html(age2);
      } 
      else
      {
        $("#rsage").html(age);
        $("#rsage2").html(age2);
        $("#rspmt").html(0);
        $("#rsfpmt").html(0);
      }
	  divi = (age+age2)/2;
	  $("#scenario_graph").html('');
		Morris.Area({
			element: 'scenario_graph',
			behaveLikeLine: true,
			data: [

			{x: age, y: 0},
			{x: 70, y: pmt2},
			{x: age2, y: 0}
			],
			xkey: 'x',
			ykeys: ['y'],
			labels: ['X', 'Y']
		});
	  
	}
	
	
	function update_graph(){
			
			var tc = $("#rentorown_comparison_timeframe").val();
			  var ar = $('#rentorown_current_monthly_rent').val();
			  var ahp = $('#rentorown_anticipated_home_price').val();
			  var hvi = $('#rentorown_anticipated_home_increase').val();
			  var i = $('#rentorown_intrest_rate').val();
			  var n = $('#rentorown_amoritization').val();
			  var dp = $('#rentorown_available_down_payment').val();
			  var ri = $('#rentorown_annual_rent_increase').val();
			  if(tc != 0 && ar != 0 && ahp !=0 && hvi !=0 && i !=0 && n !=0 && dp !=0 && ri !=0)
			  {
				  
				var yr = "";
				
				
				var ar = ar*12;
				ri = ri/100;
				var yr1 = ar;
				var yr2 = ((yr1*(1+ri))+yr1).toFixed(2);
				var yr3 = ((yr2*(1+ri))+yr1).toFixed(2);
				var yr4 = ((yr3*(1+ri))+yr1).toFixed(2);
				var yr5 = ((yr4*(1+ri))+yr1).toFixed(2);
				var yr6 = ((yr5*(1+ri))+yr1).toFixed(2);
				var yr7 = ((yr6*(1+ri))+yr1).toFixed(2);
				var yr8 = ((yr7*(1+ri))+yr1).toFixed(2);
				var yr9 = ((yr8*(1+ri))+yr1).toFixed(2);
				var yr10 = ((yr9*(1+ri))+yr1).toFixed(2);
				
				var pv = ahp-dp;
				n = n*12;
				var ir = ((i/12)/100).toFixed(6);
				a = 1+ parseFloat(ir);
				math_pow = Math.pow(a, 300);
				var pmt = (pv*(ir*math_pow)/(math_pow-1)).toFixed(2);
				
				var ypmt = (pmt*12);
				var ypmt1 = (pmt*12);
				var ypmt2 = ((ypmt1*(1+ri))+ypmt1).toFixed(2);
				var ypmt3 = ((ypmt2*(1+ri))+ypmt1).toFixed(2);
				var ypmt4 = ((ypmt3*(1+ri))+ypmt1).toFixed(2);
				var ypmt5 = ((ypmt4*(1+ri))+ypmt1).toFixed(2);
				var ypmt6 = ((ypmt5*(1+ri))+ypmt1).toFixed(2);
				var ypmt7 = ((ypmt6*(1+ri))+ypmt1).toFixed(2);
				var ypmt8 = ((ypmt7*(1+ri))+ypmt1).toFixed(2);
				var ypmt9 = ((ypmt8*(1+ri))+ypmt1).toFixed(2);
				var ypmt10 =((ypmt9*(1+ri))+ypmt1).toFixed(2);
				var cy = tc*12;
				var m_ammount = 0;
				var count = 0;
				var cvalue = 0;
				for (var j=1; j <=cy ; j++) 
				{
					
					// 
					if(count == 0)
					{
					  m_ammount = pv*(Math.pow(1+ parseFloat(ir),parseInt(j))); 
					 
					}
					else
					{
					  cvalue = pmt*(Math.pow(1+ parseFloat(ir),parseInt(j)));
					}
					m_ammount = m_ammount-cvalue;
					count++;
					
						
					
				}
				var mb = (m_ammount-pmt).toFixed(2);
				
				var ei = 0;
				if(tc == 1)
				{
					mortgage = (yr1 - ypmt1).toFixed(2);
					ei = (ahp*(1+ri)-mb).toFixed(2);  
				}
				if(tc == 2)
				{
					mortgage = (yr2 - ypmt2).toFixed(2);
					ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
				}
				if(tc == 3)
				{
					mortgage = (yr3 - ypmt3).toFixed(2);
					ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
				}
				if(tc == 4)
				{
					mortgage = (yr4 - ypmt4).toFixed(2);
					ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
				}
				if(tc == 5)
				{
					mortgage = (yr5 - ypmt5).toFixed(2);
					ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
				}
				if(tc == 6)
				{
					mortgage = (yr6 - ypmt6).toFixed(2);
					ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
				}
				if(tc == 7)
				{
					mortgage = (yr7 - ypmt7).toFixed(2);
					ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
				}
				if(tc == 8)
				{
					mortgage = (yr8 - ypmt8).toFixed(2);
					ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
				}
				if(tc == 9)
				{
					mortgage = (yr9 - ypmt9).toFixed(2);
					ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
				}
				if(tc == 10)
				{
					mortgage = (yr10 - ypmt10).toFixed(2);
					ei = (ahp*(Math.pow(1+ri,parseInt(tc)))-mb).toFixed(2);
				}     
				
				n = 1;
				num = 1;
				var dvTable = $("#result-bar-graph");
				var graphBar = $("#graph");
				
				 dvTable.html("");
				 graphBar.html("");
				 var dataa = [];
				 var x = "";
				 var y = "";
				 var z = "";
				 var a = "";
				for (var i = 0; i < (1+parseInt(tc)); i++) {
					
					var mb = (m_ammount-pmt).toFixed(2);
					//alert(mb);
						if(i == 0){
							yr1 = ar.toFixed(2);
							ypmt1 = ypmt.toFixed(2);
						}else{
							yr1 = ((yr1*(1+ri))+ar).toFixed(2);
							ypmt1 = ((ypmt1*(1+ri))+ypmt).toFixed(2);
						}
						mortgage = (yr1 - ypmt1).toFixed(2);
						ei = (ahp*(Math.pow(1+parseFloat(ri),parseInt(n)))-mb).toFixed(2);
						var row = $("<tr/>");
					
					for (var j = 0; j < 5; j++) {
						
						
						var cell = $("<td />");
						
						if(j==0){
							cell.html("Year "+n);
							
						}else if(j==1){
							
							cell.html("$"+Number(yr1).toLocaleString());
							
						}else if(j==2){
							cell.html("$"+Number(ypmt1).toLocaleString());
							
						}else if(j==3){
							cell.html("$"+Number(ei).toLocaleString());
						}else{
							cell.html("$"+Number(mortgage).toLocaleString());
						} 
						row.append(cell);
						
						
						
					}
					dataa[num] = {
							x: "Year "+n,
							y: yr1,
							z: ypmt1,
							a: ei
						};
					n++;
					num++;
					dvTable.append(row);
					
					
					
				}
				dataa = dataa.slice(1, -1)
				
				console.log(dataa);
				
				var bChart = Morris.Bar({
					  element: 'graph',
					  data: dataa,
					  xkey: 'x',
					  ykeys: ['y', 'z', 'a'],
					  labels: ['Rental ', 'Mortgage', 'Equity']
					}).on('click', function(i, row){
					  console.log(i, row);
					});
				
			  }
			
	}
	
	
	$(document).ready(function(){
		
			update_whaticanafford();
			update_scenario_graph();
			update_graph();
		
	});
	$(document).on('click', '.popup-close', function(){
		$('.popupBlocker').hide();
		
	});
	
});