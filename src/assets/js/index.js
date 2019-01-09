$(document).ready(function () {
    var solicited_value=0;
    var amount_months=parseInt($("#range").val());    
    var utm_source= typeof getUrlVars()["utm_source"] !== 'undefined' ? getUrlVars()["utm_source"] : 'NULL';
    var utm_campaign= typeof getUrlVars()["utm_campaign"] !== 'undefined' ? getUrlVars()["utm_campaign"] : 'NULL';
    var utm_content= typeof getUrlVars()["utm_content"] !== 'undefined' ? getUrlVars()["utm_content"] : 'NULL';
    var slideToggle=1;
    
    $("#lnk_use_term").click(function () {
        url = base_url + "assets/others/TERMOS DE USO CREDITSOCIETY.pdf";
        window.open(url, '_blank');
        return false;
    });
    
    $('#verify_container').keypress(function (e) {
        if (e.which == 13) {
            $("#btn_verify").click();
            return false;
        }
    });
    
    $('#painel-values').keypress(function (e) {
        if (e.which == 13) {
            $("#btn_contratar_emprestimo").click();
            return false;
        }
    });
    
    $('#contratar_emprestimo_container').keypress(function (e) {
        if (e.which == 13) {
            $("#btn_contratar_emprestimo").click();
            return false;
        }
    });
    
    $("#btn_contratar_emprestimo").hover(
            function (e) {
                //modal_alert_message($(e.target).attr('id'))
                $('#btn_contratar_emprestimo').css('cursor', 'pointer');
            },
            function () {
                $('#btn_contratar_emprestimo').css('cursor', 'default');
            }
    );
    
    
    $("#range").change(function () {
        amount_months=$("#range").val();
        $("#result-value1").text($("#range").val());
        $("#result-value2").text($("#range").val());
        $(".its li").addClass('at');
        verify(0);
    });
            
    $("#btn_verify").click(function () {
        verify(1);        
    });
    
    $("#input_verify").focus(function () {
        $("#painel-values").fadeOut("slow");
    });
    
    $("#lnk_checkout").click(function () {
        $('#ctn_verify').toggle("hide");
        $('#ctn_verify').toggle("slow");
        $("#input_verify").focus();
    });
    
    function verify(flag){
        if(!$.isNumeric(parseInt($('#input_verify').val())) || parseInt($('#input_verify').val())==0){
            modal_alert_message("Entre o valor que deseja tomar emprestado.");
        }else{
            solicited_value = $('#input_verify').val();
            solicited_value = solicited_value.replace('R$ ','');
            solicited_value = solicited_value.replace('.','');
            solicited_value = solicited_value.replace(',','.');
            solicited_value = parseFloat(solicited_value);
            if(solicited_value>=300 && solicited_value<=5000){
                $.ajax({
                    url: base_url + 'index.php/welcome/verify_simulation',
                    data:{
                        'solicited_value': solicited_value,
                        'amount_months':amount_months
                    },
                    type: 'POST',
                    dataType: 'json',
                    success: function (response) {
                        $('#month_value').text('R$ '+response['month_value']);
                        $('#total_cust_value').text(response['total_cust_value']);
                        if (response['success']) {
                            $("#painel-values").fadeIn("slow");                            
                            $("#painel-values").css("display","block");
                        }
                        else{
                            $('#permited_value').css('color','red');
                            modal_alert_message(response['message']);
                        }
                    },
                    error: function (xhr, status) {
                        modal_alert_message('Internal error Verify value');
                    }
                });
            } else{              
                modal_alert_message('Só pode solicitar um valor entre R$300 e R$5000');
            }
        }
    }
        
    $('#btn_contratar_emprestimo').click(function () {
        if(!$.isNumeric(parseInt($('#input_verify').val())) || parseInt($('#input_verify').val())==0){
           modal_alert_message("Entre o valor que deseja tomar emprestado.");
        }else
            if($('#input_verify').val()===''){
               modal_alert_message("Operação não permitida");
            }else{
                solicited_value = $('#input_verify').val();
                solicited_value = solicited_value.replace('R$ ','');
                solicited_value = solicited_value.replace(',','.');
                solicited_value = parseFloat(solicited_value);
                params="utm_source="+utm_source+"&frm_money_use_form="+$('#money_use_form').val()+"&utm_content="+utm_content+"&utm_campaign="+utm_campaign;
                url=base_url+"index.php/welcome/lending?"+params;
                $(location).attr('href',url);
            }
    });
    
   function modal_alert_message(text_message){
        $('#modal_alert_message').modal('show');
        $('#message_text').text(text_message);
    }
    
    $("#accept_modal_alert_message").click(function () {
        $('#modal_alert_message').modal('hide');
    });
    
    $("#btn_modal_close").click(function () {
        $('#modal_alert_message').modal('hide');
    });
    
    function set_global_var(str, value) {
        switch (str) {
            case 'solicited_value':
                solicited_value = value;
                break;            
            case 'amount_months':
                amount_months = value;
                break;                        
            case 'slideToggle':
                slideToggle = value;
                break;                        
        }
    }
    
    function getUrlVars(){
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++){
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    
    //amount_months=12;
    
    $("#input_verify").keydown(function (e) {   
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
