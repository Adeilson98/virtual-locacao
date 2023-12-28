const menu = document.getElementById('drop');

const submenu = document.querySelector('.submenu');

menu.addEventListener('click', function () {

    if(submenu.style.display === 'block') {

        submenu.style.display = 'none';

    } else {

        submenu.style.display = 'block';

    }
})