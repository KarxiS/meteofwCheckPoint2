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
/*!**********************************************!*\
  !*** ./resources/js/validaciaStanicaEdit.js ***!
  \**********************************************/
__webpack_require__.r(__webpack_exports__);
$(document).ready(function () {
  var form = $("#myForm");
  var nameInput = $("#name");
  var descriptionInput = $("#description");
  var apiLinkInput = $("#api_link");
  var formSent = false;
  form.submit(function (event) {
    var name = nameInput.val();
    var description = descriptionInput.val();
    var apiLink = apiLinkInput.val();

    // Client-side validacia
    if (!name || !description || !apiLink) {
      alert("Vyplnte vsetky polia");
      event.preventDefault();
      return false;
    }
    if (formSent) {
      return;
    }
  });
});
/******/ })()
;