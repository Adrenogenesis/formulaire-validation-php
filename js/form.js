function alphaOnly(event) {
    var key = event.keyCode;
    return ((key >= 65 && key <= 90) || key == 8);
};

var dateControl = document.querySelector('input[type="date"]');
dateControl.value = '2018-11-01';

if (date );