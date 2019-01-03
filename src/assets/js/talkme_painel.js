$(document).ready(function(){       
    
    
    function modal_alert_message(text_message){
        $('#modal_alert_message').modal();
        $('#message_text').text(text_message);
    }
    
    $("#accept_modal_alert_message").click(function () {
        $('#modal_alert_message').modal('hide');
    });
    
    $("#btn_modal_close").click(function() {
        $('#modal_alert_message').modal('hide');
    });
    
    $("#contact-us-btn").click(function(){
        name=validate_empty('#contact-us-name');
        email=validate_element('#contact-us-email',"^[a-zA-Z0-9\._-]+@([a-zA-Z0-9-]{2,}[.])*[a-zA-Z]{2,10}$");
        message=validate_empty('#contact-us-message');
        if(name==false || name=='false'){
            modal_alert_message("Nome inválido."); 
            return 0;
        }else
        if(email==false || name=='false'){
            modal_alert_message("Email inválido."); 
            return 0;
        }else
        if(message==false || name=='false'){
            modal_alert_message("Mensagem inválido."); 
            return 0;
        }  
        $.ajax({
            url : base_url+'index.php/welcome/message',
            data :{ 'name':$("#contact-us-name").val(),
                    'email':$("#contact-us-email").val(),
                    'message':$("#contact-us-message").val()
                },
            type : 'POST',
            dataType : 'json',
            success : function(response){
                if(response['success']){
                    modal_alert_message(response['message']);
                } else
                    modal_alert_message(response['message']);    
                //l.stop();
                $("#contact-us-name").val("");
                $("#contact-us-email").val("");
                $("#contact-us-message").val(""); 
                $("#contact-us-phone").val(""); 
                modal_alert_message('Mensagem enviada corretamente.')
            },
            error : function(xhr, status) {
                modal_alert_message('Confira sua conexão a Internet')
            }
        });
        
    });    
        
    $("#subscription-btn").click(function(){
        email=validate_element('#subscription-email',"^[a-zA-Z0-9\._-]+@([a-zA-Z0-9-]{2,}[.])*[a-zA-Z]{2,10}$");
        if(email==false || name=='false'){
            modal_alert_message("Email inválido."); 
            return 0;
        }
        $.ajax({
            url : base_url+'index.php/welcome/subscription',
            data :{ 'email':$("#subscription-email").val()},
            type : 'POST',
            dataType : 'json',
            success : function(response){
                modal_alert_message(response['message']);
                $("#subscription-email").val("");
            },
            error : function(xhr, status) {
                modal_alert_message('Confira sua conexão a Internet')
            }
        });
        
    });
    
              
    $('#contact-us-form').keypress(function (e) {
        if (e.which == 13) {
            $("#contact-us-btn").click();
            return false;
        }
    });
    
    function validate_element(element_selector,pattern){
        if(!$(element_selector).val().match(pattern)){
//            $(element_selector).css("border", "1px solid red");
            return false;
        } else{
//            $(element_selector).css("border", "1px solid gray");
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
    
    $("#contact-us-phone").keydown(function (e) {   
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