(function ($) {
    $('.question_block').on('click', function () {
        $(this).toggleClass('question_active');
    });

    $('.btn_1').on('click', function () {
        $('.flex_vertical').find('.btn-active').removeClass('btn-active');
        $('.btn_1').find('.btn-section').addClass('btn-active');
        $('.bg_image').find('.image_active').removeClass('image_active');
        $('.image_1').addClass('image_active');
        $('.detail_header').find('.active_head').removeClass('active_head');
        $('.header_1').addClass('active_head');
        $('.detail_content').find('.active_text').removeClass('active_text');
        $('.text_1').addClass('active_text');
    });

    $('.btn_2').on('click', function () {
        $('.flex_vertical').find('.btn-active').removeClass('btn-active');
        $('.btn_2').find('.btn-section').addClass('btn-active');
        $('.bg_image').find('.image_active').removeClass('image_active');
        $('.image_2').addClass('image_active');
        $('.detail_header').find('.active_head').removeClass('active_head');
        $('.header_2').addClass('active_head');
        $('.detail_content').find('.active_text').removeClass('active_text');
        $('.text_2').addClass('active_text');
    });

    $('.btn_3').on('click', function () {
        $('.flex_vertical').find('.btn-active').removeClass('btn-active');
        $('.btn_3').find('.btn-section').addClass('btn-active');
        $('.bg_image').find('.image_active').removeClass('image_active');
        $('.image_3').addClass('image_active');
        $('.detail_header').find('.active_head').removeClass('active_head');
        $('.header_3').addClass('active_head');
        $('.detail_content').find('.active_text').removeClass('active_text');
        $('.text_3').addClass('active_text');
    });

    $('.btn_4').on('click', function () {
        $('.flex_vertical').find('.btn-active').removeClass('btn-active');
        $('.btn_4').find('.btn-section').addClass('btn-active');
        $('.bg_image').find('.image_active').removeClass('image_active');
        $('.image_4').addClass('image_active');
        $('.detail_header').find('.active_head').removeClass('active_head');
        $('.header_4').addClass('active_head');
        $('.detail_content').find('.active_text').removeClass('active_text');
        $('.text_4').addClass('active_text');
    });

    $(function() {
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            items: 1,
            margin: 400,
            loop: true,
            nav: true,
            autoplay: true
        });
    });

    $('.value').countTo();

})(jQuery);

