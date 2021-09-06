/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/style.js":
/*!*******************************!*\
  !*** ./resources/js/style.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* 文字サーズ変更ボタン */
$(document).ready(function () {
  fontSize();
  $(".medium").click(function () {
    fontSize("0.9rem", "normal");
  });
  $(".large").click(function () {
    fontSize("1.15rem", "bold");
  });

  function fontSize($fsize, $fweight) {
    if ($fsize == undefined && $fweight == undefined) {
      var $fsize = Cookies.get('fsize');
      var $fweight = Cookies.get("fweight");

      if ($fsize == undefined && $fweight == undefined) {
        var $fsize = "0.9rem";
        var $fweight = "normal";
      }
    }

    Cookies.set("fsize", $fsize);
    Cookies.set("fweight", $fweight);
    $(".modify-btn").css({
      "font-size": $fsize
    });
    $(".modify").css({
      "font-weight": $fweight
    });
  }
});
/*ページトップへのスクロール;グローバル変数扱い*/

window.scrolltop = function () {
  scrollTo(0, 0);
};
/* select/select_bargain.blade.html, Tooltips */


$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
/*select/select_bargain.blade.html, Tooltipsの説明*/

window.onload = function onload() {
  target = document.getElementById("drawer_message");
  target.innerHTML = "ボタンを押すと<br>商品の分類覧が表示されます。";
};
/*select/select_bargain_blade.html, Tooltipsメッセージを6秒間だけ表示*/


window.setTimeout(function () {
  target = document.getElementById("drawer_message");
  target.remove();
}, 6000);
/*select/select_bargain.blade.html*/

window.onpageshow = function onpageshow() {
  target = document.getElementById("drawer_message_down");
  target.innerHTML = "扉を閉じる";
};
/* carts/cart.blade.php, 積載量チェックのSweetAlert2 */


window.myfunction = function () {
  var elem = document.getElementById("weight_amount").textContent;
  var button = document.getElementById("purchase");

  if (elem > 20) {
    button.disabled = true;
    warning();
  } else {
    button.disabled = false;
    success();
  }
};

function success() {
  swal({
    type: "success",
    title: '総積載量チェック',
    text: "配達可能です",
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'OK'
  });
}

function warning() {
  swal({
    type: "warning",
    title: "購入量を減らしてください",
    text: "総積載量が 20㎏ を超えています!!"
  });
}

/***/ }),

/***/ 1:
/*!*************************************!*\
  !*** multi ./resources/js/style.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\agz30\OneDrive\デスクトップ\laravel\democart\resources\js\style.js */"./resources/js/style.js");


/***/ })

/******/ });