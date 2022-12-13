var XMLHttpRequestObject = false;
if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function sacardatos(){
    if(XMLHttpRequestObject) {
        var lugar = document.getElementById("contenedor");
        XMLHttpRequestObject.open("POST", 'ejercicio3.php', true);
        XMLHttpRequestObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        emailValue = document.getElementById('email').value;
        let urlValue = "email=" + emailValue;
        XMLHttpRequestObject.send(urlValue);
        XMLHttpRequestObject.onreadystatechange = function(){
        if (XMLHttpRequestObject.readyState == 4 &&
        XMLHttpRequestObject.status == 200) {
        
        lugar.innerHTML = XMLHttpRequestObject.responseText;
    }
    
}
    }
}

window.onload = function () {
    document.getElementById('boton').onclick = sacardatos;
}