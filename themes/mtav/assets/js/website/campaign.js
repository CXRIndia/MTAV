require('jquery');

require('../../scss/website/campaign-page.scss');
(function ($) {

    console.log('Test');

    $(".city").mouseover(function () {
        // $('.number-div').hide();
        $(this).next().show();
    });
    $(".city").mouseout(function () {
      $('.city').next().hide();
    })



  console.log('Campaign js');
})(jQuery);
