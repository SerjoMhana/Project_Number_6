const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');
const close = document.getElementById('close');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('actives');
    })
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('actives');
    })
}



// const navlink = document.getElementById('nav-link');
// const dropdownlink = document.getElementById('dropdown-link-a');


// if (navlink) {
//     dropdownlink.addEventListener('hover', () => {
//         navlink.style.color = 'black';
//     })
// }