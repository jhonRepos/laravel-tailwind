import './bootstrap';


const btn = document.getElementById('menu-btn');
const nav = document.getElementById('menu');


$(document).on('click', '#menu-btn', function () {

    nav.classList.toggle('open');
    nav.classList.toggle('flex');
    nav.classList.toggle('hidden');

})