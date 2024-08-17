
var loader = "<div class='d-flex justify-content-center'>\n\
<div class='fa fa-spinner fa-spin fa-stack-2x fa-fw' role='status' >\n\
<span class='sr-only'></span></div>&emsp;"+ 'Processing' + "</div>";


function reload_page(timer=3000){
	setTimeout(function() {
		location.reload();
	}, timer);
}
function showloadergif() {
    $('.loader-demo-box').removeClass('d-none');
}
function hideloadergif() {
    $('.loader-demo-box').addClass('d-none');
}
function showloaderdots() {
    $('.loader').removeClass('d-none');
    //$('body').addClass('blurbg');
}

function hideloaderdots() {
    $('.loader').addClass('d-none');
    //$('body').removeClass('blurbg');
}
function showloader() {
    $('.loader-gif').removeClass('d-none');
    //$('.loader').removeClass('d-none');
    $('.content-wrapper').addClass('blurbg');
}

function hideloader() {
    //$('.loader').addClass('d-none');
        setTimeout(function () {
            $('.loader-gif').addClass('d-none');
            $('.content-wrapper').removeClass('blurbg');
        }, 1000);        
}

function initializeSwtich() {
    $(function () { $('.make-switch')['bootstrapSwitch']() })
}


(function ($) {
    showSuccessToast = function (message) {
        'use strict';
        resetToastPosition();
        $.toast({
            heading: 'Success',
            text: message,
            showHideTransition: 'slide',
            icon: 'success',
            loaderBg: '#f96868',
            position: 'top-right'
        })
    };

    showDangerToast = function (message,timer=5000) {
        
        resetToastPosition();
        $.toast({
            heading: 'Danger',
            text: message,
            showHideTransition: 'slide',
            icon: 'error',
            loaderBg: '#f2a654',
            position: 'top-right',
			hideAfter: timer
        })
    };
    resetToastPosition = function () {
        $('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center'); // to remove previous position class
        $(".jq-toast-wrap").css({
            "top": "",
            "left": "",
            "bottom": "",
            "right": ""
        }); //to remove previous position style
    }
})(jQuery);


