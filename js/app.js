(function($) {

// ===============================
// スクロールトップボタン
// ===============================

    $(document).ready(function() {
  
      // 矢印を追加
      $('body').append('<div class="c-scroll-to-top"><i class="fas fa-arrow-alt-circle-up"></i></div>');
  
      // 始めに表示状態を調整
      dispScrollToTop();

      // スクロールとリサイズ時にイベント設定
      $(window).scroll(function() {
        dispScrollToTop();
      });
      $(window).resize(function() {
        dispScrollToTop();
      });

      // ページ上部までスムーズにスクロール
      $(document).on('click', '.c-scroll-to-top > i', function() {
        $('html,body').animate({
          scrollTop: 0,
        }, 250, 'swing');
      });
  
      // アイコンの表示調整
      function dispScrollToTop() {
        if (!$('.c-scroll-to-top').is(':visible') && $(window).scrollTop() > 100) {
          $('.c-scroll-to-top').fadeIn(450);
        }
        if ($('.c-scroll-to-top').is(':visible') && $(window).scrollTop() < 1) {
          $('.c-scroll-to-top').fadeOut(450);
        }
      }
  
    });

  // =============================
  // ハンバーガーメニュー
  // =============================
  var $toggle_menu = $('.js-toggle-sp-menu'),
      $menu = $('.p-menu');

      $toggle_menu.on('click', function(){
        $(this).toggleClass('active');
        $menu.toggleClass('active');
      });

      // ハンバーガーメニュ起動時リンクを選択したら、ハンバーガーメニューを閉じる
      $('.js-menu-link').on('click', function(){
        $toggle_menu.removeClass('active');
        $menu.removeClass('active');
      });

  // ================================
  // フロートヘッダーメニュー
  // ================================
  var targetHeight = $('.js-float-menu-target').height();
  $(window).on('scroll', function(){
    $('.js-float-menu').toggleClass('float-active', $(this).scrollTop() > targetHeight);
  });


// ==================================
// slick(画像スライダー)
// ==================================
let slicktype = "";
const breakPoint = 480;

// PC画面
function slickPc(){
  $('.slider').slick({
    slidesToShow: 2,
    slideToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    prevArrow: '<i class="fas fa-arrow-alt-circle-left slide-arrow prev-arrow"></i>',
    nextArrow: '<i class="fas fa-arrow-alt-circle-right slide-arrow next-arrow"></i>',
    dots: true
  });
}

// スマホ
function slickSmt(){
  $('.slider').slick({
    slideToShow: 1,
    slideToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    prevArrow: '<i class="fas fa-arrow-alt-circle-left slide-arrow prev-arrow"></i>',
    nextArrow: '<i class="fas fa-arrow-alt-circle-right slide-arrow next-arrow"></i>',
    dots: true
  });
}

$(function(){
  if(window.innerWidth < breakPoint){
    slickSmt();
    slicktype = "smt";
  }else{
    slickPc();
    slicktype = "pc";
  }
$(window).on('resize', function(){
  if(window.innerWidth < breakPoint && slicktype == "pc"){
    $('.slider').slick('unslick');
    slickSmt();
    slicktype = "smt";
  }else if(window.innerWidth >= breakPoint && slicktype == "smt"){
    $('.slider').slick('unslick');
    slickPc();
    slicktype = "pc";
  }
});
});

// ====================
// お問い合わせフォーム
// ====================

$('.js-form-submit').prop("disabled", true);
    
    //入力欄の操作時
    $('.js-input:required').on('keyup', function () {
        //必須項目が空かどうかフラグ
        let flag = true;
        //必須項目をひとつずつチェック
        $('.js-input:required').each(function(e) {
            //もし必須項目が空なら
            if ($('.js-input:required').eq(e).val() === "") {
                flag = false;
            }
        });
        //全て埋まっていたら
        if (flag) {
            //送信ボタンを復活
            $('.js-form-submit').prop("disabled", false);
        }
        else {
            //送信ボタンを閉じる
            $('.js-form-submit').prop("disabled", true);
        }
    });


})($);
