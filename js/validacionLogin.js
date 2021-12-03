const login = document.querySelector('#login');
// Validamos que se haya puesto algo en el furmalario antes de mandarlo a la base de datos
login.addEventListener('click', (e) => {
    e.preventDefault();
    let email =  document.querySelector('#username').value.trim();
    let pass = document.querySelector('#password').value.trim();
    if(email.length == 0 && pass.length == 0){
        alert('ingresa tus datos bien')
        return;
    }
    console.log('XDXDXD');
})