/* serviceWorkerの登録 */
window.addEventListener('load', () => {
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('js/serviceWorker.js').
      then(() => {
        console.log('ServiceWorker registered')
      }).
      catch((error) => {
        console.warn('ServiceWorker error', error)
      })
  }
})
/*ページトップへのスクロール;グローバル変数扱い*/
window.scrolltop =function(){
  scrollTo(0,0);
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
/* carts/cart.blade.php, 積載量チェックのSweetAlert2 */
window.myfunction =function(){
  var elem =document.getElementById("weight_amount").textContent;
  var button =document.getElementById("purchase");
  if (elem >20){
    button.disabled =true;
    warning();
  } else {
    button.disabled =false;
    success();
  }
}
function success(){
  swal({
    type: "success",
    title: '総積載量チェック',
    text: "配達可能です",
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'OK',
  });
}
function warning(){
  swal({
    type: "warning",
    title: "購入量を減らしてください",
    text: "総積載量が 20㎏ を超えています!!",

  });
}
