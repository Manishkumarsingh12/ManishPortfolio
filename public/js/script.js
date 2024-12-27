$(function(){
    $('#menu').slicknav({
        label:"",
        brand:"My Porfolio"
    });
});

$(document).ready(function() {
    $(".skitter-large").skitter({
        dots: false,
        navigation:true,
        theme: 'clean'
    });
});

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:0,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:false,
                loop:true
            }
        }
    });
});

$(document).ready(()=>{
    $('.progress-bar-html5').animate({'width':'95%'},3000,()=>{
        $('.progress-bar-css3').animate({'width':'90%'},1500,()=>{
            $('.progress-bar-bootstrap').animate({'width':'92%'},1500,()=>{
                $('.progress-bar-javascript').animate({'width':'85%'},1500,()=>{
                    $('.progress-bar-jquery').animate({'width':'90%'},1500,()=>{
                        $('.progress-bar-php').animate({'width':'96%'},1500,()=>{
                            $('.progress-bar-mysql').animate({'width':'96%'},1500,()=>{
                            $('.progress-bar-laravel').animate({'width':'97%'},1550);
                            });
                        });
                    });
                });
            });
        });
    });
});
$(document).ready(function() {
    $('a[href="#footer"]').click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('#footer').offset().top
        }, 800);
    });
});