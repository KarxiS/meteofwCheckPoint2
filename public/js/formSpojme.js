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

    // validacia na strane klienta
    if (!name || !email || !phone || !mess) {
      alert("Vyplnte vsetky polia.");
      return false;
    }
    if (formSent) {
      return;
    }
    var result = $("#resultAjax");
    $.ajax({
      url: url,
      type: "POST",
      data: {
        name: name,
        phonenumber: phone,
        email: email,
        message: mess,
        _token: $('meta[name="csrf-token"]').attr("content")
      },
      success: function success(response) {
        btn.textContent = "Odoslané";
        result.text("Odoslane!!!");
        btn.removeAttribute("href");
        btn.disabled = true;
        formSent = true;
      },
      error: function error(data) {
        btn.textContent = "NeOdoslané";
        result.text(data.responseJSON.message);
      }
    });
  });
});
/******/ })()
;