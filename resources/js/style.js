/* 文字サーズ変更ボタン */
$(document).ready(function(){
  fontSize();
  $(".medium").click(function(){
    $(".modify").removeClass("font-weight-bold");
    $(".modify-btn").css("font-size", "0.9rem");
  });
  $(".large").click(function(){
    $(".modify").addClass("font-weight-bold");
    $(".modify-btn").css("font-size", "2.15rem");
  });
  function fontSize($fsize){
    if($fsize ==undefined){
      var $fsize = $.cookie( 'fsize' );
      if($fsize ==undefined){
        var $fsize =$(".medium").click();
      }
    }
    $.cookie("fsize", $fsize, {expires:7, path:"/"});
    $(".modify").toggleClass("font-weight-bold");
    $(".modify-btn").css("font-size", $fsize);
  }
});
/*
$(document).ready(function(){
  $(".medium").click(function(){
    $(".modify").removeClass("font-weight-bold");
    $(".modify-btn").css("font-size", "0.9rem");
  });
  $(".large").click(function(){
    $(".modify").addClass("font-weight-bold");
    $(".modify-btn").css("font-size", "1.15rem");
  });
});
*/
/*ページトップへのスクロール;グローバル変数扱い*/
window.scrolltop =function(){
  scrollTo(0,0)
}
/* select/select_bargain.blade.html, Tooltips */
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
/*select/select_bargain.blade.html, Tooltipsの説明*/
window.onload = function onload() {
  target = document.getElementById("drawer_message");
  target.innerHTML = "ボタンを押すと<br>商品の分類覧が表示されます。";
  }
/*select/select_bargain_blade.html, Tooltipsメッセージを6秒間だけ表示*/
window.setTimeout(function(){
  target =document.getElementById("drawer_message");
  target.remove();
}, 6000)
/*select/select_bargain.blade.html*/
window.onpageshow =function onpageshow(){
  target =document.getElementById("drawer_message_down");
  target.innerHTML ="扉を閉じる";
}
