var form = document.getElementById('formulario');
var email = document.getElementById('email');
var senha = document.getElementById('senha');
var button = document.getElementById('submit');
button.disabled = true;

email.addEventListener("change", (validarEmail));
senha.addEventListener("change", (validarSenha));
form.addEventListener("change", (validarForm));

function validarEmail() {
    if (email.value == '') {
        alert('Email Vazio')
        email.classList.add("error")
        email.focus()
        return false;
    } else if (email.value.indexOf("@") == -1) {
        alert('Email não contem o @')
        email.classList.add("error")
        email.focus()
        return false;
    } else {
        email.classList.remove("error")
        return true;
    }
}

function validarSenha() {
    if (senha.value.length <= 4) {
        alert('Senha curta, precisa 5 caracteres')
        senha.classList.add("error")
        senha.focus()
        return false;
    } else {
        senha.classList.remove("error")
        return true;
    }
}

function validarForm() {
    if (validarEmail() == true && validarSenha() == true) {
        button.disabled = false;
    }
    return true;
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    var form = document.getElementById('formulario');
var email = document.getElementById('email');
var senha = document.getElementById('senha');
var button = document.getElementById('submit');
button.disabled = true;

email.addEventListener("change", (validarEmail));
senha.addEventListener("change", (validarSenha));
form.addEventListener("change", (validarForm));

function validarEmail() {
    if (email.value == '') {
        alert('Email Vazio')
        email.classList.add("error")
        email.focus()
        return false;
    } else if (email.value.indexOf("@") == -1) {
        alert('Email não contem o @')
        email.classList.add("error")
        email.focus()
        return false;
    } else {
        email.classList.remove("error")
        return true;
    }
}

function validarSenha() {
    if (senha.value.length <= 4) {
        alert('Senha curta, precisa 5 caracteres')
        senha.classList.add("error")
        senha.focus()
        return false;
    } else {
        senha.classList.remove("error")
        return true;
    }
}

function validarForm() {
    if (validarEmail() == true && validarSenha() == true) {
        button.disabled = false;
    }
    return true;
}