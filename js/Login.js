$(document).ready = function () {
    var user = document.getElementById("logUser");
    var pass = document.getElementById("logPass");

    $("#logBtn").click(function () {

        if (user == "user" & pass == "1234") {
            alert("Bienvenido usuario")
        }
        else if (user == "") {
            alert("campo de usuario vacio")
        }
        else if (pass == "") {
            alert("campo de contraseña vacio")
        }
    })
}