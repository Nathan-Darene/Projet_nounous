$(document).ready(function() {
    $('#exp1').select2({
        templateResult: function(data) {
            var $option = $(data.element);
            var iconClass = $option.data('icon');
            if (iconClass) {
                var $icon = $('<i class="' + iconClass + '"></i>');
                return $icon.add(data.text);
            }
            return data.text;
        }
    });
});
