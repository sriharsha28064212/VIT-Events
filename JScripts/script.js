
const scriptURL = 'https://script.google.com/macros/s/AKfycbxMv-oR2j8vEVJWTYXRKSGFVzfQoB5BvREXQtS5IW7OBjwPdUaYRg-pM2LaCBqbTsVX/exec'
const form = document.forms['submit-to-google-sheet']
const msg= document.getElementById("msg");

form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then(response => {
            msg.innerHTML="Club Details Sent for verification process";
            setTimeout(function(){
                msg.innerHTML="";
            },5000)
            form.reset();
        })
        .catch(error => console.error('Error!', error.message))
})
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
