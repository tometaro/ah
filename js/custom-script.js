jQuery(function($){
  //スクロールヘッダー
  $(window).scroll(function() {
    if ($(window).scrollTop() > 60) {
      $('.header').addClass('header-bg');
    } else {
      $('.header').removeClass('header-bg');
    }
  });

  //ハンバーガーメニュー
  $('.naviToggle').on("click", function() {
    $('.header').toggleClass('naviToggle-open'),
    $('.naviToggle-block-shadow').fadeToggle();
  });

  //ナビゲーション外タッチで閉じる
  $(".naviToggle-block-shadow").click(function() {
    $('.header').removeClass('naviToggle-open'),
    $('.naviToggle-block-shadow').fadeOut();
  });

  $(function() {
    setTimeout(function(){
      $('.hero-text').animate({ opacity: "1" }, { duration: 3000, easing: 'swing', });
    },3000);
  });
});
