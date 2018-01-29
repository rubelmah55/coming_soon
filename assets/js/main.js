jQuery(function($){
    
    $('#preloader').fakeLoader({
        timeToHide: 1200,
        zIndex: 999999,
        spinner: 'spinner1',
        bgColor: '#fff',
        imagePath: ajax.stylesheet_directory + '/images/page_loading.svg'
    });

    //Contact Button Effect
    var contactBtnBg = $('.btn-effect span');
    $('.btn-effect').mouseenter(function() {
            contactBtnBg.removeClass('reset').addClass('enter');
        })
        .mouseleave(function() {
            contactBtnBg.removeClass('enter').addClass('leave');
            setTimeout(function() {
                contactBtnBg.removeClass('leave').addClass('reset');
            }, 500);
        });

    //Show Contact Overlay
    $('#trigger-overlay').on('click', { container: $('.main-container'), overlay: $('.overlay') }, toggleOverlay);
    $('.overlay-close').on('click', { container: $('.main-container'), overlay: $('.overlay') }, toggleOverlay);

})