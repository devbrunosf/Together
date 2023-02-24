window.onload = function () {
    var cadastro = document.getElementById("cadastro");
    cadastro.cpf.addEventListener("keypress", verificaNumero);
    cadastro.cpf.addEventListener("keypress", mascaraCPF);
    cadastro.pass.addEventListener("keypress", minMax);
    cadastro.confpass.addEventListener("keypress", minMax);
    cadastro.email.addEventListener("keypress", validarEmail);
}

function verificaNumero(event) {
    if (event.keyCode < 48 || event.keyCode > 57) {

        event.preventDefault()
    }
}

function mascaraCPF(event){
	
	if(event.keyCode < 48 || event.keyCode > 57){
		event.preventDefault();
	}
	if(this.value.length == 3){
		this.value = this.value + ".";
	}
	if(this.value.length == 7){
		this.value = this.value + ".";
	}
		if(this.value.length == 11){
		this.value = this.value + "-";
	}
	if(this.value.length >= 14){
		event.preventDefault();
	}
}

var senha = document.getElementById('pass');
var confsenha = document.getElementById('confpass');

function minMax(event){

    if(this.value.length <= 6){
		document.getElementById('pass-error').innerHTML = "Minimo 6 Caracteres"

        senha.addEventListener("change", function () {
            if (this.value.length >= 6) {
                document.getElementById('pass-error').innerHTML = " "
            }
        });

        confsenha.addEventListener("change", function () {
            if (this.value.length >= 6) {
                document.getElementById('pass-error').innerHTML = " "
            }
        });

	}
	
	if(this.value.length >= 9){
		event.preventDefault();
	}
}

// var regexa = (/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
// var regexb = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.[a-z]?$/i;

function validarEmail(event){

    var email = document.getElementById('email');

    if(email.checkValidity()){
        console.log("Email Valido")
    } else {
        console.log("Email Invalido")
    }
	
	if(this.value.length >= 9){
		event.preventDefault();
	}
}

let form = document.getElementById("cadastro");
let submit = document.getElementById("submit");

submit.addEventListener('click', function (event) {

    event.preventDefault();

    var campos = document.querySelectorAll('.input');

    let i = 0;

    campos.forEach(function (campo, indice) {

        if (campo.value == "") {

            campo.classList.add('invalid')

            console.log(campo.id);
            console.log(i);

            if (i == 0) {
                document.getElementsByClassName('msg-0')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-0')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg0').innerHTML = "Nome Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-0')[0].classList.remove('invalidColor')
                    document.getElementsByClassName('msg-0')[0].innerHTML = " "
                    document.getElementById('msg0').innerHTML = " "
                });

                document.getElementById('msg0').innerHTML = "Nome Vazio"

            }

            if (i == 1) {
                document.getElementsByClassName('msg-1')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-1')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg1').innerHTML = "CPF Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-1')[0].classList.remove('invalidColor')
                    document.getElementsByClassName('msg-1')[0].innerHTML = " "
                    document.getElementById('msg1').innerHTML = " "
                });

            }

            if (i == 2) {
                document.getElementsByClassName('msg-2')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-2')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg2').innerHTML = "Email Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-2')[0].classList.remove('invalidColor')
                    document.getElementsByClassName('msg-2')[0].innerHTML = " "
                    document.getElementById('msg2').innerHTML = " "
                });

            }

            if (i == 3) {
                document.getElementsByClassName('msg-3')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-3')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg3').innerHTML = "Login Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-3')[0].classList.remove('invalidColor')
                    document.getElementsByClassName('msg-3')[0].innerHTML = " "
                    document.getElementById('msg3').innerHTML = " "
                });

            }

            if (i == 4) {
                document.getElementsByClassName('msg-4')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-4')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg4').innerHTML = "Senha Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-4')[0].classList.remove('invalidColor')
                    document.getEwindow.onload = function () {
    var cadastro = document.getElementById("cadastro");
    cadastro.cpf.addEventListener("keypress", verificaNumero);
    cadastro.cpf.addEventListener("keypress", mascaraCPF);
    cadastro.pass.addEventListener("keypress", minMax);
    cadastro.confpass.addEventListener("keypress", minMax);
    cadastro.email.addEventListener("keypress", validarEmail);
}

function verificaNumero(event) {
    if (event.keyCode < 48 || event.keyCode > 57) {

        event.preventDefault()
    }
}

function mascaraCPF(event){
	
	if(event.keyCode < 48 || event.keyCode > 57){
		event.preventDefault();
	}
	if(this.value.length == 3){
		this.value = this.value + ".";
	}
	if(this.value.length == 7){
		this.value = this.value + ".";
	}
		if(this.value.length == 11){
		this.value = this.value + "-";
	}
	if(this.value.length >= 14){
		event.preventDefault();
	}
}

var senha = document.getElementById('pass');
var confsenha = document.getElementById('confpass');

