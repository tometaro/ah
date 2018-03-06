jQuery(function($){
  //スクロールヘッダー
  $(window).scroll(function() {
    if ($(window).scrollTop() > 60) {
      $('.siteHeader').addClass('siteHeader-bg');
    } else {
      $('.siteHeader').removeClass('siteHeader-bg');
    }
  });

  //ハンバーガーメニュー
  $('.naviToggle').on("click", function() {
    $('.siteHeader').toggleClass('naviToggle-open'),
    $('.naviToggle-block-shadow').fadeToggle();
  });

  //ナビゲーション外タッチで閉じる
  $(".naviToggle-block-shadow").click(function() {
    $('.siteHeader').removeClass('naviToggle-open'),
    $('.naviToggle-block-shadow').fadeOut();
  });

  $(function() {
    setTimeout(function(){
      $('.hero-text').animate({ opacity: "1" }, { duration: 3000, easing: 'swing', });
    },3000);
  });
});
