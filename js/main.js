$(document).ready(function() {
  $('.header_mob').on('click', function(){
    $(this).toggleClass('active')
    $('.header_mob_wrap').toggleClass('active')
    $(this).children().toggleClass('color')
    $('.header_mob_btn').toggleClass('hide')
    $('.header_mob_btn_top').toggleClass('active')
    $('.header_mob_btn_bot').toggleClass('active')
  })

    if (screen.width > 679) {
        let  approach__wrap_item = ($('.approach__wrap-item_more').height());
        $('.approach__wrap-item').css('height', approach__wrap_item + 60);
    }
});


