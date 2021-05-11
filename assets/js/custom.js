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
                    url:"http://localhost/darq/php/contact.php",
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
                        }, 10000);
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
                    url:"http://localhost/darq/php/newsletter.php",
                    method:"POST",
                    data:form_data,
                    success:function(){
                        $('#newsletter-success').html("<div class='alert alert-success'><strong>Your message has been sent. </strong></div>");
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
                        }, 10000);
                    }
                });
            },
        });
    }
});