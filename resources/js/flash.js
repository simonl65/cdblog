function doFlash() {
    const messages = document.querySelector('#flashMessages');

    setTimeout(
        function(){
            messages.remove();
        },
        3000
    );
}

window.addEventListener ?
window.addEventListener("load",doFlash,false) :
window.attachEvent && window.attachEvent("onload",doFlash);
