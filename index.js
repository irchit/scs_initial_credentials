function copyToClickboard( id_text ){

    var textbox = document.getElementById(id_text);

    navigator.clipboard.writeText(textbox.innerText);

    alert("Password copied to clipboard ✔");
}

function connectToMicrosoft(){
    var get_credencials = document.getElementById("log_in");
    var data = document.getElementById("logged_in");

    get_credencials.style.display = 'none';
    data.style.display = 'flex';
}

function disconnectFromMicrosoft(){
    var get_credencials = document.getElementById("log_in");
    var data = document.getElementById("logged_in");

    get_credencials.style.display = 'flex';
    data.style.display = 'none';
}