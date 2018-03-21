<script>
    
    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
    function call_next(id) {
        link = '<?php echo base_url(); ?>';
        $.post(link + "frontend/add_cart_item", {product_id: id, quantity: 1, ajax: '1'},
                function (data) {
                    if (data == 'true') {
                        window.location = '<?php echo base_url(); ?>frontend?act=2';
                    } else {
                        alert("Product does not exist");
                    }
                });
    }
    function showNext() {
        $('.divhide').slideUp();
        $('#divTermDrop').slideDown();
    }
    function showPForm() {
        $('.divphide').slideUp();
        $('#divPForm').slideDown();
    }

    function setTotalAmt(term) {
        var amt = $("#pamount").val();
        var addon_business_plus = $("#addon_business_plus").val();
        var amt = Number(term * amt).toFixed(2);
        if(addon_business_plus != "")
        {
            var finalvalue = parseInt(amt)+parseInt(addon_business_plus);
        }
        else
        {
            var finalvalue = amt;
        }
        $(".amtTot").html('$' + finalvalue);
        $("#pamount").html('$' + finalvalue);
    }

    function addon_business(value) {
        var amt = $("#pamount").val();
        var term = $("#packege_period").val();
        var amt = Number(term * amt).toFixed(2);
        var finalvalue = parseInt(amt)+parseInt(value);
        $(".amtTot").html('$' + finalvalue);
        $("#addon_detail").html('<td style="padding-bottom: 25px; line-height: 2;">Business Plus</td><td class="text-right txtcolor"  style="padding-bottom: 25px; line-height: 2;">$'+value+'</td>');
        $("#addon_btn").removeClass('show').addClass('hide');
        $("#addon_remove_btn").removeClass('hide').addClass('show');
        $("#addon_business_plus").val(value);
    }
    function remove_business(value) {
        var amt = $("#pamount").val();
        var term = $("#packege_period").val();
        var amt = Number(term * amt).toFixed(2);
        $(".amtTot").html('$' + amt);
        $("#addon_detail").html('');
        $("#addon_btn").removeClass('hide').addClass('show');
        $("#addon_remove_btn").removeClass('show').addClass('hide');
        $("#addon_business_plus").val("");
    }
    function update_cart_qnt() {
        var term = $('#ddlTerm').val();
        link = '<?php echo base_url(); ?>';
        c_id = $("#cart_row_id").val();
        $.post(link + "frontend/update_cart_item", {c_id: c_id, term: term, ajax: '1'}, function (data) {
            $(".finalamt").html('$' + data);
            $('.litabs').addClass('disabled');
            actTab = 3;
            $('.litabs').removeClass('active');
            $('#litab' + actTab).removeClass('disabled');
            $('#litab' + actTab).addClass('active');
            $('.tab-pane').removeClass('active');
            $('#step' + actTab).addClass('active');
        });
    }
    function showprev(targ) {
        actTab = targ;
        $('.litabs').addClass('disabled');
        $('.litabs').removeClass('active');
        $('#litab' + actTab).removeClass('disabled');
        $('#litab' + actTab).addClass('active');
        $('.tab-pane').removeClass('active');
        $('#step' + actTab).addClass('active');
    }
    function set_user_session_data() { }
    $("#submituserinfo").click(function () {
        var link = '<?php echo base_url(); ?>frontend/set_form_data';
        var data = '';
        $.post(link, data, function (data) {
            alert(data);
            $('.divhide').slideUp();
            $('#divTermDrop').slideDown();
        });
    }
    );

    $("#billingform").submit(function (e) {
        var url = '<?php echo base_url(); ?>frontend/set_form_data';
        $.ajax({
            type: "POST",
            url: url,
            data: $("#billingform").serialize(),
            success: function (data)
            {
                $('.divphide').slideUp();
                $('#divPForm').slideDown();
            }
        });
        e.preventDefault();
    });
</script>