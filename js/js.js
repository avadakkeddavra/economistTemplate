$(document).ready(function(){
    $('#slider').slick({
        infinite: true,
        arrows : true,
        
    })
    $('.slick-prev').html('<i class="fa fa-angle-left">');
    $('.slick-next').html('<i class="fa fa-angle-right">');
}) 
$(document).ready(function(){
    $('.dropdown-item i').mousedown(function(){
        $('.dropdown-link').fadeOut();
        var dropdownItem = $(this).parent().children('.dropdown-link');
        if(dropdownItem.is(':hidden'))
        {
            dropdownItem.show();
            dropdownItem.animate({
                top : '100%',
                opacity : 1,
            },100);
        }
        else
        {
            dropdownItem.animate({
                opacity : 0,
                top:'0%',
            },100,function(){
                $(this).fadeOut();
            });
        }
    });
     $('.menu').mouseleave(function(){
         console.log('outBlock')
         var dropdownItem = $(this).find('.dropdown-link');
        dropdownItem.animate({
            opacity : 0,
            top:'0%',
        },100,function(){
            $(this).fadeOut();
        });
     })
    
})
