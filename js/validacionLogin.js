const login = document.querySelector('#login');

login.addEventListener('click', (e) => {
    e.preventDefault();
    let email =  document.querySelector('#username').value.trim();
    let pass = document.querySelector('#password').value.trim();
    if(email.length == 0 && pass.length == 0){
        alert('ingresa tus datos bien meco idiota')
        return;
    }
    console.log('XDXDXD');
    // location.href="index.html";
})