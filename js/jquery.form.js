jQuery(document).ready(function () {

    "use strict";

    $('#contactform, #reservation').submit(function () {

        var win = window.open('https://www.asiatech.in/booking_engine/index3.php?token=NDM5MQ==', '_blank');
        if (win) {
            //Browser has allowed it to be opened
            win.focus();
        } else {
            //Browser has blocked it
            alert('Please allow popups for this website');
        }

    });

});