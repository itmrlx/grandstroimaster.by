// fancybox
jQuery.fn.getTitle = function() { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
  var arr = jQuery("a.fancybox");
  jQuery.each(arr, function() {
    var title = jQuery(this).children("img").attr("title");
    jQuery(this).attr('title',title);
  })
}
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) }); // Find .post>a>img and create fancybox image gallery
var posts = jQuery(".item-images"); //find post
posts.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()
});
jQuery("a.fancybox").fancybox({ // fancybox on
  helpers : {
    overlay : {
      locked : false // try changing to true and scrolling around the page
    }
  }
});

// main slider
$('.main-slider .slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 7000,
  fade: true,
});
// review slider
$('.review-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 7000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      }
    },
  ]
});
// partner slider
$('.partner-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 7000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      }
    },
  ]
});

// burger menu
$('.burger-menu').click(function () {
  $(this).toggleClass('active');
  $('.pro-menu').slideToggle();
});

// send forms
function send_form (id, file, message) {
  $('#'+id).submit(function() {
    var str = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: '/mail/'+file+'.php',
      data: str,
      success: function(msg){
        if(msg == 'OK'){
          result = '<div class="form-sended">'+message+'</div>';
          $('#'+id).html(result);
        }else{
          result = msg;
          $('#'+id).html(result);
        }
      }
    });
    return false;
  });
}
send_form('form-id', 'phpform', 'message');