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
/*!******************************************!*\
  !*** ./resources/js/contactsDropDown.js ***!
  \******************************************/
__webpack_require__.r(__webpack_exports__);
$(document).ready(function () {
  $(".statusContact").change(function () {
    var status = $(this).val();
    var id = $(this).data("id");
    var csrf = $('meta[name="csrf-token"]').attr("content");
    $.ajax({
      url: "/contacts/" + id + "/updateStatus",
      type: "POST",
      data: {
        status: status,
        _token: csrf
      },
      success: function success(response) {
        option.text(response.newStatus);
      },
      error: function error(response) {
        alert("Error");
      }
    });
  });
});
/******/ })()
;