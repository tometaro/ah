jQuery(function(){
  //スクロールヘッダー
  jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop() > 100) {
      jQuery('.Header').addClass('Header-Bg');
    } else {
      jQuery('.Header').removeClass('Header-Bg');
    }
  });

  //ハンバーガーメニュー
  jQuery('.Navi-Toggle').on("click", function() {
    jQuery('.Header').toggleClass('Navi-Open');
    return false;
  });

  //ナビゲーション外タッチで閉じる
  jQuery(".Navi-Shadow").click(function() {
    jQuery('.Header').removeClass('Navi-Open');
    return false;
  });
});