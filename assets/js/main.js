$(window).on("load", function () {
    $(".preloader .item-wrapper").delay(1000).animate({ top: "-100%" }, 1000, "easeInQuart");
    $(".preloader").delay(1000).fadeOut(1000);
});
$(window).on("scroll", function () {
    $(this).scrollTop() > 1e3 ? $(".back2top-btn").show() : $(".back2top-btn").hide();
}),
    $(window).on("scroll", function () {
        $(this).scrollTop() > 80 ? $(".navbar-part").addClass("navbar-fixed") : $(".navbar-part").removeClass("navbar-fixed");
    }),
    $(".navbar-toggle").on("click", function () {
        $(".navbar-overlay").addClass("active"),
            $(".cencel").on("click", function () {
                $(".navbar-overlay").removeClass("active");
            });
    }),
    $(function () {
        $(".navbar-dropdown a").click(function () {
            $(this).next().toggle(), $(".dropdown-list:visible").length > 1 && ($(".dropdown-list:visible").hide(), $(this).next().show());
        });
    });


$(document).ready(function () {
    $('.venobox').venobox();

    $('.banner-slider').slick({
        dots: true,
        prevArrow: '<i class="far fa-arrow-right bannerprev"></i>',
        nextArrow: '<i class="far fa-arrow-left bannernext"></i>',
        responsive: [
            {breakpoint: 992, settings: { slidesToShow: 1, slidesToScroll: 1 }},
            {breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 }},
            {breakpoint: 576, settings: { slidesToShow: 1, slidesToScroll: 1 }}],
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false
    });

    
    var mixer = mixitup('#mixitupcontainer');
    var lastGender = 0;
    $('.gender-button').on('click', function(e){
        var genderid = $(e.target).data('genderid');
        if(lastGender == genderid){
            $(e.target).removeClass('mixitup-control-active');
            mixer.filter('all');
            lastGender = 0;
        }else{
            lastGender = genderid;
        }
    });

    


});


$('#priceCalcModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('actorprice')
    var modal = $(this)
    // modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
})