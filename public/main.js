
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); 


    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (!username || !password) {
        alert('Por favor ingresa un nombre de usuario y contraseña.');
        return;
    }


});


document.getElementById('registro-form').addEventListener('submit', function(event) {
    event.preventDefault(); 


    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (!username || !password) {
        alert('Por favor ingresa un nombre de usuario y contraseña.');
        return;
    }

});
