'use strict';

/**
 * Form fileupload demo
 */
(function ($) {
  'use strict';

  var url = window.location.hostname === 'blueimp.github.io' ? '//jquery-file-upload.appspot.com/' : 'server/php/';

  $('#fileupload').fileupload({
    url: url,
    dataType: 'json',
    done: function done(e, data) {
      $.each(data.result.files, function (index, file) {
        $('<p/>').text(file.name).appendTo('#files');
      });
    },
    progressall: function progressall(e, data) {
      var progress = parseInt(data.loaded / data.total * 100, 10);
      $('#progress').attr('value', progress);
    }
  }).prop('disabled', !$.support.fileInput).parent().addClass($.support.fileInput ? undefined : 'disabled');
})(jQuery);
//# sourceMappingURL=upload.js.map
