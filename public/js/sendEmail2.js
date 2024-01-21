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
  !*** ./resources/js/sendEmail2.js ***!
  \************************************/
__webpack_require__.r(__webpack_exports__);
$(document).ready(function () {
  $(".emailSend").on("click", function () {
    var contactId = $(this).data("contact-id");
    var emailFormContainer = $('.emailFormContainer[data-contact-id="' + contactId + '"]');
    emailFormContainer.show();
    $(this).hide();
  });
  $(".sendEmailButton").on("click", function () {
    var contactId = $(this).attr("data-contact-id");
    var dataStatus = $(this).attr("data-status");
    var inputField = $('input[data-contact-id="' + contactId + '"]');
    sendEmail(contactId, inputField, dataStatus);
    inputField.val("");
    $(this).text("Odoslane");
  });
  function sendEmail(contactId, text1, dataStatus) {
    var csrf = $('meta[name="csrf-token"]').attr("content");
    var nadpis = "Vasa ziadost cislo " + contactId;
    var text1 = text1.val();
    var text2 = dataStatus === "0" ? "Stav: Neriesene" : "Stav: Riesene";
    var text3 = "S pozdravom";
    var contactId = contactId;
    $.ajax({
      url: "/send-email",
      method: "POST",
      data: {
        nadpis: nadpis,
        text1: text1,
        text2: text2,
        text3: text3,
        contactId: contactId,
        _token: csrf
      },
      success: function success(response) {
        console.log("Email sent successfully");
      },
      error: function error(response) {
        console.error(response);
        console.error("Error sending email");
      }
    });
  }
});
/******/ })()
;