function minMax(event){

    if(this.value.length <= 6){
		document.getElementById('pass-error').innerHTML = "Minimo 6 Caracteres"

        senha.addEventListener("change", function () {
            if (this.value.length >= 6) {
                document.getElementById('pass-error').innerHTML = " "
            }
        });

        confsenha.addEventListener("change", function () {
            if (this.value.length >= 6) {
                document.getElementById('pass-error').innerHTML = " "
            }
        });

	}
	
	if(this.value.length >= 9){
		event.preventDefault();
	}
}

// var regexa = (/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
// var regexb = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.[a-z]?$/i;

function validarEmail(event){

    var email = document.getElementById('email');

    if(email.checkValidity()){
        console.log("Email Valido")
    } else {
        console.log("Email Invalido")
    }
	
	if(this.value.length >= 9){
		event.preventDefault();
	}
}

let form = document.getElementById("cadastro");
let submit = document.getElementById("submit");

submit.addEventListener('click', function (event) {

    event.preventDefault();

    var campos = document.querySelectorAll('.input');

    let i = 0;

    campos.forEach(function (campo, indice) {

        if (campo.value == "") {

            campo.classList.add('invalid')

            console.log(campo.id);
            console.log(i);

            if (i == 0) {
                document.getElementsByClassName('msg-0')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-0')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg0').innerHTML = "Nome Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-0')[0].classList.remove('invalidColor')
                    document.getElementsByClassName('msg-0')[0].innerHTML = " "
                    document.getElementById('msg0').innerHTML = " "
                });

                document.getElementById('msg0').innerHTML = "Nome Vazio"

            }

            if (i == 1) {
                document.getElementsByClassName('msg-1')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-1')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg1').innerHTML = "CPF Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-1')[0].classList.remove('invalidColor')
                    document.getElementsByClassName('msg-1')[0].innerHTML = " "
                    document.getElementById('msg1').innerHTML = " "
                });

            }

            if (i == 2) {
                document.getElementsByClassName('msg-2')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-2')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg2').innerHTML = "Email Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-2')[0].classList.remove('invalidColor')
                    document.getElementsByClassName('msg-2')[0].innerHTML = " "
                    document.getElementById('msg2').innerHTML = " "
                });

            }

            if (i == 3) {
                document.getElementsByClassName('msg-3')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-3')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg3').innerHTML = "Login Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-3')[0].classList.remove('invalidColor')
                    document.getElementsByClassName('msg-3')[0].innerHTML = " "
                    document.getElementById('msg3').innerHTML = " "
                });

            }

            if (i == 4) {
                document.getElementsByClassName('msg-4')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-4')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg4').innerHTML = "Senha Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-4')[0].classList.remove('invalidColor')
                    document.getElementsByClassName('msg-4')[0].innerHTML = " "
                    document.getElementById('msg4').innerHTML = " "
                });

            }

            if (i == 5) {
                document.getElementsByClassName('msg-5')[0].classList.add('invalidColor')
                document.getElementsByClassName('msg-5')[0].innerHTML = "Campo Inválido"

                document.getElementById('msg5').innerHTML = "Senha Vazio"

                campo.addEventListener("change", function () {
                    document.getElementsByClassName('msg-5')[0].classList.remove('invalidColor')
                    document.getElementsByClassName('msg-5')[0].innerHTML = " "
                    document.getElementById('msg5').innerHTML = " "
                });

            }

            campo.addEventListener("change", function () {
                campo.classList.remove('invalid')
            });

        } else {

            if (campo.classList.contains('invalid') == true) {
                campo.classList.remove('invalid')
            }

        }

        i++;

    });

    var senha = document.getElementById('pass');
    var confsenha = document.getElementById('confpass');

    if (senha.value.length < 6 || senha.value.length > 9) {
        console.log("tamanho")
    }

    if (pass.value != confpass.value) {
        document.getElementById('pass-error').innerHTML = "Senhas Não Conferem"
    } else if (pass.value == "" && confpass.value == "") {
        document.getElementById('pass-error').innerHTML = "Senhas Vazias"
    } else {
        document.getElementById('pass-error').innerHTML = "Senhas Certas"
    }

    senha.addEventListener("change", function () {
        if (pass.value != confpass.value) {
            document.getElementById('pass-error').innerHTML = "Senhas Não Conferem"
        } else if (pass.value == "" && confpass.value == "") {
            document.getElementById('pass-error').innerHTML = "Senhas Vazias"
        } else {
            document.getElementById('pass-error').innerHTML = "Senhas Certas"
        }
    });

    confsenha.addEventListener("change", function () {
        if (pass.value != confpass.value) {
            document.getElementById('pass-error').innerHTML = "Senhas Não Conferem"
        } else if (pass.value == "" && confpass.value == "") {
            document.getElementById('pass-error').innerHTML = "Senhas Vazias"
        } else {
            document.getElementById('pass-error').innerHTML = "Senhas Certas"
        }
    });

});