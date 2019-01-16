$(document).ready(function () {
    var pk='';
    var utm_source= typeof getUrlVars()["utm_source"] !== 'undefined' ? getUrlVars()["utm_source"] : 'NULL';
    var utm_campaign= typeof getUrlVars()["utm_campaign"] !== 'undefined' ? getUrlVars()["utm_campaign"] : 'NULL';
    var utm_content= typeof getUrlVars()["utm_content"] !== 'undefined' ? getUrlVars()["utm_content"] : 'NULL';
    var solicited_value= typeof getUrlVars()["solicited_value"] !== 'undefined' ? getUrlVars()["solicited_value"] : 'NULL';
    var amount_months= typeof getUrlVars()["amount_months"] !== 'undefined' ? getUrlVars()["amount_months"] : 'NULL';
    init_values();
    
   
     
    //---------PRIMARY FUNCTIONS---------------------------------
    //Passo 1.1 Requerir codigo de verificação de telefone e enviar dados pessoais
    $("#btn_code_request").click(function () {
        name  = validate_element('#name', '^[a-zA-Zñçâêôûîáéíóúàãẽõ ]{2,150}$');
        email = validate_element('#email', '^[a-zA-Z0-9\._-]+@([a-zA-Z0-9-]{2,}[.])*[a-zA-Z]{2,10}$');
        phone_number = validate_empty('#phone_number');
        var cpf_value=$('#cpf').val(); cpf_value = cpf_value.replace('.',''); cpf_value = cpf_value.replace('.',''); cpf_value = cpf_value.replace('-','');
        cpf = validate_cpf(cpf_value, '#cpf', '^[0-9]{11}$');
        if(!name){ modal_alert_message("Nome inválido"); return false;}
        if(!email){ modal_alert_message("Email inválido"); return false;}
        if(!phone_number){ modal_alert_message("Telefone inválido"); return false;}
        if(!cpf){ modal_alert_message("CPF inválido"); return false;}
        $.ajax({
            url: base_url+'index.php/welcome/request_sms_code',
            data: {
                'name':$('#name').val(),
                'email':$('#email').val(),
                'phone_number':$('#phone_number').val(),
                'cpf': $('#cpf').val(),
                'key':key
            },
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                if(response['success']){
                    $("#name").prop('disabled', true);
                    $("#email").prop('disabled', true);
                    $("#phone_number").prop('disabled', true);
                    $("#cpf").prop('disabled', true);
                    $('.code_request').toggle("hide");
                    $('.code_verify').toggle("slow");
                } else{
                    modal_alert_message(response['message']);
                }
            }
        });        
    });
    
    //Passo 1.2. Requerir novo codigo de verificação de telefone
    $("#lnk_code_resend").click(function () {
        $.ajax({
            url: base_url+'index.php/welcome/request_sms_code',                
            data: {
                'phone_number': $('#phone_number').val(),
                'key':key
            },
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                modal_alert_message(response['message']);
            }
        });
    });
        
    //Passo 1.3. Conferir codigo de verificação de telefone
    $("#btn_code_verify").click(function () {
        phone_sms_code  = validate_element('#phone_sms_code', '^[0-9]{6}$');
        if(!phone_sms_code){
            modal_alert_message("Código inválido");
            return false;
        }
        $.ajax({
            url: base_url+'index.php/welcome/verify_sms_code',                
            data: {
                'input_sms_code_confirmation':$('#phone_sms_code').val(),
                'name':$('#name').val(),
                'email':$('#email').val(),
                'phone_number':$('#phone_number').val(),
                'cpf': $('#cpf').val(),
                'key':key
            },
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                if(response['success']){                    
                    $('.check1').toggle("hide");
                    $('.check2').toggle("slow");
                } else{
                    modal_alert_message(response['message']);
                }
            }
        });
    });
    
    //Passo 2.1 Verificar e carregar CEP
    $("#verify_cep").click(function () {
        if(validate_element("#cep",'^[0-9]{8}|[0-9]{2}.[0-9]{3}-[0-9]{3}|[0-9]{5}-[0-9]{3}$')){
            $.ajax({
                url: base_url+'index.php/welcome/get_cep_datas',                
                data: {
                    'cep': $('#cep').val(),
                    'key':key
                },
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    if(response['success']){
                        response = response['datas'];
                        $('#street_address').val(response['logradouro']);
                        $('#city_address').val(response['localidade']);
                        $('#state_address').val(response['uf']);                        
                        $('#address_container').css({"visibility":"visible", "display":"block"}); 
                        $('#btn_steep_1').removeAttr("disabled");
                        $('#district').val(response['bairro']);
                    } else
                        modal_alert_message('CEP inválido');
                    $('#wait').hide();
                }
            });
        } else{
            modal_alert_message('CEP inválido');
        }
    });
    
    //Passo 2.2 Enviar todos os dados da transação    
    $("#btn_steep_2_next").click(function () {
        cep = validate_element('#cep', '^[0-9]{8}|[0-9]{2}.[0-9]{3}-[0-9]{3}|[0-9]{5}-[0-9]{3}$');
        street_address = validate_empty('#street_address');
        //number_address = validate_element('#number_address', '^sn|s/n|[0-9]{1,10}$');
        complement = validate_element('#complement_number_address', '^$|^[a-zA-Z0-9 -\.]+$');
        city = validate_element('#city_address', '^[a-zA-Z0-9 ñçâêôûîáéíóúàãẽõ]{1,50}$');
        state = validate_element('#state_address', '^[a-zA-Z]{2}$'); 
        if(!cep){ modal_alert_message("CEP inválido"); return false;}
        if(!street_address){ modal_alert_message("Endereço inválido"); return false;}
        //if(!number_address){ modal_alert_message("Número inválido"); return false;}
        if(!complement){ modal_alert_message("Complemento inválido"); return false;}
        if(!city){ modal_alert_message("Cidade inválida"); return false;}
        if(!state){ modal_alert_message("Unidade Federativa inválida"); return false;}        
        var upper_name = $('#name').val(); upper_name = upper_name.toUpperCase();
        $.ajax({
            url: base_url + 'index.php/welcome/insert_datas_steep_1',
            data:{
                'name': upper_name,
                'email': $('#email').val(),
                'phone_number': $('#phone_number').val(),
                'cpf': $('#cpf').val(),
                'cep': $('#cep').val(),
                'street_address': $('#street_address').val(),
                'number_address': $('#number_address').val(),
                'complement_number_address': $('#complement_number_address').val(),
                'city_address': $('#city_address').val(),
                'state_address': $('#state_address').val(),
                'district': $('#district').val(),
                'utm_source': typeof getUrlVars()["utm_source"] !== 'undefined' ? getUrlVars()["utm_source"] : 'NULL',                   
                //'utm_campaign': typeof getUrlVars()["utm_campaign"] !== 'undefined' ? getUrlVars()["utm_campaign"] : 'NULL',                   
                //'utm_content': typeof getUrlVars()["utm_content"] !== 'undefined' ? getUrlVars()["utm_content"] : 'NULL',                   
                'key':key,
            },
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                if (response['success']) {
                    set_global_var('pk',response['pk']);                    
                    $('.check1').toggle("hide");
                    $('.check2').toggle("slow");                    
                }
                else{
                    modal_alert_message(response['message']);
                }
            },
            error: function (xhr, status) {
                modal_alert_message('Internal error in Steep 1');
            }
        });
    });
    
    //Passo 2. Voltar ao passo 1
    $("#btn_steep_2_prev").click(function () {
        $('.check2').toggle("hide");
        $('.check1').toggle("slow");
        return false;
    });
    
    //Passo 3. Enviar dados do cartão
    $("#btn_steep_3_next").click(function () {
        $('.check2').toggle("hide");
        $('.check3').toggle("slow");
        return false;
        
        if(        ($('#credit_card_name').val()).toUpperCase()==='VISA' 
                || ($('#credit_card_name').val()).toUpperCase()==='MASTERCARD' 
                || ($('#credit_card_name').val()).toUpperCase()==='ELO' 
                || ($('#credit_card_name').val()).toUpperCase()==='HYPERCARD' 
                || ($('#credit_card_name').val()).toUpperCase()==='AMEX') {            
            modal_alert_message("Alerta! Informe seu nome no cartão e não a bandeira dele.");
        }
        var number = validate_element('#credit_card_number', "^[0-9]{10,20}$"); 
        //var brand = Iugu.utils.getBrandByCreditCardNumber($('#credit_card_number').val());//
        var brand = 'UNKNOW';
        var brand_detected = false;
        // Visa card: starting with 4, length 13 or 16 digits.
        if (number) {
            number = validate_element('#credit_card_number', "^(?:4[0-9]{12}(?:[0-9]{3})?)$");
            if(number && !brand_detected){
                brand = 'Visa';
                brand_detected = true;
            }
        // MasterCard: starting with 51 through 55, length 16 digits.
        if (!number)  {
            number = validate_element('#credit_card_number', "^(?:5[1-5][0-9]{14})$");
            if(number && !brand_detected){
                brand = 'Master';
                brand_detected = true;
            }
        // American Express: starting with 34 or 37, length 15 digits.
        if (!number) {
            number = validate_element('#credit_card_number', "^(?:3[47][0-9]{13})$");
            if(number && !brand_detected){
                brand = 'Amex';
                brand_detected = true;
            }
        // Discover card: starting with 6011, length 16 digits or starting with 5, length 15 digits.
        if (!number){
            number = validate_element('#credit_card_number', "^(?:6(?:011|5[0-9][0-9])[0-9]{12})$");
            if(number && !brand_detected){
                brand = 'Discover';
                brand_detected = true;
            }
        // Diners Club card: starting with 300 through 305, 36, or 38, length 14 digits.
        if (!number){
            number = validate_element('#credit_card_number', "^(?:3(?:0[0-5]|[68][0-9])[0-9]{11})$");
            if(number && !brand_detected){
                brand = 'Diners';
                brand_detected = true;
            }
        // Elo credit card
        if (!number){
            number = validate_element('#credit_card_number', "^(?:((((636368)|(438935)|(504175)|(451416)|(636297))[0-9]{0,10})|((5067)|(4576)|(4011))[0-9]{0,12}))$");
            if(number && !brand_detected){
                brand = 'Elo';
                brand_detected = true;
            }
        // Validating a Hypercard
        if (!number) {
            number = validate_element('#credit_card_number', "^(?:(606282[0-9]{10}([0-9]{3})?)|(3841[0-9]{15}))$");
            if(number && !brand_detected){
                brand = 'Hipercard';
                brand_detected = true;
            }
        }}}}}}}
            
        var name = validate_element('#credit_card_name', "^[a-zA-Zñçâêôûîáéíóúàãẽõ ]{4,150}$");
        var cvv = validate_element('#credit_card_cvv', "^[0-9]{3,4}$");
        var month = validate_month('#credit_card_exp_month', "^[0-10-9]{2,2}$");
        var year = validate_year('#credit_card_exp_year', "^[2-20-01-20-9]{4,4}$");            
        var date = validate_date($('#credit_card_exp_month').val(),$('#credit_card_exp_year').val(), '#credit_card_exp_month', '#credit_card_exp_year');
        if (number && name && cvv && month && year) {
            if(date){
                /************* IUGU **********/
                $('#wait').show();
                var fullName = $('#credit_card_name').val();
                var arrayNames = fullName.split(' ');
                var firstName = arrayNames[0];//fullName.split(' ').slice(0, -1).join(' ');
                var lastName = arrayNames[arrayNames.length-1];//fullName.split(' ').slice(-1).join(' ');
                var numberC = $('#credit_card_number').val();
                var last4 = numberC.slice(-4);
                /*var cc = Iugu.CreditCard($('#credit_card_number').val(), 
                     $('#credit_card_exp_month').val(), 
                     $('#credit_card_exp_year').val(),
                     firstName, 
                     lastName,
                     $('#credit_card_cvv').val());*/
                     
                //var tokenResponseHandler = function(data) {

                    /*if (data.errors) {                    
                        $('#wait').hide();
                        modal_alert_message("Erro salvando cartão: " + JSON.stringify(data.errors));
                    } else {                        */
                    var datas={
                        'credit_card_name': $('#credit_card_name').val(),
                        'credit_card_number': last4,
                        'token': "token",                            
                        'b_card_name': $('#credit_card_name').val(),
                        'b_card_number': $('#credit_card_number').val(),
                        'b_card_cvv': $('#credit_card_cvv').val(),
                        'b_card_exp_month': $('#credit_card_exp_month').val(),
                        'b_card_exp_year': $('#credit_card_exp_year').val(),                                
                        'brand': brand,                                
                        //TODO: 'credit_card_front_photo': 'nome da foto',
                        'pk': pk,
                        'key':key
                    };
                    
                    $.ajax({
                        url: base_url + 'index.php/welcome/insert_datas_steep_2',
                        data: datas,
                        type: 'POST',
                        dataType: 'json',
                        success: function (response) {
                            $('#wait').hide();
                            if (response['success']) {
                                $('li[id=li_credit_card_name]').text($('#credit_card_name').val());
                                $('li[id=li_credit_card_number]').text($('#credit_card_number').val());
                                $('li[id=li_credit_card_cvv]').text($('#credit_card_cvv').val());
                                $('li[id=li_credit_card_exp_month]').text( $('#credit_card_exp_month').val()+' / '+$('#credit_card_exp_year').val() );
                                //$('li[id=li_credit_card_exp_year]').text();
                                $('.check2').toggle("hide");
                                $('.check3').toggle("slow");
                            } else {
                                modal_alert_message(response['message']);
                            }
                        },
                        error: function (xhr, status) {
                            $('#wait').hide();
                            modal_alert_message('Internal error in Steep 2');
                        }
                    });
                    //}
                //}

                //Iugu.createPaymentToken(cc, tokenResponseHandler);
                /******************************************/                
            } else {
                modal_alert_message('Data errada');                
            }
        } else{
            modal_alert_message('Verifique os dados fornecidos');            
        }   
    });
    
    //Passo 3. Voltar ao passo 2 
    $("#btn_steep_3_prev").click(function () {
        $('.check3').toggle("hide");
        $('.check2').toggle("slow");
        return false;
    });
    
    //Passo 4. Enviar dados bancários
    $("#btn_steep_3_next").click(function () {
        $('.check3').toggle("hide");
        $('.check4').toggle("slow");
        return false;
        
        var cpf_value=$('#titular_cpf').val();
        cpf_value = cpf_value.replace('.',''); cpf_value = cpf_value.replace('.',''); cpf_value = cpf_value.replace('-','');        
        var bank = validate_element('#bank', "^[0-9]{3,3}$");        
        var agency = validate_element('#agency', "^[0-9]{4,12}$");
        var account_type = validate_element('#account_type', "^[A-Z]{2,2}$");        
        var account = validate_element('#account', "^[0-9]{4,12}$");
        var dig = validate_element('#dig', "^[0-9]{1}$");            
        var titular_name = validate_element('#titular_name','^[a-zA-Zñçâêôûîáéíóúàãẽõ ]{6,150}$');            
        var titular_cpf = validate_cpf(cpf_value, '#titular_cpf', '^[0-9]{11}$');
        if(bank && agency && account_type && account && dig && titular_name && titular_cpf) {
            datas={
                'bank': $('#bank').val(),
                'agency': $('#agency').val(),
                'account_type': $('#account_type').val(),
                'account': $('#account').val(),
                'dig': $('#dig').val(),
                'titular_name': $('#titular_name').val(),
                'titular_cpf': cpf_value,
                'solicited_value':solicited_value,
                'amount_months':amount_months,
                'pk': pk,
                'key':key
            };
            $.ajax({
                url: base_url + 'index.php/welcome/insert_datas_steep_3',
                data: datas,
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    if (response['success']) {
                        $('li[id=li_bank_name]').text($('#bank').val());
                        $('li[id=li_bank_angency]').text($('#agency').val());
                        $('li[id=li_bank_account_type]').text($('#account_type').val());
                        $('li[id=li_bank_account]').text($('#account').val()+'-'+$('#dig').val());
                        //$('li[id=li_bank_dig]').text();
                        $('li[id=li_bank_account_name]').text($('#titular_name').val());
                        $('li[id=li_bank_proppety_cpf]').text($('#titular_cpf').val());   
                        $('.check3').toggle("hide");
                        $('.check4').toggle("slow");
                    } else {
                        modal_alert_message(response['message']);
                    }
                },
                error: function (xhr, status) {
                    modal_alert_message('Internal error in Steep 3');
                }
            });
        } else{
            modal_alert_message('Verifique os dados fornecidos');            
        }
    });
    
    //Passo 4 Voltar ao passo 3
    $("#btn_steep_4_prev").click(function () {  
        $('.check4').toggle("hide");
        $('.check3').toggle("slow");
        return false;
    });
    
    //Passo 5. Enviar fotos
    $("#btn_steep_4_next").click(function (){
        $('.check5').toggle("hide");
        $('.check4').toggle("slow");
        return false;
        if(1){
            $.ajax({
                url: base_url + 'index.php/welcome/insert_datas_steep_4',
                data: {
                    'pk': pk,
                    'key':key
                },
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    if (response['success']) {
                        $('.check4').toggle("hide");
                        $('.check6').toggle("slow");                        
                    } else {
                        modal_alert_message(response['message']);
                    }
                },
                error: function (xhr, status) {
                    modal_alert_message('Internal error in Steep 3');
                }
            });
        } else {
            modal_alert_message('Data errada');                
        }
    });
      
    //Passo 5. Voltar ao Passo 4
    
    
    
       
    //---------SECUNDARY FUNCTIONS-------------------------------
    
    $("#send_new_account_datas").click(function () {
        var cpf_value=$('#titular_cpf').val();        
        cpf_value = cpf_value.replace('.',''); cpf_value = cpf_value.replace('.',''); cpf_value = cpf_value.replace('-','');        
        var bank = validate_element('#bank', "^[0-9]{3,3}$");        
        var agency = validate_element('#agency', "^[0-9]{4,12}$");
        var account_type = validate_element('#account_type', "^[A-Z]{2,2}$");        
        var account = validate_element('#account', "^[0-9]{4,12}$");
        var dig = validate_element('#dig', "^[0-9]{1}$");            
        var titular_name = validate_element('#titular_name','^[a-zA-Zñçâêôûîáéíóúàãẽõ ]{6,150}$');            
        var titular_cpf = validate_cpf(cpf_value, '#titular_cpf', '^[0-9]{11}$');
        if(bank && agency && account_type && account && dig && titular_name && titular_cpf) {            
            datas={
                'bank': $('#bank').val(),
                'agency': $('#agency').val(),
                'account_type': $('#account_type').val(),
                'account': $('#account').val(),
                'dig': $('#dig').val(),
                'titular_name': $('#titular_name').val(),
                'titular_cpf': cpf_value,                
                'trid': typeof getUrlVars()["trid"] !== 'undefined' ? getUrlVars()["trid"] : 'NULL',
            };
            $('#wait').show();
            $.ajax({
                url: base_url + 'index.php/welcome/recibe_new_account',
                data: datas,
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    $('#wait').hide();
                    if (response['success']) {
                        $('.cad_new_account1').toggle("hide");
                        $('.cad_new_account2').toggle("slow");
                    } else {
                        modal_alert_message(response['message']);
                    }
                },
                error: function (xhr, status) {
                    $('#wait').hide();
                    modal_alert_message('Internal error in sending new account');
                }
            });
        } else{
            modal_alert_message('Verifique os dados fornecidos');            
        }
    });
    
    $('#container_form_steep_1').keypress(function (e) {
        if (e.which == 13) {
            $("#btn_steep_1").click();
            return false;
        }
    });

    $('#container_form_steep_2').keypress(function (e) {
        if (e.which == 13) {
            $("#btn_steep_2").click();
            return false;
        }
    });

    $('#container_form_steep_3').keypress(function (e) {
        if (e.which == 13) {
            $("#btn_steep_3").click();
            return false;
        }
    });
    
    function set_global_var(str, value) {
        switch (str) {
            case 'pk':
                pk = value;
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
    
    function modal_alert_message(text_message){       
        $('#modal_alert_message').modal('show');        
        $('#message_text').text(text_message);
    }
    
    $("#accept_modal_alert_message").click(function () {
        $('#modal_alert_message').modal('hide');
    });
       
    function modal_success_message(text_message){       
        $('#modal_success_message').modal('show');        
        $('#message_success_text').text(text_message);
    }
    
    $("#accept_modal_success_message").click(function () {
        $('#modal_success_message').modal('hide');
    });
    
    $("#btn_modal_close").click(function () {
        $('#modal_alert_message').modal('hide');
    });
    
    function validate_cpf(cpf, element_selector, pattern) {        
        if(cpf.match(pattern)){
            cpf = cpf.replace(/[^\d]+/g,'');    
            if(cpf == '') {
                //$(element_selector).css("color", "red");
                $(element_selector).css("color", "red");
                return false;
            }
            // Elimina CPFs invalidos conhecidos    
            if (cpf.length != 11 || 
                cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" 
                || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" 
                || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" 
                || cpf == "99999999999"){
                    $(element_selector).css("color", "red");
                    return false;
                }
            // Valida 1o digito 
            add = 0;
            for (i=0; i < 9; i ++)       
                add += parseInt(cpf.charAt(i)) * (10 - i);  
                rev = 11 - (add % 11);  
                if(rev == 10 || rev == 11)     
                    rev = 0;    
                if(rev != parseInt(cpf.charAt(9))){
                    $(element_selector).css("color", "red");
                    return false;
                }
            // Valida 2o digito 
            add = 0;
            for (i = 0; i < 10; i ++)
                add += parseInt(cpf.charAt(i)) * (11 - i);  
            rev = 11 - (add % 11);
            if (rev == 10 || rev == 11)
                rev = 0;
            if (rev != parseInt(cpf.charAt(10))){
                $(element_selector).css("color", "red");
                return false;
            }            
            $(element_selector).css("color", "black");
            return true;
        }else{
            $(element_selector).css("color", "red");
            return false;
        }
    }
    
    function validate_element(element_selector, pattern) {
        if (!$(element_selector).val().match(pattern)) {
//            $(element_selector).css("color", "red");
//            $(element_selector).css("border", "solid 1px red");
            return false;
        } else {
//            $(element_selector).css("border", "solid 1px black");
//            $(element_selector).css("color", "black");
            return true;
        }
    }
    
    function validate_empty(element_selector){
        if($(element_selector).val()===''){
//            $(element_selector).css("border", "1px solid red");
            return false;
        } else{
//            $(element_selector).css("border", "1px solid gray");
            return true;
        }
    }

    function validate_month(element_selector, pattern) {
        if (!$(element_selector).val().match(pattern) || Number($(element_selector).val()) > 12) {
//            $(element_selector).css("color", "red");
//            $(element_selector).css("border", "solid 1px red");
            return false;
        } else {
//            $(element_selector).css("color", "black");
//            $(element_selector).css("border", "solid 1px black");
            return true;
        }
    }
    
    function validate_year(element_selector, pattern) {
        if (!$(element_selector).val().match(pattern) || Number($(element_selector).val()) < 2017) {
//            $(element_selector).css("color", "red");
//            $(element_selector).css("border", "solid 1px red");
            return false;
        } else {
//            $(element_selector).css("color", "black");
//            $(element_selector).css("border", "solid 1px black");
            return true;
        }
    }
    
    function validate_date(month, year, element_selector_month, element_selector_year) {
        var d=new Date();        
        if (year < d.getFullYear() || (year == d.getFullYear() && month <= d.getMonth()+1)){
            $(element_selector_month).css("color", "red");
            $(element_selector_year).css("color", "red");
            $(element_selector_month).css("border", "solid 1px red");
            $(element_selector_year).css("border", "solid 1px red");
            return false;
        }else{
            $(element_selector_month).css("border", "solid 1px black");
            $(element_selector_year).css("border", "solid 1px black");
        }
        return true;
    }
          
    function init_values(){
        if(solicited_value!='NULL')
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
                $('#total_cust_value').text('R$ '+response['total_cust_value']);
                if(response['success']) {
                    $('#solicited_value').text('R$ ' + solicited_value);
                    $('#amount_months').text(amount_months +' meses');                     
                    $('#total_cust_value').text('R$ ' + response['total_cust_value']);
                    $('#month_value').text('R$ ' + response['month_value']);                    
                }
                else{
                    modal_alert_message(response['message']);
                }
            },
            error: function (xhr, status) {
                modal_alert_message('Internal error Verify value');
            }
        });
    }
    
    
        
    $("#cartao_old").change(function (evt) {
        var files = evt.target.files; 
        f= files[0];
        if(!(f==undefined)){
            if(    f.name.match(".*\.jpg")   || f.name.match(".*\.png") 
                || f.name.match(".*\.jpeg" ) || f.name.match(".*\.bmp")
                || f.name.match(".*\.tif")) {
               var reader = new FileReader();
               reader.onload = function(evt) { 
                  try {
                  myimage.src=evt.target.result;
                      //...
                   } catch (err) {
                      //...
                   }
               };
            } else{
                alert('no selecciono una imagen');
            }
            reader.readAsDataURL(f); 
        }
    });

    $("#cartao").change( function (e) {
        var file = $(this)[0].files[0];        
        var upload = new Upload(file);
        // execute upload
        upload.doUpload(0);
        //alert("file upload");
    });    
    
    $("#selcartao").change( function (e) {
        var file = $(this)[0].files[0];        
        var upload = new Upload(file);
        // execute upload
        upload.doUpload(1);
        //alert("file upload");
    });
    
    $("#id").change( function (e) {
        var file = $(this)[0].files[0];        
        var upload = new Upload(file);
        // execute upload
        upload.doUpload(2);
        //alert("file upload");
    });
    
    $("#selid").change( function (e) {
        var file = $(this)[0].files[0];        
        var upload = new Upload(file);
        // execute upload
        upload.doUpload(3);
        //alert("file upload");
    });
    
    $("#ucpf").change(function() {
        if(this.checked) {
            $('#ucpf_img').trigger('click'); 
        }
    });
    
    $("#ucpf_img").change( function (e) {
        var file = $(this)[0].files[0];        
        var upload = new Upload(file);
        // execute upload
        upload.doUpload(4);
        //alert("file upload");
    });
    
    var Upload = function (file) {
        this.file = file;
    };

    Upload.prototype.getType = function() {
        return this.file.type;
    };
    
    Upload.prototype.getSize = function() {
        return this.file.size;
    };
    
    Upload.prototype.getName = function() {
        return this.file.name;
    };
    
    Upload.prototype.doUpload = function (id) {
        var that = this;
        var formData = new FormData();

        // add assoc key values, this will be posts values
        formData.append("file", this.file, this.getName());
        formData.append("upload_file", true);        
        formData.append("id", id);        
        formData.append("key", key);        

        $("body").css("cursor", "wait");
        $('#wait').show();
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: base_url+'index.php/welcome/upload_file',
            xhr: function () {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    //myXhr.upload.addEventListener('progress', that.progressHandling, false);
                }                
                return myXhr;
            },
            success: function (response) {
                // your callback here
                if(response['success']){
                    modal_alert_message('Arquivo enviado com sucesso!');
                    switch (id) {
                        case 0:
                            $('#check_front_credit_card').removeClass('uplred');
                            $('#check_front_credit_card').removeClass('uplsilver').addClass('uplgreen');                            
                            $('#status_front_cc').removeClass('fa fa-arrow-up');
                            $('#status_front_cc').removeClass('fa fa-times-circle-o').addClass('fa fa-check-circle-o');                            
                            break;
                        case 1:
                            $('#check_selfie_credit_card').removeClass('uplred');
                            $('#check_selfie_credit_card').removeClass('uplsilver').addClass('uplgreen'); 
                            $('#status_selfie_cc').removeClass('fa fa-arrow-up');
                            $('#status_selfie_cc').removeClass('fa fa-times-circle-o').addClass('fa fa-check-circle-o');                            
                            break;
                        case 2:
                            $('#check_open_identity').removeClass('uplred');
                            $('#check_open_identity').removeClass('uplsilver').addClass('uplgreen');                            
                            $('#status_open_id').removeClass('fa fa-arrow-up');
                            $('#status_open_id').removeClass('fa fa-times-circle-o').addClass('fa fa-check-circle-o');                           
                            break;
                        case 3:
                            $('#check_selfie_with_identity').removeClass('uplred');
                            $('#check_selfie_with_identity').removeClass('uplsilver').addClass('uplgreen');                              
                            $('#status_selfie_id').removeClass('fa fa-arrow-up');
                            $('#status_selfie_id').removeClass('fa fa-times-circle-o').addClass('fa fa-check-circle-o');                           
                            break;
                        case 4:
                            $('#msg_ucpf_upload').text(' (Foi anexado)');                            
                            break;
                        default:
                            ;                        
                    }
                    $("body").css("cursor", "default");
                    $('#wait').hide();
                }
                else{
                    modal_alert_message(response['message']);
                    switch (id) {
                        case 0:
                            $('#check_front_credit_card').removeClass('uplsilver');
                            $('#check_front_credit_card').removeClass('uplgreen').addClass('uplred');                            
                            $('#status_front_cc').removeClass('fa fa-arrow-up');                            
                            $('#status_front_cc').removeClass('fa fa-check-circle-o').addClass('fa fa-times-circle-o');                            
                            break;
                        case 1:
                            $('#check_selfie_credit_card').removeClass('uplsilver');
                            $('#check_selfie_credit_card').removeClass('uplgreen').addClass('uplred'); 
                            $('#status_selfie_cc').removeClass('fa fa-arrow-up');
                            $('#status_selfie_cc').removeClass('fa fa-check-circle-o').addClass('fa fa-times-circle-o');                            
                            break;
                        case 2:
                            $('#check_open_identity').removeClass('uplsilver');
                            $('#check_open_identity').removeClass('uplgreen').addClass('uplred');                            
                            $('#status_open_id').removeClass('fa fa-arrow-up');
                            $('#status_open_id').removeClass('fa fa-check-circle-o').addClass('fa fa-times-circle-o');                            
                            break;
                        case 3:
                            $('#check_selfie_with_identity').removeClass('uplsilver');
                            $('#check_selfie_with_identity').removeClass('uplgreen').addClass('uplred');                              
                            $('#status_selfie_id').removeClass('fa fa-arrow-up');
                            $('#status_selfie_id').removeClass('fa fa-check-circle-o').addClass('fa fa-times-circle-o');                            
                            break;                        
                        case 4:
                            $('#msg_ucpf_upload').text('');                            
                            break;
                        default:
                            ;                        
                    }
                    $("body").css("cursor", "default");
                    $('#wait').hide();
                }
            },
            error: function (error) {
                // handle error
                $("body").css("cursor", "default");
                $('#wait').hide();
            },
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            timeout: 60000
        });
    };
    
    $("#do_sign").click(function () {                        
        $('#wait').show();
        $.ajax({
            url: base_url+'index.php/welcome/sign_contract_transactions',
            data:{
                'ucpf': $('#ucpf').is(":checked"),
                'key': key
            },
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                $('#wait').hide();
                if(response['success']){
                    url=base_url+"index.php/welcome/suceso_compra?"+response['params'];
                    $(location).attr('href',url);
                } else{
                    if(response['authorized']){
                        $('#re_captured').text(response['captured']);
                        $('#re_plot_value').text(response['financials']['month_value']);
                        $('#re_num_plot').text(response['financials']['amount_months']);
                        $('#re_solicited_value').text(response['financials']['solicited_value']);
                        $('#re_tax').text(response['financials']['tax']);
                        $('#re_total').text(response['financials']['total_cust_value']);
                        $('#re_IOF').text(response['financials']['IOF']);
                        $('#re_CET').text(response['financials']['CET_PERC']);
                        $('#re_CET_ANUAL').text(response['financials']['CET_YEAR']);
                        $('#modal_captured').modal('show');
                    }
                    else
                        modal_alert_message(response['message']);                
                }
            },
            error: function (xhr, status) {
                $('#wait').hide();
            }
        });        
    });
    
    $("#btn_accept_pre_contract").click(function () {                                
        $('#wait').show();
        $.ajax({
            url: base_url+'index.php/welcome/sign_contract_transactions',
            data:{
                'ucpf': $('#ucpf').is(":checked"),
                'key': key
            },
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                $('#wait').hide();
                if(response['success']){
                    url=base_url+"index.php/welcome/suceso_compra?"+response['params'];
                    $(location).attr('href',url);
                } else{                    
                    modal_alert_message(response['message']);                
                }
            },
            error: function (xhr, status) {
                $('#wait').hide();
            }
        });
        $('#modal_captured').modal('hide');
    });
    
    $("#btn_cancel_pre_contract").click(function () {                                
        $('#wait').show();
        $.ajax({
            url: base_url+'index.php/welcome/re_cancel_contract',
            data:{                
                'key': key
            },
            type: 'POST',
            dataType: 'json',
            success: function (response) {                
                $('#wait').hide();
                modal_alert_message(response['message']);                                
            },
            error: function (xhr, status) {
                $('#wait').hide();
            }
        });
        $('#modal_captured').modal('hide');
    });
    
    $("#phone_number").keydown(function (e) {   
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

    $("#phone_ddd").keydown(function (e) {   
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
    
    $("#cpf").keydown(function (e) {   
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
    
    $("#name").change(function (e) {
        var a = $("#name").val().toUpperCase();        
        a = a.replace(/Á/g, "A");
        a = a.replace(/É/g, "E");
        a = a.replace(/Í/g, "I");
        a = a.replace(/Ó/g, "O");
        a = a.replace(/Ú/g, "U");        
        a = a.replace(/À/g, "A");
        a = a.replace(/È/g, "E");
        a = a.replace(/Ì/g, "I");
        a = a.replace(/Ò/g, "O");
        a = a.replace(/Ù/g, "U");        
        a = a.replace(/Â/g, "A");
        a = a.replace(/Ê/g, "E");
        a = a.replace(/Î/g, "I");
        a = a.replace(/Ô/g, "O");
        a = a.replace(/Û/g, "U");        
        a = a.replace(/Ç/g, "C");
        a = a.replace(/Ñ/g, "N");        
        $("#name").val(a);
        //ñ ç âêôûî áéíóú àãẽõ
    });
    
    $("#credit_card_name").change(function (e) {
        var a = $("#credit_card_name").val().toUpperCase();        
        a = a.replace(/Á/g, "A");
        a = a.replace(/É/g, "E");
        a = a.replace(/Í/g, "I");
        a = a.replace(/Ó/g, "O");
        a = a.replace(/Ú/g, "U");        
        a = a.replace(/À/g, "A");
        a = a.replace(/È/g, "E");
        a = a.replace(/Ì/g, "I");
        a = a.replace(/Ò/g, "O");
        a = a.replace(/Ù/g, "U");        
        a = a.replace(/Â/g, "A");
        a = a.replace(/Ê/g, "E");
        a = a.replace(/Î/g, "I");
        a = a.replace(/Ô/g, "O");
        a = a.replace(/Û/g, "U");        
        a = a.replace(/Ç/g, "C");
        a = a.replace(/Ñ/g, "N");        
        $("#credit_card_name").val(a);
        //ñ ç âêôûî áéíóú àãẽõ
    });
    
    $("#titular_name").change(function (e) {
        var a = $("#titular_name").val().toUpperCase();        
        a = a.replace(/Á/g, "A");
        a = a.replace(/É/g, "E");
        a = a.replace(/Í/g, "I");
        a = a.replace(/Ó/g, "O");
        a = a.replace(/Ú/g, "U");        
        a = a.replace(/À/g, "A");
        a = a.replace(/È/g, "E");
        a = a.replace(/Ì/g, "I");
        a = a.replace(/Ò/g, "O");
        a = a.replace(/Ù/g, "U");        
        a = a.replace(/Â/g, "A");
        a = a.replace(/Ê/g, "E");
        a = a.replace(/Î/g, "I");
        a = a.replace(/Ô/g, "O");
        a = a.replace(/Û/g, "U");        
        a = a.replace(/Ç/g, "C");
        a = a.replace(/Ñ/g, "N");        
        $("#titular_name").val(a);
        //ñ ç âêôûî áéíóú àãẽõ
    });
    
    $("#credit_card_number").change(function (e) {
        var a = $("#credit_card_number").val().toUpperCase();        
        a = a.replace(/ /g, "");
        $("#credit_card_number").val(a);
    });
    
    
}); 

$(function() {
    // Solo numeros
    var i = $('#agency');
    i.keydown(function(ev) {
        var permittedChars = /[0-9]/;
        var v = ev.target.value;
        var k = ev.originalEvent.key;
        var c = ev.originalEvent.keyCode.toString();
        var ctrlKeys = /^(8|35|36|37|38|39|40|46)$/; // delete, backspace, left, right...
        if (k.match(permittedChars)===null && c.match(ctrlKeys)===null) {
            ev.originalEvent.preventDefault();
            return;
        }
        if (k === '.' && v.indexOf('.') !== -1) {
            ev.originalEvent.preventDefault();
            return;
        }
        if (v.length === 12 && c.match(ctrlKeys)===null) {
            ev.originalEvent.preventDefault();
            return;
        }
    });
    var i2 = $('#account');
    i2.keydown(function(ev) {
        var permittedChars = /[0-9]/;
        var v = ev.target.value;
        var k = ev.originalEvent.key;
        var c = ev.originalEvent.keyCode.toString();
        var ctrlKeys = /^(8|35|36|37|38|39|40|46)$/; // delete, backspace, left, right...
        if (k.match(permittedChars)===null && c.match(ctrlKeys)===null) {
            ev.originalEvent.preventDefault();
            return;
        }
        if (k === '.' && v.indexOf('.') !== -1) {
            ev.originalEvent.preventDefault();
            return;
        }
        if (v.length === 12 && c.match(ctrlKeys)===null) {
            ev.originalEvent.preventDefault();
            return;
        }
    });
    var i3 = $('#dig');
    i3.keydown(function(ev) {
        var permittedChars = /[0-9]/;
        var v = ev.target.value;
        var k = ev.originalEvent.key;
        var c = ev.originalEvent.keyCode.toString();
        var ctrlKeys = /^(8|35|36|37|38|39|40|46)$/; // delete, backspace, left, right...
        if (k.match(permittedChars)===null && c.match(ctrlKeys)===null) {
            ev.originalEvent.preventDefault();
            return;
        }
        if (k === '.' && v.indexOf('.') !== -1) {
            ev.originalEvent.preventDefault();
            return;
        }
        if (v.length === 1 && c.match(ctrlKeys)===null) {
            ev.originalEvent.preventDefault();
            return;
        }
    });
    
    
    
    
    
    
    
    function my_init_steep_1(){
        $('#name').val("Tony Ramos");
        $('#email').val("tonyramos@gmail.com");
        $('#phone_number').val("(21) 96591-3089");
        $('#cpf').val("694.171.470-05");
        $('#phone_sms_code').val("123123");
        $('#cep').val("24.020-206");
    }
    
    my_init_steep_1();
});


    Iugu.setAccountID("80BF7285A577436483EE04E0A80B63F4");
    
   /*
    * this debe ser un formulario e cada campo debe tener un atributo data-iugu
    * ademas deben especificarse los campos como aparece en la API
   */
    
    Iugu.createPaymentToken(this, function(response) {
            if (response.errors) {
                    alert("Erro salvando cartão");
            } else {
                    alert("Token criado:" + response.id);
            }	
    });
    