$(function(){
    $('.login').click(function(e){
        e.preventDefault();
        $('.user-form-header a').removeClass('active-form');
        $(this).addClass('active-form');
        $('.login-forms').css('display','block');
        $('#login-form').css('display','block');
        $('#again-password').css('display','none');
        $('#signup-form').css('display','none');
    })

    $('.sign-up').click(function(e){
        e.preventDefault();

        $('.user-form-header a').removeClass('active-form');
        $(this).addClass('active-form');
        $('.login-forms').css('display','none');
        $('#signup-form').css('display','block');
    })

    $('.open-eye').click(function(e){
        e.preventDefault();

        $(this).each(function(){
            if($(this).parent().parent().parent().children().first().val() != ''){
                $(this).parent().parent().parent().children().first().attr('type','text')
                $(this).hide()
                $(this).parent().children('.close-eye').show();
            }
        })
    })

    $('.close-eye').click(function(e){
        e.preventDefault();

        $(this).each(function(){
            if($(this).parent().parent().parent().children().first().val() != ''){
                $(this).parent().parent().parent().children().first().attr('type','password')
                $(this).hide()
                $(this).parent().children('.open-eye').show();
            }
        })
      
    })

    $('#signup_password').on('input',function(){
        $(this).each(function(){
            if(($(this).val().length!== 8) && ($(this).val() !== '')){
                $('#signup-form .error-message').show();
                $('#signup-form .min-password').hide();
            
                var errorMessage = 'Şifrəniz minimum 8 simvoldan ibarət olmalıdır.'
                $('#signup-form .error-message').text(errorMessage)
              }else if($(this).val().length>7){
                $('#signup-form .error-message').hide();
              }
        })
    })    
    

    $('.forget-password span').click(function(e){
        e.preventDefault();

        $(this).each(function(){
            $('.account').hide();
            $('.update-password').show();
        })
    })

    $('.again-login-btn button').click(function(e){
        e.preventDefault();

        $(this).each(function(){
            $('.again-mail').hide();
            $('.account').show();
            $('#login-form').hide();
            $('#again-password').show();

        })
    })

    $('.again-send-btn button').click(function(e){
        e.preventDefault();

        $(this).each(function(){
            $('.again-mail').hide();
            $('.account').hide();
            $('.update-password').show();

        })
    })

    $('#again-password input').on('input',function(){
        $(this).each(function(){
            $('.min-password').hide();
            let firstVal = $('#again-password #new-password').val();
            let currentVal = $('#again-password #new-repassword').val();

            if($(this).val().length!== 8){
                var errorMessage = 'Şifrəniz eyni deyil və minimum 8 simvoldan ibarət olmalıdır.'
            }else{
                errorMessage = 'Şifrəniz eyni deyil.'
            }

            if(currentVal === firstVal){
                $('#again-password .error-message').hide()
                $('#again-password .error-message').text(errorMessage)
                if($(this).val().length!== 8){
                    $('#again-password .error-message').show()
                    $('#again-password .error-message').text('Şifrəniz minimum 8 simvoldan ibarət olmalıdır.')
                }
            } else{
                $('#again-password .error-message').show()
                $('#again-password .error-message').text(errorMessage)
            }

            
        })
        
        
    })

    $("#date").on('focus', function(){
        $(this).attr('type','date')
    });

    $("#date").on('focusout', function(){
        if($(this).val() !== ''){
            $(this).attr('type','date')
            
        }else{
            $(this).attr('type','text')

        }
    });
    
    $('.user-info-left ul li').click(function(){
        $(this).each(function(){
            $('.user-info-left ul li').removeClass('active')
            $(this).addClass('active')
        })
    })
    
    $('.account-info').click(function(){
        $('.account-info-part').show();
        $('.order-history-part').hide()
    })

    $('.order-history').click(function(e){
        e.preventDefault();

        $('.account-info-part').hide();
        $('.invoice-details').hide();
        $('.order-history-part').show()
    })

    $('.invoice-detail-link').click(function(e){
        e.preventDefault();

        $(this).each(function(){
            $('.account-info-part').hide();
            $('.order-history-part').hide();
            $('.invoice-details').show();
        })
    })

})