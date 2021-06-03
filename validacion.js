function validar () {
    var nombre = document.getElementById("nombre").value
    var correo = document.getElementById("correo").value
    var telefono = document.getElementById("telefono").value
    var comentario = document.getElementById("comentarios").value
    var expresion;

    expresion = /\w+@\w+\.+[a-z]/;

    if (vnombre=="" || vcorreo=="" || vtelefono=="" || vcomentario=="")  {
        alert  ("El  campo no debe estar vacio");
        return false;
    }
    else if(!expresion.test(vcorreo)) {
        alert  ("El campo tiene que tener el siguiente formato correo@dominio.com");
        return false;
    }
    else if (vnombre.length > 50) {
        alert  ("El nombre es muy grande");
        return false;
    }
    else if (vtelefono.length > 10) {
        alert  ("El numero es mu largo");
        return false;
    }
    else if (isNaN(vtelefono)) {
        alert  ("Solo se aceptan numeros");
        return false;
    }
}