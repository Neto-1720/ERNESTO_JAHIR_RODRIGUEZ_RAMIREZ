/* Funcionalidad del Login y Registro
    funciones para que los contenedores principales se muevan de izquierda a derecha 
    segun si nos vamos a registrar o si vamos a loggear */

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

/* Se mueve a la derecha cuando se hace click en crear usuario */
signUpButton.addEventListener('click', () =>
    container.classList.add('right-panel-active'));

/* Se mueve a la derecha cuando se hace click en iniciar sesion */
signInButton.addEventListener('click', () =>
    container.classList.remove('right-panel-active'));