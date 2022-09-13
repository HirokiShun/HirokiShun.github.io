$(document).ready(function(){
const formulario = document.getElementById('Register');
const inputs = document.querySelectorAll('#Register input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}

const campos = {
	usuario: false,
	nombre: false,
	password: false,
	correo: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "user":
			console.log("user");
			validarCampo(expresiones.usuario, e.target, 'user');
		break;
		case "Name":
			validarCampo(expresiones.nombre, e.target, 'Name');
		break;
		case "pass":
			validarCampo(expresiones.password, e.target, 'pass');
			validarPassword2();
		break;
		case "RepeatPass":
			validarPassword2();
		break;
		case "Email":
			validarCampo(expresiones.correo, e.target, 'Email');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`group__${campo}`).classList.remove('login-form__group-incorrect');
		document.getElementById(`group__${campo}`).classList.add('login-form__group-correct');
		document.querySelector(`#group__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#group__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#group__${campo} .login-form__input-error`).classList.remove('login-form__input-error-active');
		campos[campo] = true;
	} else {
		document.getElementById(`group__${campo}`).classList.add('login-form__group-incorrect');
		document.getElementById(`group__${campo}`).classList.remove('login-form__group-correct');
		document.querySelector(`#group__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#group__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#group__${campo} .login-form__input-error`).classList.add('login-form__input-error-active');
		campos[campo] = false;
	}
}

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('pass');
	const inputPassword2 = document.getElementById('RepeatPass');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`group RepeatPass`).classList.add('login-form__group-incorrect');
		document.getElementById(`group RepeatPass`).classList.remove('login-form__group-correct');
		document.querySelector(`#group__RepeatPass i`).classList.add('fa-times-circle');
		document.querySelector(`#group__RepeatPass i`).classList.remove('fa-check-circle');
		document.querySelector(`#group__RepeatPass .login-form__input-error`).classList.add('login-form__input-error-active');
		campos['pass'] = false;
	} else {
		document.getElementById(`group__RepeatPass`).classList.remove('login-form__group-incorrect');
		document.getElementById(`group__RepeatPass`).classList.add('login-form__group-correct');
		document.querySelector(`#group__RepeatPass i`).classList.remove('fa-times-circle');
		document.querySelector(`#group__RepeatPass i`).classList.add('fa-check-circle');
		document.querySelector(`#group__RepeatPass .login-form__input-error`).classList.remove('login-form__input-error-active');
		campos['pass'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
	if(campos.usuario && campos.nombre && campos.password && campos.correo ){
		formulario.reset();

		document.getElementById('login-form__message-success').classList.add('login-form__message-success-active');
		setTimeout(() => {
			document.getElementById('login-form__message-success').classList.remove('login-form__message-success-active');
		}, 5000);

		document.querySelectorAll('.login-form__group-correct').forEach((icono) => {
			icono.classList.remove('login-form__group-correct');
		});
	} else {
		document.getElementById('login-form__message').classList.add('login-form__message-active');
	}
})
});