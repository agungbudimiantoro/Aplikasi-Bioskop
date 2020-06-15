$(document).ready(function () {
    $('.modal').modal();
});

$(document).ready(function () {
    $('select').formSelect();

});

var timepicker = new TimePicker('time', {
    lang: 'en',
    theme: 'dark'
});
timepicker.on('change', function (evt) {

    var value = (evt.hour || '00') + ':' + (evt.minute || '00');
    evt.element.value = value;

});