function tempAlert(msg,duration)
{
    var el = document.createElement("div");
    el.setAttribute(
        "style",
        "opacity: 0;transition: all 0.3s ease-in-out;font-family: 'Consolas', sans-serif; font-size: 1.6vh; position:fixed;bottom: 5%; right: 2%;background-color:#4C4E52;color: white; width: 20%; border: solid 2px black;border-radius: 10px;text-align: center; padding: 10px;"
    );
    el.innerHTML = msg;
    setTimeout(
        function(){
            el.style.opacity = '1';
        },
        100
    );
    setTimeout(
        function(){
            el.parentNode.removeChild(el);
        },
        duration
    );
    document.body.appendChild(el);
}

function copyToClickboard( id_text ){

    var textbox = document.getElementById(id_text);

    navigator.clipboard.writeText(textbox.innerText);
    tempAlert("Copied to clipboard", 1500);
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