(function () {
  "use strict";

  Drupal.behaviors.telephone_international_widget = {
    attach: function (context, settings) {
      var input = document.querySelector(".telephone_international_widget"),
          errorMsg = document.querySelector("#error-msg"),
          validMsg = document.querySelector("#valid-msg");

      // Index the error code returned from getValidationError.
      var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

      var iti = window.intlTelInput(input, {
        hiddenInput: "full_phone",
        utilsScript: "/libraries/intl-tel-input/build/js/utils.js"
      });

      var reset = function() {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
      };

      // Validate on blur.
      input.addEventListener("blur", function() {
        reset();
        if (input.value.trim()) {
          if (iti.isValidNumber()) {
            validMsg.classList.remove("hide");
            input.value = iti.getNumber();
          } else {
            input.classList.add("error");
            var errorCode = iti.getValidationError();
            errorMsg.innerHTML = errorMap[errorCode];
            errorMsg.classList.remove("hide");
          }
        }
      });

      // Reset on change or keyup.
      input.addEventListener("change", reset);
      input.addEventListener("keyup", reset);

    }
  };

}());
