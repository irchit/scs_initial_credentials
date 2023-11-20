function tempAlert( msg , duration )
{
    var el = document.createElement("div");
    el.setAttribute(
        "class",
        "copy_box"
    );
    el.innerHTML = msg;
    el.style.opacity = '0'
    document.body.appendChild(el);
    setTimeout(
        function(){
            el.style.opacity = '0.8';
        },
        100
    );
    setTimeout(
        function(){
            el.parentNode.removeChild(el);
        },
        duration
    );
}

function copyToClickboard( id_text ){

    var textbox = document.getElementById(id_text);

    navigator.clipboard.writeText(textbox.innerText);
    tempAlert("Copied to clipboard", 1500);
}

