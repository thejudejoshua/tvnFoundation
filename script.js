$(document).ready(function() {
    //--------------------------------------------------------------------navigationLinks 
    $('a[href^="#"]').click(function() {
        let target = $(this).attr('href');
        if (target.length) {
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 500);
        }
        return false;
    });

})