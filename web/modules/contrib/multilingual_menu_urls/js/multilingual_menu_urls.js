(function ($, Drupal) {
  Drupal.behaviors.multilingualMenuUrls = {
    attach: function attach(context) {
      var $enableButton = $('#edit-translated-link-on-value');
      var $linkTitle = $('#edit-title-0-value');
      var $linkUrl = $('#edit-link-0-uri');
      // Menu link and title are required fields, but they are hidden when multilingual
      // links are enabled. In the unlikely event that they are empty, they will
      // be populated with dummy values so saving the menu item passes validation.
      // These dummy values will not appear in the actual menu .
      $enableButton.click(function () {
        if ($enableButton.is(':checked')) {
          if ($linkTitle.val() === '') {
            $linkTitle.val('Placeholder title. This field cannot be blank but is overridden.');
          }
          if ($linkUrl.val() === '') {
            $linkUrl.val('https://drupal.org');
          }
        }
      });
    }
  }
})(jQuery, Drupal);
