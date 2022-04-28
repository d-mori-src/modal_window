$(function(){
    let target = '';
    $('.modalBtn').on('click', function(){
        target = $(this).get(0).className.split(' ')[1];
        target = $('.modal.' + target);
        if ( target.is(':hidden') ) {
            target.fadeIn(500);
        } else {
            target.hide();
        }
    });
    $('.close, .modal').on('click', function(){
        $('.modal').fadeOut(500);
    });
});