

$(document).ready(function(){


    /*MODAL WINDOW*/
    $('a[name="js-modal"]').on("click", function(e){
        e.preventDefault();
        var  id = $(this).attr('href'),
        winW = $(window).width(),
        winH = $(window).height();
        $(id).css("left", winW/2-$(id).width()/2);
        $(id).css("top", winH/2-$(id).height()/2);
        $('body').css("overflow-y", "hidden");
        $(id).fadeIn();
        $('#js-mask').fadeIn();
    });
    $(".js-phone").mask("+7 (999) 999 - 99 - 99?");
    $('#js-mask, .crest').on("click", function(){
        $('#js-mask').hide();
        $('.js-window').hide();
        $('body').removeAttr("style");

    });

    
    /*MODAL SUBMIT*/
    $('.js-submit').submit(function(){
        var phone = $(this).find('input[name="phone"]');
        
        if(phone.val() == ""){
            phone.focus();
            return false;
        }

        else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/message.php", 
                data: form_data,
                success: function() {
                    cleanTnanks(this);
                }
            });
        }
        return false;
    });

    function cleanTnanks(form){
        $('.js-window').hide();
        $('a[href=#js-form2]').trigger('click');
                // location = "thanks.php";
            };


    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });
<<<<<<< HEAD

=======
>>>>>>> 10fb9b5db2f1040828d4c584de64406d64036200

    $('.menu-up').slideUp(0);
    $('.menu-button').click(function(){
        if (!$(this).hasClass('active')){
            $(this).addClass('active');
            $('.menu-up').slideDown(400)
        } else {
            $(this).removeClass('active');
            $('.menu-up').slideUp(400)
        }
    });


<<<<<<< HEAD

    $(".phone").mask("+ 7 (999) 999 - 99 - 99?");

=======
    $(".phone").mask("+ 7 (999) 999 - 99 - 99?");
>>>>>>> 10fb9b5db2f1040828d4c584de64406d64036200
 });


