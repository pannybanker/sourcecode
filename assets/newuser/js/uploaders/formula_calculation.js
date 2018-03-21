$(document).ready(function(){
    $('#frequency-payment').on('change',function(){
      var pv = $("#range-slider-saving-value").val();
      var i  = $("#range-slider-interest-value").val();
      var t  = $("#range-slider-year-value").val();
      var fpv = "";
      if(this.value=='Monthly')
        fpv = 12;
      if(this.value=='Weekly')
        fpv = 52;
      if(this.value=='Biweekly')
        fpv = 26;
      if(this.value != "")
      {
        if(t != 0 && i != 0)
      {
          var percentage = ((i/fpv)/100).toFixed(7);
          var pvf = ((Math.pow(1+parseFloat(percentage), fpv*t))-1)/percentage;
          var finalvalue = (pv/pvf).toFixed(2);
          $("#ssfvp").html(finalvalue);
          $("#ssfpay").html(this.value);
      }
      }
      else
      {
        $("#ssfva").html(0);
      }
    });
    $('#frequency-morgate').on('change',function(){
      var pv = $("#range-slider-saving-morgate-value").val();
      var i  = $("#range-slider-interest-morgate-value").val();
      var t  = $("#range-slider-year-morgate-value").val();
      var fpv = "";
      if(this.value=='Monthly')
        fpv = 12;
      if(this.value=='Weekly')
        fpv = 52;
      if(this.value=='Biweekly')
        fpv = 26;
      if(t != 0 && i != 0)
      {
        var percentage = ((i/fpv)/100).toFixed(7);
        var finalvalue = (pv*(((Math.pow(1+parseFloat(percentage), fpv*t)))/percentage)).toFixed(2);
        $("#ssfva").html(finalvalue);
        $("#ssfmpay").html(this.value);
      } 
    });

    $('#frequency-amortization').on('change',function(){
      var pmt  = $("#range-slider-saving-goal-amortization-value").val();
      var fp  = $("#frequency-amortization").val();
      var pv   = $("#range-slider-saving-amortization-value").val();
      var i   = $("#range-slider-interest-amortization-value").val();
      var fpv = "";
      if(this.value=='Monthly')
        fpv = 12;
      if(this.value=='Weekly')
        fpv = 52;
      if(this.value=='Biweekly')
        fpv = 26;
      if(this.value != 0 && i != 0)
      {
        var percentage = ((i/fpv)/100).toFixed(7);
        var x = Math.log(((pv/pmt)*percentage)+1);
        var y = Math.log(1+parseFloat(percentage));
        var finalvalue = (((x/y).toFixed())/fpv).toFixed(1);
        $("#ssty").html(finalvalue);
        $("#ssfapay").html(this.value);
      } 
    });

    $('#whaticanafford_product').on('change',function(){
      var gi = $('#whaticanafford_gross_income').val();
      var pt = $('#whaticanafford_property_taxes').val();
      var cf = $('#whaticanafford_condominium_fees').val();
      var hc = $('#whaticanafford_healing_costs').val();
      var bp = $('#whaticanafford_borrowing_payments').val();
      var a = $('#whaticanafford_amoritization').val();
      var i = $('#whaticanafford_intrest_rate').val();
      var pr = "";
      if(this.value == '12 Months')
      {
        pr = 12;
      }
      if(pr != "")
      {
        var tds = parseInt(pt)+parseInt(cf)+parseInt(hc)+parseInt(bp);
        var pmt = (0.40*parseInt(gi))-tds;
        var ia  = (parseInt(i)/parseInt(pr))/100;
        var value = ia*(Math.pow(1+ia,parseInt(a)*parseInt(pr)))/(Math.pow(1+ia,parseInt(a)*parseInt(pr))-1);
        var pv = pmt/value;
        var pvn = pv/(1-(parseInt(i)/100));
        var finalvaue  = (pvn - pv).toFixed(2);
        $("#whaticanafford_pv").val(finalvaue);
      }
      else
      {
        $("#whaticanafford_pv").val(0);
      }
    });

    $('#years-capital').on('change',function(){
      var pv  = $("#range-slider-market-value-capital-value").val();
      var t  = $("#range-slider-average-tax-capital-value").val();
      var inf = $("#range-slider-inflation-rate-capital-value").val();
      var i = $("#range-slider-average-return-value").val();
      var n = this.value;
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

    $('#frequency-morgate-capital').on('change',function(){
    var ii = $("#range-slider-required-return-morgate-capital").val();
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

    $('#years_capital_morgate_capital').on('change',function(){
    var ii = $("#range-slider-required-return-morgate-capital").val();
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

    $('#mortgage_calculator_payment_frequency').on('change',function(){
      var pv = $("#mortgage_calculator_payment_amount").val();
        var i  = $("#mortgage_calculator_payment_interest_rate").val();
      var t  = $("#mortgage_calculator_payment_amortization").val();
      var td = $("#td_payment").val();
      var fpv = "";
      if(this.value=='Monthly')
         fpv = 12;
      if(this.value=='Weekly')
         fpv = 52;
      if(this.value=='Biweekly')
         fpv = 26;
      if(t != 0 && i != 0)
      {
         var percetage = ((i*(1-td/100))/fpv)/100;
         var finalvalue = (pv*((parseFloat(percetage)*(Math.pow(1+parseFloat(percetage), fpv*t)))/((Math.pow(1+parseFloat(percetage), fpv*t))-1))).toFixed(2);
         $("#mortgage_payment").val(finalvalue);
      } 
      else
      {
         $("#mortgage_payment").val(0);
      }
    });


    $('#mortgage_calculator_payment_frequency').on('change',function(){
        var t  = $("#mortgage_calculator_amount_amortization").val();
        var pv  = $("#mortgage_calculator_amount_payment").val();
        var i = $("#mortgage_calculator_amount_interest_rate").val();
        var td = $("#td_ammount").val();
        var fpv = "";
        if(this.value=='Monthly')
          fpv = 12;
        if(this.value=='Weekly')
          fpv = 52;
        if(this.value=='Biweekly')
          fpv = 26;
        if(i !=0 && t != 0)
        {
          var percetage = ((i*(1-td/100))/fpv)/100;
          $("#mortgage_ammount").val(finalvalue);
        }
        else
        {
          $("#mortgage_ammount").val(0);
        }
  });

  $('#lc_loan1_ammount').on('change',function(){
    var payment_frequency  = $("#lc_loan1_pf").val();
    var i = $("#lc_loan1_ir").val();
    var t = $("#lc_loan1_tol").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && payment_frequency != "" && i != "" && t != "")
    {
      var n = "";
      if(payment_frequency=='Monthly')
        n = 12;
      if(payment_frequency=='Weekly')
        n = 52;
      if(payment_frequency=='Biweekly')
        n = 26;
      i = ((i/100)/n).toFixed(8);
      
      var years = ((pmt*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt*n*years)-this.value).toFixed(2);
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan1_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan1_calculate").val(0);
    }
  });

  $('#lc_loan1_pf').on('change',function(){
    var pv = $("#lc_loan1_ammount").val();
    var i = $("#lc_loan1_ir").val();
    var t = $("#lc_loan1_tol").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && pv != "" && i != "" && t != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan1_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan1_calculate").val(0);
    }
  });

  $('#lc_loan1_ir').on('change',function(){
    var pv = $("#lc_loan1_ammount").val();
    var payment_frequency = $("#lc_loan1_pf").val();
    var t = $("#lc_loan1_tol").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && pv != "" && payment_frequency != "" && t != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan1_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan1_calculate").val(0);
    }
  });

  $('#lc_loan1_tol').on('change',function(){
    var pv = $("#lc_loan1_ammount").val();
    var payment_frequency = $("#lc_loan1_pf").val();
    var i = $("#lc_loan1_ir").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && pv != "" && payment_frequency != "" && i != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan1_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan1_calculate").val(0);
    }
  });

  $('#lc_loan2_ammount').on('change',function(){
    var payment_frequency  = $("#lc_loan2_pf").val();
    var i = $("#lc_loan2_ir").val();
    var t = $("#lc_loan2_tol").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && payment_frequency != "" && i != "" && t != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan2_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan2_calculate").val(0);
    }
  });

  $('#lc_loan2_pf').on('change',function(){
    var pv = $("#lc_loan2_ammount").val();
    var i = $("#lc_loan2_ir").val();
    var t = $("#lc_loan2_tol").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && pv != "" && i != "" && t != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan2_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan2_calculate").val(0);
    }
  });

  $('#lc_loan2_ir').on('change',function(){
    var pv = $("#lc_loan2_ammount").val();
    var payment_frequency = $("#lc_loan1_pf").val();
    var t = $("#lc_loan2_tol").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && pv != "" && payment_frequency != "" && t != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan2_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan2_calculate").val(0);
    }
  });

  $('#lc_loan2_tol').on('change',function(){
    var pv = $("#lc_loan2_ammount").val();
    var payment_frequency = $("#lc_loan1_pf").val();
    var i = $("#lc_loan2_ir").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && pv != "" && payment_frequency != "" && i != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan2_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan2_calculate").val(0);
    }
  });

 $('#lc_loan3_ammount').on('change',function(){
    var payment_frequency  = $("#lc_loan3_pf").val();
    var i = $("#lc_loan3_ir").val();
    var t = $("#lc_loan3_tol").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && payment_frequency != "" && i != "" && t != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan3_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan3_calculate").val(0);
    }
  });

  $('#lc_loan3_pf').on('change',function(){
    var pv = $("#lc_loan3_ammount").val();
    var i = $("#lc_loan3_ir").val();
    var t = $("#lc_loan3_tol").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && pv != "" && i != "" && t != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan3_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan3_calculate").val(0);
    }
  });

  $('#lc_loan3_ir').on('change',function(){
    var pv = $("#lc_loan3_ammount").val();
    var payment_frequency = $("#lc_loan1_pf").val();
    var t = $("#lc_loan3_tol").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && pv != "" && payment_frequency != "" && t != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan3_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan3_calculate").val(0);
    }
  });

  $('#lc_loan3_tol').on('change',function(){
    var pv = $("#lc_loan3_ammount").val();
    var payment_frequency = $("#lc_loan3_pf").val();
    var i = $("#lc_loan3_ir").val();
    var lc = $("#lc_calculator_comparison").val();
    var loan_calculate;
    if(this.value != "" && pv != "" && payment_frequency != "" && i != "")
    {
      var n = "";
      if(this.value=='Monthly'){
        n = 12;
		d = 1;
      }else if(this.value=='Weekly'){
        n = 52;
		d = 4;
      }else if(this.value=='Biweekly'){
        n = 26;
		d = 2;
	  }
      i = ((i/100)/12).toFixed(8);
      var pmt = (pv*((parseFloat(i)*(Math.pow(1+parseFloat(i), t)))/((Math.pow(1+parseFloat(i), t))-1))).toFixed(2);
      var years = ((pmt/d*n*t)/(pmt*n)).toFixed(1);
      var intersetpaid = ((pmt/d*n*years)-pv).toFixed(2);
	  
      if(lc =='Payment Ammount')
      {
        loan_calculate = pmt/d;
      }
      if(lc =='Total Payment In Years')
      {
        loan_calculate = years;
      }
      if(lc =='Total Remaining Interest')
      {
        loan_calculate = intersetpaid;
      }
      $("#loan3_calculate").val(loan_calculate);
    }
    else
    {
      $("#loan3_calculate").val(0);
    }
  });

  $('#lc_calculator_comparison').on('change',function(){
    var pv1 = $("#lc_loan1_ammount").val();
    var payment_frequency1 = $("#lc_loan1_pf").val();
    var i1 = $("#lc_loan1_ir").val();
    var t1 = $("#lc_loan1_tol").val();
    var loan_calculate1;
    if(this.value != "" && pv1 != "" && payment_frequency1 != "" && i1 != "" && t1 !="")
    {
      var n1 = "";
      if(payment_frequency1=='Monthly')
        n1 = 12;
      if(payment_frequency1=='Weekly')
        n1 = 52;
      if(payment_frequency1=='Biweekly')
        n1 = 26;
      i1 = ((i1/100)/n1).toFixed(8);
      var pmt1 = (pv1*((parseFloat(i1)*(Math.pow(1+parseFloat(i1), t1)))/((Math.pow(1+parseFloat(i1), t1))-1))).toFixed(2);
	 
      var years1 = ((pmt1*t1)/(pmt1*n1)).toFixed(1);
	  
      var intersetpaid1 = ((pmt1*n1*years1)-pv1).toFixed(2);
      if(this.value =='Payment Ammount')
      {
        loan_calculate1 = pmt1;
      }
      if(this.value =='Total Payment In Years')
      {
        loan_calculate1 = years1;
      }
      if(this.value =='Total Remaining Interest')
      {
        loan_calculate1 = intersetpaid1;
      }
      $("#loan1_calculate").val(loan_calculate1);
    }
    else
    {
      $("#loan1_calculate").val(0);
    }

    var pv2 = $("#lc_loan2_ammount").val();
    var payment_frequency2 = $("#lc_loan2_pf").val();
    var i2 = $("#lc_loan2_ir").val();
    var t2 = $("#lc_loan2_tol").val();
    var loan_calculate2;
    if(this.value != "" && pv2 != "" && payment_frequency2 != "" && i2 != "" && t2 !="")
    {
      var n2 = "";
      if(payment_frequency2=='Monthly'){
        n2 = 12;
		d2 = 1;
      }else if(payment_frequency2=='Weekly'){
        n2 = 52;
		d2 = 4;
      }else if(payment_frequency2=='Biweekly'){
        n2 = 26;
		d2 = 2;
	  }
      i2 = ((i2/100)/12).toFixed(8);
	  
      var pmt2 = (pv2*((parseFloat(i2)*(Math.pow(1+parseFloat(i2), t2)))/((Math.pow(1+parseFloat(i2), t2))-1))).toFixed(2);
     
	 var years2 = ((pmt2*t2)/(pmt2/d2*n2)).toFixed(1);
      var intersetpaid2 = ((pmt2/d2*n2*years2)-pv2).toFixed(2);
      if(this.value =='Payment Ammount')
      {
        loan_calculate2 = pmt2/d2;
      }
      if(this.value =='Total Payment In Years')
      {
        loan_calculate2 = years2;
      }
      if(this.value =='Total Remaining Interest')
      {
        loan_calculate2 = intersetpaid2;
      }
      $("#loan2_calculate").val(loan_calculate2);
    }
    else
    {
      $("#loan2_calculate").val(0);
    }lc_loan1_pf

    var pv3 = $("#lc_loan3_ammount").val();
    var payment_frequency3 = $("#lc_loan3_pf").val();
    var i3 = $("#lc_loan3_ir").val();
    var t3 = $("#lc_loan3_tol").val();
    var loan_calculate3;
    if(this.value != "" && pv3 != "" && payment_frequency3 != "" && i3 != "" && t3 !="")
    {
      var n3 = "";
      if(payment_frequency3=='Monthly'){
        n3 = 12;
		d3 = 1;
	  
      }else if(payment_frequency3=='Weekly'){
        n3 = 52;
		d3 = 4;
      }else if(payment_frequency3=='Biweekly'){
        n3 = 26;
		d3 = 2;
	  }
      i3 = ((i3/100)/12).toFixed(8);
      var pmt3 = (pv3*((parseFloat(i3)*(Math.pow(1+parseFloat(i3), t3)))/((Math.pow(1+parseFloat(i3), t3))-1))).toFixed(2);
      
	  var years3 = ((pmt3*t3)/(pmt3/d3*n3)).toFixed(1);
	  
      var intersetpaid3 = ((pmt3/d3*n3*years3)-pv3).toFixed(2);
	  
      if(this.value =='Payment Ammount')
      {
        loan_calculate3 = pmt3/d3;
      }
      if(this.value =='Total Payment In Years')
      {
        loan_calculate3 = years3;
      }
      if(this.value =='Total Remaining Interest')
      {
        loan_calculate3 = intersetpaid3;
      }
	  
      $("#loan3_calculate").val(loan_calculate3);
    }
    else
    {
      $("#loan3_calculate").val(0);
    }
  });

  $(".check_numeric").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
         // Allow: Ctrl+A, Command+A
        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
         // Allow: home, end, left, right, down, up
        (e.keyCode >= 35 && e.keyCode <= 40)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
  });
});
