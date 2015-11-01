//alert(JSON.stringify($(this).serializeArray())); debug
(function ($) {
    $(function () {

        $('.button-collapse').sideNav();
        $('.parallax').parallax();

    }); // end of document ready
})(jQuery); // end of jQuery name space

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year

    // Months and weekdays
    monthsFull: ['Janeiro', 'Fevereiro', 'Mar&ccedil;o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
    weekdaysFull: ['Domingo', 'Segunda', 'Ter&ccedil;a', 'Quarta', 'Quinta', 'Sexta', 'S&aacute;bado', 'Domingo'],
    weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'S&aacute;b', 'Dom'],
    // Materialize modified
    weekdaysLetter: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
    // Today and clear
    today: 'Hoje',
    clear: 'Apagar',
    close: 'Fechar',
});

var playerInstance = jwplayer("hardcore");

if (playerInstance.id === "hardcore") {
    playerInstance.setup({
        file: "./video/hardcore.mp4",
        width: 640,
        stretching: "fill",
        advertising: {
            client: "vast",
            tag: "http://adserver.com/vastTag.xml"
        }
    });
}

$('#parallax-background').vegas({
    slides: [
        {src: './img/background1.jpg'},
        {src: './img/background2.jpg'},
        {src: './img/background3.jpg'}
    ]
});

$("#form-contact").on('submit', function (event) {
    event.preventDefault();
    $.post($(this).attr("action"), $(this).serializeArray(), function (response) {
        if (response.status === 'success') {

        } else {
            Materialize.toast(response.error_msg, 4000);
        }
    }, 'json');
});

$(document).on('click', '.link_page', function (event) {
    event.preventDefault();
    var url = this.href;
    $('.preloader-wrapper').addClass('active');
    $("body").fadeOut(500, function () {
        window.location = url;
    });
});

$(document).ready(function () {
    $("body").hide().fadeIn(500);
});



