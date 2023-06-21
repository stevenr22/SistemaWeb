function mostrarcontraseña(idcontra,idicono){
    let inputcontra = document.getElementById(idcontra);
    let icon = document.getElementById(idicono);
    if (inputcontra.type == "password" && icon.classList.contains("fa-eye")) {
        inputcontra.type = "text";
        icon.classList.replace("fa-eye","fa-eye-slash");

    } else {
        inputcontra.type = "password";
        icon.classList.replace("fa-eye-slash","fa-eye");

    }
}
