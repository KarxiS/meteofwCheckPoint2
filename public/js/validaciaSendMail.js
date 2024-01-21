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
/*!*******************************************!*\
  !*** ./resources/js/validaciaSendMail.js ***!
  \*******************************************/
__webpack_require__.r(__webpack_exports__);
$(document).ready(function () {
  $(".emailSend").click(function () {
    var contactId = $(this).data("contact-id");
    var formContainer = $(".emailFormContainer[data-contact-id='" + contactId + "']");
    var textInput = $("#text1");
    if (!textInput.val()) {
      event.preventDefault();
      alert("Vyplnte text na odoslanie");
      return;
    }
  });
});
/******/ })()
;