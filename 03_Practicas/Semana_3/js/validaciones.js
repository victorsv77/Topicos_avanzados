function validarFormulario() {

    // Validar radio
    let genero = document.querySelector('input[name="genero"]:checked');
    if (!genero) {
        alert("Debes seleccionar un género.");
        return false;
    }

    // Validar checkbox
    let hobbies = document.querySelectorAll('input[name="hobbies[]"]:checked');
    if (hobbies.length === 0) {
        alert("Debes seleccionar al menos un hobby.");
        return false;
    }

    // Validar select
    let nivel = document.getElementById("nivel").value;
    if (nivel === "") {
        alert("Debes seleccionar un nivel de estudio.");
        return false;
    }

    return true;
}
