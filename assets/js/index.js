const btnsNav = document.querySelectorAll('.nav-item');
console.log(btnsNav);

const setActive = (index) => {
    console.log('Entró a setActive', index);
    btnsNav.forEach((btn) => {
        btn.classList.remove('active');
    });
    btnsNav[index].classList.add('active');
};

splittedPath = window.location.pathname.split('/');
last_element = splittedPath[splittedPath.length - 1];
console.log(last_element);

switch (last_element) {
    case 'nosotros.php':
        setActive(1);
        break;
    case 'servicios.php':
        setActive(2);
        break;
    case 'contacto.php':
        setActive(3);
        break;
    default:
        setActive(0);
        break;
};