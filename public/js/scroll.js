document.addEventListener('DOMContentLoaded', function (event) {

    ScrollReveal({ reset: true, useDelay: 'onload' });
    ScrollReveal().reveal('.container1', { duration:2000, origin: 'top', distance:'50px' });
    ScrollReveal().reveal('.container2', { duration:2000, origin: 'left', distance:'50px' });
    ScrollReveal().reveal('.container3', { duration:2000, origin: 'right', distance:'50px' });
    ScrollReveal().reveal('.container4', { duration:2000, origin: 'left', distance:'50px' });
    ScrollReveal().reveal('.container5', { duration:2000, origin: 'right', distance:'50px' });
    ScrollReveal().reveal('.container6', { duration:2000, origin: 'bottom', distance:'50px' });

});