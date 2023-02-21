document.addEventListener('DOMContentLoaded', function (event) {

    ScrollReveal({ reset: true, useDelay: 'onload' });
    ScrollReveal().reveal('.container1', { duration:2000, origin: 'top', distance:'100px'});
    ScrollReveal().reveal('.container2', { duration:2000, origin: 'bottom', distance:'100px'});
    ScrollReveal().reveal('.container3', { duration:2000, origin: 'top', distance:'100px' });
    ScrollReveal().reveal('.container4', { duration:2000, origin: 'bottom', distance:'100px' });
    ScrollReveal().reveal('.container5', { duration:2000, origin: 'top', distance:'100px' });
    ScrollReveal().reveal('.container6', { duration:2000, origin: 'bottom', distance:'100px' });
    ScrollReveal().reveal('.container7', { duration:2000, origin: 'top', distance:'1px', reset: false});

});