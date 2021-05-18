var base_url = window.location.origin;
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".clearHeader");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            header.removeClass('clearHeader').addClass("darkHeader");
        } else {
            header.removeClass("darkHeader").addClass('clearHeader');
        }
        if($(window).outerWidth() > 767){
            if($(".scroll-sec").length > 0){
                if (scroll >= ($(".scroll-sec").offset().top - 100)) {
                    $(".globe").removeClass("position-relative").addClass("position-fixed")
                } else{
                    $(".globe").removeClass("position-fixed").addClass("position-relative")
                }
                if(scroll >= ($(".get-in-touch-sec").offset().top-400)){
                    $(".globe").removeClass("position-fixed").addClass("position-relative")
                }
            }
        }
    });
});

$(function() {
    if($('#contact-form input').length > 0 || $('#contact-form textarea').length > 0){
        $('#contact-form input, #contact-form textarea').jqBootstrapValidation({
            preventSubmit: true,
            submitSuccess: function($form, event){     
                event.preventDefault();
                $this = $('#send_button');
                $this.prop('disabled', true);
                var form_data = $("#contact-form").serialize();
                $.ajax({
                    url:base_url+"/php/contact.php",
                    method:"POST",
                    data:form_data,
                    success:function(){
                        $('#success').html("<div class='alert alert-success'><strong>Your message has been sent. </strong></div>");
                        $('#contact-form').trigger('reset');
                    },
                    error:function(){
                        $('#success').html("<div class='alert alert-danger'>There is some error</div>");
                        $('#contact-form').trigger('reset');
                    },
                    complete:function(){
                        setTimeout(function(){
                        $this.prop("disabled", false);
                        $('#success').html('');
                        }, 20000);
                    }
                });
            },
        });
    }
    if($('#newsletter-form input').length > 0){
        $('#newsletter-form input').jqBootstrapValidation({
            preventSubmit: true,
            submitSuccess: function($form, event){     
                event.preventDefault();
                $this = $('#newsletter-button');
                $this.prop('disabled', true);
                var form_data = $("#newsletter-form").serialize();
                $.ajax({
                    url:base_url+"/php/newsletter.php",
                    method:"POST",
                    data:form_data,
                    success:function(){
                        $('#newsletter-success').html("<div class='alert alert-success'><strong class='txt-14 lh-22'>Thank you for subscribing. We will keep you updated on Darq.capital\’s developments.</strong></div>");
                        $('#newsletter-form').trigger('reset');
                    },
                    error:function(){
                        $('#newsletter-success').html("<div class='alert alert-danger'>There is some error</div>");
                        $('#newsletter-form').trigger('reset');
                    },
                    complete:function(){
                        setTimeout(function(){
                        $this.prop("disabled", false);
                        $('#newsletter-success').html('');
                        }, 100000);
                    }
                });
            },
        });
    }



    
});

$(function () {
    setNavigation();
});

function setNavigation() {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);

    $(".nav a").each(function () {
        var href = $(this).attr('href');console.log(href);
        if (path.substring(0, href.length) === href) {
            $(this).closest('li').addClass('active');
        }
    });
}