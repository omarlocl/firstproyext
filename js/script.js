const btnSignIn = document.getElementById('btn_signIn');
const btnSignUp = document.getElementById('btn_signUp');
const container = document.getElementById('container');

btnSignIn.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

btnSignUp.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});