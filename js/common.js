

$(document).ready(function(){

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


=======
    $(".phone").mask("+ 7 (999) 999 - 99 - 99?");
>>>>>>> a9518c7c72c87be14cbec4708bf33d37af66cf48
 });


