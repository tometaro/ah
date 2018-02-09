jQuery(function(){
  //スクロールヘッダー
  jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop() > 60) {
      jQuery('.siteHeader').addClass('siteHeader-bg');
    } else {
      jQuery('.siteHeader').removeClass('siteHeader-bg');
    }
  });

  //ハンバーガーメニュー
  jQuery('.naviToggle').on("click", function() {
    jQuery('.siteHeader').toggleClass('naviToggle-open'),
    jQuery('.naviToggle-block-shadow').fadeToggle();
  });

  //ナビゲーション外タッチで閉じる
  jQuery(".naviToggle-block-shadow").click(function() {
    jQuery('.siteHeader').removeClass('naviToggle-open'),
    jQuery('.naviToggle-block-shadow').fadeOut();
  });
});
