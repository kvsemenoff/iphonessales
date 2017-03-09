

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
        var db_val = $(this).parents('.dfmodelchar').find('.dfnamemodel').html();
        $('.js-model').val(db_val);
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
        $("input[type=text]").val("");
        $("input[type=hidden]").val("");
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

    $('.mini-a').click(function(){
      $('.menu-button').removeClass('active');
      $('.menu-up').slideUp(400)
    });

    // ==========================================
	// ============ ПОДКЛЮЧЕНИЕ ЯКОРЯ ===========
	// ==========================================
	  $("#menu").on('click','a', function(event){
	    event.preventDefault();
	    var id  = $(this).attr('href'),
	    top = $(id).offset().top;
	    $('body,html').animate({scrollTop: top - 23}, 1000);
	  })

      $("#mini-menu").on('click','a', function(event){
        event.preventDefault();
        var id  = $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top - 35}, 1000);
      })

       $("#main-menu").on('click','a', function(event){
        event.preventDefault();
        var id  = $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top - 15}, 1000);
      })


    var h_hght = 88; // высота шапки
    var h_mrg = 0;    // отступ когда шапка уже не видна
                     
    $(function(){
        var elem = $('#top_nav');
        var top = $(this).scrollTop();
        if(top > h_hght){
            elem.css('top', h_mrg);
        }           
        $(window).scroll(function(){
            top = $(this).scrollTop();
             
            if (top+h_mrg < h_hght) {
                elem.css('top', (h_hght-top));
            } else {
                elem.css('top', h_mrg);
            }
        });
    });


    $(".phone").mask("+ 7 (999) 999 - 99 - 99?");
    var count = 8;
    var minutes = 55;
    var hours = 10;

    var end = 0;

    if (count < 10) {
        $("#dd-sec").html('0'+count);
    }
    else {
        $("#dd-sec").html(count);
    }
    if (minutes < 10) {
        $("#dd-min").html('0'+minutes);
    }
    else {
        $("#dd-min").html(minutes);
    }
    if (hours < 10) {
        $("#dd-hours").html('0'+hours);
    }
    else {
        $("#dd-hours").html(hours);
    }

    var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

    function timer()
    {
        count = count - 1;
        if (count<10) {
            $("#dd-sec").html('0'+count);
        } else {
            $("#dd-sec").html(count);
        }
        if (count == 0) {
            minutes = minutes - 1;
            if (minutes < 10 && minutes >= 0) {
                $("#dd-min").html('0'+minutes);
            }
            if (minutes > 10) {
                $("#dd-min").html(minutes);
            }
            if (minutes < 0) {
                hours = hours - 1;
                if (hours < 10 && hours >=0) {
                    $("#dd-hours").html('0'+hours);
                }
                if (hours>10) {
                    $("#dd-hours").html('0'+hours);
                }
                if (hours < 0 ) {
                    
                    end = 1;
                    clearTimeout(counter);
                }
                if (end) { minutes = '00';}
                else {
                    minutes = 59;
                }
                $("#dd-min").html(minutes);
            }
            if (end) { count = '00';}
            else {
                count = 59;
            }
            
            $("#dd-sec").html(count);
        }
    }
        var owl = $("#slider");
    owl.owlCarousel({
        loop:true,
        nav:true, 
        autoplay:false,
        smartSpeed:1000,
        margin:25,
        center:false,     //если нужны обрезаные края
        navText:['<span class="nav-left"></span>','<span class="nav-right"></span>'],
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1 
            },
            990:{
                items:1
            },      

            1248:{
                items:1
            }
        }
    });

 });


