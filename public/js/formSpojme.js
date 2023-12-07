/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/formSpojme.js ***!
  \************************************/
__webpack_require__.r(__webpack_exports__);
$(document).ready(function () {
  var url = $("#contactform").data("url");
  var formSent = false;
  $("#theme-btn-spojme").click(function (e) {
    e.preventDefault();
    var name = $("#nameSpoj").val();
    var phone = $("#phoneSpoj").val();
    var email = $("#emailSpoj").val();
    var mess = $("#messSpoj").val();
    var btn = document.getElementById("theme-btn-spojme");

    // Client-side validation
    if (!name || !email || !phone || !mess) {
      alert("Vyplnte vsetky polia.");
      return false;
    }
    btn.removeAttribute("href");
    btn.disabled = true;
    if (formSent) {
      return;
    }
    var result = $("#resultAjax");
    formSent = true;
    $.ajax({
      url: url,
      type: "POST",
      data: {
        name: name,
        phone: phone,
        email: email,
        mess: mess,
        _token: "{{csrf_token()}}"
      },
      success: function success(response) {
        btn.textContent = "Odoslané";
        result.textContent = "Odoslane!!!";
      },
      error: function error(data) {
        btn.textContent = "Odoslané";
        result.textContent = "Odoslane!!!";
      }
    });
  });
});
/******/ })()
;