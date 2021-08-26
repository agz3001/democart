/* 文字サーズ変更ボタン */
$(document).ready(function(){
  fontSize();
  $(".medium").click(function(){
    fontSize("0.9rem", "normal");
  });
  $(".large").click(function(){
    fontSize("1.15rem", "bold");
  });
  function fontSize($fsize, $fweight){
    if($fsize ==undefined && $fweight ==undefined){
      var $fsize = window.Cookies.get( 'fsize' );
      var $fweight =window.Cookies.get("fweight");
      if($fsize ==undefined && $fweight ==undefined){
        var $fsize ="0.9rem";
        var $fweight ="normal";
      }
    }
    window.Cookies.set("fsize", $fsize, {expires:7, path:"/", secure:true});
    window.Cookies.set("fweight", $fweight, {expires:7, path:"/", secure:true});
    $(".modify").css({"font-weight": $fweight});
    $(".modify-btn").css({"font-size": $fsize});

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
