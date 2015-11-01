$(document).ready(function () {
    $('.slider').slider({full_width: true});
});

var options = [
    {
        selector: '#staggered-settings',
        offset: 0,
        callback: 'Materialize.showStaggeredList("#staggered-settings")'
    },
    {
        selector: '#staggered-connect',
        offset: 0,
        callback: 'Materialize.showStaggeredList("#staggered-connect")'
    }
];
Materialize.scrollFire(options);