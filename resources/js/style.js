/* 文字サーズ変更ボタン */
$(document).ready(function(){
  medium();
  large();
  $(".medium").click(function(){
    medium("0.9rem");
  });
  $(".large").click(function(){
    large("2.15rem");
  });
  function medium($fsize){
    if($fsize ==undefined){
      var $fsize = window.sessionStorage.getItem( 'fsize' );
      if($fsize ==undefined){
        var $fsize ="0.9rem";
      }
    }
    window.sessionStorage.setItem("fsize", $fsize);
    $(".modify").removeClass("font-weight-bold");
    $(".modify-btn").css("font-size", $fsize);
  }
  function large($fsize){
    if($fsize ==undefined){
      var $fsize = window.sessionStorage.getItem( 'fsize' );
      if($fsize ==undefined){
        var $fsize ="2.15rem";
      }
    }
    window.sessionStorage.setItem("fsize", $fsize);
    $(".modify").addClass("font-weight-bold");
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
