function validateEmail(inputText) {
  var mailformat = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (inputText.match(mailformat)) {
    return true;
  } else {
    return false;
  }
}

function validateNumber(inputText) {
  var numberFormat = /^[0-9]+$/;
  if (inputText.match(numberFormat)) {
    return true;
  } else {
    return false;
  }
}

function lengthRange(userInput, minlength, maxlength) {
  if (userInput.length >= minlength && userInput.length <= maxlength) {
    return true;
  } else {
    return false;
  }
}

(function ($) {
  $(document).ready(function () {
    $('#js-contact-submit').click(() => {

      const contactName = $("#js-contact-name");
      const contactEmail = $("#js-contact-email");
      const contactNumber = $("#js-contact-number");
      const contactZipcode = $("#js-contact-zipcode");

      let errorFlag = false;

      $('.error').each((index, element) => {
        $(element).text('');
      });

      if (contactName.val() === '') {
        contactName.next('.error').text('First name is required');
        errorFlag = true;
      }

      if (contactEmail.val() === '') {
        contactEmail.next('.error').text('Email is required');
        errorFlag = true;
      } else if (!validateEmail(contactEmail.val())) {
        contactEmail.next('.error').text('Please enter a valid email address');
        errorFlag = true;
      }

      if (contactNumber.val() === '') {
        contactNumber.next('.error').text('Number is required');
        errorFlag = true;
      } else if (!validateNumber(contactNumber.val())) {
        contactNumber.next('.error').text('Number is not valid');
        errorFlag = true;
      } else if (!lengthRange(contactNumber.val(), 10, 10)) {
        contactNumber.next('.error').text('Number should be 10 digit');
        errorFlag = true;
      }

      if (contactZipcode.val() === '') {
        contactZipcode.next('.error').text('Zipcode is required');
        errorFlag = true;
      } else if (!validateNumber(contactZipcode.val())) {
        contactZipcode.next('.error').text('Zipcode is not valid');
        errorFlag = true;
      } else if (!lengthRange(contactZipcode.val(), 5, 5)) {
        contactZipcode.next('.error').text('Zipcode should be 5 digit');
        errorFlag = true;
      }

      if (!errorFlag) {
        $('#contact_hide').hide()
        $("#contact_form_msg").text("Successfully Subscribed");
        setTimeout(function () {
          $('#contact_hide').show();
          $("#contact_form_msg").hide();
        }, 7000);
      }

    })
  });
})(jQuery);
