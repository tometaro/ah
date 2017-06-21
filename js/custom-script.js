jQuery(function(){
  //スクロールヘッダー
  jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop() > 100) {
      jQuery('.siteHeader').addClass('siteHeader-bg');
    } else {
      jQuery('.siteHeader').removeClass('siteeader-bg');
    }
  });

  //ハンバーガーメニュー
  jQuery('.siteNavi-toggle').on("click", function() {
    jQuery('.siteHeader').toggleClass('siteNavi-open');
    return false;
  });

  //ナビゲーション外タッチで閉じる
  jQuery(".siteNavi-shadow").click(function() {
    jQuery('.siteHeader').removeClass('siteNavi-open');
    return false;
  });
});